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
              <i class="bi bi-shield-check"></i> Network Solutions Made Easy
            </span>

            <h1>Network Design & Consulting</h1>

            <p class="lead">
              Our Network Design & Consulting services ensure your business has a secure, scalable, and high-performance network infrastructure tailored to your needs.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Secure and optimized network architecture for business growth.</li>
              <li><i class="bi bi-check2-circle"></i> Expert consulting to enhance connectivity and efficiency.</li>
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
    <h2 class="fc-title">Why Choose Our Network Consulting</h2>
    <p class="fc-sub">
      Partnering with us ensures your network is secure, scalable, and optimized for your business needs. We help reduce downtime, improve performance, and future-proof your infrastructure.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">150+ Clients Served</h3>
          <p class="fc-p">Delivering top-notch network solutions for businesses worldwide.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Consultants</h3>
          <p class="fc-p">Certified experts designing networks for maximum performance.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Reliable & Secure</h3>
          <p class="fc-p">Ensuring your network remains secure, resilient, and future-ready.</p>
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
          <span class="ip-accent">Network Design & Consulting</span>
        </h2>

      <p class="ip-sub mt-3">
  Our network consulting ensures efficient connectivity, robust security, and scalable infrastructure. We provide tailored solutions to optimize your business operations and reduce IT costs while supporting future growth and technological advancements. Additionally, we offer continuous monitoring, proactive troubleshooting, and strategic planning, ensuring your network remains reliable, secure, and capable of adapting to evolving business needs and emerging technologies.
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
              <div class="ip-item-title">Secure Network Architecture</div>
              <div class="ip-item-desc">We design networks that are resilient, secure, and optimized for performance.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Scalable & Future-Ready</div>
              <div class="ip-item-desc">Our designs allow your network to grow with your business seamlessly.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Expert Guidance & Support</div>
              <div class="ip-item-desc">Certified consultants provide end-to-end guidance for your network projects.</div>
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
   <img src="assets/images/traderegister2.webp" class="w-100" height="237px"alt="Why Choose Network Consulting" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Network Design & Consulting?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Secure, high-performance networks</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Scalable solutions for growing businesses</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Expert guidance from certified consultants</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduced downtime & optimized performance</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Cost-effective network strategies</p>
    </div>
  </div>
</div>
</section>


<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Network Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
        aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Network Design</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Custom design of secure, scalable, and efficient network architectures.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
        aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Network Implementation</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Deployment of hardware, software, and protocols for optimal network performance.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
        aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Network Consulting</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Expert advice for improving performance, security, and scalability of your network.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
        aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Network Support</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ongoing maintenance, monitoring, and troubleshooting to keep your network reliable.
      </div>
    </div>
  </div>
</div>

<!-- product section -->
<section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You with Network Projects</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            We assess your current infrastructure and suggest optimal network solutions.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We manage all implementation steps including hardware, software, and security setup.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We provide continuous support and optimization to ensure your network runs smoothly.
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





