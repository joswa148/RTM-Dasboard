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
                <i class="bi bi-shield-check"></i> Hassle-Free PRO & Visa Services
              </span>

              <h1>PRO & Visa Services</h1>

              <p class="lead">
              Our PRO & Visa Services in the UAE simplify government approvals, document clearance, and visa processing—saving you time, cost, and effort.
              </p>

              <ul class="rt-list">
                <li><i class="bi bi-check2-circle"></i> Smooth visa processing for investors & employees.</li>
                <li><i class="bi bi-check2-circle"></i> End-to-end PRO support for all government approvals.</li>
              </ul>

               <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"  > WhatsApp Now</button>
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
                <img class="tm" src="{{ asset('assets/images/bs.jpg') }}">
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
    <h2 class="fc-title">Why Choose Our PRO & Visa Services?</h2>
    <p class="fc-sub">
     We provide fast, reliable, and cost-effective PRO & Visa services in the UAE. From work permits and residency visas to license renewals and government documentation, we handle everything with precision.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">5000+ Clients Served</h3>
          <p class="fc-p">Trusted by thousands of entrepreneurs & companies.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Government Liaison</h3>
          <p class="fc-p">End-to-end support with approvals & clearances.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Complete Compliance</h3>
          <p class="fc-p">Stay stress-free with our legal & documentation support.</p>
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
         Key Benefits of 
          <span class="ip-accent">PRO & Visa Services</span>
          
        </h2>

  <p class="ip-sub mt-3">
  Our PRO & Visa services ensure fast document clearance, visa approvals, and license renewals with zero hassle. We handle all paperwork, approvals, and legal formalities so you can focus entirely on growing your business. Whether it’s for investors, employees, or dependents, we make the entire process smooth, transparent, and efficient. Our team provides expert guidance at every step, ensures compliance with all regulations, and helps avoid delays or complications, giving your business peace of mind and uninterrupted operations.
</p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"  > WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Fast Visa Processing</div>
              <div class="ip-item-desc">Quick issuance of investor, employee, and family visas with minimal effort.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-passport"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">End-to-End PRO Services</div>
              <div class="ip-item-desc">From labor approvals to license renewals, we manage all documentation efficiently.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-file-earmark-text"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Cost-Effective Solutions</div>
              <div class="ip-item-desc">Save time and money with our affordable & transparent service packages.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-cash-coin"></i></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <section class="px-4 px-lg-0">
   <div class="container">
<div class="row ">
      <div class="col-lg-6">
           <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
          alt="Why Choose PRO & Visa Services"
          style="object-fit: cover;border-radius: 10px;">
      </div>
      <div class="col-lg-6">
        <p style="font-weight: 700; font-size: 26px;">Why Choose PRO & Visa Services?</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Fast and reliable visa processing</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>End-to-end PRO support with approvals</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Saves time, cost & effort for businesses</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Complete compliance with UAE laws</p>
          <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Transparent & affordable solutions</p>
      </div>
    </div>
    </div>
    </section>
  
   
  

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
    <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Our Key PRO & Visa Services</p>

    <div class="accordion-item">
      <p class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
          aria-controls="flush-collapseOne">
          <p style="font-size: 20px; font-weight: 600;">Investor & Partner Visas</p>
        </button>
      </p>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Quick visa issuance and renewals for investors and business partners.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
          aria-controls="flush-collapseTwo">
          <p style="font-size: 20px; font-weight: 600;">Employee Visas</p>
        </button>
      </p>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Hassle-free processing of work permits and residency visas for employees.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
          aria-controls="flush-collapseThree">
          <p style="font-size: 20px; font-weight: 600;">Family & Dependent Visas</p>
        </button>
      </p>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Secure visas for spouses, children, and dependents with ease.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
          aria-controls="flush-collapseFour">
          <p style="font-size: 20px; font-weight: 600;">License & Document Renewal</p>
        </button>
      </p>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Complete support for license renewals, labor contracts, and document attestations.
        </div>
      </div>
    </div>
  </div>

<!-- product section  -->
   <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
    <div class="container">
      <div class="product">
        <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You with PRO & Visa Services?</p>
        <div class="row mt-4 justify-content-center gap-5">
          <div class="card col-lg-3">
            <p class="p-3">
              We assist in obtaining and renewing visas for investors, employees, and dependents.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We manage all documentation, approvals, and government clearances with accuracy.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We ensure complete compliance with UAE rules, saving you time & resources.
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





