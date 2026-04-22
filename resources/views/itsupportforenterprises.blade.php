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
              <i class="bi bi-shield-check"></i> IT Support Made Easy
            </span>

            <h1>IT Support for Enterprises</h1>

            <p class="lead">
              Reliable IT Support for Enterprises ensures seamless operations, faster issue resolution, and enhanced productivity—keeping your business running smoothly.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> 24/7 IT support for uninterrupted operations.</li>
              <li><i class="bi bi-check2-circle"></i> Expert enterprise-level solutions for networks, servers, and systems.</li>
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
    <h2 class="fc-title">Why Choose Right IT Support</h2>
    <p class="fc-sub">
      Choosing the right IT support ensures your enterprise systems are secure, optimized, and running efficiently. Reduce downtime, improve productivity, and safeguard critical business data.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">5000+ clients served</h3>
          <p class="fc-p">Proudly supporting 5000+ enterprises worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert IT Assistance</h3>
          <p class="fc-p">Enterprise IT experts providing fast solutions and ongoing support.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Reliable Growth Partner</h3>
          <p class="fc-p">Secure, efficient, and scalable IT systems to support your enterprise growth.</p>
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
          Benefits of <span class="ip-accent">Enterprise IT Support</span>
        </h2>
<p class="ip-sub mt-3">
  Enterprise IT support provides continuous monitoring, expert troubleshooting, and system optimization. From network management to cybersecurity and cloud solutions, your IT environment is managed efficiently, minimizing downtime and maximizing performance. Additionally, our team offers proactive maintenance, strategic guidance, and scalable solutions, ensuring your IT infrastructure evolves with your business needs, supports growth, and remains secure in an ever-changing technological landscape.
</p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">24/7 System Monitoring</div>
              <div class="ip-item-desc">Continuous monitoring ensures all enterprise systems run smoothly without interruptions.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Cybersecurity & Data Protection</div>
              <div class="ip-item-desc">Protect sensitive business data with robust cybersecurity and proactive threat management.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Network & Cloud Optimization</div>
              <div class="ip-item-desc">Ensure fast, reliable, and scalable IT infrastructure for seamless operations and growth.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-patch-check"></i></span>
            </div>
          </div>
        </div>
      </div>
      <!-- RIGHT COPY + CTA -->
    </div>
  </div>
</section>

  <section class="px-4 px-lg-0">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
        alt="Why Choose Enterprise IT Support"
        style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;"> Enterprise IT Support Benefits</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>24/7 monitoring & support</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Secure data and systems</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimized networks & servers</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Cloud & enterprise software integration</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Fast issue resolution and IT guidance</p>
    </div>
  </div>
</div>

<div class="accordion  px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Enterprise IT Support Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Network & Infrastructure Support</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ensures enterprise networks and IT infrastructure are stable, secure, and optimized for high performance and scalability.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Cloud & Server Management</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Manages cloud platforms and enterprise servers, including setup, monitoring, updates, backups, and disaster recovery solutions.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Endpoint & Device Support</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides support for desktops, laptops, mobile devices, and other endpoints to ensure smooth daily operations and quick troubleshooting.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">IT Security & Compliance</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Monitors security threats, implements protective measures, and ensures compliance with industry standards and regulations.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Helpdesk & Technical Support</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides 24/7 assistance for IT issues, troubleshooting, software problems, and user support to keep enterprise operations running smoothly.
      </div>
    </div>
  </div>
</div>

<!-- Enterprise IT Support Guidance Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Optimize IT Support for Enterprises?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Assess your enterprise IT environment to identify bottlenecks, risks, and areas for improvement.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Implement proactive monitoring, automation, and best practices to ensure efficiency and reliability.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Provide ongoing support, updates, and training to maintain productivity and reduce downtime.
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





