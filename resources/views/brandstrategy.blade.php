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
              <i class="bi bi-shield-check"></i> Build a Strong Brand Identity
            </span>

            <h1>Brand Strategy & Consulting</h1>

            <p class="lead">
              Our Brand Strategy & Consulting services help businesses define, position, and grow their brand effectively, ensuring long-term success in competitive markets.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Develop a cohesive brand strategy tailored to your business goals.</li>
              <li><i class="bi bi-check2-circle"></i> Strengthen market positioning and customer perception.</li>
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
    <h2 class="fc-title">Why Choose Our Brand Consulting</h2>
    <p class="fc-sub">
      Strategic brand consulting ensures your business stands out, connects with your audience, and achieves measurable growth while maintaining consistent brand identity.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">500+ Brands Served</h3>
          <p class="fc-p">Proudly consulting over 500 brands across industries worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Guidance</h3>
          <p class="fc-p">Experienced strategists helping you craft impactful brand journeys.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Sustainable Growth</h3>
          <p class="fc-p">Developing long-term strategies that strengthen brand trust and market presence.</p>
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
          <span class="ip-accent">Brand Strategy & Consulting</span>
        </h2>

<p class="ip-sub mt-3">
  Our services help businesses identify their unique value proposition, craft compelling and memorable brand messages, and strategically align marketing efforts with overall business goals. We focus on building a consistent, cohesive, and recognizable brand identity that resonates with your target audience, strengthens customer engagement, enhances brand loyalty, supports brand advocacy, drives long-term growth, improves market positioning, and ensures lasting business success.
</p>



        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Clear Brand Identity</div>
              <div class="ip-item-desc">Define your brand’s mission, vision, and personality for consistent messaging.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Strategic Positioning</div>
              <div class="ip-item-desc">Identify market opportunities and position your brand effectively against competitors.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Growth & Expansion</div>
              <div class="ip-item-desc">Implement strategies that drive awareness, engagement, and business growth.</div>
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
  <div class="row mt-2">
    <div class="col-lg-6">
      <img src="assets/images/traderegister2.webp" class="w-100" height="275px"
        alt="Why Choose Brand Strategy & Consulting" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Brand Strategy & Consulting?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Clarifies brand purpose and identity</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Strengthens market positioning</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Builds customer trust and loyalty</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Supports marketing and growth initiatives</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Drives measurable business results</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Brand Strategy Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Brand Audit & Analysis</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Evaluates your current brand positioning, strengths, weaknesses, and market perception to identify opportunities for growth.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Brand Positioning & Messaging</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Defines your unique value proposition, target audience, and key messages to create a strong and consistent brand identity.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Brand Architecture & Portfolio Strategy</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Organizes your products, services, and sub-brands to create a clear hierarchy and ensure coherent brand experiences.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Brand Communication Strategy</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Develops campaigns, content strategies, and messaging frameworks to engage your audience and strengthen brand recall.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Brand Performance & Analytics</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Monitors brand health through metrics, KPIs, and customer insights to refine strategies and maximize ROI on brand initiatives.
      </div>
    </div>
  </div>
</div>

<!-- Brand Strategy Guidance Section -->
<section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Build a Strong Brand?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Analyze your current brand positioning and market opportunities to identify strengths and gaps.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Define clear messaging, brand identity, and positioning to resonate with your target audience.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Continuously track brand performance and optimize strategies to enhance visibility, engagement, and loyalty.
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





