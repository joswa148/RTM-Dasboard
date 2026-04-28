
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preload" as="image" href="{{ asset('images/Frame-bg.webp') }}" fetchpriority="high">
    <meta name="Robots" content="INDEX,FOLLOW">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $metaDescription ?? '' }}">
  <meta name="keywords" content="{{ $metaKeyWord ?? '' }}">
  <link rel="canonical" href="{{ $canonical ?? '' }}"> 
  <title>{{ $pageTitle ?? 'Home' }}</title>

    <?php /* <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> */ ?>
  
    @php
        $rtmVersion = time();
    @endphp
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}?v={{ $rtmVersion }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ $rtmVersion }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="{{ asset('assets/images/favicon.webp') }}">

<!-- Schema Start -->
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
 
    {
      "@type": "WebPage",
      "@id": "https://right-trademark.com/trademark-search#webpage",
      "url": "https://right-trademark.com/trademark-search",
      "name": "Trademark Search Service | Right Trademark",
      "description": "Professional Trademark Search service to check if your brand name, logo, or design is available and conflict-free before filing.",
      "publisher": {
        "@id": "https://right-trademark.com/#organization"
      },
      "inLanguage": "en"
    },
 
    {
      "@type": "Organization",
      "@id": "https://right-trademark.com/#organization",
      "name": "Right Trademark",
      "url": "https://right-trademark.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://right-trademark.com/assets/images/RTMlogo.webp"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "customer support",
          "telephone": "+971 56 251 7290",
          "areaServed": "GLOBAL",
          "availableLanguage": "English"
        }
      ]
    },
 
    {
      "@type": "Service",
      "@id": "https://right-trademark.com/trademark-search#service",
      "name": "Trademark Search",
      "description": "Trademark Search service to check availability and avoid conflicts with existing trademarks worldwide before filing.",
      "provider": {
        "@id": "https://right-trademark.com/#organization"
      },
      "serviceType": "Trademark Search",
      "areaServed": ["GLOBAL","UAE","USA","UK","INDIA"],
      "audience": {
        "@type": "Audience",
        "audienceType": ["Businesses","Brand Owners","Startups"]
      }
    },
 
    {
      "@type": "OfferCatalog",
      "@id": "https://right-trademark.com/trademark-search#offers",
      "name": "Trademark Search Packages",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Basic Trademark Search",
            "description": "Standard search to find identical trademarks."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Advanced Trademark Search + Report",
            "description": "Detailed search with expert analysis and conflict report."
          }
        }
      ]
    },
 
    {
      "@type": "WebSite",
      "@id": "https://right-trademark.com/#website",
      "url": "https://right-trademark.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://right-trademark.com/trademark-search?query={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
 
    {
      "@type": "FAQPage",
      "@id": "https://right-trademark.com/trademark-search#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a trademark search?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A trademark search checks whether similar trademarks already exist and reduces chances of conflict before filing an application."
          }
        },
        {
          "@type": "Question",
          "name": "Why do I need a trademark search?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It protects your brand and prevents legal disputes by ensuring no similar marks exist."
          }
        },
        {
          "@type": "Question",
          "name": "Can I check trademarks globally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes — our trademark search covers major jurisdictions worldwide."
          }
        }
      ]
    }
 
  ]
}
</script>
@endverbatim
<!-- Schema End -->

@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://right-trademark.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Trademark Search",
      "item": "https://right-trademark.com/trademark-search"
    }
  ]
}
</script>
@endverbatim



</head>

<body>

<header class="mbl-done">
    <div class="tm-container">
      <div class="tm-row">
        <div class="tm-logo col-lg-2">
            <a href="https://right-trademark.com/">
          <img src="{{ asset('assets/images/RTMlogo.webp') }}" alt="Logo">
                    <!--<img src="https://majlisdates.com/rtmindia/assets/imagesuk/RTMUKlogo.webp" alt="" style="height:60px;">-->
          </a>
        </div>
        <nav class="tm-menu col-lg-7" aria-label="Primary">
          <ul class="tm-menu-main">
            <li><a href="https://right-trademark.com">Home</a></li>

            <li class="tm-has-children">
              <a href="#" aria-haspopup="true" aria-expanded="false">
                <span>Services</span>
              </a>
              <div class="tm-submenu tm-mega" aria-label="Trademark submenu">
                <div class="tm-list">
                  <ul class="tm-tabs">
                     
                    <li>
                        
                      <a href="https://right-trademark.com/" class="active">

                        <img src="{{ asset('assets/images/we1.webp') }}" alt=""> Trademark <span></span>
                      </a>
                       
                      <div class="tm-tab-content" hidden>
                      <div class="row subbse">
                        <div class="col-lg-4">
                          <h2>Register Trademark</h2>
                           <ul>
                            <li> <a href="{{ route('trademarkregistration') }}"> Trademark Registration</a></li>
                            <li> <a href="Trademark Search "> Trademark Search</a></li>
                            <li> <a href="trademark-watch"> Trademark Watch</a></li>
                            <li> <a href="international-trademark"> International Trademarks</a></li>
                           </ul>
                        </div>
                        <div class="col-lg-4 d-block">
                          <h2>Post Filing Services</h2>
                           <ul>
                            <li> <a href="trademark-renewal"> Trademark Renewal</a></li>
                            <li> <a href="trademark-revival"> Trademark Revival</a></li>
                            <li> <a href="trademark-office-actions"> Trademark Office Actions</a></li>
                            <li> <a href="trademark-statement">Trademark Statement of Use</a></li>
                            <li> <a href="trademark-extension">Trademark Extension of Use</a></li>
                            <li> <a href="trademark-oppositions">Trademark Oppositions</a></li>
                            <li> <a href="trademark-litigation"> Trademark Litigations</a></li>
                           </ul>
                        </div>
                         <div class="col-lg-4 d-block">
                          <h2>Trademark Protection</h2>
                           <ul>
                            <li> <a href="brand-monitoring">Brand Monitoring</a></li>
                            <li> <a href="trademark-ownership-transfer">Trademark Ownership Transfer</a></li>
                            <li> <a href="cease-desist-tetter">Cease and Desist Letter</a></li>
                            <li> <a href="trademark-certificate">Trademark Certificate</a></li>
                           </ul>
                        </div>
                      </div>
                      </div>
                    </li>


                    <li>
                      <a href="#"><img src="{{ asset('assets/images/we2.webp') }}" alt="#"> Business Setup </a>
                      <div class="tm-tab-content" hidden>
                         <div class="row subbse">
                               <div class="col-lg-4 d-block">
                          <h2>Company Formation</h2>
                           <ul>
                            <li> <a href="mainland-company-registration">Mainland Company Registration</a></li>
                            <li> <a href="free-zone-company-setup">Free Zone Company Setup</a></li>
                            <li> <a href="offshore-company-incorporation">Offshore Company Incorporation</a></li>
                            <li> <a href="trade-license-assistance">Trade License Assistance</a></li>
                           
                           </ul>
                        </div>
                        <div class="col-lg-4">
                          <h2>Legal & Compliance</h2>
                           <ul>
                            <li> <a href="vat-tax-registration">VAT & Tax Registration</a></li>
                            <li> <a href="contract-Drafting-Review">Contract Drafting & Review</a></li>
                             <li> <a href="regulatory-Approvals-Permits">Regulatory Approvals & Permits</a></li>
                           </ul>
                        </div>
                       
                         <div class="col-lg-4 d-block">
                          <h2>Business Support Services</h2>
                           <ul>
                            <li> <a href="accounting-Bookkeeping">Accounting & Bookkeeping</a></li>
                            <li> <a href="corporate-Bank-Account-Opening">Corporate Bank Account Opening</a></li>
                            <li> <a href="pro-Visa-Services">PRO & Visa Services</a></li>
                             <li> <a href="office-Space-Virtual-Address-Solutions">Office Space & Virtual Address Solutions</a></li>
                           </ul>
                        </div>
                      </div>
                      </div>
                    </li>
                    

                    <li>
                      <a href="#"> <img src="{{ asset('assets/images/we3.webp') }}" alt=""> Technology</a>
                      <div class="tm-tab-content" hidden>
                          <div class="row subbse">
                               <div class="col-lg-4 d-block">
                          <h2>Information Technology</h2>
                           <ul>
                            <li> <a href="software-development">Software development</a></li>
                            <li> <a href="web-app-development">Web & app development</a></li>
                            <li> <a href="cloud-computing">Cloud computing</a></li>
                            <li> <a href="cyber-security">Cybersecurity</a></li>
                            <li> <a href="it-consulting">IT consulting</a></li>
                            <li> <a href="uiux">UI/UX Design</a></li>
                           
                           </ul>
                        </div>
                        <div class="col-lg-4">
                          <h2>Networking Services</h2>
                           <ul>
                            <li> <a href="network-design-Consulting">Network design & consulting</a></li>
                            <li> <a href="managed-network-services">Managed network services</a></li>
                            <li> <a href="it-support-for-enterprises">IT support for enterprises</a></li>
                            
                           </ul>
                            <h2>AI </h2>
                                                      <ul>
                            <li> <a href="customer-support-chatbot">Customer Support Chatbot</a></li>
                            <li> <a href="business-chatbot-integration"> Business Chatbot Integration </a></li>
                            <li> <a href="team">Team & Chatbot Collaboration</a></li>
                           </ul>
                        </div>
                       
                         <div class="col-lg-4 d-block"> 
                          <h2>Industrial </h2>
                           <ul>
                            <li> <a href="manufacturing-automation">Manufacturing automation</a></li>
                            <li> <a href="smart-factories">Smart factories</a></li>
                            <li> <a href="transportation-tech">Transportation tech</a></li>
                            <li> <a href="aerospace-defense">Aerospace & defense</a></li>
                           </ul>
                          
                        </div>
                      </div>
                      </div>
                    </li>


                    <li>
                      <a href="#"><img src="{{ asset('assets/images/we4.webp') }}" alt="#"> Branding </a>
                      <div class="tm-tab-content" hidden>
                         <div class="row subbse">
                               <div class="col-lg-4 d-block">
                          <h2>Brand Identity</h2>
                           <ul>
                            <li> <a href="brand-strategy-consulting">Brand strategy & consulting</a></li>
                         
                            <li> <a href="corporate-identity">Corporate identity</a></li>
                    
                           
                           </ul>
                        </div>
                        <div class="col-lg-4">
                          <h2>Digital Branding</h2>
                           <ul>
                            
                            <li> <a href="website-app-design">Website & app design</a></li>
                            <li> <a href="social-media-creatives">Social media creatives</a></li>
                             <li> <a href="ads-campaign-designs">Ads & campaign designs</a></li>
                           </ul>
                        </div>
                       
                         <div class="col-lg-4 d-block">
                          <h2>Marketing</h2>
                           <ul>
                            <li> <a href="packaging-product-design">Packaging & product design</a></li>
                            <li> <a href="marketing-materials">Marketing materials</a></li>
                            <li> <a href="presentation-design">Presentation design</a></li>
                          
                           </ul>
                        </div>
                      </div>
                      </div>
                    </li>
                    
                    
                    
                  </ul>
                </div>
                <div class="tm-display" id="tm-display" aria-live="polite"></div>
              </div>
            </li>
   
               
            <li><a href="about-us">About</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </nav>

        <div class="button col-lg-3 la d-flex align-items-center">
           <a href="https://right-trademark.com/portal/login" class="btn btn-login me-2">LOG IN</a>
        <a href="#" onclick="openWhatsApp()" class="btn btn-whatsapp  head-top-butto">
          <img src="{{ asset('assets/images/icon1.webp') }}" alt=""> WhatsApp 
        </a>
        </div>

        <div class="tm-item-right">
          <div class="tm-mobile-trigger" aria-label="Toggle menu" role="button" tabindex="0">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </div>
  </header>



<!-- ===== Mobile Header ===== -->
<header class="d-lg-none border-bottom bg-white sticky-top" style="height:60px;">
  <div class="container-fluid h-100">
    <div class="d-flex align-items-center justify-content-between h-100 px-2">
      <!-- Logo -->
      <a href="#" class="d-flex align-items-center">
          <!--<img src="https://majlisdates.com/rtmindia/assets/imagesuk/RTMUKlogo.webp" alt="" style="height:60px;">-->
        <img src="{{ asset('assets/images/RTMlogo.webp') }}" alt="Logo" style="height:50px;">
      </a>

      <!-- Right icons -->
      <div class="d-flex  align-items-center gap-2">
        <!-- WhatsApp -->
        <a href="#" 
onclick="openWhatsApp()" class="btn btn-light boxsas rounded-circle p-2 d-flex align-items-center justify-content-center">
          <i class="bi bi-whatsapp  fs-5" ></i>
        </a>

        <!-- Phone -->
        <a href="tel:+971 56 251 7290" class="btn btn-light boxsas rounded-circle p-2 d-flex align-items-center justify-content-center">
          <i class="bi bi-telephone fs-5" ></i>
        </a>

        <!-- Login -->
        <a href="https://right-trademark.com/portal/login" class="btn btn-primary fw-semibold px-3 py-1">Login</a>

        <!-- Menu -->
        <button class="btn p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Menu">
          <i class="bi bi-list fs-1"></i>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- ===== Offcanvas Menu ===== -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bold" id="mobileMenuLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Main Links -->
    <a href="index" class="d-block py-2 text-decoration-none">Home</a>
    <a href="about-us" class="d-block py-2 text-decoration-none">About</a>

    <!-- Products with submenus -->
    <button class="btn w-100 text-start d-flex justify-content-between align-items-center py-2 px-0 border-0 bg-transparent" 
            data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false">
      <span class="">Services</span>
      <i class="bi bi-plus-lg"></i>
    </button>
    <div class="collapse ps-3" id="collapseProducts">
      <!--<a href="#" class="d-block py-2 text-decoration-none">All Products</a>-->

      <!-- Electronics submenu -->
      <button class="btn w-100 text-start d-flex justify-content-between align-items-center py-2 px-0 border-0 bg-transparent" 
              data-bs-toggle="collapse" data-bs-target="#collapseElectronics" aria-expanded="false">
        Trademark
        <i class="bi bi-plus-lg"></i>
      </button>
      <div class="collapse ps-3" id="collapseElectronics" data-bs-parent="#collapseProducts">
                           <ul>
                          <li> <a href="trademark-registration" class="text-decoration-none"> Trademark Registration</a></li>
                            <li> <a href="trademark-search" class="text-decoration-none"> Trademark Search</a></li>
                            <li> <a href="trademark-watch" class="text-decoration-none"> Trademark Watching</a></li>
                            <li> <a href="international-trademark" class="text-decoration-none"> International Trademarks</a></li>
                                 <li> <a href="trademark-renewal" class="text-decoration-none"> Tradmark Renewal</a></li>
                            <li> <a href="trademark-revival" class="text-decoration-none"> Trademark Revival</a></li>
                            <li> <a href="trademark-office-actions" class="text-decoration-none"> Trademark Office Actions</a></li>
                            <li> <a href="trademark-statement" class="text-decoration-none">Trademark Statement of Use</a></li>
                            <li> <a href="trademark-extension" class="text-decoration-none">Trademark Extension of Use</a></li>
                            <li> <a href="trademark-oppositions" class="text-decoration-none">Trademark Oppositions</a></li>
                            <li> <a href="trademark-litigation" class="text-decoration-none"> Trademark Litigations</a></li>
                            <li> <a href="brand" class="text-decoration-none">Brand Monitoring</a></li>
                            <li> <a href="brand-monitoring" class="text-decoration-none">Brand Monitoring</a></li>
                            <li> <a href="trademark-ownership-transfer" class="text-decoration-none">Trademark Ownership Transfer</a></li>
                            <li> <a href="cease-desist-tetter" class="text-decoration-none">Cease and Desist Letter</a></li>
                            <li> <a href="trademark-certificate" class="text-decoration-none">Trademark Certificate</a></li>
                           </ul>
      </div>
       
       
      

      <!-- Home & Kitchen submenu -->
      <button class="btn w-100 text-start d-flex justify-content-between align-items-center py-2 px-0 border-0 bg-transparent" 
              data-bs-toggle="collapse" data-bs-target="#collapseHomeKitchen" aria-expanded="false">
        Business Setup
        <i class="bi bi-plus-lg"></i>
      </button>
      <div class="collapse ps-3" id="collapseHomeKitchen" data-bs-parent="#collapseProducts">
         <ul>
                            <li> <a href="mainland-company-registration" class="text-decoration-none">Mainland Company Registration</a></li>
                            <li> <a href="free-zone-company-setup" class="text-decoration-none">Free Zone Company Setup</a></li>
                            <li> <a href="offshore-company-incorporation" class="text-decoration-none">Offshore Company Incorporation</a></li>
                            <li> <a href="trade-license-assistance" class="text-decoration-none">Trade License Assistance</a></li>
                            <li> <a href="register" class="text-decoration-none">Trademark Registration</a></li>
                            <li> <a href="vat-tax-registration" class="text-decoration-none">VAT & Tax Registration</a></li>
                            <li> <a href="contract-Drafting-Review" class="text-decoration-none">Contract Drafting & Review</a></li>
                             <li> <a href="regulatory-Approvals-Permits" class="text-decoration-none">Regulatory Approvals & Permits</a></li>
                            <li> <a href="accounting-Bookkeeping" class="text-decoration-none">Accounting & Bookkeeping</a></li>
                            <li> <a href="corporate-Bank-Account-Opening" class="text-decoration-none">Corporate Bank Account Opening</a></li>
                            <li> <a href="pro-Visa-Services" class="text-decoration-none">PRO & Visa Services</a></li>
                             <li> <a href="office-Space-Virtual-Address-Solutions" class="text-decoration-none">Office Space & Virtual Address Solutions</a></li>
           
          </ul>
      </div>
      
      
          <!-- Technology -->
    <button class="btn w-100 text-start d-flex justify-content-between align-items-center py-2 px-0 border-0 bg-transparent" 
              data-bs-toggle="collapse" data-bs-target="#Technology" aria-expanded="false">
        Technology
        <i class="bi bi-plus-lg"></i>
      </button>
      <div class="collapse ps-3" id="Technology" data-bs-parent="#collapseProducts">
        <ul>
                            <li> <a href="Software-development" class="text-decoration-none">Software development</a></li>
                            <li> <a href="Web-app-development" class="text-decoration-none">Web & app development</a></li>
                            <li> <a href="cloud-computing" class="text-decoration-none">Cloud computing</a></li>
                            <li> <a href="Cyber-security" class="text-decoration-none">Cybersecurity</a></li>
                            <li> <a href="it-consulting" class="text-decoration-none">IT consulting</a></li>
                            <li> <a href="uiux" class="text-decoration-none">UI/UX Design</a></li>
                            <li> <a href="network-design-Consulting" class="text-decoration-none">Network design & consulting</a></li>
                            <li> <a href="managed-network-services" class="text-decoration-none">Managed network services</a></li>
                            <li> <a href="it-support-for-enterprises" class="text-decoration-none">IT support for enterprises</a></li>
                           <li> <a href="manufacturing-automation" class="text-decoration-none">Manufacturing automation</a></li>
                            <li> <a href="smart-factories" class="text-decoration-none">Smart factories</a></li>
                            <li> <a href="transportation-tech" class="text-decoration-none">Transportation tech</a></li>
                            <li> <a href="aerospace-defense" class="text-decoration-none">Aerospace & defense</a></li>
                            
                           <li> <a href="customer-support-chatbot" class="text-decoration-none">Customer Support Chatbot</a></li>
                           <li> <a href="business-chatbot-integration" class="text-decoration-none"> Business Chatbot Integration </a></li>
                           <li> <a href="team" class="text-decoration-none">Team & Chatbot Collaboration</a></li>
                           </ul>
        
     
                            
         </ul>
      </div>
      
    
    
          <!-- branding -->
    <button class="btn w-100 text-start d-flex justify-content-between align-items-center py-2 px-0 border-0 bg-transparent" 
              data-bs-toggle="collapse" data-bs-target="#branding" aria-expanded="false">
        Branding
        <i class="bi bi-plus-lg"></i>
      </button>
      <div class="collapse ps-3" id="branding" data-bs-parent="#collapseProducts">
        <ul>
                <li> <a href="brand-strategy-consulting" class="text-decoration-none">Brand strategy & consulting</a></li>
                <li> <a href="Corporate-identity"  class="text-decoration-none">Corporate identity</a></li>
               <li> <a href="Website-app-design" class="text-decoration-none">Website & app design</a></li>
                <li> <a href="Social-media-creatives" class="text-decoration-none">Social media creatives</a></li>
                <li> <a href="ads-campaign-designs" class="text-decoration-none">Ads & campaign designs</a></li>
                 <li> <a href="packaging-product-design" class="text-decoration-none">Packaging & product design</a></li>
                <li> <a href="marketing-materials" class="text-decoration-none">Marketing materials</a></li>
             <li> <a href="presentation-design" class="text-decoration-none">Presentation design</a></li>
           
       </ul>
      </div>
      
      
      
    </div>

    <!-- Other Links -->
   
    <a href="contact" class="d-block py-2 text-decoration-none">Contact</a>

    
  </div>
</div>
</div>

    
<!-- HERO (red frame + content) -->
    <div class="container my-3 my-lg-4" style="margin-bottom:0px">
    <div class="hero-frame">
      <section class="hero">
        <div class="container">
          <div class="row align-items-center">
            <!-- LEFT -->
            <div class="col-lg-6">
              <span class="badge-soft">
                <i class="bi bi-shield-check"></i> Trademark Protection Made Easy
              </span>

              <h1>Trademark Search</h1>

              <p class="lead">
              <a href="https://right-trademark.com/trademark-search"style="color: #000;text-decoration: none;font-weight: 600;">Trademark Search</a> helps you check if your brand name, logo, or slogan is unique. It ensures no conflict with existing trademarks and protects your brand legally.
              </p>

              <ul class="rt-list">
                <li><i class="bi bi-check2-circle"></i> Identify similar or registered trademarks to prevent disputes </li>
                <li><i class="bi bi-check2-circle"></i> Secure a smooth registration process without legal hurdles </strong></li>
              </ul>

<div>
                <button class="whatapp" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.webp') }}" alt="foot-girl"  > WhatsApp Now</button>
                </div>
            </div>

            <!-- RIGHT VISUALS -->
                <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="hero-visual">
                <!--<div class="photo-lg"></div>-->
                <!--<div class="photo-sm"></div>-->

                <!-- curved connector (optional for desktop) -->
                <!--<svg class="svg-connector" viewBox="0 0 100 100" preserveAspectRatio="none">-->
                <!--  <path d="M5,5 L5,70 Q5,95 30,95 L95,95" fill="none" stroke="#212529" stroke-width="1.8"-->
                <!--        stroke-linecap="round" />-->
                <!--</svg>-->

                <!-- stats card -->
                <!--<div class="stats">-->
                <!--  <div class="text-center">-->
                <!--    <div class="num">256</div>-->
                <!--    <div class="cap">Total Client</div>-->
                <!--  </div>-->
                <!--  <div class="text-center">-->
                <!--    <div class="num">$256k</div>-->
                <!--    <div class="cap">Total Revenue</div>-->
                <!--  </div>-->
                <!--  <div class="text-center">-->
                <!--    <div class="num">200</div>-->
                <!--    <div class="cap">Total Review</div>-->
                <!--  </div>-->
                <!--</div>-->
                <img class="tm" src="{{ asset('assets/images/tm.webp') }}">
              </div>
            </div>
            <!-- /RIGHT -->
          </div>
        </div>
      </section>
    </div>
  </div>
  
<section class="fc-wrap px-4 px-lg-0">
  <div class="container fc-inner">
    <h2 class="fc-title">Why Choose Right Trademark?</h2>
    <p class="fc-sub">
    Choosing the right trademark ensures your brand stands out, stays legally protected, and builds long-term trust with your customers. It gives you exclusive ownership while preventing misuse by others.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">5000+ clients served</h3>
          <p class="fc-p">Proudly serving 5000+ clients worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Assistance</h3>
          <p class="fc-p">Expert Assistance to protect and grow your brand.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Growth Partner</h3>
          <p class="fc-p">Protect. Trust. Expand — with your Growth Partner.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  
 <section class="ip-sec px-4 px-lg-0 ">
  <div class="container">
    <div class="row align-items-start g-4 g-lg-5">
      <!-- LEFT -->
      <div class="col-lg-5">

        <h2 class="ip-headline mt-3">
          About 
          <span class="ip-accent">Trademark Search </span>
        </h2>

       <p class="ip-sub mt-3">
  <a href="https://right-trademark.com/trademark-search"style="color: #000;text-decoration: none;font-weight: 600;">A Trademark Search UAE</a> is the very first and most crucial step in protecting your brand identity. It allows you to carefully verify whether your proposed brand name, logo, slogan, or design is already registered or closely similar to an existing trademark. By conducting a thorough search before filing, you can avoid costly rejection, unwanted legal disputes, and unnecessary expenses. A professional search gives you confidence, ensures compliance with regulations, and provides a clear pathway for smooth registration while securing the long-term growth and success of your business.
</p>

             <div class="mt-3">
                <button class="whatapp" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.webp') }}" alt="foot-girl"> WhatsApp Now</button>
                </div>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">TRADEMARK REGISTRATION</div>
              <div class="ip-item-desc">Secure legal protection for your<br/>brand name, logo, or slogan.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">TRADEMARK ASSIGNMENT</div>
              <div class="ip-item-desc">Legally transfer ownership of a<br/>registered trademark to another</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">INTERNATIONAL TRADEMARK</div>
              <div class="ip-item-desc">Expand your brand's legal<br/>protection beyond borders.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-patch-check"></i></span>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT COPY + CTA -->
     
    </div>
  </div>
</section>



 
    

 
      


<div class="accordion  px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 26px;" class="text-center ouraccount">Types of Trademark Searches</p>
    <div class="accordion-item  ">
        <p class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <p style="font-size: 20px; font-weight: 600;"> Search for identical trademarks:</p>
        </button>
        </p>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px ;">Distinguishes imprints or gadgets that
            are outwardly or phonetically indistinguishable</div>
        </div>
    </div>
    <div class="accordion-item mt-4">
        <p class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" style="background-color: pink;" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <p style="font-size: 20px; font-weight: 600;">Search for a trademark with the opinion:</p>
            </button>
        </p>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px ;">includes a recommendation from an
            attorney on the results of a similar or identical trademark search based on their evaluation of the previously
            identified marks</div>
        </div>
    </div>
    <div class="accordion-item mt-4 ">
        <p class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <p style="font-size: 20px; font-weight: 600;">Index search:</p>
        </button>
        </p>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px ;">identifies businesses with names that
            are similar or identical to the search terms.</div>
        </div>
    </div>

    <div class="accordion-item mt-4 ">
        <p class="accordion-header" id="flush-headingThre">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
            <p style="font-size: 20px; font-weight: 600;">Being used confirmation search:</p>
        </button>
        </p>
        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px ;">Looks at whether an outsider with
            earlier privileges is utilizing its brand name freedoms accurately, which might give grounds to challenge an
            enrollment</div>
        </div>
    </div>

    <div class="accordion-item mt-4 ">
        <p class="accordion-header" id="flush-headingThre">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseThree">
            <p style="font-size: 20px; font-weight: 600;">Search for trade names:</p>
        </button>
        </p>
        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body " style="line-height: 29px; font-size:16px ;">Identifies businesses with names that
            are identical or similar to the search terms to identify trade name rights that may be in opposition to your
            desired trademark.</div>
        </div>
    </div>
</div>

<!-- product section  -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
        <div class="product">
            <p style="font-size: 26px; font-weight: 600;" class="text-center">How It Works</p>
            <div class="row mt-4 justify-content-center gap-5">
                <div class="card col-lg-3">
                    <p class="p-3">
                        Step 1: Enter your brand name or logo.
                    </p>
                </div>
                <div class="card col-lg-3">
                    <p class="p-3">
                     Step 2: We scan trademark databases. </p>
                </div>
                <div class="card col-lg-3">
                    <p class="p-3">
                      Step 3: Get instant report with results..
                    </p>
                </div>
            </div>
        </div>
  </div>
</section>

<div class="services-resources pt-0">
    @include('Layouts.indexheader')
</div>
@include('Layouts.footer')




