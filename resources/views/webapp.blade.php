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
              <i class="bi bi-shield-check"></i> Software Development Made Easy
            </span>

            <h1>Web & App Development</h1>

            <p class="lead">
              We create custom web and mobile applications that enhance user experience, automate processes, and scale with your business.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Custom web solutions tailored to your business.</li>
              <li><i class="bi bi-check2-circle"></i> Native & cross-platform mobile app development.</li>
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
    <h2 class="fc-title">Why Choose Our Development Services</h2>
    <p class="fc-sub">
      We deliver reliable, scalable, and secure web & mobile solutions that help businesses automate processes, reach users globally, and improve efficiency.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">350+ Projects Delivered</h3>
          <p class="fc-p">Successfully developed web & mobile solutions for various industries.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Team</h3>
          <p class="fc-p">Professional developers ensuring top-quality web & app solutions.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Reliable & Secure</h3>
          <p class="fc-p">Built with best practices for secure, robust, and scalable applications.</p>
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
          Benefits of <span class="ip-accent">Web & App Development</span>
        </h2>

<p class="ip-sub mt-3">
  Custom web & mobile applications help businesses streamline operations, improve customer engagement, and increase revenue. Our solutions are scalable, secure, and designed to grow with your business. They also integrate advanced features, provide intuitive user experiences, support seamless communication between teams and clients, and ensure efficient performance across all devices, keeping your business competitive and ready for growth.
</p>


        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Custom Web Development</div>
              <div class="ip-item-desc">Web applications tailored to your business requirements for optimal performance.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Mobile App Development</div>
              <div class="ip-item-desc">Engaging native and cross-platform mobile applications for iOS and Android.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Scalable & Secure</div>
              <div class="ip-item-desc">Applications designed for growth, performance, and robust security standards.</div>
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
       <img src="assets/images/traderegister2.webp" class="w-100" height="237px" alt="Why Choose Web & App Development" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Web & App Development?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Automate and streamline business processes</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhance user engagement & experience</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Scalable solutions for future growth</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reliable and secure applications</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Dedicated support throughout the software lifecycle</p>
    </div>
  </div>
</div>
</section>



<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Development Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
        aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Web Development</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Build responsive, scalable, and secure web applications tailored to your business.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
        aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Mobile App Development</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Develop native & cross-platform mobile applications for iOS and Android.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
        aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Enterprise Solutions</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Robust software for automating internal processes, improving productivity, and integrating business operations.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: pink;" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
        aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Cloud Solutions</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
      data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Cloud-based applications and platforms for storage, collaboration, and scalable computing.
      </div>
    </div>
  </div>
</div>

<!-- Product Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You in Development Projects?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            We consult and plan your web & mobile application requirements.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We handle end-to-end development, testing, and deployment processes.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            We provide post-launch support, maintenance, and feature enhancements.
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





