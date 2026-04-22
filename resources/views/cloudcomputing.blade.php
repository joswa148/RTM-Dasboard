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
              <i class="bi bi-shield-check"></i> Cloud Computing Made Easy
            </span>

            <h1>Cloud Computing </h1>

            <p class="lead">
              Leverage scalable and secure cloud computing solutions to enhance business agility, reduce IT costs, and enable global collaboration.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Scalable infrastructure with pay-as-you-go model.</li>
              <li><i class="bi bi-check2-circle"></i> Secure and compliant platforms for global access.</li>
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
    <h2 class="fc-title">Why Choose Our Cloud Computing Services</h2>
    <p class="fc-sub">
      Cloud computing empowers your business with flexible, secure, and scalable IT infrastructure. Enable remote collaboration, optimize IT costs, and gain a competitive edge with our tailored cloud solutions.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">5000+ Systems Migrated</h3>
          <p class="fc-p">Successfully migrated and managed cloud systems for clients globally.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Cloud Assistance</h3>
          <p class="fc-p">Specialized support for cloud architecture, deployment, and management.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Trusted Cloud Partner</h3>
          <p class="fc-p">Secure, optimize, and scale your IT operations with a reliable cloud partner.</p>
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
          <span class="ip-accent">Cloud Computing</span>
        </h2>

       <p class="ip-sub mt-3">
  Cloud computing provides scalable infrastructure, flexible storage, and high availability for your business applications. It ensures seamless collaboration, enhanced security, and reduced IT costs, while supporting business continuity and global reach. Additionally, cloud solutions offer real-time data access, easy integration with existing systems, and the ability to scale resources as your business grows, ensuring efficiency and reliability across all operations.
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
              <div class="ip-item-title">Scalable IT Infrastructure</div>
              <div class="ip-item-desc">Easily scale resources up or down based on business needs without heavy upfront investment.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Secure Cloud Storage</div>
              <div class="ip-item-desc">Protect critical data with encryption, redundancy, and compliance with global standards.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Remote Access & Collaboration</div>
              <div class="ip-item-desc">Enable teams to access applications and data from anywhere, improving productivity and flexibility.</div>
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
     <img src="assets/images/traderegister2.webp" class="w-100" height="236px"
           alt="Why Choose Cloud Computing"
           style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Cloud Computing?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Scalable infrastructure for growing businesses</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Secure data storage & compliance</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Global accessibility & collaboration</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduced IT costs & operational efficiency</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Rapid deployment and management</p>
    </div>
  </div>
</div>
</section>


<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
  <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Cloud Computing Services</p>

  <div class="accordion-item">
    <p class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <p style="font-size: 20px; font-weight: 600;">Infrastructure as a Service (IaaS)</p>
      </button>
    </p>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides virtualized computing resources over the internet, allowing businesses to rent servers, storage, and networking without investing in physical hardware.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <p style="font-size: 20px; font-weight: 600;">Platform as a Service (PaaS)</p>
      </button>
    </p>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Provides a platform allowing developers to build, deploy, and manage applications without worrying about underlying infrastructure or software updates.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <p style="font-size: 20px; font-weight: 600;">Software as a Service (SaaS)</p>
      </button>
    </p>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Delivers software applications over the internet on a subscription basis, accessible from any device, reducing the need for installation or maintenance.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        <p style="font-size: 20px; font-weight: 600;">Cloud Storage Services</p>
      </button>
    </p>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Enables secure storage, backup, and retrieval of data over the internet, offering scalability and accessibility from anywhere in the world.
      </div>
    </div>
  </div>

  <div class="accordion-item mt-4">
    <p class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" style="background-color: lightblue;" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        <p style="font-size: 20px; font-weight: 600;">Hybrid & Multi-Cloud Solutions</p>
      </button>
    </p>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="line-height: 29px; font-size:16px;">
        Combines private and public clouds to provide flexibility, optimized workloads, cost efficiency, and enhanced security for organizations.
      </div>
    </div>
  </div>
</div>

<!-- Cloud Protection Section -->
<section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
  <div class="container">
    <div class="product">
      <p style="font-size: 35px; font-weight: 600;" class="text-center">How to Secure Your Cloud Environment?</p>
      <div class="row mt-4 justify-content-center gap-5">
        <div class="card col-lg-3">
          <p class="p-3">
            Assess your current infrastructure and choose the right cloud solution that fits your business needs.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Implement security best practices, including encryption, access controls, and compliance checks.
          </p>
        </div>
        <div class="card col-lg-3">
          <p class="p-3">
            Monitor and optimize cloud usage continuously to ensure efficiency, scalability, and reliability.
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





