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
              <i class="bi bi-shield-check"></i> Stunning Social Media Creatives
            </span>

            <h1>Social Media Creatives</h1>

            <p class="lead">
              Our Social Media Creatives help your brand stand out online with eye-catching visuals, engaging content, and designs that resonate with your audience.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Visually striking posts, stories, and ads.</li>
              <li><i class="bi bi-check2-circle"></i> Optimized for engagement and conversions across platforms.</li>
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
    <h2 class="fc-title">Why Choose Our Social Media Creatives</h2>
    <p class="fc-sub">
      High-quality social media creatives capture attention, boost engagement, and strengthen brand recognition across platforms. We combine design, storytelling, and strategy to deliver measurable results.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">1200+ Creative Posts</h3>
          <p class="fc-p">Crafting thousands of posts, stories, and ads that engage audiences worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Designers</h3>
          <p class="fc-p">Professional designers with deep knowledge of trends, aesthetics, and platform best practices.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Brand Growth Partner</h3>
          <p class="fc-p">We help brands grow online with creative content that drives results and builds trust.</p>
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
          <span class="ip-accent">Social Media Creatives</span>
        </h2>

<p class="ip-sub mt-3">
  Engaging social media creatives help your brand communicate effectively, reach a wider audience, and increase conversions. With attention-grabbing visuals, consistent design, compelling storytelling, targeted messaging, interactive content, platform-specific strategies, and data-driven optimization, we ensure your brand stands out in the crowded social media landscape, builds stronger audience engagement, fosters brand loyalty, amplifies reach, strengthens brand authority, and drives measurable results across platforms.
</p>



        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">High Engagement Designs</div>
              <div class="ip-item-desc">Content crafted to capture attention, boost likes, shares, and comments across social platforms.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Platform Optimized</div>
              <div class="ip-item-desc">Designs tailored for Instagram, Facebook, LinkedIn, and other platforms for maximum impact.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Brand Consistency</div>
              <div class="ip-item-desc">Ensures all posts, ads, and visuals reflect your brand’s identity and messaging.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-patch-check"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 <section class="px-4 px-lg-0">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
        alt="Why Choose Social Media Creatives" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Social Media Creatives?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Engaging visuals that capture attention</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimized for all social platforms</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Boosts brand awareness and engagement</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistent branding across campaigns</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Supports marketing and growth strategies</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Social Media Creative Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: #ffcccb;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Graphic Design & Visuals</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates eye-catching graphics, banners, and visuals optimized for social media platforms to capture audience attention.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: #ffcccb;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Video & Animation Content</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Produces engaging videos, motion graphics, and animations to increase reach, engagement, and social media virality.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: #ffcccb;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Content & Campaign Design</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs creative campaigns, carousel posts, infographics, and stories to communicate your brand message effectively.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: #ffcccb;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Brand Consistency & Templates</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates reusable templates and visual guidelines to maintain a consistent look and feel across all social media channels.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: #ffcccb;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Performance & Analytics Insights</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Monitors engagement, reach, and performance metrics to refine creative strategies and maximize social media impact.
      </div>
    </div>
  </div>
</div>

<!-- Social Media Creative Guidance Section -->
<section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Boost Your Social Media Presence?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Create visually appealing graphics and videos that capture attention and align with your brand identity.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Design consistent templates and campaign content to maintain a professional and recognizable presence.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Analyze performance data to optimize creatives and ensure maximum engagement and reach on social platforms.
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





