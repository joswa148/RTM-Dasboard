
@include('layouts.app')


@verbatim
<!-- Structue Schema Start -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "@id": "https://right-trademark.com/#legalservice",
  "name": "Right Trademark",
  "url": "https://right-trademark.com/",
  "description": "Right Trademark offers trademark registration, trademark search, trademark renewal, and brand protection services in UAE, Dubai, and worldwide.",
  "logo": "https://right-trademark.com/public/assets/images/RTMlogo.webp",
  "image": "https://right-trademark.com/public/assets/images/Frame-bg.webp",
  "telephone": "+971 56 251 7290",
  "email": "sales@right-trademark.com",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "AE"
  },
  "makesOffer": [
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Trademark Registration Service",
        "serviceType": "Trademark Registration",
        "areaServed": {
          "@type": "Country",
          "name": "United Arab Emirates"
        }
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Trademark Search Service",
        "serviceType": "Trademark Search",
        "areaServed": {
          "@type": "Country",
          "name": "United Arab Emirates"
        }
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Trademark Renewal Service",
        "serviceType": "Trademark Renewal",
        "areaServed": {
          "@type": "Country",
          "name": "United Arab Emirates"
        }
      }
    }
  ]
}
</script>
<!-- Structue Schema End -->
@endverbatim


@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What services does Right Trademark offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer trademark registration, renewal, revival, extension, and brand protection services in Dubai and across the UAE."
      }
    },
    {
      "@type": "Question",
      "name": "Who can use your trademark services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our services are suitable for UAE startups, SMEs, large companies, and international brands entering the UAE market."
      }
    },
    {
      "@type": "Question",
      "name": "How long does trademark registration take in the UAE?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Trademark registration in the UAE typically takes 6 to 18 months, depending on the application, objections, and opposition process."
      }
    },
    {
      "@type": "Question",
      "name": "Can you renew an expired UAE trademark?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we handle renewals during the grace period and can assist in reviving certain expired trademarks."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a local agent to register in the UAE?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, foreign applicants are required to appoint a registered UAE agent or firm such as Right Trademark."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide services only in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, we provide trademark services across all Emirates and also support international clients through online processing."
      }
    }
  ]
}
</script>
@endverbatim

<script>
    
    
    
    // optimize-images.js
const path = require('path');
const fs = require('fs-extra');
const glob = require('glob');
const sharp = require('sharp');
const { JSDOM } = require('jsdom');
const prettier = require('prettier');

const IMAGES_DIR = path.join(__dirname, 'public', 'images'); // change if needed
const HTML_GLOBS = [
  path.join(__dirname, 'public', '**/*.html'),
  path.join(__dirname, 'resources', 'views', '**/*.blade.php') // Laravel blade files
];

const SIZES = [64, 128, 256, 512, 800]; // generated widths (px)
const WEBP_QUALITY = 80; // change if you want higher/lower quality

async function ensureDir(d) {
  await fs.ensureDir(d);
}

function findImages() {
  return new Promise((res, rej) => {
    glob(path.join(IMAGES_DIR, '**/*.+(jpg|jpeg|png|webp)'), (err, files) => {
      if (err) return rej(err);
      res(files);
    });
  });
}

async function generateResponsive(imagePath) {
  try {
    const info = await sharp(imagePath).metadata();
    const origW = info.width || null;
    const dirname = path.dirname(imagePath);
    const base = path.basename(imagePath).replace(/\.(jpg|jpeg|png|webp)$/i, '');

    const generated = [];

    for (const w of SIZES) {
      if (origW && w > origW) continue; // don't upscale
      const outName = `${base}-${w}.webp`;
      const outPath = path.join(dirname, outName);

      // skip if exists and newer than source
      const outExists = await fs.pathExists(outPath);
      if (outExists) {
        const outStat = await fs.stat(outPath);
        const inStat = await fs.stat(imagePath);
        if (outStat.mtimeMs >= inStat.mtimeMs) {
          generated.push({ w, outPath, url: outName });
          continue;
        }
      }

      await sharp(imagePath)
        .resize({ width: w })
        .webp({ quality: WEBP_QUALITY })
        .toFile(outPath);

      generated.push({ w, outPath, url: outName });
      console.log(`Generated ${outName}`);
    }

    return { imagePath, generated, width: origW, base };
  } catch (e) {
    console.error('Error processing', imagePath, e.message);
    return null;
  }
}

function relativeUrlFromImage(imgPath) {
  // returns path relative to public/ for use in src/srcset (e.g. images/foo-64.webp)
  const rel = path.relative(path.join(__dirname, 'public'), imgPath).split(path.sep).join('/');
  return '/' + rel;
}

async function processHtmlFiles(mapOfGenerated) {
  const htmlFiles = HTML_GLOBS.flatMap(g => glob.sync(g, { nodir: true }));
  console.log(`Found ${htmlFiles.length} HTML/blade files to scan...`);

  for (const file of htmlFiles) {
    try {
      const text = await fs.readFile(file, 'utf8');
      const dom = new JSDOM(text);
      const document = dom.window.document;
      let changed = false;

      const imgs = [...document.getElementsByTagName('img')];

      for (const img of imgs) {
        let src = img.getAttribute('src') || '';
        if (!src) continue;

        // normalize: remove query string/hash
        const srcPath = src.split('?')[0].split('#')[0];
        // only handle local images that start with / or without protocol
        if (srcPath.startsWith('http://') || srcPath.startsWith('https://') || srcPath.startsWith('//')) continue;

        // get filename only
        const srcFile = srcPath.replace(/^\/+/, ''); // images/foo.png or images/foo.png
        const matchedKey = Object.keys(mapOfGenerated).find(k => k.endsWith(srcFile) || k.includes('/' + srcFile));
        if (!matchedKey) continue;

        const entry = mapOfGenerated[matchedKey];
        if (!entry || !entry.generated || entry.generated.length === 0) continue;

        // build srcset using available generated items (smallest to largest)
        const srcsetParts = entry.generated
          .map(g => {
            const url = path.posix.join(path.posix.dirname(srcPath), g.url);
            return `${url} ${g.w}w`;
          })
          .join(', ');

        // set src to smallest generated (fallback)
        const smallest = entry.generated.reduce((a, b) => (a.w < b.w ? a : b));
        const smallestUrl = path.posix.join(path.posix.dirname(srcPath), smallest.url);

        // set attributes
        img.setAttribute('src', smallestUrl);
        img.setAttribute('srcset', srcsetParts);
        img.setAttribute('loading', img.getAttribute('loading') || 'lazy');

        // if width/height not present, try set width attribute to smallest width to avoid layout shift
        if (!img.getAttribute('width')) img.setAttribute('width', smallest.w);
        if (!img.getAttribute('height') && entry.width) {
          // compute height preserving aspect ratio assuming orig width present
          if (entry.width && entry.width > 0) {
            // approximate height (note: we don't know original height easily without metadata in map)
            // leave height unset to avoid wrong aspect ratio — browser will handle it with srcset
          }
        }

        changed = true;
      }

      if (changed) {
        // write backup
        const backup = file + '.bak';
        if (!(await fs.pathExists(backup))) {
          await fs.copyFile(file, backup);
          console.log(`Backup created: ${backup}`);
        }

        // format HTML a bit with prettier if possible
        let out = dom.serialize();
        try {
          out = prettier.format(out, { parser: 'html' });
        } catch (e) {
          // ignore prettier errors
        }

        await fs.writeFile(file, out, 'utf8');
        console.log(`Updated: ${file}`);
      }
    } catch (e) {
      console.error('Error scanning file', file, e.message);
    }
  }
}

(async () => {
  console.log('Starting image optimization job...');

  await ensureDir(IMAGES_DIR);
  const images = await findImages();
  console.log('Images found:', images.length);

  // map original image path relative to public to generated results
  const map = {};

  for (const img of images) {
    const res = await generateResponsive(img);
    if (res) {
      // store keyed by path relative to public
      const relKey = path.relative(path.join(__dirname, 'public'), res.imagePath).split(path.sep).join('/');
      map[relKey] = res;
    }
  }

  await processHtmlFiles(map);

  console.log('Done. Check /public/images for generated webp files and .bak files for backups of changed HTML.');
})();


const express = require("express");
const path = require("path");

const app = express();

// Serve images with long-term cache
app.use(
  "/images",
  express.static(path.join(__dirname, "public/images"), {
    maxAge: "1y",            // cache for 1 year
    immutable: true          // file won't change, browser can safely keep
  })
);

// Serve other static files
app.use(
  express.static(path.join(__dirname, "public"), {
    maxAge: "30d"            // default 30 days for css/js
  })
);

app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "public/index.html"));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});

 document.addEventListener("DOMContentLoaded", function () {
      const preload = document.createElement("link");
      preload.rel = "preload";
      preload.as = "image";
      preload.href = "/images/hero-banner.webp";
      preload.setAttribute("fetchpriority", "high");
      document.head.appendChild(preload);
  });
  
  
</script>






  <div class="nav-imgindex">
<div class="container-fluid px-0 hero-section">
  <img src="{{ asset('public/assets/images/Frame-bg.webp') }}" 
       alt="photo"
       fetchpriority="high"
       decoding="async"
       style="width:0;height:0;position:absolute;visibility:hidden;">
      <div class="row pt-lg-2" id="heross">
        <div class="col-lg-12 ">
            <p class="msewwe" style="
    background: #fb1010;
    color: #fff;
    padding: 1px 8px;
    width: max-content;
    border-radius: 36px;
    font-weight: 600;
    font-size: 15px;
"class="ksesee">UAE’s First-Ever 1-Day Express Application Approval</p>
          <h1>Leading Trademark<br>Service Provider in <span class="highlight-red">UAE</span></h1>
          <ul class="mt-2 ">
            <li> <img src="{{ asset('public/assets/images/tick-style.png') }}" alt="" class="me-1 d-none  d-lg-inline-block"> Protect your brand identity and the Customer
              trust</li>
            <li> <img src="{{ asset('public/assets/images/tick-style.png') }}" alt="" class="me-1 d-none  d-lg-inline-block"> Trade mark UAE starts @ <span class="price"> <img src="{{ asset('public/assets/images/UAE_Dirham_Symbol.png') }}" class="ssedasdas">
                7,499</span> (All inclusive)</li>
          </ul>
    <div class="text-center text-lg-start my-lg-3">
  <button onclick="openWhatsApp()" class="whatapp">
    <img src="{{ asset('public/assets/images/icon1.svg') }}" alt="logo" class="me-2">
    whatsapp
  </button>
</div>

          <div class="row features mt-3">
            <div class=" feature-item">
              <div class="icon"><img src="{{ asset('public/assets/images/p4.svg') }}" alt=""></div>
              <div>
                <p class="defnition">5000+</p><span class="down">Happy Clients</span>
              </div>
            </div>
            <div class=" feature-item">
              <div class="icon"><img src="{{ asset('public/assets/images/p3.svg') }}" alt=""></div>
              <div>
                <p class="defnition">98%</p><span class="down">Clients Retention</span>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('public/assets/images/p2.svg') }}" alt=""></div>
              <div>
                <p class="defnition">9+ Years</p><span class="down">Industry Experience</span>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('public/assets/images/p1.svg') }}" alt=""></div>
              <div>
                <p class="defnition">24*7</p><span class="down">Free Expert Chat</span>
              </div>
            </div>
          </div>
          <div class="co-tenly">
            <section>
              <div class="image-container">

                <!-- South America (always visible) -->
                <div class="img-wrapper">
                  <div class="img-inner">
                    <img src="{{ asset('public/assets/images/w6.svg') }}" class="img-item first-img" alt="South America" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">America</p>
                  <div class="popup"><strong></strong> USA, Canada, Mexico</div>

                </div>

                <!-- Other Continents -->
                <div class="img-wrapper  " data-continent="Asia">
                  <div class="img-inner">
                    <img src="{{ asset('public/assets/images/w2.svg') }}" class="img-item" alt="Asia" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text"> Asia </p>
                  <div class="popup"><strong></strong>India, Singapore, China,<br>Hong Kong, South Korea,<br>Indonesia, Bangladesh,<br>Japan, Russia, Thailand,<br>Malaysia</div>
                </div>

                <div class="img-wrapper  " data-continent="Africa">
                  <div class="img-inner">
                    <img src="{{ asset('public/assets/images/w1.svg') }}" class="img-item" alt="Africa" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">Africa</p>
                  <div class="popup"><strong></strong>Aripo,Oapi</div>
                </div>

                <div class="img-wrapper  " data-continent="Europe">
                  <div class="img-inner">
                    <img src="{{ asset('public/assets/images/w4.svg') }}" class="img-item" alt="Europe" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">Europe</p>
                  <div class="popup" id="popupnew"><strong></strong>EU, Germany, Benelux, UK,<br>Italy, Norway, Switzerland,France, Ireland, Spain</div>
                </div>

                

                <div class="img-wrapper " data-continent="Australia">
                  <div class="img-inner">
                    <img src="{{ asset('public/assets/images/w5.svg') }}" class="img-item" alt="Australia" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">Australia</p>
                  <div class="popup"><strong></strong>New Zealand</div>
                </div>

                

              </div>
            </section>
          </div>
        </div>

        <div class="col-lg-6  text-center">
        </div>
      </div>
    </div>


  </div>

  <section class="Trusted-by mb-0">
    <div class="brandcontainer">
      <p class="fs-3 mt-3">Trusted by Over <b class="Trusted"> 5000+ </b> Brands Globally</p>
      <div class="d-flex gap-4 align-items-center justify-content-center">
        <div class="scroll-container">
          <div class="scroll-wrapper" id="scroll-wrapper">
            <img src="{{ asset('public/assets/images/logo-1.png') }}" alt="Logo 1">
            <img src="{{ asset('public/assets/images/logo-2.png') }}" alt="Logo 2">
            <img src="{{ asset('public/assets/images/logo-3.png') }}" alt="Logo 3">
            <img src="{{ asset('public/assets/images/logo-4.png') }}" alt="Logo 4">
            <img src="{{ asset('public/assets/images/logo-5.png') }}" alt="Logo 5">
            <img src="{{ asset('public/assets/images/logo-6.png') }}" alt="Logo 6">
          </div>
        </div>
            
        <div class="img-border"></div>
        <img src="{{ asset('public/assets/images/rating.png') }}" class="we" width="180px" alt="">
        <img src="{{ asset('public/assets/images/greview.png') }}" class="we" width="180px" alt="">
      </div>
    </div>
  </section>

  <!-- select country....... -->

  <div class="container main-content">
    <!-- Left text section -->
    <div class="text-section">
      <span class="stc"></span> <span class="ms-2 selectcountry">Right Trademark</span>
      <h2 class="mt-3">We Specialize in<br> Trademark Registration <br>
        Across More Than <span class="highlight">100+ Countries Worldwide</span>  
      </h2>
      <p class="mt-3">protect your trademarks in 100+ countries worldwide.
Our team ensures hassle-free trademark registration with full compliance to local and international laws.
      </p>
      <button onclick="openWhatsApp()"
 class="whatapp"><img src="{{ asset('public/assets/images/icon1.svg') }}" alt="logo"> whatsapp</button>
    </div>
    <div class="flag-container mt-4 mt-md-0">
      <img src="{{ asset('public/assets/images/Group-we.svg') }}" class="img-fluid" alt="India">
    </div>
  </div>


  <!-- about us  -->

  <section class=" about-img d-flex">
 
      <div class="about" style="
    width: 60%;">
      <span class="line"></span> <span class="abtus">About Us</span>
      <p class="clients">We Help Our Clients to Secure <br> Their<span class="text-danger"> Intellectual Property</span>
      </p>
      <p style="    width: 84%;
    line-height: 1.8em;">Protect your brand identity by securing logos, taglines, colours, and symbols. Get your Trademark Certificate quickly with full guidance and strong legal protection.</p>
 <ul>
  <li><i class="bi bi-check2-circle me-1"></i>Secure logos, taglines, colours, and symbols.</li>
  <li> <i class="bi bi-check2-circle me-1"></i>Get your Trademark Certificate with guidance.</li>
  <li> <i class="bi bi-check2-circle me-1"></i>Quick delivery and strong legal protection.</li>
</ul>
     
        <div bis_skin_checked="1" class="mt-2">
    <button onclick="openWhatsApp()"
 class="whatapp"><img src="{{ asset('public/assets/images/icon1.svg') }}" alt="logo"> whatsapp</button>
</div>
    </div>
 
    <div class="row   about-row  justify-content-center w-50">
      <div class="col-lg-6 mt-5">
        <div class="message-box text-center">
          <img src="{{ asset('public/assets/images/d13.png') }}" alt="" class="w-25">
          <h2>Trademark Search</h2>
          <p>Check for conflicts before filling.</p>
           <a href="trademark-search"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="message-box text-center">
   <img src="{{ asset('public/assets/images/d12.png') }}" alt="" class="w-25">
   <h2> Trademark Registration </h2>
          <p>Fast, reliable, nassle free filing</p>
           <a href="trademark-registration"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6 mt-5">
        <div class="message-box text-center">
      <img src="{{ asset('public/assets/images/d14.png') }}" alt="" class="w-25">
      <h2>Trademark Renewal </h2>
          <p>Keep your brand protected</p>
           <a href="trademark-renewal"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="message-box text-center">
            <img src="{{ asset('public/assets/images/d15.png') }}" alt="" class="w-25">
            <h2> Trademark Opposition </h2>
          <p>Defend against infringement</p>
           <a href="trademark-oppositions"> <button class="cta-button">Register</button></a>
        </div>
      </div>
    </div>
  </section>

  <section class="layout">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h1><span class="plus" style="color:#F71010;">100 + Countries</span><br />Across the World</h1>
   
      <!-- <h2>Regions</h2> -->
      <nav class="menu" aria-label="Regions">
        <button class="active" data-target="gcc">GCC Countries</button>
        <button data-target="asia">Asian Countries </button>
        <button data-target="europe">European Countries</button>
        <button data-target="america">American Countries</button>
        <button data-target="apac">Asian Pacific Countries</button>
        <button data-target="africa">African Countries</button>
      </nav>
    </aside>

    <!-- Content (Right) -->
    <div class="content">
      <div class="content-head">
        <h3 id="regionTitle">GCC Countries</h3>
      </div>

      <!-- SINGLE continuous flow container (page scroll) -->
      <div class="cards-flow" id="flowArea" aria-label="Trademark countries">

        <!-- GCC -->
        <div class="region" id="gcc" data-region-name="GCC Countries">
          <div class="cards">
            <a href="trademark-registration-uae">
            <div class="country-card ">
              
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl1.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">UAE</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"><span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span> 7499</div>
                </div>
              </div>
            </div>
            </a>

             <a href="trademark-registration-bahrain">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl2.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Bahrain</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span>  8200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-saudi">
            <div class="country-card ">
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl3.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Saudi Arabia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span>  8499</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-kuwait">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl4.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Kuwait</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span> 6500</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-qatar">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl5.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Qatar</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span> 7250</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-oman">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('public/assets/images/fl6.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Oman</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/UAESymbol.svg') }}" alt="photo" class="symbols-uae"></span> 4000</div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
         
        <!-- Asian -->
        <div class="region" id="asia" data-region-name="Asian Countries">
          <div class="cards">

            <a href="trademark-registration-india">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                
                <img src="{{ asset('public/assets/images/fl7.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">India</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 400</div>
                </div>
              </div>
            </div>
             </a>
            

             <a href="trademark-registration-singapore">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl8.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Singapore</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 599 </div>
                </div>
              </div>
            </div>
            </a>


            <a href="trademark-registration-southkorea">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/assets/images/fl9.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country"> South Korea </h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 649</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-hongkong">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl10.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Hong Kong</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-china">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl11.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">China</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                 <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-indonesia">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl12.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Indonesia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  750</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-bangladesh">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl13.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Bangladesh</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  999</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-japan">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/flg-icon.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Japan</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  1200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-russia">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl14.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Russia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  1200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-thailand">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl15.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Thailand</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  1220</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-malasiya">
             <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl16.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Malaysia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span>  829</div>
                </div>
              </div>
            </div>
           </a>
            
          </div>
        </div>

        <!-- European -->
        <div class="region" id="europe" data-region-name="European Countries">
          <div class="cards">

            <a href="trademark-registration-eu">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl17.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">EU</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 1499</div>
                </div>
              </div>
            </div>
            </a>
            
            <a href="trademark-registration-germany">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl18.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Germany</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 699</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-benelux">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl19.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Benelux</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 549</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-uk">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl20.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">UK</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-italy">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/assets/images/fl21.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Italy</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 649</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-norway">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl22.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Norway</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 849</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-switzerland">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl23.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Switzerland</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 999</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-france">
              <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl24.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">France</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 579</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-ireland">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl25.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Ireland</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 499</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-spain">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl26.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Spain</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 469</div>
                </div>
              </div>
            </div>
           </a>
            

          </div>
        </div>

        <!-- American -->
        <div class="region" id="america" data-region-name="American Countries">
          <div class="cards">
            <a href="trademark-registration-usa">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/assets/images/fl27.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">USA</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"><span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 750</div>
                </div>
              </div>
            </div>
            </a>


            <a href="trademark-registration-canada">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl28.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Canada</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 749 </div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-mexico">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl29.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Mexico</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 599</div>
                </div>
              </div>
            </div>
            </a>
            <!-- <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/asset/images/fo5.png') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Qatar</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">AED 7250</div>
                </div>
              </div>
            </div> -->
            <!-- <div class="country-card row">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/asset/images/fo5.png') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Qatar</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">AED 7250</div>
                </div>
              </div>
            </div> -->
            <!-- <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/asset/images/fo5.png') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Qatar</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">AED 7250</div>
                </div>
              </div>
            </div> -->
          </div>
        </div>

        <!-- Asian Pacific -->
        <div class="region" id="apac" data-region-name="Asian Pacific Countries">
          <div class="cards">
            <a href="trademark-registration-australia">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/assets/images/fl30.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Australia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 559 </div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-newzealand">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/fl31.svg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">New Zealand</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 599</div>
                </div>
              </div>
            </div>
           </a>
          </div>
        </div>

        <!-- African -->
        <div class="region" id="africa" data-region-name="African Countries">
          <div class="cards">
            <a href="#">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('public/assets/images/aripo.png') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Aripo</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 6000</div>
                </div>
              </div>
            </div>
            </a>
            <a href="#">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('public/assets/images/oapi.png') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Oapi</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('public/assets/images/dollar.svg') }}" alt="photo" class="dollar"></span> 1600</div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  
  <section class="testi-section pt-lg-5 pb-0">
    <div class="container">
      <div class="row align-items-start g-5">
        <!-- LEFT -->
        <div class="col-lg-5 testi-left">
          <!-- <div class="testi-eyebrow h4 mb-2">Patient Testimonials:</div> -->
          <h2 class="display-6 fw-bold mb-3"> Hear What Our   <span class="Testimonials-hsee"> Clients </span> <br>
            Say About Us </h2>

          <div class="testi-quote-round mb-3">
            <img src="{{ asset('public/assets/images/GetQuote.png') }}" alt="">
          </div>

          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="testi-stars" aria-label="Rated 4.5 out of 5">★★★★★</div>
            <span class="text-muted small">4.5</span>
          </div>

          <p id="mainQuote" class="mb-1 t-text"></p>
          <p id="mainName" class="mb-0 text-muted"></p>
        </div>

        <!-- RIGHT: 3-card stage (auto + arrows) -->
        <div class="col-lg-7">
          <div class="t-stage" id="tStage">
            <!-- Card 1 -->
            <article class="t-card pos1">
              <div class="d-flex align-items-center mb-2">
                <span class="t-quote"><img src="{{ asset('public/assets/images/Get Quote.png') }}" alt=""></span>
                <p class="t-text mb-2">
                  Working with  was seamless and professional.
Their expertise in trademark registration made the process quick and stress-free.
                </p>
              </div>
              <div class="t-name">Priya R</div>
            </article>

            <!-- Card 2 -->
            <article class="t-card pos2">
              <div class="d-flex align-items-center mb-2">
                <span class="t-quote"><img src="{{ asset('public/assets/images/Get Quote.png') }}" alt=""></span>
                <p class="t-text mb-2">
                  Thanks to their dedicated support, I successfully registered my brand in multiple countries.
Highly recommended!
                </p>
              </div>
              <div class="t-name">Ahmed K </div>
            </article>

            <!-- Card 3 -->
            <article class="t-card pos3">
              <div class="d-flex align-items-center mb-2">
                <span class="t-quote"><img src="{{ asset('public/assets/images/Get Quote.png') }}" alt=""></span>
                <p class="t-text mb-2">
                  Their team explained every step clearly and handled the paperwork perfectly.
I’m grateful for their reliable service.
                </p>
              </div>
              <div class="t-name">Sophia L</div>
            </article>

            <!-- Arrow Controls -->
            <button class="t-nav t-prev d-none d-lg-inline-block" id="tPrev" aria-label="Move up"><span>▲</span></button>
            <button class="t-nav t-next d-none d-lg-inline-block" id="tNext" aria-label="Move down"><span>▼</span></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

<div class="accordion px-4 mt-4 px-lg-5 mt-lg-3 " id="accordionFlushExampleindex" style="padding-top: 0">
  <p style="font-weight: 700; font-size: 35px;" class="text-center">Trademark FAQs</p>

  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
        aria-controls="flush-collapseOne">
        <span style="font-size: 20px; font-weight: 500;">What is a Trademark and why is it important?</span>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
      data-bs-parent="#accordionFlushExampleindex">
      <div class="accordion-body" style="line-height:1.43m; font-size:16px;font-weight: 700;">
      A trademark legally protects your brand name, logo, tagline, and symbols from misuse, ensuring your brand identity stays unique.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
        aria-controls="flush-collapseTwo">
        <span style="font-size: 20px;font-weight: 500;">How long does it take to get a Trademark Certificate?</span>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
      data-bs-parent="#accordionFlushExampleindex">
      <div class="accordion-body" style="line-height: 1.43m; font-size:16px;font-weight: 700;">
      You’ll receive the acknowledgment immediately, and the registration certificate is issued once the process is complete, usually within a few months.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
        aria-controls="flush-collapseThree">
        <span style="font-size: 20px; font-weight: 500;">What documents are required for Trademark Registration?</span>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
      data-bs-parent="#accordionFlushExampleindex">
      <div class="accordion-body" style="line-height: 1.43m; font-size:16px;font-weight: 700;">
       You need your brand logo/name, applicant’s ID proof, business registration certificate, and Power of Attorney (if filed through an agent).
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
        aria-controls="flush-collapseFour">
        <span style="font-size: 20px; font-weight: 500;">Does a Trademark give me complete brand protection?</span>
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
      data-bs-parent="#accordionFlushExampleindex">
      <div class="accordion-body" style="line-height: 1.43m; font-size:16px;font-weight: 700;">
      Yes, it prevents others from using or copying your registered brand elements and gives you the legal right to act against infringement.
      </div>
    </div>
  </div>

 
</div>

@include('layouts.indexheader')

@include('layouts.footer')
