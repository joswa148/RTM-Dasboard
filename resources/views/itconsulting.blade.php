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
              <i class="bi bi-shield-check"></i> IT Consulting Made Easy
            </span>

            <h1>IT Consulting </h1>

            <p class="lead">
              Our IT consulting services help businesses leverage technology to improve efficiency, security, and innovation—guiding digital transformation for long-term success.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Strategic IT planning and system optimization.</li>
              <li><i class="bi bi-check2-circle"></i> Expert guidance for digital transformation projects.</li>
            </ul>

            <button class="whatapp mt-lg-2" onclick="openWhatsApp()">
              <img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now
            </button>
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
    <h2 class="fc-title">Why Choose Our IT Consulting</h2>
    <p class="fc-sub">
      Our IT consulting services ensure your business stays ahead with innovative technology solutions, robust infrastructure, and optimized processes. Gain expert guidance to streamline operations and achieve your goals efficiently.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">5000+ Projects Completed</h3>
          <p class="fc-p">Successfully delivered IT solutions across industries worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert IT Guidance</h3>
          <p class="fc-p">Specialized consulting to optimize systems, improve security, and drive innovation.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted Partner</h3>
          <p class="fc-p">Partner with us for reliable IT solutions that scale with your business needs.</p>
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
          <span class="ip-accent">IT Consulting</span>
        </h2>

<p class="ip-sub mt-3">
  IT consulting helps organizations leverage technology for improved efficiency, security, and innovation. We provide tailored strategies, infrastructure optimization, and project management support to drive digital transformation and achieve measurable business outcomes. Additionally, our experts offer technology roadmaps, risk assessments, and ongoing guidance, helping your organization adopt the right solutions, maximize ROI, maintain a competitive edge, and stay agile in today’s fast-changing digital landscape.
</p>



        <button class="whatapp mt-lg-2" onclick="openWhatsApp()">
          <img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now
        </button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Strategic IT Planning</div>
              <div class="ip-item-desc">Develop long-term IT strategies aligned with your business goals for maximum efficiency.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">System Optimization & Security</div>
              <div class="ip-item-desc">Enhance IT infrastructure, improve performance, and secure your systems from risks.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Project Implementation Support</div>
              <div class="ip-item-desc">Guidance on deploying IT solutions efficiently, ensuring smooth adoption and ROI.</div>
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
           alt="Why Choose IT Consulting"
           style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why IT Consulting?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Optimize IT systems for efficiency</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Improve cybersecurity and risk management</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Strategic IT planning for growth</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Support digital transformation initiatives</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Expert project implementation and guidance</p>
    </div>
  </div>
</div>
</section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of IT Consulting Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightgreen;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">IT Strategy Consulting</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Helps businesses align their IT strategy with overall business goals, ensuring technology investments drive growth and efficiency.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightgreen;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Digital Transformation Consulting</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Guides organizations in adopting modern technologies, improving workflows, and enhancing customer experiences through digital solutions.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightgreen;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Cloud & Infrastructure Consulting</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Helps design, deploy, and manage IT infrastructure and cloud solutions that are scalable, secure, and cost-efficient.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightgreen;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">IT Risk & Security Consulting</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Identifies vulnerabilities, implements security best practices, and ensures compliance to protect businesses from IT risks.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightgreen;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Software & Application Consulting</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides guidance on selecting, implementing, and optimizing software applications to meet business needs effectively.
      </div>
    </div>
  </div>
</div>

<!-- IT Consulting Guidance Section -->
 <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Enhance Your IT Strategy?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Assess your current IT infrastructure and identify areas for optimization and improvement.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Implement modern tools, cloud solutions, and security measures aligned with business goals.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Continuously monitor, maintain, and innovate to stay competitive in the fast-changing IT landscape.
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





