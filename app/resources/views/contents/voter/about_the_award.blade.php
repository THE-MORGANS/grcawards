<!DOCTYPE html>
<html lang="en">
@section('title', 'About the Award')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · About the Award</div>
      <h1>About <span class="ac">the Award</span></h1>
      <p>Celebrating global excellence in governance, risk, compliance, fraud &amp; cybercrime prevention — from a
        first edition in Lagos to a two-continent platform spanning Africa and Europe.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="grid g2" style="align-items:start">
        <div>
          <div class="sec-eyebrow">The Initiative</div>
          <h2 class="sec-title" style="font-size:28px">A purposeful journey to <span class="ac">raise global
              standards.</span></h2>
          <p class="sec-intro">The GRC &amp; Financial Crime Prevention Awards are a prestigious annual initiative
            honouring individuals, institutions and corporate entities demonstrating exceptional leadership,
            innovation and commitment across governance, risk, compliance, fraud prevention, cybersecurity and
            financial-crime prevention.</p>
          <p class="sec-intro">Founded by Dr. Foluso Amusa, PhD, the initiative held its first edition in Lagos in
            2020. It has since expanded to Europe and beyond, and now runs two flagship editions each year — the
            Africa Edition in Nairobi and the Europe Edition in London. In 2025 a formal Advisory Council was
            appointed, alongside an independent, international panel of judges.</p>
        </div>
        <div class="callout">
          <h3>Milestones</h3>
          <div class="sched" style="margin-top:6px">
            <div class="sr">
              <div class="t">2020</div>
              <div class="d">Founded in Lagos, Nigeria</div>
            </div>
            <div class="sr">
              <div class="t">2022+</div>
              <div class="d">Expanded across Europe</div>
            </div>
            <div class="sr">
              <div class="t">2025</div>
              <div class="d">Advisory Council appointed</div>
            </div>
            <div class="sr">
              <div class="t">2026</div>
              <div class="d">Two editions — Nairobi &amp; London</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream" id="mission">
    <div class="wrap">
      <div class="sec-eyebrow">Vision &amp; Mission</div>
      <h2 class="sec-title">Building resilient institutions <span class="ac">and ethical leadership.</span></h2>
      <div class="grid g2" style="margin-top:26px">
        <div class="card">
          <h3>Vision</h3>
          <p style="font-size:15px">To be the premier global platform celebrating excellence and fostering
            innovation in governance, risk, compliance and financial crime prevention — building resilient
            institutions and ethical leadership for a safer, transparent and future-ready world.</p>
        </div>
        <div class="card">
          <h3>Mission</h3>
          <p style="font-size:15px">To convene cross-sector leaders, innovators, regulators and changemakers to
            recognise outstanding contributions, ignite critical dialogue and champion actionable solutions —
            aligned with THE MORGANS' commitment to empower sustainable institutions, safeguard global systems and
            influence transformational policy and practice.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Objectives</div>
      <h2 class="sec-title">Why these awards <span class="ac">matter.</span></h2>
      <div class="grid g3" style="margin-top:28px">
        <div class="card">
          <div class="k">01</div>
          <h3>Promote Regulatory Adherence</h3>
          <p>Support alignment with local and international GRC and financial-crime standards through credible
            recognition and benchmarking.</p>
        </div>
        <div class="card">
          <div class="k">02</div>
          <h3>Incentivise Ethical Innovation</h3>
          <p>Highlight cutting-edge approaches addressing digital fraud, cybercrime and cross-border compliance.</p>
        </div>
        <div class="card">
          <div class="k">03</div>
          <h3>Foster a Culture of Integrity</h3>
          <p>Recognise institutions embedding ethical conduct, digital resilience, transparency and governance.</p>
        </div>
        <div class="card">
          <div class="k">04</div>
          <h3>Encourage Benchmarking</h3>
          <p>Facilitate peer learning and alignment through industry-led case studies and best practice.</p>
        </div>
        <div class="card">
          <div class="k">05</div>
          <h3>Enhance Public Trust</h3>
          <p>An international platform demonstrating commitment to compliance, fraud prevention and ethics.</p>
        </div>
        <div class="card">
          <div class="k">06</div>
          <h3>Two Annual Editions</h3>
          <p>A virtual Mid-Year Summit and two in-person Awards &amp; Summit editions — accessible, global,
            multi-sector.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Benefits of Participation</div>
      <h2 class="sec-title">Recognition that <span class="ac">works for you.</span></h2>
      <div class="grid g3" style="margin-top:26px">
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Global Prestige</h3>
            <p>International visibility as leaders in risk, governance and ethical innovation.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Best Practice</h3>
            <p>Insight into global standards to improve internal systems.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Engagement &amp; Retention</h3>
            <p>Recognition boosts morale and strengthens retention.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Compliance Culture</h3>
            <p>Reinforces governance, ethics and proactive alignment.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Publicity</h3>
            <p>Cross-industry visibility and media reach across continents.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🔹</span>
          <div>
            <h3>Stakeholder Confidence</h3>
            <p>Builds trust among regulators, investors and customers.</p>
          </div>
        </div>
      </div>
      <div class="callout navy"
        style="margin-top:30px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
        <div>
          <h3 style="color:#fff">Call for partnerships &amp; collaboration</h3>
          <p style="color:#c2cae0;font-size:14px">We welcome firms, regulatory bodies, academic institutions,
            RegTech companies and consultants.</p>
        </div>
        <a class="btn btn-gold" href="{{ route('show_contact') }}">Partner With Us →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
