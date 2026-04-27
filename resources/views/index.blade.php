
@include('Layouts.app')


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
    document.addEventListener("DOMContentLoaded", function () {
        const preload = document.createElement("link");
        preload.rel = "preload";
        preload.as = "image";
        preload.href = "{{ asset('assets/images/Frame-bg.webp') }}";
        preload.setAttribute("fetchpriority", "high");
        document.head.appendChild(preload);
    });
</script>







  <div class="nav-imgindex">
<div class="container-fluid px-0 hero-section">
  <img src="{{ asset('assets/images/Frame-bg.webp') }}" 
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
            <li> <img src="{{ asset('assets/images/tick-style.webp') }}" alt="" class="me-1 d-none  d-lg-inline-block"> Protect your brand identity and the Customer
              trust</li>
            <li> <img src="{{ asset('assets/images/tick-style.webp') }}" alt="" class="me-1 d-none  d-lg-inline-block"> Trade mark UAE starts @ <span class="price"> <img src="{{ asset('assets/images/UAE_Dirham_Symbol.webp') }}" class="ssedasdas">
                7,499</span> (All inclusive)</li>
          </ul>
    <div class="text-center text-lg-start my-lg-3">
  <button onclick="openWhatsApp()" class="whatapp">
    <img src="{{ asset('assets/images/icon1.webp') }}" alt="logo" class="me-2">
    whatsapp
  </button>
</div>

          <div class="row features mt-3">
            <div class=" feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p4.webp') }}" alt=""></div>
              <div>
                <p class="defnition">5000+</p><span class="down">Happy Clients</span>
              </div>
            </div>
            <div class=" feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p3.webp') }}" alt=""></div>
              <div>
                <p class="defnition">98%</p><span class="down">Clients Retention</span>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p2.webp') }}" alt=""></div>
              <div>
                <p class="defnition">9+ Years</p><span class="down">Industry Experience</span>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon"><img src="{{ asset('assets/images/p1.webp') }}" alt=""></div>
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
                    <img src="{{ asset('assets/images/w6.webp') }}" class="img-item first-img" alt="South America" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">America</p>
                  <div class="popup"><strong></strong> USA, Canada, Mexico</div>

                </div>

                <!-- Other Continents -->
                <div class="img-wrapper  " data-continent="Asia">
                  <div class="img-inner">
                    <img src="{{ asset('assets/images/w2.webp') }}" class="img-item" alt="Asia" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text"> Asia </p>
                  <div class="popup"><strong></strong>India, Singapore, China,<br>Hong Kong, South Korea,<br>Indonesia, Bangladesh,<br>Japan, Russia, Thailand,<br>Malaysia</div>
                </div>

                <div class="img-wrapper  " data-continent="Africa">
                  <div class="img-inner">
                    <img src="{{ asset('assets/images/w1.webp') }}" class="img-item" alt="Africa" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">Africa</p>
                  <div class="popup"><strong></strong>Aripo,Oapi</div>
                </div>

                <div class="img-wrapper  " data-continent="Europe">
                  <div class="img-inner">
                    <img src="{{ asset('assets/images/w4.webp') }}" class="img-item" alt="Europe" />
                    <!-- <div class="blink-dot"></div> -->
                  </div>
                  <p class="text">Europe</p>
                  <div class="popup" id="popupnew"><strong></strong>EU, Germany, Benelux, UK,<br>Italy, Norway, Switzerland,France, Ireland, Spain</div>
                </div>

                

                <div class="img-wrapper " data-continent="Australia">
                  <div class="img-inner">
                    <img src="{{ asset('assets/images/w5.webp') }}" class="img-item" alt="Australia" />
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

  <section class="Trusted-by mb-0" style="--logo-count: {{ $logos->count() }}">
    <div class="brandcontainer">
      <p class="fs-3 mt-3">Trusted by Over <b class="Trusted"> 5000+ </b> Brands Globally</p>
      <div class="d-flex gap-4 align-items-center justify-content-center">         <div class="scroll-container" style="mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);">
          @if($logos->count())
          <div class="scroll-wrapper scroll-wrapper--static" id="scroll-wrapper" style="will-change: transform;">
            @foreach($logos as $logo)
            <img src="{{ $logo->image_url }}" alt="{{ $logo->alt_text }}" loading="lazy" width="120" height="60" data-logo-item="true" style="object-fit: contain; margin-right: 2rem;">
            @endforeach
          </div>
          @endif
        </div>


        <div class="img-border"></div>
        <img src="{{ asset('assets/images/rating.webp') }}" class="we" width="180" height="60" alt="Rating">
        <img src="{{ asset('assets/images/greview.webp') }}" class="we" width="180" height="60" alt="Google Reviews">
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
 class="whatapp"><img src="{{ asset('assets/images/icon1.webp') }}" alt="logo"> whatsapp</button>
    </div>
    <div class="flag-container mt-4 mt-md-0">
      <img src="{{ asset('assets/images/Group-we.webp') }}" class="img-fluid" alt="India">
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
 class="whatapp"><img src="{{ asset('assets/images/icon1.webp') }}" alt="logo"> whatsapp</button>
</div>
    </div>
 
    <div class="row   about-row  justify-content-center w-50">
      <div class="col-lg-6 mt-5">
        <div class="message-box text-center">
          <img src="{{ asset('assets/images/d13.webp') }}" alt="" class="w-25">
          <h2>Trademark Search</h2>
          <p>Check for conflicts before filling.</p>
           <a href="trademark-search"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="message-box text-center">
   <img src="{{ asset('assets/images/d12.webp') }}" alt="" class="w-25">
   <h2> Trademark Registration </h2>
          <p>Fast, reliable, nassle free filing</p>
           <a href="trademark-registration"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6 mt-5">
        <div class="message-box text-center">
      <img src="{{ asset('assets/images/d14.webp') }}" alt="" class="w-25">
      <h2>Trademark Renewal </h2>
          <p>Keep your brand protected</p>
           <a href="trademark-renewal"> <button class="cta-button">Register</button></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="message-box text-center">
            <img src="{{ asset('assets/images/d15.webp') }}" alt="" class="w-25">
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
                <img src="{{ asset('assets/images/fl1.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">UAE</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"><span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span> 7499</div>
                </div>
              </div>
            </div>
            </a>

             <a href="trademark-registration-bahrain">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('assets/images/fl2.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Bahrain</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span>  8200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-saudi">
            <div class="country-card ">
              <div class="col-lg-2" >
                <img src="{{ asset('assets/images/fl3.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Saudi Arabia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span>  8499</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-kuwait">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('assets/images/fl4.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Kuwait</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span> 6500</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-qatar">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('assets/images/fl5.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Qatar</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span> 7250</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-oman">
            <div class="country-card">
              <div class="col-lg-2" >
                <img src="{{ asset('assets/images/fl6.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Oman</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/UAESymbol.webp') }}" alt="photo" class="symbols-uae"></span> 4000</div>
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
                
                <img src="{{ asset('assets/images/fl7.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">India</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 400</div>
                </div>
              </div>
            </div>
             </a>
            

             <a href="trademark-registration-singapore">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl8.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Singapore</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 599 </div>
                </div>
              </div>
            </div>
            </a>


            <a href="trademark-registration-southkorea">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('assets/images/fl9.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country"> South Korea </h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 649</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-hongkong">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl10.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Hong Kong</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-china">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl11.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">China</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                 <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-indonesia">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl12.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Indonesia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  750</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-bangladesh">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl13.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Bangladesh</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  999</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-japan">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/flg-icon.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Japan</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  1200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-russia">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl14.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Russia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  1200</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-thailand">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl15.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Thailand</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  1220</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-malasiya">
             <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl16.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Malaysia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span>  829</div>
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
                <img src="{{ asset('assets/images/fl17.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">EU</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 1499</div>
                </div>
              </div>
            </div>
            </a>
            
            <a href="trademark-registration-germany">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl18.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Germany</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 699</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-benelux">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl19.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Benelux</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 549</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-uk">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl20.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">UK</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 599</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-italy">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <div vc></div>
                <img src="{{ asset('assets/images/fl21.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Italy</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 649</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-norway">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl22.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Norway</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 849</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-switzerland">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl23.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Switzerland</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 999</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-france">
              <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl24.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">France</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 579</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-ireland">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl25.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Ireland</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 499</div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-spain">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl26.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Spain</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 469</div>
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
                <img src="{{ asset('assets/images/fl27.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">USA</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"><span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 750</div>
                </div>
              </div>
            </div>
            </a>


            <a href="trademark-registration-canada">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl28.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Canada</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 749 </div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-mexico">
            <div class="country-card ">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl29.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Mexico</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 599</div>
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
                <img src="{{ asset('assets/images/fl30.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Australia</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 559 </div>
                </div>
              </div>
            </div>
            </a>

            <a href="trademark-registration-newzealand">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/fl31.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">New Zealand</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price">  <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 599</div>
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
                <img src="{{ asset('assets/images/aripo.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Aripo</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 6000</div>
                </div>
              </div>
            </div>
            </a>
            <a href="#">
            <div class="country-card">
              <div class="col-lg-2" aria-hidden="true">
                <img src="{{ asset('assets/images/oapi.webp') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-10">
                <h5 class="country">Oapi</h5>
                <p class="sub">TM registration</p>
                <div class="actions">
                  <button class="btn cta-button" type="button">Apply Online</button>
                  <div class="price"> <span><img src="{{ asset('assets/images/dollar.webp') }}" alt="photo" class="dollar"></span> 1600</div>
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
            <img src="{{ asset('assets/images/GetQuote.webp') }}" alt="">
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
                <span class="t-quote"><img src="{{ asset('assets/images/Get Quote.webp') }}" alt=""></span>
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
                <span class="t-quote"><img src="{{ asset('assets/images/Get Quote.webp') }}" alt=""></span>
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
                <span class="t-quote"><img src="{{ asset('assets/images/Get Quote.webp') }}" alt=""></span>
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

<script>
  (function () {
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }

    const restoreTop = () => {
      if (!window.location.hash) {
        window.scrollTo(0, 0);
      }
    };

    const initLogoStrip = () => {
      const container = document.querySelector('.scroll-container');
      const wrapper = document.getElementById('scroll-wrapper');
      if (!container || !wrapper) return;

      const layoutLogoStrip = () => {
        wrapper.querySelectorAll('[data-logo-clone="true"]').forEach((node) => node.remove());
        wrapper.classList.remove('scroll-wrapper--scroll');
        wrapper.classList.add('scroll-wrapper--static');

        const originals = Array.from(wrapper.querySelectorAll('[data-logo-item="true"]'));
        if (!originals.length) return;

        const totalWidth = originals.reduce((sum, img) => {
          const styles = window.getComputedStyle(img);
          const rect = img.getBoundingClientRect();
          const width = rect.width || img.naturalWidth || 120;
          return sum + width + parseFloat(styles.marginLeft) + parseFloat(styles.marginRight);
        }, 0);

        // Force scroll if 4 or more logos, OR if they don't fit the container
        const shouldScroll = totalWidth > container.clientWidth || originals.length >= 5;

        if (!shouldScroll) {
          return;
        }

        // 1. Build a "base set" that is at least as wide as the container
        let currentWidth = totalWidth;
        while (currentWidth < container.clientWidth) {
          originals.forEach((img) => {
            const clone = img.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            clone.dataset.logoClone = 'true';
            wrapper.appendChild(clone);
            
            const styles = window.getComputedStyle(img);
            const rect = img.getBoundingClientRect();
            const width = rect.width || img.naturalWidth || 120;
            currentWidth += width + parseFloat(styles.marginLeft) + parseFloat(styles.marginRight);
          });
        }

        // 2. Clone the entire base set once to enable a seamless loop with translateX(-50%)
        const baseSetItems = Array.from(wrapper.children);
        baseSetItems.forEach((item) => {
          const clone = item.cloneNode(true);
          clone.setAttribute('aria-hidden', 'true');
          clone.dataset.logoClone = 'true';
          wrapper.appendChild(clone);
        });

        wrapper.classList.remove('scroll-wrapper--static');
        wrapper.classList.add('scroll-wrapper--scroll');
      };

      const images = Array.from(wrapper.querySelectorAll('[data-logo-item="true"]'));
      let pending = images.length;

      if (!pending) {
        layoutLogoStrip();
        return;
      }

      const onReady = () => {
        pending -= 1;
        if (pending <= 0) {
          layoutLogoStrip();
        }
      };

      images.forEach((img) => {
        if (img.complete) {
          onReady();
        } else {
          img.addEventListener('load', onReady, { once: true });
          img.addEventListener('error', onReady, { once: true });
        }
      });

      let resizeTimer;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(layoutLogoStrip, 120);
      });
    };

    window.addEventListener('pageshow', restoreTop);
    document.addEventListener('DOMContentLoaded', () => {
      restoreTop();
      initLogoStrip();
    });
  })();
</script>

@include('Layouts.indexheader')

@include('Layouts.footer')





