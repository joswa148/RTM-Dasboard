@include('layouts.app')
  <div class="nav-img">
    <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Branding</h1>
  </div>
 
 <div class="container py-5 branding">
    <h2 class="text-center mb-4">Our Branding Services</h2>

    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
      
      <!-- 1 -->
      <div class="col">
        <a href="brand-strategy-consulting">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-compass"></i></div>
          <h3 class="service-title">Brand Strategy & Consulting</h3>
          <p class="service-desc">Clear roadmap for brand growth, positioning, and audience insights.</p>
        </div>
        </a>
      </div>

      <!-- 2 -->
      <div class="col">
          <a href="corporate-identity">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-palette"></i></div>
          <h3 class="service-title">Corporate Identity</h3>
          <p class="service-desc">Logos, typography, and brand guidelines for consistent identity.</p>
        </div>
        </a>
      </div>

      <!-- 3 -->
      <div class="col">
          <a href="website-app-design">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-window-sidebar"></i></div>
          <h3 class="service-title">Website & App Design</h3>
          <p class="service-desc">Modern, user-friendly interfaces for web & mobile apps.</p>
        </div>
        </a>
        
      </div>

      <!-- 4 -->
      <div class="col">
          <a href="social-media-creatives">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-instagram"></i></div>
          <h3 class="service-title">Social Media Creatives</h3>
          <p class="service-desc">Engaging posts, stories, and ad creatives for all platforms.</p>
        </div>
        </a>
      </div>

      <!-- 5 -->
      <div class="col">
          <a href="ads-campaign-designs">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
          <h3 class="service-title">Ads & Campaign Designs</h3>
          <p class="service-desc">Creative designs for print, outdoor, and digital ad campaigns.</p>
        </div>
        </a>
      </div>

      <!-- 6 -->
      <div class="col">
           <a href="packaging-product-design">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-box-seam"></i></div>
          <h3 class="service-title">Packaging & Product Design</h3>
          <p class="service-desc">Eye-catching packaging that enhances shelf presence.</p>
        </div>
        </a>
      </div>

      <!-- 7 -->
      <div class="col">
           <a href="marketing-materials">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-files"></i></div>
          <h3 class="service-title">Marketing Materials</h3>
          <p class="service-desc">Brochures, flyers, posters, and branded collateral.</p>
        </div>
        </a>
      </div>

      <!-- 8 -->
      <div class="col">
           <a href="presentation-design">
        <div class="service-card">
          <div class="icon-wrap"><i class="bi bi-easel2"></i></div>
          <h3 class="service-title">Presentation Design</h3>
          <p class="service-desc">Professional decks for pitches, reports, and conferences.</p>
        </div>
      </div>
    </a>
    </div>
  </div>

  
          <div class=" container d-lg-flex text-center  mt-lg-5  mb-5 mt-3  abflex">
            <div class=" abicone">
              <div class="icon"><img src="assets/images/p4.svg" alt=""></div>
              <div>
                <p class="def">5000+</p><span class="don d-block">Happy Clients</span>
              </div>
            </div>
            <div class=" abicone">
              <div class="icon"><img src="assets/images/p3.svg" alt=""></div>
              <div>
                <p class="def">98%</p><span class="don">Clients Retention</span>
              </div>
            </div>
            <div class="abicone">
              <div class="icon"><img src="assets/images/p2.svg" alt=""></div>
              <div>
                <p class="def">9+ Years</p><span class="don ms-4">Industry Experience</span>
              </div>
            </div>
            <div class="abicone">
              <div class="icon"><img src="assets/images/p1.svg" alt=""></div>
              <div>
                <p class="def">24*7</p><span class="don ms-4">Free Expert Chat</span>
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
@include('layouts.footer')




