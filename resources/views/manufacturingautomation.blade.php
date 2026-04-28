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
              <i class="bi bi-shield-check"></i> Manufacturing Automation Made Easy
            </span>

            <h1>Manufacturing Automation </h1>

            <p class="lead">
              Streamline your production processes with advanced automation solutions—reducing costs, increasing efficiency, and improving product quality.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Optimize production lines for maximum efficiency.</li>
              <li><i class="bi bi-check2-circle"></i> Integrate smart technologies for real-time monitoring and control.</li>
            </ul>

            <button class="whatapp mt-lg-2" onclick="openWhatsApp()" ><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
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
    <h2 class="fc-title">Why Choose Our Manufacturing Automation</h2>
    <p class="fc-sub">
      Implementing automation ensures consistent quality, reduces operational costs, and enhances productivity. We help manufacturers integrate advanced technologies that drive growth and innovation.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">500+ Manufacturing Plants Served</h3>
          <p class="fc-p">Supporting over 500 manufacturing facilities worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Automation Assistance</h3>
          <p class="fc-p">Our experts implement intelligent automation solutions tailored to your needs.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted Growth Partner</h3>
          <p class="fc-p">Enhancing efficiency, safety, and scalability in manufacturing operations.</p>
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
          Benefits of <span class="ip-accent">Manufacturing Automation</span>
        </h2>

<p class="ip-sub mt-3">
  Manufacturing automation improves operational efficiency, reduces human error, and ensures consistent product quality. Our solutions integrate robotics, IoT devices, and AI-driven monitoring for seamless production processes, resulting in faster production cycles, optimized resource usage, and enhanced workplace safety. Additionally, real-time data analysis and predictive maintenance help minimize downtime, improve decision-making, and ensure continuous, high-quality output across all manufacturing operations.
</p>


        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Increased Production Efficiency</div>
              <div class="ip-item-desc">Automation streamlines workflows, reducing downtime and increasing output.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Enhanced Product Quality</div>
              <div class="ip-item-desc">Consistent and precise processes ensure high-quality products every time.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Data-Driven Insights</div>
              <div class="ip-item-desc">Real-time monitoring and analytics help optimize operations and reduce waste.</div>
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
        alt="Why Choose Manufacturing Automation"
        style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;"> Manufacturing Automation Benefits</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimized production processes</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduced operational costs</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Improved product quality</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Real-time monitoring & analytics</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Safer workplace environment</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Manufacturing Automation Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Robotic Process Automation (RPA)</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Automates repetitive production tasks, assembly lines, and material handling to reduce errors and improve efficiency.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Production Line Automation</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Streamlines assembly, packaging, and inspection processes using automated machinery and smart production lines.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Industrial IoT Integration</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Connects machines and devices to collect real-time data, monitor performance, and enable predictive maintenance.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Quality Control Automation</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Implements automated inspection, measurement, and defect detection systems to ensure consistent product quality.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightsteelblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Supply Chain & Inventory Automation</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Automates procurement, inventory tracking, and logistics processes to improve efficiency, reduce costs, and minimize delays.
      </div>
    </div>
  </div>
</div>

<!-- Manufacturing Automation Guidance Section -->
<section class="brand-pr px-4 mt-3 px-lg-5 mt-lg-3 mb-4">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Optimize Manufacturing Automation?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Evaluate current production processes and identify areas suitable for automation.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Integrate smart machinery, sensors, and IoT systems to streamline operations.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Continuously monitor and optimize automated processes to improve productivity and product quality.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

    

<!-- product section  -->



<div class="services-resources pt-0">
    @include('layouts.indexheader')
</div>
@include('layouts.footer')





