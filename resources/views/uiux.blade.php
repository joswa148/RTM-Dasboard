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
              <i class="bi bi-shield-check"></i> UI/UX Design Made Easy
            </span>

            <h1>UI/UX Design </h1>

            <p class="lead">
              Our UI/UX design services create intuitive, visually appealing, and user-friendly digital experiences that enhance engagement and drive business growth.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Intuitive interfaces for seamless user experience.</li>
              <li><i class="bi bi-check2-circle"></i> Visually engaging designs aligned with your brand identity.</li>
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
    <h2 class="fc-title">Why Choose Our UI/UX Design</h2>
    <p class="fc-sub">
      Effective UI/UX design enhances user engagement, strengthens brand perception, and improves conversion rates. Our design solutions focus on user-centered experiences, aesthetics, and usability.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">500+ Projects Delivered</h3>
          <p class="fc-p">Successfully designed user-friendly interfaces across web and mobile platforms.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Designers</h3>
          <p class="fc-p">Skilled UI/UX professionals creating visually engaging and intuitive experiences.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted Partner</h3>
          <p class="fc-p">Reliable design partner to help you deliver seamless digital experiences.</p>
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
          <span class="ip-accent">UI/UX Design</span>
        </h2>
<p class="ip-sub mt-3">
  UI/UX design improves user satisfaction, drives engagement, and increases conversion rates. Our approach blends creativity with research, ensuring designs are both beautiful and functional while aligned with your brand strategy. We also focus on intuitive navigation, responsive layouts, and seamless interactions, providing users with an enjoyable, consistent, memorable, user-friendly, highly engaging, and visually appealing experience across all devices and platforms.
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
              <div class="ip-item-title">User-Centered Design</div>
              <div class="ip-item-desc">Focus on users’ needs, behaviors, and preferences to create intuitive interfaces.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Enhanced Usability & Aesthetics</div>
              <div class="ip-item-desc">Deliver visually appealing designs that are easy to navigate and use.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Cross-Platform Consistency</div>
              <div class="ip-item-desc">Ensure seamless experience across web, mobile, and other digital platforms.</div>
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
           alt="Why Choose UI/UX Design"
           style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why UI/UX Design?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Create intuitive and user-friendly interfaces</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Enhance engagement and usability</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Maintain consistent design across platforms</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Boost brand perception and trust</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Test and validate designs for optimal experience</p>
    </div>
  </div>
</div>
</section>


<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of UI/UX Design Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">User Research & Analysis</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Conducts user research, surveys, and interviews to understand user behavior, preferences, and pain points for better design decisions.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Wireframing & Prototyping</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Creates wireframes and interactive prototypes to visualize the structure, layout, and functionality of applications before development.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Visual & Interaction Design</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Focuses on designing visually appealing interfaces and smooth interactions to enhance user engagement and satisfaction.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Usability Testing</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Conducts usability tests to identify issues, validate designs, and ensure intuitive and efficient user experiences.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightcoral;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">UI/UX Strategy & Consultation</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides guidance on improving user experience, aligning design with business goals, and creating cohesive and user-friendly interfaces.
      </div>
    </div>
  </div>
</div>

<!-- UI/UX Guidance Section -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Enhance Your UI/UX Design?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Conduct thorough user research to understand your audience and their needs.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Design intuitive, visually appealing interfaces with smooth interactions.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Test and iterate designs continuously to improve usability and user satisfaction.
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





