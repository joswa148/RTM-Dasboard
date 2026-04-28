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
              <i class="bi bi-shield-check"></i> Elevate Your Customer Experience
            </span>

            <h1>Customer Support Chatbot</h1>

            <p class="lead">
              A smart Customer Support Chatbot that answers queries 24×7, reduces ticket load, and boosts customer satisfaction across your website, WhatsApp, and social channels.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Instant replies to common questions, day or night.</li>
              <li><i class="bi bi-check2-circle"></i> Deflect 60–80% repetitive tickets to save agent time.</li>
            </ul>

            <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
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
    <h2 class="fc-title">Why Choose Right Trademark</h2>
    <p class="fc-sub">
      Launch a Customer Support Chatbot to resolve queries instantly, improve first-contact resolution, and deliver a consistent brand experience across all touchpoints.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">Human-in-the-Loop</h3>
          <p class="fc-p">Seamless handoff to live agents when conversations need a human touch.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">AI-Powered Answers</h3>
          <p class="fc-p">Trained on your FAQs, policies, and knowledge base for accurate responses.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Secure & Compliant</h3>
          <p class="fc-p">Enterprise-grade security and role-based access to protect customer data.</p>
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
          <span class="ip-accent">Customer Support Chatbot</span>
        </h2>

        <p class="ip-sub mt-3">
          Deploy an intelligent chatbot to deliver instant resolutions, reduce wait times, and scale your support without scaling costs. It learns from your knowledge base to provide consistent, accurate answers, captures lead details, routes complex issues to agents, and maintains spotless chat histories for audits and insights. Delight customers with faster service while your team focuses on high-value conversations.
        </p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">24×7 Availability</div>
              <div class="ip-item-desc">Support customers round the clock across time zones and channels.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-file-earmark-check"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Fewer Tickets</div>
              <div class="ip-item-desc">Automate repetitive Q&A to reduce your team’s workload significantly.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-shield-lock"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Easy Integration</div>
              <div class="ip-item-desc">Plug into your CRM, WhatsApp, website widget, and helpdesk tools.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-person-badge"></i></span>
            </div>
          </div>
        </div>
      </div>
      <!-- /MIDDLE -->
    </div>
  </div>
</section>



  <section class="px-4 pb-0 px-lg-0">
<div class="container">
  <div class="row mt-2">
    <div class="col-lg-6">
    <img src="assets/images/traderegister2.webp" class="w-100" height="235px"
        alt="Why Choose Customer Support Chatbot" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Customer Support Chatbot?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Responds instantly 24×7</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduces agent workload and wait times</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Consistent, brand-safe answers</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Easy escalation to live agents</p>
      <p  style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Integrated with CRM & helpdesk</p>
    </div>
  </div>
</div>
</section>

<div class="services-resources pt-0">
    @include('layouts.indexheader')
</div>
@include('layouts.footer')





