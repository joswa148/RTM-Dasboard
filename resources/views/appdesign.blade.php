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
              <i class="bi bi-shield-check"></i> Innovative Design Solutions
            </span>

            <h1>Website & App Design</h1>

            <p class="lead">
              Our Website & App Design services create visually stunning and user-friendly digital experiences that engage your audience and elevate your brand.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> User-centered designs for web and mobile applications.</li>
              <li><i class="bi bi-check2-circle"></i> Enhance user experience and boost brand engagement.</li>
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
    <h2 class="fc-title">Why Choose Our Design Services</h2>
    <p class="fc-sub">
      Effective web and app design enhances usability, strengthens brand identity, and drives user engagement, turning visitors into loyal customers.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">500+ Projects Completed</h3>
          <p class="fc-p">Delivering high-quality websites and apps for a diverse range of clients.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Designers & Developers</h3>
          <p class="fc-p">A talented team ensures seamless user experience and responsive design.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted by Brands</h3>
          <p class="fc-p">Building intuitive digital products that align with your brand vision.</p>
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
          <span class="ip-accent">Website & App Design</span>
        </h2>
<p class="ip-sub mt-3">
  Well-designed websites and apps improve usability, increase conversions, and strengthen overall brand perception. Our services combine creativity with functionality, user-centered design, intuitive navigation, responsive layouts, performance optimization, accessibility features, advanced analytics integration, seamless third-party integrations, scalable architecture, and robust security measures to deliver engaging, seamless, and memorable digital experiences across all devices and platforms.
</p>







        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">User-Centered Design</div>
              <div class="ip-item-desc">Craft interfaces that prioritize usability and intuitive navigation for your audience.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Responsive & Modern</div>
              <div class="ip-item-desc">Designs adapt to any device while maintaining aesthetic appeal and performance.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Boost Engagement & Conversions</div>
              <div class="ip-item-desc">Interactive and visually appealing designs encourage user interaction and conversion.</div>
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
  <div class="row ">
    <div class="col-lg-6">
     <img src="assets/images/traderegister2.webp" class="w-100" height="250px"
        alt="Why Choose Website & App Design" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Invest in Website & App Design?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhanced user experience and engagement</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Responsive and modern designs</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Improved brand perception</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Increased conversions and ROI</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistent branding across digital platforms</p>
    </div>
  </div>
</div>
</section>


<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Web App Design Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">UI/UX Design</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates intuitive, user-friendly interfaces and engaging experiences tailored to your target audience for web applications.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Responsive Web Design</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Ensures your web app works seamlessly across devices and screen sizes for a consistent user experience everywhere.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Interaction & Visual Design</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Designs engaging interactions, animations, and visuals to make web applications more dynamic and enjoyable for users.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Prototyping & Wireframing</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates interactive prototypes and wireframes to test ideas, streamline development, and validate user flows before implementation.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">User Research & Testing</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Conducts usability testing, user interviews, and analytics review to optimize web app design based on real user behavior.
      </div>
    </div>
  </div>
</div>

<!-- Web App Design Guidance Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Create an Effective Web App?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Design user-friendly interfaces and engaging experiences tailored to your target audience.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Build responsive layouts and prototypes to ensure smooth interaction across all devices.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Test, analyze, and refine the web app based on user feedback to improve usability and engagement.
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





