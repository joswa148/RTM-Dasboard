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
                <i class="bi bi-building"></i> Flexible Office & Virtual Address
              </span>

              <h1>Office Space & Virtual Address Solutions</h1>

              <p class="lead">
              Affordable and flexible office solutions in the UAE, including physical spaces and virtual addresses—designed for startups, SMEs, and international businesses.
              </p>

              <ul class="rt-list">
                <li><i class="bi bi-check2-circle"></i> Premium office spaces at prime UAE locations.</li>
                <li><i class="bi bi-check2-circle"></i> Virtual office solutions with mailing & address support.</li>
              </ul>

               <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="whatsapp-icon"  > WhatsApp Now</button>
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
    <h2 class="fc-title">Why Choose Our Office Solutions?</h2>
    <p class="fc-sub">
     Our office and virtual address services are tailored to fit your business needs. Whether you need a professional business address or a fully serviced workspace, we provide flexible, affordable, and premium solutions to help your business grow.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot" style="font-size: 40px ;" ><i class="bi bi-building"></i></div>
          <h3 class="fc-h">Flexible Plans</h3>
          <p class="fc-p">Choose from daily, monthly, or yearly rental options.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot" style="font-size: 40px ;" ><i class="bi bi-wifi"></i></div>
          <h3 class="fc-h">Fully Equipped</h3>
          <p class="fc-p">Modern offices with internet, meeting rooms, and facilities.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot" style="font-size: 40px ;" ><i class="bi bi-envelope"></i></div>
          <h3 class="fc-h">Virtual Office</h3>
          <p class="fc-p">Get a UAE business address with mail handling services.</p>
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
          <span class="ip-accent">Office & Virtual Address Solutions</span>
        </h2>
<p class="ip-sub mt-3">
  Our office solutions give your business a professional image, access to modern facilities, and flexibility to grow at your own pace. Virtual addresses allow international entrepreneurs to establish a UAE presence without high costs, while serviced offices provide premium workspaces in prime locations with all-inclusive amenities. These solutions also offer meeting rooms, administrative support, and a professional environment, helping your business operate efficiently and impress clients consistently.
</p>


        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="whatsapp-icon"  > WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Prestigious Business Address</div>
              <div class="ip-item-desc">Boost credibility with a professional UAE address for your company.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-geo-alt"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Serviced Office Spaces</div>
              <div class="ip-item-desc">Fully equipped workspaces with internet, meeting rooms, and admin support.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-laptop"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Cost-Effective Virtual Solutions</div>
              <div class="ip-item-desc">Affordable virtual offices with mail handling and call forwarding services.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-envelope-open"></i></span>
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
         <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
          alt="Office & Virtual Address Solutions"
          style="object-fit: cover;border-radius: 10px;">
      </div>
      <div class="col-lg-6">
        <p style="font-weight: 700; font-size: 26px;">Why Choose Our Office Solutions?</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Professional UAE business address</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Serviced offices with modern amenities</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Virtual offices with mail & call handling</p>
        <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Flexible rental terms and affordable pricing</p>
       <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Prime locations for credibility & growth</p>
      </div>
    </div>
</div>
</section
  

<div class="accordion pt-0 px-lg-5 px-4" id="accordionFlushExample">
    <p style="font-weight: 700; font-size: 35px;"  class="text-center ouraccount">Types of Office Solutions</p>

    <div class="accordion-item">
      <p class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
          aria-controls="flush-collapseOne">
          <p style="font-size: 20px; font-weight: 600;">Serviced Offices</p>
        </button>
      </p>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Fully furnished offices with internet, utilities, and support services included.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
          aria-controls="flush-collapseTwo">
          <p style="font-size: 20px; font-weight: 600;">Co-working Spaces</p>
        </button>
      </p>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Flexible shared workspaces perfect for startups, freelancers, and small teams.
        </div>
      </div>
    </div>

    <div class="accordion-item mt-4">
      <p class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" style="background-color: pink;" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
          aria-controls="flush-collapseThree">
          <p style="font-size: 20px; font-weight: 600;">Virtual Office</p>
        </button>
      </p>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body" style="line-height: 29px; font-size:16px;">
          Establish a UAE presence with a professional address, mail handling, and call answering.
        </div>
      </div>
    </div>
  </div>

<!-- product section  -->
  <section class="brand-pr  px-4 mt-3 px-lg-5 mt-lg-3 mb-4 ">
    <div class="container">
      <div class="product">
        <p style="font-size: 35px; font-weight: 600;" class="text-center">How We Help You with Office Solutions?</p>
        <div class="row mt-4 justify-content-center gap-5">
          <div class="card col-lg-3">
            <p class="p-3">
              We provide prime UAE office locations with modern amenities.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We offer flexible packages for serviced, co-working, and virtual offices.
            </p>
          </div>
          <div class="card col-lg-3">
            <p class="p-3">
              We ensure your business gets a professional presence and smooth operations.
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





