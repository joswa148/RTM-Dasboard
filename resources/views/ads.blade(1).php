@include('Layouts.app')

<!-- HERO (red frame + content) -->
<div class="container my-3 my-lg-4" style="margin-bottom:0px">
  <div class="hero-frame">
    <section class="hero">
      <div class="container">
        <div class="row align-items-center">
          <!-- LEFT -->
          <div class="col-lg-6">
            <span class="badge-soft">
              <i class="bi bi-shield-check"></i> Ads & Campaign Designs Made Easy
            </span>

            <h1>Ads & Campaign Designs</h1>

            <p class="lead">
              Elevate your brand with creative ads and campaign designs that capture attention, drive engagement, and boost conversions across all marketing channels.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Eye-catching visuals for social media, email, and display ads.</li>
              <li><i class="bi bi-check2-circle"></i> Strategically designed campaigns to maximize ROI.</li>
            </ul>

            <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('public/assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
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
                <img class="tm" src="{{ asset('public/assets/images/tech.jpg') }}">
              </div>
            </div>
          <!-- /RIGHT -->
        </div>
      </div>
    </section>
  </div>
</div>

<section class="fc-wrap">
  <div class="container fc-inner">
    <h2 class="fc-title">Why Choose Our Ads & Campaign Designs</h2>
    <p class="fc-sub">
      Our designs not only look great but are strategically crafted to increase engagement, enhance brand visibility, and drive measurable results for your campaigns.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">850+ Campaigns Delivered</h3>
          <p class="fc-p">Successfully executed campaigns across digital, print, and social media channels.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Creative Expertise</h3>
          <p class="fc-p">Expert designers and strategists crafting campaigns tailored to your goals.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">ROI-Focused Designs</h3>
          <p class="fc-p">Campaigns designed to maximize reach, engagement, and conversions effectively.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ip-sec py-5">
  <div class="container">
    <div class="row align-items-start g-4 g-lg-5">
      <!-- LEFT -->
      <div class="col-lg-5">
        <h2 class="ip-headline mt-3">
          Benefits of 
          <span class="ip-accent">Ads & Campaign Designs</span>
        </h2>
<p class="ip-sub mt-3">
  With our professional ad and campaign designs, your brand gets visually compelling, memorable, and impactful content that truly resonates with your audience. We focus on creative storytelling, consistent branding, engaging visuals, strategic messaging, targeted placement, multi-platform optimization, and data-driven performance analysis to make every campaign highly effective, increase audience engagement, foster brand loyalty, expand brand reach, and drive measurable results.
</p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('public/assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">High Engagement Creatives</div>
              <div class="ip-item-desc">Designs that grab attention and encourage clicks, shares, and interactions.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Platform Optimized</div>
              <div class="ip-item-desc">Ads designed for social media, search engines, display networks, and email campaigns.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Consistent Branding</div>
              <div class="ip-item-desc">Ensures all campaigns align with your brand identity for recognition and trust.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-patch-check"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container">
  <div class="row mt-2">
    <div class="col-lg-6">
      <img src="public/assets/images/whytradeimg" class="w-100" height="255px"
        alt="Why Choose Ads & Campaign Designs" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Ads & Campaign Designs?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Boost brand visibility and awareness</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Increase audience engagement and leads</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Visually compelling campaigns for all platforms</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistent branding across campaigns</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Support marketing and growth strategies</p>
    </div>
  </div>
</div>

<div class="accordion px-4 mt-4 px-lg-5 mt-lg-3" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center">Ads & Campaign Design Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: #ffd699;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Social Media Ad Design</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates visually striking ads optimized for social media platforms to increase clicks, engagement, and conversions.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: #ffd699;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Google & Display Ads</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs high-performing search, display, and banner ads that drive traffic, leads, and brand awareness across the web.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: #ffd699;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Campaign Creative & Messaging</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Develops engaging creative concepts, copy, and messaging for campaigns to effectively communicate brand value and offers.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: #ffd699;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Multichannel Campaign Design</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs campaigns for multiple channels including social media, email, search engines, and display networks to maximize reach.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: #ffd699;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Performance & Optimization</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Monitors campaign performance, analyzes results, and optimizes creative and targeting strategies to maximize ROI.
      </div>
    </div>
  </div>
</div>

<!-- Ads & Campaign Guidance Section -->
<section class="brand-pr px-4 mt-3 px-lg-5 mt-lg-3 mb-4">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Create High-Impact Ads & Campaigns?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Design visually appealing ads with strong messaging to capture attention and drive engagement.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Plan multichannel campaigns that reach your audience across social, search, display, and email platforms.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Continuously monitor performance and optimize campaigns to achieve higher conversions and ROI.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="services-resources">
    @include('Layouts.indexheader')
</div>
@include('Layouts.footer')
