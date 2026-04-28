@include('layouts.app')

@verbatim
  <!-- Structure Schema Start -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LegalService",
    "@id": "https://right-trademark.com/#legalservice",
    "name": "Right Trademark",
    "url": "https://right-trademark.com/",
    "description": "Right Trademark offers trademark registration, trademark search, trademark renewal, and brand protection services in UAE, Dubai, and worldwide.",
    "logo": "https://right-trademark.com/assets/images/RTMlogo.webp",
    "image": "https://right-trademark.com/assets/images/Frame-bg.webp",
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
      }
    ]
  }
  </script>
@endverbatim

<style>
    /* Critical Speed & CLS Fixes */
    img { height: auto; max-width: 100%; } 
    @font-face {
        font-family: 'bootstrap-icons';
        font-display: swap; /* Fixes "Font display" speed audit */
        src: url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/fonts/bootstrap-icons.woff2') format('woff2');
    }
    .hero-section img#lcp-hero { display: none; } /* Hide the backup LCP image */
</style>






<div class="nav-imgindex">
    <div class="container-fluid px-0 hero-section">
      <!-- Optimized LCP Image -->
      <img src="{{ asset('assets/images/Frame-bg.webp') }}" 
           alt="UAE Trademark Services"
           id="lcp-hero"
           fetchpriority="high"
           decoding="async"
           width="1920"
           height="1080"
           style="width:0;height:0;position:absolute;visibility:hidden;">
        
      <div class="row pt-lg-2" id="heross">
        <div class="col-lg-12">
          <p class="msewwe" style="background: #fb1010; color: #fff; padding: 1px 8px; width: max-content; border-radius: 36px; font-weight: 600; font-size: 15px;" class="ksesee">UAE’s First-Ever 1-Day Express Application Approval</p>
          <h1>Leading Trademark<br>Service Provider in <span class="highlight-red">UAE</span></h1>
          <ul class="mt-2">
            <li> 
              <img src="{{ asset('assets/images/tick-style.png') }}" alt="Tick" class="me-1 d-none d-lg-inline-block" width="20" height="20"> 
              Protect your brand identity and Customer trust
            </li>
            <li> 
              <img src="{{ asset('assets/images/tick-style.png') }}" alt="Tick" class="me-1 d-none d-lg-inline-block" width="20" height="20"> 
              Trademark UAE starts @ <span class="price"> <img src="{{ asset('assets/images/UAE_Dirham_Symbol.png') }}" class="ssedasdas" alt="AED" width="16" height="16"> 7,499</span> (All inclusive)
            </li>
          </ul>
          
          <div class="text-center text-lg-start my-lg-3">
            <button onclick="openWhatsApp()" class="whatapp">
              <img src="{{ asset('assets/images/icon1.svg') }}" alt="WhatsApp" class="me-2" width="24" height="24">
              whatsapp
            </button>
          </div>

          <div class="row features mt-3">
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p4.svg') }}" alt="Happy Clients" width="40" height="40"></div>
              <div><p class="defnition">5000+</p><span class="down">Happy Clients</span></div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p3.svg') }}" alt="Client Retention" width="40" height="40"></div>
              <div><p class="defnition">98%</p><span class="down">Clients Retention</span></div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p2.svg') }}" alt="Experience" width="40" height="40"></div>
              <div><p class="defnition">9+ Years</p><span class="down">Experience</span></div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p1.svg') }}" alt="Free Chat" width="40" height="40"></div>
              <div><p class="defnition">24*7</p><span class="down">Free Chat</span></div>
            </div>
          </div>

          <div class="co-tenly">
            <section>
              <div class="image-container">
                <div class="img-wrapper">
                  <div class="img-inner"><img src="{{ asset('assets/images/w6.svg') }}" class="img-item first-img" alt="America" width="120" height="120" /></div>
                  <p class="text">America</p>
                  <div class="popup">USA, Canada, Mexico</div>
                </div>
                <div class="img-wrapper" data-continent="Asia">
                  <div class="img-inner"><img src="{{ asset('assets/images/w2.svg') }}" class="img-item" alt="Asia" width="120" height="120" /></div>
                  <p class="text">Asia</p>
                  <div class="popup">India, Singapore, China, UAE</div>
                </div>
                <div class="img-wrapper" data-continent="Africa">
                  <div class="img-inner"><img src="{{ asset('assets/images/w1.svg') }}" class="img-item" alt="Africa" width="120" height="120" /></div>
                  <p class="text">Africa</p>
                  <div class="popup">Aripo, Oapi</div>
                </div>
                <div class="img-wrapper" data-continent="Europe">
                  <div class="img-inner"><img src="{{ asset('assets/images/w4.svg') }}" class="img-item" alt="Europe" width="120" height="120" /></div>
                  <p class="text">Europe</p>
                  <div class="popup">EU, UK, Germany, France</div>
                </div>
                <div class="img-wrapper" data-continent="Australia">
                  <div class="img-inner"><img src="{{ asset('assets/images/w5.svg') }}" class="img-item" alt="Australia" width="120" height="120" /></div>
                  <p class="text">Australia</p>
                  <div class="popup">New Zealand</div>
                </div>
              </div>
            </section>
          </div>
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
          @for($i = 1; $i <= 6; $i++)
            <img src="{{ asset('assets/images/logo-' . $i . '.png') }}" alt="Brand Logo {{ $i }}" width="120" height="60" loading="lazy">
          @endfor
        </div>
      </div>
      <div class="img-border"></div>
      <img src="{{ asset('assets/images/rating.png') }}" class="we" width="180" height="40" alt="Rating" loading="lazy">
      <img src="{{ asset('assets/images/greview.png') }}" class="we" width="180" height="40" alt="Google Review" loading="lazy">
    </div>
  </div>
</section>

  <!-- select country....... -->

 <div class="container main-content mt-5">
  <div class="row align-items-center">
    <div class="col-lg-6 text-section">
      <span class="stc"></span> <span class="ms-2 selectcountry">Right Trademark</span>
      <h2 class="mt-3">Trademark Registration Across <span class="highlight">100+ Countries</span></h2>
      <p class="mt-3 text-muted">Protect your brand globally with our seamless registration process. We handle everything from search to certification across all major jurisdictions.</p>
      <button onclick="openWhatsApp()" class="whatapp">
        <img src="{{ asset('assets/images/icon1.svg') }}" alt="WhatsApp" width="24" height="24" loading="lazy"> 
        whatsapp
      </button>
    </div>
    <div class="col-lg-6 flag-container">
      <img src="{{ asset('assets/images/Group-we.svg') }}" class="img-fluid" alt="Global Map" width="600" height="400" loading="lazy">
    </div>
  </div>
</div>


  <!-- about us  -->

<section class="about-img d-flex py-5">
    <div class="about" style="width: 60%; padding-left: 5%;">
      <span class="line"></span> <span class="abtus">About Us</span>
      <p class="clients h2 mt-3">We Help Our Clients to Secure <br> Their <span class="text-danger">Intellectual Property</span></p>
      <p class="mt-3" style="width: 84%; line-height: 1.8em;">Protect your brand identity by securing logos, taglines, colours, and symbols. Get your Trademark Certificate quickly with full guidance and strong legal protection.</p>
      <ul class="mt-3">
        <li><i class="bi bi-check2-circle me-1"></i>Secure logos, taglines, colours, and symbols.</li>
        <li><i class="bi bi-check2-circle me-1"></i>Get your Trademark Certificate with guidance.</li>
        <li><i class="bi bi-check2-circle me-1"></i>Quick delivery and strong legal protection.</li>
      </ul>
      <div class="mt-3">
        <button onclick="openWhatsApp()" class="whatapp">
          <img src="{{ asset('assets/images/icon1.svg') }}" alt="whatsapp" width="24" height="24" loading="lazy"> 
          whatsapp
        </button>
      </div>
    </div>
 
    <div class="row about-row justify-content-center w-50">
      <div class="col-lg-6 mt-lg-5 mb-4">
        <div class="message-box text-center p-4 border rounded shadow-sm bg-white">
          <img src="{{ asset('assets/images/d13.png') }}" alt="Search" class="w-25" width="100" height="100" loading="lazy">
          <h2 class="fs-5 mt-3">Trademark Search</h2>
          <p class="small text-muted">Check for conflicts before filling.</p>
          <a href="trademark-search" class="btn btn-outline-danger btn-sm mt-2">Register</a>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="message-box text-center p-4 border rounded shadow-sm bg-white">
          <img src="{{ asset('assets/images/d12.png') }}" alt="Registration" class="w-25" width="100" height="100" loading="lazy">
          <h2 class="fs-5 mt-3">Trademark Registration</h2>
          <p class="small text-muted">Fast, reliable, hassle-free filing.</p>
          <a href="trademark-registration" class="btn btn-outline-danger btn-sm mt-2">Register</a>
        </div>
      </div>
      <div class="col-lg-6 mt-lg-5 mb-4">
        <div class="message-box text-center p-4 border rounded shadow-sm bg-white">
          <img src="{{ asset('assets/images/d14.png') }}" alt="Renewal" class="w-25" width="100" height="100" loading="lazy">
          <h2 class="fs-5 mt-3">Trademark Renewal</h2>
          <p class="small text-muted">Keep your brand protected.</p>
          <a href="trademark-renewal" class="btn btn-outline-danger btn-sm mt-2">Register</a>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="message-box text-center p-4 border rounded shadow-sm bg-white">
          <img src="{{ asset('assets/images/d15.png') }}" alt="Opposition" class="w-25" width="100" height="100" loading="lazy">
          <h2 class="fs-5 mt-3">Trademark Opposition</h2>
          <p class="small text-muted">Defend against infringement.</p>
          <a href="trademark-oppositions" class="btn btn-outline-danger btn-sm mt-2">Register</a>
        </div>
      </div>
    </div>
</section>

  

@include('layouts.indexheader')

@include('layouts.footer')





