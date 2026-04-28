@include('layouts.app')

<!-- HERO (red frame + content) -->
  <div class="container my-3 my-lg-4" style="margin-bottom:0px">
  <div class="hero-frame">
    <section class="hero">
      <div class="container">
        <div class="row align-items-center">
          <!-- LEFT -->
          <div class="col-lg-6">
            <span class="badge-soft">
              <i class="bi bi-shield-check"></i> Build a Strong Corporate Identity
            </span>

            <h1>Corporate Identity</h1>

            <p class="lead">
              Establish a distinctive corporate identity that reflects your brand values, communicates professionalism, and builds recognition in the market.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Develop a cohesive visual and strategic identity for your company.</li>
              <li><i class="bi bi-check2-circle"></i> Enhance recognition and credibility across all touchpoints.</li>
            </ul>

            <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
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
                <img class="tm" src="{{ asset('assets/images/bd.jpg') }}">
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
    <h2 class="fc-title">Why Choose Our Corporate Identity Services</h2>
    <p class="fc-sub">
      A strong corporate identity ensures your business is memorable, builds trust with clients, and communicates your brand’s professionalism consistently.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">350+ Projects Completed</h3>
          <p class="fc-p">Successfully creating corporate identities for 350+ clients worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Design & Strategy</h3>
          <p class="fc-p">Combining creativity and strategy to craft professional corporate identities.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted by Clients</h3>
          <p class="fc-p">Building credibility and recognition through consistent corporate branding.</p>
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
          Benefits of 
          <span class="ip-accent">Corporate Identity</span>
        </h2>

<p class="ip-sub mt-3">
  A strong corporate identity communicates your company’s professionalism, builds client trust, and makes your brand memorable, distinctive, and highly impactful. It provides a cohesive visual system, clearly defines brand tone, messaging, and core values, strengthens recognition and consistency across all marketing channels, enhances brand credibility, reinforces company culture, and helps create a lasting positive impression on clients, partners, and key stakeholders.
</p>




        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Consistent Visual Identity</div>
              <div class="ip-item-desc">Ensure all branding materials reflect your unique style and professionalism.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Stronger Brand Recognition</div>
              <div class="ip-item-desc">Build awareness and memorability that sets your company apart from competitors.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Professional Market Presence</div>
              <div class="ip-item-desc">Enhance credibility with clients, partners, and stakeholders through cohesive identity.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-patch-check"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--</div>-->

  <section class="px-4 px-lg-0">  
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="assets/images/whytradeimg" class="w-100" height="255px"
        alt="Why Choose Corporate Identity" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Corporate Identity?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Clear visual and brand identity</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhanced brand recognition</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Professional and trustworthy image</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistent communication across platforms</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Long-term brand value creation</p>
    </div>
  </div>
</div>
</section>



<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center  ouraccount">Corporate Identity Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Logo & Visual Identity Design</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates unique logos, color schemes, typography, and visual elements that reflect your company’s values and personality.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Brand Guidelines & Standards</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Develops comprehensive guidelines to maintain consistency in logo usage, typography, colors, and overall corporate presentation.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Corporate Stationery & Collateral</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs business cards, letterheads, envelopes, brochures, and other stationery items that reflect a unified corporate identity.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Digital Identity & Online Presence</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ensures consistent branding across websites, social media, email signatures, and digital platforms to reinforce corporate image online.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Brand Audit & Identity Enhancement</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Reviews existing brand elements and provides recommendations for updating, modernizing, or strengthening your corporate identity.
      </div>
    </div>
  </div>
</div>

<!-- Corporate Identity Guidance Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Build a Strong Corporate Identity?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Design a cohesive visual identity including logos, colors, and typography that represents your brand values.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Develop comprehensive brand guidelines to ensure consistency across all corporate and digital platforms.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Continuously review and enhance your brand elements to stay relevant and strengthen recognition in the market.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="services-resources">
    @include('layouts.indexheader')
</div>
@include('layouts.footer')





