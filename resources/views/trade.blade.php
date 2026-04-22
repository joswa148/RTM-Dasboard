@include('Layouts.app')
  <div class="nav-img">
    <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Trademark</h2>
  </div>
 
 <div class="container py-5 branding">
    <h2 class="text-center mb-4">Our Trademark Services</h2>

    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
      
      <!-- 1 -->
      <div class="col">
        <a href="trademark-registration">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-compass"></i></div>
            <h3 class="service-title">Trademark Registration</h3>
            <p class="service-desc">Secure your brand identity with expert trademark registration services.</p>
          </div>
        </a>
      </div>

      <!-- 2 -->
      <div class="col">
        <a href="trademark-search">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-palette"></i></div>
            <h3 class="service-title">Trademark Search</h3>
            <p class="service-desc">Comprehensive trademark searches to avoid conflicts and disputes.</p>
          </div>
        </a>
      </div>

      <!-- 3 -->
      <div class="col">
        <a href="trademark-watch">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-window-sidebar"></i></div>
            <h3 class="service-title">Trademark Watch</h3>
            <p class="service-desc">Monitoring services to protect your trademarks from infringement.</p>
          </div>
        </a>
      </div>

      <!-- 4 -->
      <div class="col">
        <a href="international-trademarks">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-instagram"></i></div>
            <h3 class="service-title">International Trademarks</h3>
            <p class="service-desc">Expand your brand globally with international trademark protection.</p>
          </div>
        </a>
      </div>

      <!-- 5 -->
      <div class="col">
        <a href="trademark-renewal">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
            <h3 class="service-title">Trademark Renewal</h3>
            <p class="service-desc">Timely renewal of trademarks to maintain your brand rights.</p>
          </div>
        </a>
      </div>

      <!-- 6 -->
      <div class="col">
        <a href="trademark-oppositions">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-box-seam"></i></div>
            <h3 class="service-title">Trademark Oppositions</h3>
            <p class="service-desc">Legal assistance in opposing or defending against trademark conflicts.</p>
          </div>
        </a>
      </div>

      <!-- 7 -->
      <div class="col">
        <a href="trademark-litigation">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-files"></i></div>
            <h3 class="service-title">Trademark Litigation</h3>
            <p class="service-desc">Expert representation in trademark disputes and enforcement cases.</p>
          </div>
        </a>
      </div>

      <!-- 8 -->
      <div class="col">
        <a href="brand-monitoring">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-easel2"></i></div>
            <h3 class="service-title">Brand Monitoring</h3>
            <p class="service-desc">Continuous monitoring to safeguard your brand identity worldwide.</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  
  <div class=" container d-lg-flex text-center  mt-lg-5  mb-5 mt-3  abflex">
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p4.svg" alt=""></div>
      <div>
        <p class="def">2000+</p><span class="don d-block">Trademarks Registered</span>
      </div>
    </div>
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p3.svg" alt=""></div>
      <div>
        <p class="def">99%</p><span class="don">Approval Success Rate</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p2.svg" alt=""></div>
      <div>
        <p class="def">15+ Years</p><span class="don ms-4">Legal Expertise</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p1.svg" alt=""></div>
      <div>
        <p class="def">24*7</p><span class="don ms-4">Trademark Support</span>
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





