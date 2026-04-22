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

            <h1>Software Development </h1>

            <p class="lead">
              We deliver tailored software solutions that automate processes, improve productivity, and drive digital transformation for businesses of all sizes.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Scalable and reliable software solutions.</li>
              <li><i class="bi bi-check2-circle"></i> End-to-end development from ideation to deployment.</li>
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
    <h2 class="fc-title">Why Choose Our Software Development</h2>
    <p class="fc-sub">
      We provide reliable software solutions tailored to your business needs. Secure, scalable, and future-ready software that ensures growth and efficiency.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person"></i></div>
          <h3 class="fc-h">350+ Projects Delivered</h3>
          <p class="fc-p">Successful software solutions across multiple industries.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Team</h3>
          <p class="fc-p">Professional developers ensuring top-quality software.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Reliable & Secure</h3>
          <p class="fc-p">Built with best practices, ensuring robust and secure software.</p>
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
          <span class="ip-accent">Software Development</span>
        </h2>

  <p class="ip-sub mt-3">
  Software development helps businesses automate tasks, improve efficiency, and scale easily. With modern technology stacks, cloud integration, and robust architecture, our software solutions support long-term business growth. They also enable better data management, enhance collaboration across teams, and provide scalable tools that adapt as your business expands, ensuring flexibility, reliability, and continuous innovation in your operations.
</p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <div class="ip-item">
              <div class="ip-item-title">Tailored Solutions</div>
              <div class="ip-item-desc">Software designed for your unique business needs and processes.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>

            <div class="ip-item">
              <div class="ip-item-title">Scalable & Future-Proof</div>
              <div class="ip-item-desc">Solutions that grow with your business and adapt to future needs.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <div class="ip-item">
              <div class="ip-item-title">End-to-End Development</div>
              <div class="ip-item-desc">From concept to deployment and support, we manage the complete software lifecycle.</div>
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
    <img src="assets/images/traderegister2.webp" class="w-100" height="237px"alt="Why Choose Software Development" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Software Development?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Automate and streamline business processes</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhance operational efficiency</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Scalable solutions for future growth</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reliable and secure software</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Dedicated support throughout software lifecycle</p>
    </div>
  </div>
</div>
</section>

<!-- Accordion Section -->
<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
    <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Software Development Solutions</p>

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
                Building responsive, scalable, and secure websites and web applications tailored to business needs.
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
                Creating engaging and intuitive mobile applications for iOS and Android platforms.
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
                <p style="font-size: 20px; font-weight: 600;">Cloud & SaaS Solutions</p>
            </button>
        </p>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body" style="line-height: 29px; font-size:16px;">
                Cloud-based platforms and SaaS applications for seamless access, collaboration, and scalability.
            </div>
        </div>
    </div>
</div>


<!-- product section  -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
        <div class="product">
            <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Protect Your Brand?</p>
            <div class="row mt-4 justify-content-center gap-5">
                <div class="card col-lg-3">
                    <p class="p-3">
                        Tell us about your brand, and we’ll check thousands to see if it’s available.
                    </p>
                </div>
                <div class="card col-lg-3">
                    <p class="p-3">
                      Kindly share the necessary documents to proceed with your brand registration.</p>
                </div>
                <div class="card col-lg-3">
                    <p class="p-3">
                        Leave it to us — we’ll get you the certification you need to start branding, as simple as that.
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





