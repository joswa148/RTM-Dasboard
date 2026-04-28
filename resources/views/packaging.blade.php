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
              <i class="bi bi-shield-check"></i> Packaging & Product Design Made Easy
            </span>

            <h1>Packaging & Product Design</h1>

            <p class="lead">
              Enhance your product appeal with professional packaging and innovative product designs that attract customers, reflect your brand, and drive sales.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Creative packaging that stands out on shelves and online stores.</li>
              <li><i class="bi bi-check2-circle"></i> Product designs optimized for functionality and aesthetics.</li>
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
    <h2 class="fc-title">Why Choose Our Packaging & Product Design</h2>
    <p class="fc-sub">
      Our designs not only make products visually appealing but also enhance usability and brand perception, helping your products stand out and connect with customers effectively.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">1200+ Projects Completed</h3>
          <p class="fc-p">Successfully designed packaging and products for multiple industries.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Creative Expertise</h3>
          <p class="fc-p">Expert designers creating visually stunning and functional packaging and product designs.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Brand Impact</h3>
          <p class="fc-p">Our designs strengthen your brand identity and customer trust.</p>
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
          <span class="ip-accent">Packaging & Product Design</span>
        </h2>

 <p class="ip-sub mt-3">
  Professional packaging and product design increase shelf appeal, attract customer attention, and communicate your brand’s story effectively. We combine creativity with market research, consumer insights, trend analysis, and competitive benchmarking to deliver designs that not only sell but also leave a lasting, memorable impression, enhance brand recognition, strengthen customer loyalty, and convey quality, trust, and brand values at every touchpoint.
</p>



        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Eye-Catching Packaging</div>
              <div class="ip-item-desc">Designs that stand out on shelves and online, attracting customers instantly.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Functional Product Design</div>
              <div class="ip-item-desc">Enhances usability, ergonomics, and product experience for customers.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Brand Consistency</div>
              <div class="ip-item-desc">Ensures your packaging and products align with brand identity and messaging.</div>
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
    <img src="assets/images/traderegister2.webp" class="w-100" height="275px"
        alt="Why Choose Packaging & Product Design" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Packaging & Product Design?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Attracts customer attention instantly</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhances product usability and experience</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Strengthens brand identity</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Supports marketing and sales strategies</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Builds customer loyalty and trust</p>
    </div>
  </div>
</div>
</section>



<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Packaging & Product Design Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: #ffe0b3;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Product Packaging Design</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates attractive and functional packaging that reflects your brand identity, enhances shelf appeal, and protects the product.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: #ffe0b3;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Brand-Aligned Product Design</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs products that align with your brand vision, ensuring consistency, usability, and visual appeal across your offerings.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: #ffe0b3;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Structural & Material Design</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Selects suitable materials and creates innovative structures to enhance product functionality, durability, and sustainability.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: #ffe0b3;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Prototyping & Mockups</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Develops prototypes and mockups to visualize designs, test usability, and refine packaging and product concepts before production.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: #ffe0b3;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Sustainability & Compliance</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ensures packaging and product designs comply with regulations and sustainability standards while reducing environmental impact.
      </div>
    </div>
  </div>
</div>

<!-- Packaging & Product Design Guidance Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Create Impactful Packaging & Products?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Design packaging that is visually appealing, functional, and aligned with your brand identity.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Develop innovative product designs and structures that enhance usability and stand out in the market.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Prototype, test, and optimize packaging and product concepts to ensure quality, compliance, and customer satisfaction.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="services-resources pt-0">
    @include('layouts.indexheader')
</div>
@include('layouts.footer')





