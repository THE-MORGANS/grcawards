<!DOCTYPE html>
<html lang="en">
@section('title', 'Africa Edition — GRC & Financial Crime Prevention Awards & Summit 2026 | Nairobi')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>



  <!-- =============== PRELOADER =============== -->
  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="hero">
    <svg class="route" viewBox="0 0 1200 420" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
      <path d="M250 170 Q620 20 960 300" fill="none" stroke="#C9A24B" stroke-width="2" stroke-dasharray="3 9"
        opacity=".55" />
      <g opacity=".8">
        <circle cx="250" cy="170" r="6" fill="#C9A24B" />
        <circle cx="250" cy="170" r="13" fill="none" stroke="#C9A24B" stroke-width="1.4" opacity=".5" />
        <text x="250" y="150" fill="#E2C988" font-family="Poppins,sans-serif" font-size="15" font-weight="600"
          text-anchor="middle" letter-spacing="1">LONDON</text>
      </g>
      <g opacity=".8">
        <circle cx="960" cy="300" r="6" fill="#C9A24B" />
        <circle cx="960" cy="300" r="13" fill="none" stroke="#C9A24B" stroke-width="1.4" opacity=".5" />
        <text x="960" y="336" fill="#E2C988" font-family="Poppins,sans-serif" font-size="15" font-weight="600"
          text-anchor="middle" letter-spacing="1">NAIROBI</text>
      </g>
      <path d="M600 60 l16 6 -6 -16 z" fill="#E2C988" transform="rotate(28 608 63)" opacity=".9" />
    </svg>
    <div class="wrap">
      <span class="hero-badge"><span class="dot"></span>THE MORGANS · 7th Annual · Two Editions · 2026</span>
      <h1>GRC &amp; Financial Crime <span class="ac">excellence,</span><br>recognised across <span class="ac">Africa
          &amp; Europe.</span></h1>
      <p class="lede">Two flagship editions. One global standard. The GRC &amp; Financial Crime Prevention Awards &amp;
        Summit convenes regulators, bankers, fintech leaders and compliance professionals in Nairobi and London to raise
        the bar for governance, risk and integrity worldwide.</p>
      <div class="cta-row"><a class="btn btn-gold" href="#editions">Explore the Editions →</a><a class="btn btn-ghost"
          href="{{ route('show_vote') }}">Cast Your Vote</a></div>
    </div>
  </header>

  <section class="band white" id="editions">
    <div class="wrap">
      <div class="center">
        <div class="sec-eyebrow">2026 Editions</div>
        <h2 class="sec-title">Two continents. <span class="ac">One global standard.</span></h2>
        <p class="sec-intro" style="margin:14px auto 0">Choose your edition. Each brings the full Awards &amp; Summit
          experience — a morning of rigorous dialogue and an evening of well-earned recognition — tailored to its
          region's regulatory landscape.</p>
      </div>
      <div class="editions" style="margin-top:36px">
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
          <div class="acts"><span class="btn btn-gold btn-sm">View Africa Edition →</span></div>
        </a>
        <a class="edcard eu" href="{{ route('edition.europe') }}">
          <div class="ed-sky"><svg viewBox="0 0 1000 118" preserveAspectRatio="xMidYMax meet"
              xmlns="http://www.w3.org/2000/svg">
              <g fill="#C9A24B">
                <rect x="70" y="82" width="40" height="36" />
                <rect x="200" y="74" width="30" height="44" />
                <!-- Big Ben -->
                <rect x="252" y="36" width="22" height="82" />
                <path d="M252 36h22l-11-16z" />
                <rect x="259" y="46" width="8" height="8" fill="#0E1838" />
                <!-- St Paul's -->
                <rect x="360" y="66" width="44" height="52" />
                <path d="M360 66q22-34 44 0z" />
                <rect x="378" y="30" width="8" height="10" />
                <rect x="380" y="22" width="4" height="10" />
                <rect x="316" y="80" width="30" height="38" />
                <rect x="420" y="74" width="26" height="44" />
                <!-- Gherkin -->
                <path d="M462 118V70q0-26 16-30 16 4 16 30v48z" />
                <rect x="475" y="34" width="6" height="8" />
                <rect x="512" y="72" width="26" height="46" />
                <rect x="546" y="60" width="22" height="58" />
                <!-- The Shard (tallest) -->
                <path d="M600 118 L636 118 L621 16 Z" />
                <rect x="619" y="6" width="4" height="12" />
                <rect x="650" y="66" width="24" height="52" />
                <rect x="684" y="78" width="30" height="40" />
                <!-- Tower Bridge -->
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
                <!-- London Eye -->
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
          <span class="status-pill soon">Save the Date</span>
          <div class="lbl" style="margin-top:12px">Europe Edition</div>
          <h3>London, United Kingdom</h3>
          <div class="city">London Marriott Hotel</div>
          <div class="row"><span>📅 <b>6 November 2026</b></span><span>🕙 Summit + Gala</span></div>
          <div class="acts"><span class="btn btn-navy btn-sm" style="background:#3F6FB0">View Europe Edition →</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="band navy">
    <div class="wrap">
      <div class="stats">
        <div class="st">
          <div class="n">7th</div>
          <div class="l">Annual Edition</div>
        </div>
        <div class="st">
          <div class="n">2</div>
          <div class="l">Global Editions</div>
        </div>
        <div class="st">
          <div class="n">6</div>
          <div class="l">Award Pillars</div>
        </div>
        <div class="st">
          <div class="n">40+</div>
          <div class="l">Categories</div>
        </div>
        <div class="st">
          <div class="n">2020</div>
          <div class="l">Founded · Lagos</div>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap center">
      <div class="sec-eyebrow">Trusted Across the Profession</div>
      <h2 class="sec-title">Recognising the leaders <span class="ac">raising the standard.</span></h2>
    </div>
    <div class="marquee" style="margin-top:30px">
      <div class="track">
        <span>Equity Bank</span><span>KCB Group</span><span>Standard Bank</span><span>Access
          Bank</span><span>Flutterwave</span><span>Deloitte
          Africa</span><span>KPMG</span><span>PwC</span><span>EY</span><span>Moniepoint</span><span>ENSafrica</span>
        <span>Equity Bank</span><span>KCB Group</span><span>Standard Bank</span><span>Access
          Bank</span><span>Flutterwave</span><span>Deloitte
          Africa</span><span>KPMG</span><span>PwC</span><span>EY</span><span>Moniepoint</span><span>ENSafrica</span>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Awards Process — 2026</div>
      <h2 class="sec-title">How nominees become <span class="ac">award recipients.</span></h2>
      <p class="sec-intro">A transparent, four-stage journey applied consistently across both editions — combining
        public voice with independent, conflict-free judging.</p>
      <div class="timeline" style="margin-top:32px">
        <div class="tl"><span class="num">01</span>
          <div class="status">✓ Completed</div>
          <h3>Nomination</h3>
          <div class="when">Open earlier in 2026</div>
          <p>Individuals and organisations across all sectors are nominated for recognition across the six award
            pillars.</p>
        </div>
        <div class="tl"><span class="num">02</span>
          <div class="status">● Live now</div>
          <h3>Public Voting</h3>
          <div class="when">Africa: 15 Jun – 15 Aug</div>
          <p>The public votes; the top 5 per category by public vote proceed to independent judging. One vote per person
            per category.</p>
        </div>
        <div class="tl"><span class="num">03</span>
          <div class="status">Next</div>
          <h3>Independent Judging</h3>
          <div class="when">Aug – Oct 2026</div>
          <p>Judges score each shortlisted nominee against published, sector-specific criteria — without conflict, bias
            or visibility of other scores.</p>
        </div>
        <div class="tl"><span class="num">04</span>
          <div class="status">The finale</div>
          <h3>Gala Ceremony</h3>
          <div class="when">On the night</div>
          <p>The top 3 finalists per category are recognised at the black-tie Gala; only the winner is revealed on the
            evening.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Award Pillars</div>
      <h2 class="sec-title">Excellence recognised across <span class="ac">every sector.</span></h2>
      <div class="grid g3" style="margin-top:30px">
        <div class="card">
          <div class="k">01</div>
          <h3>GRC &amp; FinCrime Achievement</h3>
          <p>Banks, microfinance, fintech, insurance and asset management leading on AML/CFT and GRC.</p>
        </div>
        <div class="card">
          <div class="k">02</div>
          <h3>Sector GRC Excellence</h3>
          <p>Energy, engineering, manufacturing, healthcare, aviation, telecoms, legal, agriculture &amp; public sector.
          </p>
        </div>
        <div class="card">
          <div class="k">03</div>
          <h3>Individual Leadership</h3>
          <p>Influencers, FinCrime and GRC leaders, cyber champions, auditors and rising stars.</p>
        </div>
        <div class="card">
          <div class="k">04</div>
          <h3>Women in GRC &amp; FinCrime</h3>
          <p>Recognising women advancing excellence and equity across the profession.</p>
        </div>
        <div class="card">
          <div class="k">05</div>
          <h3>Media &amp; Promoters</h3>
          <p>Reporters, publications, broadcasters and digital media advancing the conversation.</p>
        </div>
        <div class="card">
          <div class="k">06</div>
          <h3>Providers &amp; Lifetime</h3>
          <p>Training, advisory, RegTech and recruitment providers — plus the Lifetime Achievement Award.</p>
        </div>
      </div>
      <div class="center" style="margin-top:26px"><a class="btn btn-navy" href="{{ route('show_sect_cat') }}">See All Categories
          →</a></div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Past Honourees</div>
      <h2 class="sec-title">In distinguished <span class="ac">company.</span></h2>
      <div class="grid g4" style="margin-top:28px">
        <div class="card">
          <h3 style="color:var(--gold-deep)">Dr. Ngozi Okonjo-Iweala</h3>
          <p>Lifetime Achievement · 2025</p>
        </div>
        <div class="card">
          <h3 style="color:var(--gold-deep)">Tony Elumelu</h3>
          <p>GRC &amp; FinCrime Influencer · 2025</p>
        </div>
        <div class="card">
          <h3 style="color:var(--gold-deep)">Cecilia Akintomide</h3>
          <p>Governance Leadership · 2025</p>
        </div>
        <div class="card">
          <h3 style="color:var(--gold-deep)">Dr. Gregory Jobome</h3>
          <p>Risk Leadership · 2025</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band navy">
    <div class="wrap center">
      <div class="sec-eyebrow">Get Involved</div>
      <h2 class="sec-title">Vote. Attend. <span class="ac">Partner.</span></h2>
      <p class="sec-intro" style="margin:14px auto 0">Cast your vote in the Africa Edition, reserve your place in
        Nairobi, register interest for London, or partner with us as a sponsor.</p>
      <div class="cta-row" style="justify-content:center;margin-top:26px">
        <a class="btn btn-crimson" href="{{ route('show_vote') }}">Cast Your Vote</a><a class="btn btn-gold" href="{{ route('show_tickets') }}">Book
          Tickets</a><a class="btn btn-ghost" href="{{ route('show_sponsors') }}">Become a Sponsor</a>
      </div>
    </div>
  </section>



  @include('partials.voter.footer_new_theme')


</body>

</html>