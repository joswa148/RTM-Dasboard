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
              <i class="bi bi-shield-check"></i> Network Security Simplified
            </span>

            <h1>Managed Network Services</h1>

            <p class="lead">
              Our Managed Network Services ensure secure, reliable, and scalable network solutions—allowing businesses to focus on growth without IT interruptions.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> 24/7 network monitoring and proactive issue resolution.</li>
              <li><i class="bi bi-check2-circle"></i> Optimized performance for seamless connectivity and business continuity.</li>
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
          </div>
          <!-- /RIGHT -->
        </div>
      </div>
    </section>
  </div>
</div>

<section class="fc-wrap px-4 px-lg-0">
  <div class="container fc-inner">
    <h2 class="fc-title">Why Choose Our Managed Network Services</h2>
    <p class="fc-sub">
      Our services ensure your network is always secure, efficient, and reliable. We help businesses prevent downtime, optimize connectivity, and maintain robust IT infrastructure.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">5000+ Networks Monitored</h3>
          <p class="fc-p">Ensuring smooth operations across global client networks.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert IT Assistance</h3>
          <p class="fc-p">Professional IT support for network setup, monitoring, and optimization.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Reliable Growth Partner</h3>
          <p class="fc-p">Secure, scalable networks that support your business growth.</p>
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
          <span class="ip-accent">Managed Network Services</span>
        </h2>

 <p class="ip-sub mt-3">
  Our Managed Network Services provide end-to-end IT network management, including monitoring, optimization, and security. We ensure your business network performs at its best, reducing downtime and maximizing productivity. From small businesses to large enterprises, our solutions are scalable, cost-effective, and backed by expert IT teams. Additionally, we offer proactive support, regular updates, and guidance to ensure your network evolves with your business needs and technological advancements.
</p>


        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">24/7 Network Monitoring</div>
              <div class="ip-item-desc">Continuous monitoring and rapid issue resolution to keep your network operational.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Enhanced Security & Compliance</div>
              <div class="ip-item-desc">Advanced security protocols and compliance standards to protect your data.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Optimized Performance</div>
              <div class="ip-item-desc">Ensure seamless connectivity and high-speed network performance for your business.</div>
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
           alt="Why Choose Managed Network Services"
           style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;"> Why Choose Managed Network Services?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>24/7 monitoring and proactive issue resolution</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimized performance for seamless connectivity</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Advanced security and compliance protection</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Scalable solutions for businesses of all sizes</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Cost-effective management of IT resources</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Managed Network Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
        aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Network Design & Implementation</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
         data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Planning and deploying secure, scalable, and efficient network infrastructures.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
        aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Network Security</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
         data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Protecting your network against unauthorized access, malware, and downtime.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
        aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Performance Optimization</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
         data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ensuring high-speed connectivity and reliable operations across your business network.
      </div>
    </div>
  </div>
</div>

<!-- product section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Support Your Network Operations</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            We assess your existing network and recommend scalable solutions.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We manage deployments, monitoring, and continuous performance optimization.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We provide security, compliance, and IT support to minimize risks and downtime.
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





