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
              <i class="bi bi-shield-check"></i> Marketing Materials Made Easy
            </span>

            <h1>Marketing Materials</h1>

            <p class="lead">
              Professional marketing materials help your brand communicate effectively, attract attention, and drive engagement across all channels.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Brochures, flyers, and catalogs that impress and inform.</li>
              <li><i class="bi bi-check2-circle"></i> Digital marketing assets optimized for online campaigns.</li>
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
    <h2 class="fc-title">Why Choose Our Marketing Materials</h2>
    <p class="fc-sub">
      Effective marketing materials help your brand communicate its message, build credibility, and engage your audience both online and offline.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">1500+ Projects Completed</h3>
          <p class="fc-p">Successfully created marketing assets for diverse industries.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Creative Expertise</h3>
          <p class="fc-p">Designs that communicate your brand message effectively and professionally.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Brand Consistency</h3>
          <p class="fc-p">Ensures all marketing materials align with your brand identity.</p>
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
          <span class="ip-accent">Marketing Materials</span>
        </h2>

<p class="ip-sub mt-3">
  High-quality marketing materials enhance your brand’s visibility, communicate key messages clearly, and create a lasting and memorable impression with your target audience. They help reinforce brand identity, convey professionalism, engage potential customers effectively across various channels, support marketing campaigns, strengthen overall brand credibility and trust, drive higher engagement, recognition, and customer loyalty, and ensure consistent brand messaging across all touchpoints.
</p>


        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Professional Design</div>
              <div class="ip-item-desc">Visually appealing designs that reflect your brand and engage customers.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Targeted Communication</div>
              <div class="ip-item-desc">Materials tailored to your audience to deliver clear and compelling messages.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Multi-Channel Ready</div>
              <div class="ip-item-desc">Optimized for print, digital campaigns, and social media use.</div>
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
  <div class="row mt-2">
    <div class="col-lg-6">
           <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
        alt="Why Choose Marketing Materials" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Marketing Materials?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Communicate your brand effectively</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhance customer engagement</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistency across all channels</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Professional presentation of products/services</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Support marketing campaigns and promotions</p>
    </div>
  </div>
</div>
</section>

<div class="accordion px-4 mt-4 px-lg-5 mt-lg-3 pt-0" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Marketing Materials Design Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: #d4f0fc;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Brochures & Flyers</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs visually engaging brochures and flyers that communicate key brand messages and attract potential customers.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: #d4f0fc;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Posters & Banners</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates eye-catching posters and banners for events, promotions, and campaigns to increase brand visibility.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: #d4f0fc;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Presentations & Pitch Decks</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs professional presentations and pitch decks that effectively convey ideas, brand value, and business proposals.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: #d4f0fc;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Catalogs & Product Sheets</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates detailed product catalogs and sheets that showcase offerings clearly, making it easy for customers to understand and choose.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: #d4f0fc;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Corporate Branding Materials</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs business cards, letterheads, envelopes, and other branded materials to maintain a consistent and professional corporate image.
      </div>
    </div>
  </div>
</div>

<!-- Marketing Materials Guidance Section -->
<section class="brand-pr px-4 mt-3 px-lg-5 mt-lg-3 mb-4">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Create Effective Marketing Materials?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Design visually appealing brochures, flyers, and posters that communicate your brand message clearly.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Create professional presentations, pitch decks, and catalogs to showcase your products and services effectively.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Ensure all corporate branding materials maintain consistency and strengthen your brand identity.
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





