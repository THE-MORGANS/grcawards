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
      <p>Celebrating global excellence in governance, risk, compliance, fraud &amp; cybercrime prevention — from six
        founding editions in Lagos to a single annual global flagship, hosted for the first time outside Nigeria in
        Nairobi, Kenya.</p>
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
            2020, running six consecutive editions there and building the community, the award pillars and the
            standards that define it. In 2025 a formal Advisory Council was appointed, alongside an independent,
            international panel of judges.</p>
          <p class="sec-intro">In 2026, the platform enters a new chapter. The 7th Annual GRC &amp; Financial Crime
            Prevention Global Awards &amp; Summit is hosted in Nairobi, Kenya — the first host city outside Nigeria,
            and the point at which the platform becomes a single annual global flagship. Africa is its permanent
            home; the host city rotates each year.</p>
        </div>
        <div class="callout">
          <h3>Milestones</h3>
          <div class="sched" style="margin-top:6px">
            <div class="sr">
              <div class="t">2020</div>
              <div class="d">Founded in Lagos, Nigeria</div>
            </div>
            <div class="sr">
              <div class="t">2020–25</div>
              <div class="d">Six editions established in Lagos</div>
            </div>
            <div class="sr">
              <div class="t">2025</div>
              <div class="d">Advisory Council appointed</div>
            </div>
            <div class="sr">
              <div class="t">2026</div>
              <div class="d">7th Edition — first hosted outside Nigeria, in Nairobi</div>
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
      <div class="sec-eyebrow">Panel of Judges</div>
      <h2 class="sec-title">An independent, international <span class="ac">panel of judges.</span></h2>
      <p class="sec-intro">Scoring every shortlisted nominee against published, sector-specific criteria — without
        conflict, bias or visibility of other judges' scores.</p>
      @php
        $judges = [
            ['name' => 'Esosa Balogun', 'image' => 'esosa-balogun.jpg', 'role' => 'Chair, Panel of Judges'],
            ['name' => 'Jayden Yoon', 'image' => 'jayden-yoon.jpg'],
            ['name' => 'Kenneth Ashiabuchi', 'image' => 'kenneth-ashiabuchi.jpg'],
            ['name' => 'Ndidi Ahiauzu', 'image' => 'ndidi-ahiauzu.jpg'],
            ['name' => 'Banke Ogunbodede', 'image' => 'banke-ogunbodede.jpg'],
            ['name' => 'Said Katarzyna', 'image' => 'said-katarzyna.jpg'],
            ['name' => 'Daniel Wynne', 'image' => 'daniel-wynne.jpg'],
            ['name' => 'Priju Sham', 'image' => null],
            ['name' => 'Tarun Sukhija', 'image' => 'tarun-sukhija.jpg'],
            ['name' => 'Handan Tokdogan', 'image' => 'handan-tokdogan.jpg'],
            ['name' => 'Helentung Chambers', 'image' => 'helentung-chambers.jpg'],
            ['name' => 'Emer McPartland', 'image' => 'emer-mcpartland.jpg'],
            ['name' => 'Sinead Halhed-Moran Walsh', 'image' => 'sinead-halhed-moran-walsh.jpg'],
            ['name' => 'Claire Convallaria', 'image' => 'claire-convallaria.jpg'],
            ['name' => 'Gbugbemi Atimomo', 'image' => 'gbugbemi-atimomo.jpg'],
            ['name' => 'Dayo Adeyemi', 'image' => null],
            ['name' => 'Ope Osiyemi', 'image' => 'ope-osiyemi.jpg'],
            ['name' => 'Emmanuel Michael', 'image' => 'emmanuel-michael.jpg'],
            ['name' => 'Temitope Yusuff', 'image' => 'temitope-yusuff.jpg'],
            ['name' => 'Ebuwa Babajide', 'image' => 'ebuwa-babajide.jpg'],
            ['name' => 'Sunny Ukeachu', 'image' => 'sunny-ukeachu.jpg'],
            ['name' => 'Yahya Oubrahim', 'image' => 'yahya-oubrahim.jpg'],
            ['name' => 'Abraham Awe', 'image' => 'abraham-awe.jpg'],
            ['name' => 'Femi Mosaku-Johnson', 'image' => 'femi-mosaku-johnson.jpg'],
            ['name' => 'Joash Ombati', 'image' => 'joash-ombati.jpg'],
            ['name' => 'Richard Mayungbe', 'image' => 'richard-mayungbe.jpg'],
            ['name' => 'Meryem Bouzoubaa', 'image' => 'meryem-bouzoubaa.jpg'],
            ['name' => 'Emeka Offor', 'image' => 'emeka-offor.jpg'],
            ['name' => 'Raksha Beecum-Khadaroo', 'image' => 'raksha-beecum-khadaroo.jpg'],
            ['name' => 'Babongile Mthwthwa', 'image' => 'babongile-mthwthwa.jpg'],
            ['name' => 'Catherine Jeruto', 'image' => 'catherine-jeruto.jpg'],
            ['name' => 'Tayo Felix Ogunneye', 'image' => 'tayo-felix-ogunneye.jpg'],
            ['name' => 'Craig Skinner', 'image' => 'craig-skinner.jpg'],
            ['name' => 'Paolo Rovatti', 'image' => null],
            ['name' => 'Izabella Ferreira Pinto de Calvaho', 'image' => 'izabella-ferreira-pinto-de-calvaho.jpg'],
            ['name' => 'Brendan Greiner', 'image' => 'brendan-greiner.jpg'],
            ['name' => 'Kenneth Oguzie', 'image' => 'kenneth-oguzie.jpg'],
            ['name' => 'Olu Ajayi', 'image' => 'olu-ajayi.jpg'],
        ];
      @endphp
      <div class="grid g4" style="margin-top:26px">
        @foreach ($judges as $judge)
        <div class="spk">
          <div class="av">
            @if ($judge['image'])
            <img src="{{ asset('assets/images/judges/'.$judge['image']) }}" alt="{{ $judge['name'] }}" loading="lazy">
            @else
            {{ collect(explode(' ', $judge['name']))->map(fn($w) => mb_substr($w, 0, 1))->join('') }}
            @endif
          </div>
          <div class="nm">{{ $judge['name'] }}</div>
          @if (!empty($judge['role']))
          <div class="rl">{{ $judge['role'] }}</div>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="band cream">
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
          <h3>One Global Gathering</h3>
          <p>A virtual Mid-Year Summit and one flagship in-person Awards &amp; Summit — accessible, global,
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
