@include('Layouts.app')
  <div class="nav-img">
    <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Business Setup</h2>
  </div>
 
 <div class="container py-5 branding">
    <h2 class="text-center mb-4">Our Business Setup Services</h2>

    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
      
      <!-- 1 -->
      <div class="col">
        <a href="company-formation">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-compass"></i></div>
            <h3 class="service-title">Company Formation</h3>
            <p class="service-desc">End-to-end assistance in registering and forming new companies.</p>
          </div>
        </a>
      </div>

      <!-- 2 -->
      <div class="col">
        <a href="trade-license">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-palette"></i></div>
            <h3 class="service-title">Trade License</h3>
            <p class="service-desc">Guidance and support in obtaining and renewing trade licenses.</p>
          </div>
        </a>
      </div>

      <!-- 3 -->
      <div class="col">
        <a href="freezone-company">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-window-sidebar"></i></div>
            <h3 class="service-title">Free Zone Company</h3>
            <p class="service-desc">Setting up businesses in UAE free zones with tax benefits.</p>
          </div>
        </a>
      </div>

      <!-- 4 -->
      <div class="col">
        <a href="mainland-company">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-instagram"></i></div>
            <h3 class="service-title">Mainland Company</h3>
            <p class="service-desc">Expert solutions for establishing mainland business operations.</p>
          </div>
        </a>
      </div>

      <!-- 5 -->
      <div class="col">
        <a href="offshore-company">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
            <h3 class="service-title">Offshore Company</h3>
            <p class="service-desc">Incorporation of offshore companies with global flexibility.</p>
          </div>
        </a>
      </div>

      <!-- 6 -->
      <div class="col">
        <a href="pro-services">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-box-seam"></i></div>
            <h3 class="service-title">PRO Services</h3>
            <p class="service-desc">End-to-end government liaison and document clearance support.</p>
          </div>
        </a>
      </div>

      <!-- 7 -->
      <div class="col">
        <a href="visa-services">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-files"></i></div>
            <h3 class="service-title">Visa Services</h3>
            <p class="service-desc">Employee and investor visa processing and renewals.</p>
          </div>
        </a>
      </div>

      <!-- 8 -->
      <div class="col">
        <a href="bank-account-opening">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-easel2"></i></div>
            <h3 class="service-title">Bank Account Opening</h3>
            <p class="service-desc">Assistance with opening secure business bank accounts.</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  
  <div class=" container d-lg-flex text-center  mt-lg-5  mb-5 mt-3  abflex">
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p4.svg" alt=""></div>
      <div>
        <p class="def">3000+</p><span class="don d-block">Companies Registered</span>
      </div>
    </div>
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p3.svg" alt=""></div>
      <div>
        <p class="def">95%</p><span class="don">License Renewal Success</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p2.svg" alt=""></div>
      <div>
        <p class="def">10+ Years</p><span class="don ms-4">UAE Experience</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p1.svg" alt=""></div>
      <div>
        <p class="def">24*7</p><span class="don ms-4">Business Support</span>
      </div>
    </div>
  </div>
  
  <style>
  .service-card {
      background:#fff; border:1px solid #e5e7eb; border-radius:16px;
      box-shadow:0 2px 8px rgba(0,0,0,.05); padding:1.5rem; height:100%;
      transition:transform .2s ease, box-shadow .2s ease;
    }
    .service-card:hover {
      transform:translateY(-5px);
      box-shadow:0 6px 20px rgba(0,0,0,.08);
    }
    .icon-wrap {
      width:60px; height:60px; border-radius:14px;
      display:flex; align-items:center; justify-content:center;
      font-size:1.8rem; margin-bottom:1rem;
      background: #fff9f7;
      color: #f71010;
    }
    .service-title { font-weight:700; font-size:1.1rem; margin-bottom:.5rem; }
    .service-desc { color:#6b7280; font-size:.95rem; }
    .branding a{
        text-decoration: none;
    }
    .branding .service-title{

    color: #f71010;
    font-weight: 600;
   }
</style>

@include('Layouts.footer')





