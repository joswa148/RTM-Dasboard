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
                <i class="bi bi-shield-check"></i> Reliable Financial Management
              </span>

              <h1>Accounting & Bookkeeping</h1>

              <p class="lead">
              Our Accounting & Bookkeeping services in the UAE ensure accurate financial records, compliance with regulations, and clarity in business decisions. 
              We help businesses stay financially healthy while focusing on growth.
              </p>

              <ul class="rt-list">
                <li><i class="bi bi-check2-circle"></i> Accurate & timely financial reporting.</li>
                <li><i class="bi bi-check2-circle"></i> Compliance with UAE tax & VAT regulations.</li>
              </ul>

               <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"  > WhatsApp </button>
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
    <h2 class="fc-title">Why Choose Our Accounting Services</h2>
    <p class="fc-sub">
     Choosing professional accounting & bookkeeping ensures accurate financial planning, 
     smoother audits, and stronger business growth. Our experts keep your records clear, 
     compliant, and business-ready.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">Trusted by 500+ Businesses</h3>
          <p class="fc-p">Supporting SMEs and large companies with tailored solutions.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Expert Guidance</h3>
          <p class="fc-p">Experienced accountants ensure accurate reporting & compliance.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Secure & Transparent</h3>
          <p class="fc-p">We maintain confidentiality while giving you clear insights.</p>
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
          <span class="ip-accent">Accounting & Bookkeeping</span>
        </h2>

        <p class="ip-sub mt-3">
        Our accounting & bookkeeping services ensure accuracy, compliance, and clarity in your business finances. 
        From managing VAT filings to preparing financial statements, we provide end-to-end support that saves time, 
        reduces risks, and empowers better decision-making. We help businesses stay compliant with UAE tax laws 
        while ensuring transparency and financial efficiency.
        </p>
        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"  > WhatsApp </button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Accurate Financial Records</div>
              <div class="ip-item-desc">Maintain precise bookkeeping for smooth audits and compliance.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-journal-text "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">VAT & Tax Compliance</div>
              <div class="ip-item-desc">Ensure timely VAT filings and complete compliance with UAE laws.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-cash-coin"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Clear Financial Insights</div>
              <div class="ip-item-desc">Get real-time reports to make informed and strategic business decisions.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-bar-chart-line"></i></span>
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
          alt="Why Choose Accounting Services"
          style="object-fit: cover;border-radius: 10px;">
      </div>
      <div class="col-lg-6">
        <p style="font-weight: 700; font-size: 26px;">Why Choose Our Accounting & Bookkeeping?</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Experienced professionals with UAE expertise</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Accurate and timely financial reporting</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Tax & VAT compliance made simple</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Customizable packages for all business sizes</p>
        <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>End-to-end financial transparency</p>
      </div>
    </div>
</div>
  </section>

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
    <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Our Accounting Services</p>

    <div class="accordion-item">
      <p class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
          aria-controls="flush-collapseOne">
          <p style="font-size: 20px; font-weight: 600;">Bookkeeping</p>
        </button>
      </p>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          Maintain daily financial records, expense tracking, and reconciliation.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
          aria-controls="flush-collapseTwo">
          <p style="font-size: 20px; font-weight: 600;">Financial Reporting</p>
        </button>
      </p>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          Monthly, quarterly, and annual reports for better financial decisions.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
          aria-controls="flush-collapseThree">
          <p style="font-size: 20px; font-weight: 600;">Tax & VAT Filing</p>
        </button>
      </p>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          Complete VAT registration, filing, and compliance with UAE law.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
          aria-controls="flush-collapseFour">
          <p style="font-size: 20px; font-weight: 600;">Audit Support</p>
        </button>
      </p>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          Prepare financial records and reports for smooth external and internal audits.
        </div>
      </div>
    </div>
</div>


<!-- product section  -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
    <div class="container">
      <div class="product">
        <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You in Accounting</p>
        <div class="row mt-4 justify-content-center gap-5">
          <div class="card col-lg-3">
            <p class="p-3">
              We maintain accurate financial records for daily and monthly reporting.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We manage VAT filing, tax compliance, and government submissions.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We support businesses in audit preparation and financial planning.
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





