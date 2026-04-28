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
              <i class="bi bi-shield-check"></i> Smart Factory Solutions Made Easy
            </span>

            <h1>Smart Factories</h1>

            <p class="lead">
              Transform your manufacturing operations with smart factories—integrating automation, IoT, and AI to increase efficiency, quality, and productivity.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Optimize production with real-time data and intelligent automation.</li>
              <li><i class="bi bi-check2-circle"></i> Enhance quality, reduce downtime, and improve overall efficiency.</li>
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
                <img class="tm" src="{{ asset('assets/images/tech.jpg') }}">
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
    <h2 class="fc-title">Why Choose Smart Factory Solutions</h2>
    <p class="fc-sub">
      Implementing smart factory technologies enhances production efficiency, reduces errors, and enables predictive maintenance. We help manufacturers integrate automation, IoT, and AI for a connected, intelligent production environment.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">500+ Factories Served</h3>
          <p class="fc-p">Helping over 500 factories worldwide transition to smart operations.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Assistance</h3>
          <p class="fc-p">Professional guidance for implementing smart technologies in manufacturing.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted Growth Partner</h3>
          <p class="fc-p">Boosting productivity, safety, and innovation with smart factory solutions.</p>
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
          Benefits of <span class="ip-accent">Smart Factories</span>
        </h2>
<p class="ip-sub mt-3">
  Smart factories use automation, IoT, robotics, and AI to create highly efficient, safe, and high-quality manufacturing environments. They significantly reduce downtime, optimize resources, enable predictive analytics, and allow real-time monitoring, quick anomaly detection, and proactive maintenance. By improving energy efficiency, minimizing waste, and enhancing product consistency, they help manufacturers quickly adapt, innovate, and stay competitive, sustainable, and technologically advanced.
</p>







        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Optimized Production</div>
              <div class="ip-item-desc">Real-time monitoring and automation streamline production for maximum efficiency.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Enhanced Quality Control</div>
              <div class="ip-item-desc">Automated systems ensure consistent, high-quality output and reduce errors.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Predictive Analytics</div>
              <div class="ip-item-desc">AI and IoT enable predictive maintenance, reducing downtime and costs.</div>
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
        alt="Why Choose Smart Factories"
        style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;"> Smart Factory Benefits</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimized production workflows</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduced operational costs</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhanced product quality</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Real-time monitoring & analytics</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Safer, smarter work environment</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Smart Factory Solutions</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightgoldenrodyellow;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Connected Production Lines</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Integrates machines and equipment to communicate in real-time, enabling seamless monitoring, control, and optimization of production processes.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightgoldenrodyellow;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Industrial IoT & Sensors</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Uses IoT devices and sensors to collect real-time data on machine performance, energy usage, and production metrics for smarter decision-making.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightgoldenrodyellow;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Automated Quality Control</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Implements automated inspection systems to detect defects, monitor product quality, and ensure consistent manufacturing standards.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightgoldenrodyellow;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Predictive Maintenance</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Monitors equipment health and performance to predict potential failures, reduce downtime, and optimize maintenance schedules.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightgoldenrodyellow;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Smart Supply Chain Management</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Optimizes procurement, inventory, and logistics using automation and real-time analytics to enhance efficiency and reduce operational costs.
      </div>
    </div>
  </div>
</div>

<!-- Smart Factory Guidance Section -->
<section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Implement Smart Factory Solutions?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Integrate IoT devices and connected machines for real-time monitoring of production processes.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Use predictive maintenance and automated quality control to minimize downtime and ensure consistent product quality.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Optimize supply chain and production workflows through smart analytics and automated systems.
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







