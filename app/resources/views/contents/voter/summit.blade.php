<!DOCTYPE html>
<html lang="en">
@section('title', 'The Summit Programme')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · The Summit</div>
      <h1>The Summit <span class="ac">Programme.</span></h1>
      <p>A high-impact, multi-format global platform addressing the evolving challenges in governance, risk,
        compliance, fraud, cybersecurity and financial-crime prevention — convening regulators, practitioners,
        policymakers, academics and technology innovators across industries and jurisdictions.</p>
      <div class="cta-row" style="margin-top:20px"><a class="btn btn-gold" href="{{ route('show_tickets') }}">Book
          Your Place →</a><a class="btn btn-ghost" href="#archive">Past Summits</a></div>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Two Formats · One Mission</div>
      <h2 class="sec-title">A virtual summit each June. <span class="ac">Two galas each winter.</span></h2>
      <div class="grid g2" style="margin-top:28px">
        <div class="card icard"><span class="em">💻</span>
          <div>
            <h3>Mid-Year Virtual Summit</h3>
            <p>Held each June, this global online gathering delivers real-time dialogue on fast-evolving regulatory
              trends, digital compliance, risk intelligence and emerging threats — accessible from every region.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🏆</span>
          <div>
            <h3>End-of-Year Awards &amp; Summit</h3>
            <p>The flagship in-person events — now two editions a year in Nairobi and London — combine a day of
              keynotes and panels with the prestigious black-tie Gala Awards Ceremony.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">2026 In-Person Editions</div>
      <h2 class="sec-title">Two cities. <span class="ac">One standard.</span></h2>
      <div class="editions" style="margin-top:32px">
        <a class="edcard eu" href="{{ route('edition.europe') }}">
          <div class="ed-sky"><svg viewBox="0 0 1000 118" preserveAspectRatio="xMidYMax meet"
              xmlns="http://www.w3.org/2000/svg">
              <g fill="#C9A24B">
                <rect x="70" y="82" width="40" height="36" />
                <rect x="200" y="74" width="30" height="44" />
                <rect x="252" y="36" width="22" height="82" />
                <path d="M252 36h22l-11-16z" />
                <rect x="259" y="46" width="8" height="8" fill="#0E1838" />
                <rect x="360" y="66" width="44" height="52" />
                <path d="M360 66q22-34 44 0z" />
                <rect x="378" y="30" width="8" height="10" />
                <rect x="380" y="22" width="4" height="10" />
                <rect x="316" y="80" width="30" height="38" />
                <rect x="420" y="74" width="26" height="44" />
                <path d="M462 118V70q0-26 16-30 16 4 16 30v48z" />
                <rect x="475" y="34" width="6" height="8" />
                <rect x="512" y="72" width="26" height="46" />
                <rect x="546" y="60" width="22" height="58" />
                <path d="M600 118 L636 118 L621 16 Z" />
                <rect x="619" y="6" width="4" height="12" />
                <rect x="650" y="66" width="24" height="52" />
                <rect x="684" y="78" width="30" height="40" />
                <rect x="768" y="52" width="24" height="66" />
                <path d="M768 52h24l-12-14z" />
                <rect x="856" y="52" width="24" height="66" />
                <path d="M856 52h24l-12-14z" />
                <rect x="792" y="58" width="64" height="8" />
                <rect x="792" y="92" width="64" height="6" />
                <rect x="900" y="76" width="30" height="42" />
                <rect x="946" y="84" width="28" height="34" />
              </g>
              <g fill="none" stroke="#C9A24B" stroke-width="3.4">
                <circle cx="150" cy="60" r="30" />
                <circle cx="150" cy="60" r="5" fill="#C9A24B" stroke="none" />
                <line x1="150" y1="30" x2="150" y2="90" />
                <line x1="120" y1="60" x2="180" y2="60" />
                <line x1="129" y1="39" x2="171" y2="81" />
                <line x1="171" y1="39" x2="129" y2="81" />
                <line x1="138" y1="86" x2="150" y2="118" />
                <line x1="162" y1="86" x2="150" y2="118" />
              </g>
            </svg></div>
          <span class="status-pill soon">6 Nov 2026</span>
          <div class="lbl" style="margin-top:12px">Europe Edition</div>
          <h3>London, United Kingdom</h3>
          <div class="city">London Marriott Hotel</div>
          <div class="row"><span>📅 <b>6 November 2026</b></span><span>🕙 Summit + Gala</span></div>
          <div class="acts"><span class="btn btn-navy btn-sm" style="background:#3F6FB0">View Europe Programme
              →</span></div>
        </a>
        <a class="edcard af" href="{{ route('edition.africa') }}">
          <div class="ed-sky"><svg viewBox="0 0 1000 118" preserveAspectRatio="xMidYMax meet"
              xmlns="http://www.w3.org/2000/svg">
              <g fill="#C9A24B">
                <path d="M52 118V62M36 48c8 6 16 6 16 6s9 0 17-6c-4-10-17-12-17-12s-12 3-16 12z" />
                <rect x="50" y="62" width="4" height="56" />
                <rect x="95" y="76" width="40" height="42" />
                <rect x="140" y="60" width="30" height="58" />
                <rect x="176" y="86" width="34" height="32" />
                <rect x="220" y="42" width="26" height="76" />
                <rect x="250" y="56" width="20" height="62" />
                <rect x="278" y="28" width="30" height="90" />
                <rect x="312" y="60" width="18" height="58" />
                <rect x="360" y="18" width="42" height="100" rx="3" />
                <ellipse cx="381" cy="18" rx="34" ry="9" />
                <rect x="377" y="2" width="8" height="16" />
                <rect x="422" y="48" width="24" height="70" />
                <rect x="450" y="34" width="28" height="84" />
                <rect x="482" y="60" width="20" height="58" />
                <rect x="508" y="48" width="26" height="70" />
                <rect x="540" y="26" width="24" height="92" />
                <rect x="568" y="62" width="30" height="56" />
                <rect x="604" y="44" width="24" height="74" />
                <rect x="632" y="58" width="28" height="60" />
                <rect x="666" y="32" width="26" height="86" />
                <rect x="696" y="64" width="32" height="54" />
                <rect x="734" y="48" width="22" height="70" />
                <rect x="760" y="40" width="28" height="78" />
                <rect x="794" y="70" width="34" height="48" />
                <rect x="834" y="52" width="24" height="66" />
                <rect x="864" y="60" width="30" height="58" />
                <rect x="900" y="44" width="24" height="74" />
                <rect x="930" y="66" width="34" height="52" />
                <rect x="972" y="64" width="4" height="54" />
                <path d="M958 50c8 6 16 6 16 6s9 0 17-6c-4-10-17-12-17-12s-12 3-16 12z" />
              </g>
            </svg></div>
          <span class="status-pill live">● Voting Live</span>
          <div class="lbl" style="margin-top:12px">Africa Edition</div>
          <h3>Nairobi, Kenya</h3>
          <div class="city">Marriott Hotel · Upper Hill</div>
          <div class="row"><span>📅 <b>20 November 2026</b></span><span>🕙 Summit + Gala</span></div>
          <div class="acts"><span class="btn btn-gold btn-sm">View Africa Programme →</span></div>
        </a>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Mid-Year Virtual Summit · June 2026</div>
      <h2 class="sec-title">Beyond Compliance Theatre: <span class="ac">exposing invisible risk.</span></h2>
      <p class="sec-intro">The 7th Annual Mid-Year Virtual Global Summit convened compliance and risk leaders
        worldwide for a day of candid dialogue — cutting past box-ticking to find genuine signal in the noise:
        emerging typologies, AI-driven risk, and what "good" compliance really looks like in practice.</p>
      <div class="grid g4" style="margin-top:26px">
        <div class="card">
          <div class="k">🎙️</div>
          <h3>Global keynotes</h3>
          <p>Regulators, CCOs and compliance leaders from multiple jurisdictions.</p>
        </div>
        <div class="card">
          <div class="k">💬</div>
          <h3>Interactive panels</h3>
          <p>Live roundtables and breakout sessions across time zones.</p>
        </div>
        <div class="card">
          <div class="k">🌐</div>
          <h3>Fully virtual</h3>
          <p>Accessible from every region — inclusive, real-time participation.</p>
        </div>
        <div class="card">
          <div class="k">📊</div>
          <h3>Case studies</h3>
          <p>Cross-sector innovation showcases and practical takeaways.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">What the Summit Explores</div>
      <h2 class="sec-title">The themes shaping <span class="ac">the profession.</span></h2>
      <div class="grid g2" style="margin-top:26px;align-items:start">
        <div class="card">
          <h3>Themes &amp; Objectives</h3>
          <ul style="list-style:none;display:flex;flex-direction:column;gap:9px;margin-top:6px">
            <li style="font-size:14px;color:var(--ink);padding-left:16px;position:relative"><span
                style="position:absolute;left:0;color:var(--gold-deep)">›</span> The convergence of AI, ESG and
              digital compliance</li>
            <li style="font-size:14px;color:var(--ink);padding-left:16px;position:relative"><span
                style="position:absolute;left:0;color:var(--gold-deep)">›</span> Strengthening AML/CTF frameworks and
              cross-border collaboration</li>
            <li style="font-size:14px;color:var(--ink);padding-left:16px;position:relative"><span
                style="position:absolute;left:0;color:var(--gold-deep)">›</span> Responding to cyber threats,
              regulatory shifts and fraud risks</li>
            <li style="font-size:14px;color:var(--ink);padding-left:16px;position:relative"><span
                style="position:absolute;left:0;color:var(--gold-deep)">›</span> Promoting a culture of compliance,
              ethics and data accountability</li>
            <li style="font-size:14px;color:var(--ink);padding-left:16px;position:relative"><span
                style="position:absolute;left:0;color:var(--gold-deep)">›</span> RegTech, FinTech, SupTech and
              blockchain in GRC transformation</li>
          </ul>
        </div>
        <div class="card">
          <h3>Who Should Attend</h3>
          <div class="chips" style="margin-top:10px">
            <span class="chip">Chief Compliance Officers</span><span class="chip">Risk Directors</span><span
              class="chip">Financial Crime &amp; AML Experts</span>
            <span class="chip">ESG &amp; Ethics Leaders</span><span class="chip">Cybersecurity Executives</span><span
              class="chip">Legal &amp; Regulatory Professionals</span>
            <span class="chip">Auditors &amp; Investigators</span><span class="chip">Academia &amp;
              Policymakers</span><span class="chip">RegTech Innovators</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band white" id="archive">
    <div class="wrap">
      <div class="sec-eyebrow">Past Summits</div>
      <h2 class="sec-title">Seven years of <span class="ac">raising the standard.</span></h2>
      <p class="sec-intro">Since 2020, the Summit has grown from a single Lagos edition into a global platform.
        Explore recaps from previous years.</p>
      <div class="grid g4" style="margin-top:26px">
        <a class="card" href="{{ route('show_summit') }}">
          <div class="k">2025</div>
          <h3>Global Edition</h3>
          <p>Awards Gala &amp; Summit — view recap →</p>
        </a>
        <a class="card" href="{{ route('show_summit_2024') }}">
          <div class="k">2024</div>
          <h3>Global Edition</h3>
          <p>Awards Gala &amp; Summit — view recap →</p>
        </a>
        <a class="card" href="{{ route('show_summit_2023') }}">
          <div class="k">2023</div>
          <h3>Global Edition</h3>
          <p>Awards Gala &amp; Summit — view recap →</p>
        </a>
        <a class="card" href="{{ route('show_summit_2022') }}">
          <div class="k">2022</div>
          <h3>Global Edition</h3>
          <p>Awards Gala &amp; Summit — view recap →</p>
        </a>
      </div>
    </div>
  </section>

  <section class="band navy">
    <div class="wrap center">
      <h2 class="sec-title">Join the next Summit.</h2>
      <p class="sec-intro" style="margin:14px auto 0">London on 6 November, Nairobi on 20 November 2026. Reserve your
        place, or register interest for London.</p>
      <div class="cta-row" style="justify-content:center;margin-top:24px"><a class="btn btn-gold"
          href="{{ route('show_tickets') }}">Book Tickets</a><a class="btn btn-ghost"
          href="{{ route('edition.europe') }}">Europe Edition</a><a class="btn btn-ghost"
          href="{{ route('edition.africa') }}">Africa Edition</a></div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
