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
                <i class="bi bi-shield-check"></i> Secure & Reliable Legal Contracts
              </span>

              <h1>Contract Drafting & Review</h1>

              <p class="lead">
              Professional contract drafting & review services ensure your agreements are legally sound, protect your interests, and minimize risks.
              </p>

              <ul class="rt-list">
                <li><i class="bi bi-check2-circle"></i> Customized contracts tailored to your business needs.</li>
                <li><i class="bi bi-check2-circle"></i> Thorough review to safeguard against legal loopholes.</li>
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
    <h2 class="fc-title">Why Choose Our Contract Services?</h2>
    <p class="fc-sub">
     Choosing the right legal partner ensures your contracts are enforceable, risk-free, and aligned with UAE law. Our expertise helps prevent disputes and secures long-term business relationships.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">Experienced Lawyers</h3>
          <p class="fc-p">Drafted & reviewed thousands of contracts across industries.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Tailored Solutions</h3>
          <p class="fc-p">Every contract is customized to meet your unique requirements.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Risk Protection</h3>
          <p class="fc-p">Minimize risks and avoid future disputes with expert legal guidance.</p>
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
          <span class="ip-accent">Contract Drafting & Review</span>
        </h2>

        <p class="ip-sub mt-3">
Our contract drafting & review services provide legal protection, ensure compliance with UAE laws, and safeguard your business interests. We prepare clear, enforceable agreements that avoid ambiguity, reduce risks, and ensure smooth business operations. Whether you’re dealing with employment contracts, partnership agreements, or commercial deals, we provide expert legal support at every stage.
        </p>
        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"  > WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Legally Compliant</div>
              <div class="ip-item-desc">Contracts reviewed to comply with UAE regulations and international standards.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge "></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Risk-Free Agreements</div>
              <div class="ip-item-desc">Protect your rights and reduce chances of future disputes.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-diagram-2"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Confidential & Secure</div>
              <div class="ip-item-desc">We ensure complete confidentiality of your legal documents.</div>
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
       <img src="assets/images/traderegister2.webp" class="w-100" height="234px"
          alt="Why Choose Contract Drafting & Review"
          style="object-fit: cover;border-radius: 10px;">
      </div>
      <div class="col-lg-6">
        <p style="font-weight: 700; font-size: 26px;">Why Contract Drafting & Review?</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Tailor-made contracts for every business type</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Compliance with UAE commercial laws</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Protects your rights & financial interests</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Minimizes risk of disputes & legal penalties</p>
        <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Clear, enforceable, and secure agreements</p>
      </div>
    </div>
    </div>
    </section>
  

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
    <p style="font-weight: 700; font-size: 35px;" class="text-center ouraccount">Types of Contracts We Handle</p>

    <div class="accordion-item">
      <p class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
          aria-controls="flush-collapseOne">
          <p style="font-size: 20px; font-weight: 600;">Commercial Contracts</p>
        </button>
      </p>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Agreements for trading, partnerships, and commercial transactions.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
          aria-controls="flush-collapseTwo">
          <p style="font-size: 20px; font-weight: 600;">Employment Contracts</p>
        </button>
      </p>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Legally binding agreements between employer & employee to define rights and obligations.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
          aria-controls="flush-collapseThree">
          <p style="font-size: 20px; font-weight: 600;">Partnership Agreements</p>
        </button>
      </p>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Agreements defining roles, responsibilities, and profit-sharing between partners.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
          aria-controls="flush-collapseFour">
          <p style="font-size: 20px; font-weight: 600;">Lease & Rental Contracts</p>
        </button>
      </p>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Clear agreements for real estate leasing & rental transactions.
        </div>
      </div>
    </div>
  </div>

<!-- product section  -->
    <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-0 mb-0 pb-0">
    <div class="container">
      <div class="product">
        <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You in Contract Drafting & Review?</p>
        <div class="row mt-4 justify-content-center gap-5">
          <div class="card col-lg-3">
            <p class="p-3">
              We carefully draft contracts aligned with UAE law and your requirements.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We review agreements to identify loopholes and mitigate risks effectively.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We provide end-to-end legal support ensuring smooth execution & compliance.
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





