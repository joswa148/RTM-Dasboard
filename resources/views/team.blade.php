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
              <i class="bi bi-shield-check"></i> Unify Humans + AI
            </span>

            <h1>Team & Chatbot Collaboration</h1>

            <p class="lead">
              Orchestrate seamless collaboration between your support team and an AI chatbot—share context, auto-route tasks, and resolve customer issues faster across every channel.
            </p>

            <ul class="rt-list">
              <li><i class="bi bi-check2-circle"></i> Smart handoff to agents with full conversation history.</li>
              <li><i class="bi bi-check2-circle"></i> Shared inbox, notes, and tags to keep everyone aligned.</li>
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
      Blend the speed of AI with the empathy of your team. Collaborate in one place, keep context intact, and deliver consistent, brand-safe responses.
    </p>

    <div class="row g-5 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-person "></i></div>
          <h3 class="fc-h">Agent Assist</h3>
          <p class="fc-p">AI suggests replies, summarizes threads, and drafts notes for faster closures.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-lightbulb"></i></div>
          <h3 class="fc-h">Knowledge Sync</h3>
          <p class="fc-p">Train on FAQs, SOPs, and macros so humans and bot speak the same language.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="fc-item">
          <div class="fc-dot"><i class="bi bi-shield-lock"></i></div>
          <h3 class="fc-h">Governance</h3>
          <p class="fc-p">Role-based access, approvals, and audit trails for compliant operations.</p>
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
          <span class="ip-accent">Team & Chatbot Collaboration</span>
        </h2>

        <p class="ip-sub mt-3">
Team and chatbot collaboration blends the speed of AI with the expertise of your human team to deliver seamless support. While the chatbot manages routine queries and provides instant responses, your team can focus on complex cases that need personal attention. This balance ensures faster resolutions and a consistent, personalized customer experience across every channel. With shared context and smooth handoffs, your team works more efficiently and effectively. Together, they streamline workflows, reduce workloads, and scale support without sacrificing quality
        </p>

        <button class="whatapp mt-lg-2" onclick="openWhatsApp()"><img src="{{ asset('assets/images/icon1.svg') }}" alt="foot-girl"> WhatsApp Now</button>
      </div>

      <!-- MIDDLE RED PANEL -->
      <div class="col-lg-7">
        <div class="ip-pane">
          <div class="ip-pane-inner">
            <!-- item 1 -->
            <div class="ip-item">
              <div class="ip-item-title">Unified Inbox</div>
              <div class="ip-item-desc">Bot + agents collaborate in one thread with tags, notes, and SLAs.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-file-earmark-check"></i></span>
            </div>

            <!-- item 2 -->
            <div class="ip-item">
              <div class="ip-item-title">Contextual Handoff</div>
              <div class="ip-item-desc">Escalations include summaries, customer history, and next best actions.</div>
              <span class="ip-icon d-none d-lg-flex"><i class="bi bi-shield-lock"></i></span>
            </div>

            <!-- item 3 -->
            <div class="ip-item">
              <div class="ip-item-title">Playbooks & Macros</div>
              <div class="ip-item-desc">Standardize replies with reusable templates and automated workflows.</div>
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
  <div class="row mt">
    <div class="col-lg-6">
        <img src="assets/images/traderegister2.webp" class="w-100" height="237px"
        alt="Why Choose Team & Chatbot Collaboration" style="object-fit: cover;border-radius: 10px;">
    </div>
    <div class="col-lg-6">
      <p style="font-weight: 700; font-size: 26px;">Why Team & Chatbot Collaboration?</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Resolve faster with AI + human synergy</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Keep context across channels and shifts</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Reduce repetitive workloads for agents</p>
      <p><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Standardize responses with playbooks</p>
      <p style="margin-bottom:0px"><i class="bi bi-check-circle-fill me-2" style="color: #FA360A;"></i>Stronger governance and auditability</p>
    </div>
  </div>
</div>
</section>

<div class="services-resources pt-0">
    @include('Layouts.indexheader')
</div>
@include('Layouts.footer')





