
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            @font-face {
      font-family: "bootstrap-icons";
      src: url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/fonts/bootstrap-icons.woff2") format("woff2"),
           url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/fonts/bootstrap-icons.woff") format("woff");
      font-display: swap;
    }
    </style>
    <link rel="preload" as="image" href="{{ asset('assets/images/Frame-bg.webp') }}" fetchpriority="high">
    <meta name="Robots" content="INDEX,FOLLOW">
    
    
    
    <!-- Meta Pixel Code -->
<script>
function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '942338488748092');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=942338488748092&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WN8B2NL');</script>



<script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '229514832ae7b8be67458a063b8613cc148e12b7', { region: 'eu' });
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="{{ $metaDescription ?? '' }}">
<meta name="keywords" content="{{ $metaKeyWord ?? '' }}">
<link rel="canonical" href="{{ $canonical ?? '' }}">

<title>{{ $pageTitle ?? 'Home' }}</title>

@php
    $rtmVersion = time();
@endphp

<!-- ✅ Preconnect (Fonts speed) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- ✅ Google Fonts (Critical for layout) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- ✅ Core CSS (Must be render-blocking to prevent FOUC) -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}?v={{ $rtmVersion }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ $rtmVersion }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<!-- ✅ Favicon -->
<link rel="icon" href="{{ asset('assets/images/favicon.webp') }}">

<!-- ✅ Tracker -->
<script
    defer
    src="https://ftehcojhebcsmxvmzpar.supabase.co/functions/v1/tracker-script"
    data-endpoint="https://ftehcojhebcsmxvmzpar.supabase.co/functions/v1/visitor-track">
</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WN8B2NL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
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
                            <li> <a href="trademark-search"> Trademark Search</a></li>
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
   
        <!--<li class="dropdown position-relative">-->
        <!--    <a href="#" class=" dropdown-toggle text-decoration-none text-dark" id="dropdownMenu">Trademark Services</a>-->
        <!--    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">-->
        <!--      <li><a class="dropdown-item"  href="search">Trademark Search</a></li>-->
        <!--      <li><a class="dropdown-item"  href="register">Trademark Registration</a></li>-->
        <!--      <li><a class="dropdown-item"  href="watch">Trademark Watch</a></li>-->
        <!--      <li><a class="dropdown-item"  href="renewal">Trademark Renewal</a></li>-->
        <!--      <li><a class="dropdown-item"  href="trademark">International Trademark</a>-->
        <!--      </li>-->
        <!--    </ul>-->
        <!--  </li>-->
               
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

    <!-- Contact info -->
    <!--<hr>-->
    <!--<div class="d-flex align-items-center mb-2">-->
    <!--  <i class="bi bi-telephone me-2"></i>-->
    <!--  <a href="tel:+910000000000" class="text-decoration-none">+91 00000 00000</a>-->
    <!--</div>-->
    <!--<div class="d-flex align-items-center">-->
    <!--  <i class="bi bi-envelope me-2"></i>-->
    <!--  <a href="mailto:info@example.com" class="text-decoration-none">info@example.com</a>-->
    <!--</div>-->
  </div>
</div>
</div>

<script>
  // 🔁 Change your number & message here
    let whatsappNumber = "+971 56 251 7290"; // Add country code without "+"
    let defaultMessage = "Hello Right Trademark, We are Looking for Trademark Registration.";

    function openWhatsApp() {
      let encodedMessage = encodeURIComponent(defaultMessage);
      let url = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent)
        ? "whatsapp://send?phone=" + whatsappNumber + "&text=" + encodedMessage
        : "https://web.whatsapp.com/send?phone=" + whatsappNumber + "&text=" + encodedMessage;

      window.open(url, "_blank");
    }
    
</script>

<script>
    
</script>






