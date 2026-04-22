@include('Layouts.app')
  <div class="nav-img">
    <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Technology</h2>
  </div>
 
 <div class="container py-5 branding">
    <h2 class="text-center mb-4">Our Technology Services</h2>

    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
      
      <!-- 1 -->
      <div class="col">
        <a href="software-development">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-compass"></i></div>
            <h3 class="service-title">Software Development</h3>
            <p class="service-desc">Custom software solutions built to scale and streamline your business.</p>
          </div>
        </a>
      </div>

      <!-- 2 -->
      <div class="col">
        <a href="mobile-app-development">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-palette"></i></div>
            <h3 class="service-title">Mobile App Development</h3>
            <p class="service-desc">High-quality iOS and Android apps designed for performance and usability.</p>
          </div>
        </a>
      </div>

      <!-- 3 -->
      <div class="col">
        <a href="web-development">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-window-sidebar"></i></div>
            <h3 class="service-title">Web Development</h3>
            <p class="service-desc">Modern, responsive websites with secure and scalable architecture.</p>
          </div>
        </a>
      </div>

      <!-- 4 -->
      <div class="col">
        <a href="cloud-solutions">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-instagram"></i></div>
            <h3 class="service-title">Cloud Solutions</h3>
            <p class="service-desc">Scalable and secure cloud infrastructure for enterprises of all sizes.</p>
          </div>
        </a>
      </div>

      <!-- 5 -->
      <div class="col">
        <a href="cyber-security">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
            <h3 class="service-title">Cyber Security</h3>
            <p class="service-desc">Protecting your business with advanced security and monitoring systems.</p>
          </div>
        </a>
      </div>

      <!-- 6 -->
      <div class="col">
        <a href="artificial-intelligence">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-box-seam"></i></div>
            <h3 class="service-title">Artificial Intelligence</h3>
            <p class="service-desc">AI and ML-driven solutions for automation, insights, and innovation.</p>
          </div>
        </a>
      </div>

      <!-- 7 -->
      <div class="col">
        <a href="it-consulting">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-files"></i></div>
            <h3 class="service-title">IT Consulting</h3>
            <p class="service-desc">Expert consulting to align your technology strategy with business goals.</p>
          </div>
        </a>
      </div>

      <!-- 8 -->
      <div class="col">
        <a href="devops">
          <div class="service-card">
            <div class="icon-wrap"><i class="bi bi-easel2"></i></div>
            <h3 class="service-title">DevOps Solutions</h3>
            <p class="service-desc">Accelerating development with CI/CD pipelines and automation.</p>
          </div>
        </a>
      </div>

    </div>
  </div>

  
  <div class=" container d-lg-flex text-center  mt-lg-5  mb-5 mt-3  abflex">
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p4.svg" alt=""></div>
      <div>
        <p class="def">5000+</p><span class="don d-block">Projects Delivered</span>
      </div>
    </div>
    <div class=" abicone">
      <div class="icon"><img src="assets/images/p3.svg" alt=""></div>
      <div>
        <p class="def">98%</p><span class="don">Client Satisfaction</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p2.svg" alt=""></div>
      <div>
        <p class="def">9+ Years</p><span class="don ms-4">Technology Experience</span>
      </div>
    </div>
    <div class="abicone">
      <div class="icon"><img src="assets/images/p1.svg" alt=""></div>
      <div>
        <p class="def">24*7</p><span class="don ms-4">Tech Support</span>
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





