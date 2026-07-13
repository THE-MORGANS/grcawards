<!DOCTYPE html>
<html lang="en">
@section('title', 'Africa Edition 2026 — Nairobi | GRC & Financial Crime Prevention Awards & Summit')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <span class="ed-tag af"><span class="pin af"></span>Africa Edition</span>
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · <a
          href="{{ route('landing.index') }}#editions">Editions</a> · Nairobi</div>
      <h1>Africa Edition 2026 — <span class="ac">Nairobi.</span></h1>
      <p>East Africa Rising: building resilient institutions and compliance ecosystems fit for the future. For the
        first time in seven years, the Awards &amp; Summit travels to Nairobi — East Africa's foremost financial and
        innovation hub.</p>
      <div class="cta-row" style="margin-top:20px"><a class="btn btn-gold" href="{{ route('show_vote') }}">Cast Your
          Vote →</a><a class="btn btn-ghost" href="{{ route('show_tickets') }}">Book Tickets</a></div>
    </div>
  </header>

  <section class="band navy" style="padding:32px 0">
    <div class="wrap">
      <div class="glance">
        <div class="gi">
          <div class="lab">Theme</div>
          <div class="val">East Africa Rising</div>
        </div>
        <div class="gi">
          <div class="lab">Date</div>
          <div class="val">20 Nov 2026</div>
        </div>
        <div class="gi">
          <div class="lab">Summit</div>
          <div class="val">10:00–14:00 EAT</div>
        </div>
        <div class="gi">
          <div class="lab">Gala</div>
          <div class="val">16:00–19:00 EAT</div>
        </div>
        <div class="gi">
          <div class="lab">Dress</div>
          <div class="val">Black Tie / African Formal</div>
        </div>
        <div class="gi">
          <div class="lab">Venue</div>
          <div class="val">Marriott, Nairobi</div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream" style="padding:36px 0">
    <div class="wrap">
      <div class="callout" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:20px">
        <div>
          <span class="status-pill live">● Voting Live</span>
          <h3 style="margin-top:10px">Public voting is open for the Africa Edition</h3>
          <p style="color:var(--muted);font-size:14px;max-width:640px">Nominations have closed — cast your vote for
            the individuals and organisations you believe deserve recognition at the Nairobi Gala. The top 5 per
            category by public vote proceed to independent judging. Voting closes <b>15 August 2026</b>.</p>
        </div>
        <a class="btn btn-crimson" href="{{ route('show_vote') }}">Cast Your Vote →</a>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">About This Edition</div>
      <h2 class="sec-title">East Africa is writing <span class="ac">its own rulebook.</span></h2>
      <p class="sec-intro">Regulators, bankers, fintech leaders, compliance professionals and policymakers gather for
        a day of rigorous dialogue and recognition — building homegrown solutions that reflect the region's own
        economic, cultural and institutional realities.</p>
      <div class="grid g4" style="margin-top:28px">
        <div class="card icard"><span class="em">🏦</span>
          <div>
            <h3>Maturing sector</h3>
            <p>Banking, insurance and capital markets professionalising fast.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">📱</span>
          <div>
            <h3>Mobile-first</h3>
            <p>Kenya's mobile-money ecosystem — a global reference point.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">⚖️</span>
          <div>
            <h3>Evolving regulation</h3>
            <p>ESAAMLG, central-bank directives and FATF evaluations.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🌍</span>
          <div>
            <h3>Pan-African network</h3>
            <p>Nairobi joins Lagos in the Awards' history.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">The Day — 20 November 2026</div>
      <h2 class="sec-title">A morning of ideas. <span class="ac">An evening of recognition.</span></h2>
      <div class="sched" style="margin-top:26px">
        <div class="sr">
          <div class="t">09:00</div>
          <div class="d">Registration &amp; welcome coffee</div>
        </div>
        <div class="sr">
          <div class="t">10:00</div>
          <div class="d"><b>Summit opens</b> — Keynote: East Africa Rising</div>
        </div>
        <div class="sr">
          <div class="t">10:30</div>
          <div class="d">Summit sessions &amp; panel discussions</div>
        </div>
        <div class="sr">
          <div class="t">12:30</div>
          <div class="d">Networking luncheon</div>
        </div>
        <div class="sr">
          <div class="t">13:30</div>
          <div class="d">Afternoon roundtables &amp; sessions</div>
        </div>
        <div class="sr">
          <div class="t">14:00</div>
          <div class="d"><b>Summit closes</b></div>
        </div>
        <div class="sr">
          <div class="t">16:00</div>
          <div class="d">Cocktail reception &amp; welcome drinks</div>
        </div>
        <div class="sr">
          <div class="t">17:00</div>
          <div class="d"><b>Gala Awards Ceremony opens</b> · presentations &amp; formal dinner</div>
        </div>
        <div class="sr">
          <div class="t">19:00</div>
          <div class="d"><b>Gala closes</b></div>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Summit Sessions</div>
      <h2 class="sec-title">Eight sessions. <span class="ac">Every sector.</span></h2>
      <div style="margin-top:28px">
        <div class="sessions">
          <div class="ses">
            <div class="no">01</div>
            <div>
              <h4>Regulatory Pulse: Navigating East Africa's AML/CFT &amp; Compliance Landscape</h4>
              <span class="tag">Regulatory Intelligence</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">02</div>
            <div>
              <h4>Homegrown Solutions: GRC Frameworks That Reflect African Market Realities</h4>
              <span class="tag">Governance &amp; Culture</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">03</div>
            <div>
              <h4>The Financial Crime Threat: From Mobile-Money Fraud to Trade-Based Laundering</h4>
              <span class="tag">FinCrime Disruption</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">04</div>
            <div>
              <h4>Digital Finance &amp; Crypto: Compliance in a Mobile-First Economy</h4>
              <span class="tag">Technology &amp; Innovation</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">05</div>
            <div>
              <h4>Governance &amp; Accountability: Board-Level Responsibility in African Institutions</h4>
              <span class="tag">Governance &amp; Culture</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">06</div>
            <div>
              <h4>Women Leading GRC: Advancing Gender Equity in the Compliance Profession</h4>
              <span class="tag">Leadership &amp; Diversity</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">07</div>
            <div>
              <h4>RegTech for Africa: Practical Technology Adoption for Constrained Environments</h4>
              <span class="tag">Technology &amp; Innovation</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">08</div>
            <div>
              <h4>Building the Next Generation: Talent, Education &amp; the Future of African GRC</h4>
              <span class="tag">Leadership &amp; Diversity</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Speakers — Africa Edition</div>
      <h2 class="sec-title">The voices leading <span class="ac">East Africa's GRC conversation.</span></h2>
      <p class="sec-intro">Keynotes and panellists drawn from banking, fintech, insurance, regulators, legal,
        RegTech and academia. Names confirmed on a rolling basis.</p>
      <div class="grid g4" style="margin-top:26px">
        <div class="spk">
          <div class="av">CCO</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Group Chief Compliance Officer — Tier-1 Commercial Bank, East Africa</div>
        </div>
        <div class="spk">
          <div class="av">FT</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Head of Compliance &amp; Risk — Mobile Money / Digital Finance Platform</div>
        </div>
        <div class="spk">
          <div class="av">CRO</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Chief Risk Officer — Insurance / Asset Management, Africa</div>
        </div>
        <div class="spk">
          <div class="av">FIU</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Director — Financial Intelligence Unit, East Africa</div>
        </div>
        <div class="spk">
          <div class="av">CB</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Director, Financial Sector Supervision — Central Bank of Kenya or Equivalent</div>
        </div>
        <div class="spk">
          <div class="av">LAW</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Senior Partner, Financial Crime &amp; Compliance — Pan-African Law Firm</div>
        </div>
        <div class="spk">
          <div class="av">RT</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Founder &amp; CEO — East Africa RegTech / Compliance Technology</div>
        </div>
        <div class="spk">
          <div class="av">AC</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Professor, Governance Risk &amp; Compliance — Leading East African University</div>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Award Categories — Africa Edition 2026</div>
      <h2 class="sec-title">Excellence recognised across <span class="ac">every sector of the economy.</span></h2>
      <p class="sec-intro">Six award pillars spanning every regulated sector — from financial services and fintech
        to energy, engineering, manufacturing, healthcare, aviation, telecoms and the public sector.</p>
      <div class="grid g3" style="margin-top:28px">
        <div class="card">
          <div class="k">01</div>
          <h3>GRC &amp; FinCrime Achievement</h3>
          <p>Banks, microfinance, fintech, insurance and asset management leading on AML/CFT and GRC.</p>
        </div>
        <div class="card">
          <div class="k">02</div>
          <h3>Sector GRC Excellence</h3>
          <p>Energy, engineering, manufacturing, healthcare, aviation, telecoms, legal, agriculture &amp; public
            sector.</p>
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
      <div class="center" style="margin-top:26px"><a class="btn btn-navy" href="{{ route('show_sect_cat') }}">See All
          Categories →</a></div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">The Venue</div>
      <h2 class="sec-title">Nairobi's address for <span class="ac">international excellence.</span></h2>
      <div class="grid g2" style="margin-top:24px;align-items:start">
        <div>
          <p class="sec-intro" style="margin-top:0">The Marriott Hotel, Nairobi sits in Upper Hill — the city's
            financial and diplomatic heart, minutes from the CBD and both airports. World-class conference and
            banqueting facilities make it the natural home for East Africa's premier GRC gathering.</p>
          <div class="chips" style="margin-top:18px"><span class="chip">Grand ballroom</span><span
              class="chip">Exhibition spaces</span><span class="chip">High-spec AV</span><span
              class="chip">On-site accommodation</span><span class="chip">~10 min from CBD</span></div>
        </div>
        <div class="glance" style="grid-template-columns:1fr 1fr">
          <div class="gi">
            <div class="lab">✈️ From JKIA</div>
            <div class="val">~25–40 min</div>
          </div>
          <div class="gi">
            <div class="lab">🛩️ From Wilson</div>
            <div class="val">~10–15 min</div>
          </div>
          <div class="gi">
            <div class="lab">🏙️ From CBD</div>
            <div class="val">~10 min</div>
          </div>
          <div class="gi">
            <div class="lab">🚕 Ride-hailing</div>
            <div class="val">Uber / Bolt 24/7</div>
          </div>
          <div class="gi">
            <div class="lab">👥 Capacity</div>
            <div class="val">Up to 200 guests</div>
          </div>
          <div class="gi">
            <div class="lab">✉️ Contact</div>
            <div class="val">events@grcfincrimeawards.com</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">While You're In Nairobi</div>
      <h2 class="sec-title">Make the most of <span class="ac">your visit.</span></h2>
      <p class="sec-intro">Upper Hill and the surrounding districts offer excellent dining, shopping, culture and
        nature — all within easy reach of the venue.</p>
      <div class="grid g2" style="margin-top:24px">
        <div>
          <h3 style="font-size:14px;color:var(--navy);margin-bottom:10px">🍽️ Dining, Shopping &amp; Nightlife</h3>
          <div class="chips"><span class="chip">Upper Hill &amp; Hurlingham restaurants</span><span class="chip">Yaya
              Centre</span><span class="chip">Westlands nightlife</span><span class="chip">Two Rivers Mall</span><span
              class="chip">The Hub, Karen</span></div>
        </div>
        <div>
          <h3 style="font-size:14px;color:var(--navy);margin-bottom:10px">🦒 Culture, Wildlife &amp; Parks</h3>
          <div class="chips"><span class="chip">Nairobi National Park</span><span class="chip">Giraffe
              Centre</span><span class="chip">David Sheldrick Wildlife Trust</span><span class="chip">Karen Blixen
              Museum</span><span class="chip">Uhuru Park</span><span class="chip">Nairobi Arboretum</span></div>
        </div>
      </div>
      <div class="callout" style="margin-top:26px">
        <p style="font-size:13.5px;color:var(--muted);margin:0">💡 <b>Tip for international delegates:</b> Nairobi's
          altitude (~1,795m) and equatorial climate mean mild temperatures year-round (typically 15–25°C in
          November) — light layers by day, a jacket for cooler evenings. A valid passport and, for many
          nationalities, an eVisa or e-Travel Authorisation are required for entry into Kenya.</p>
      </div>
    </div>
  </section>

  <section class="band navy">
    <div class="wrap center">
      <div style="font-family:var(--sans);font-size:11px;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold-soft);margin-bottom:10px">●
        Voting Closes 15 August 2026</div>
      <h2 class="sec-title">Be part of the Africa Edition.</h2>
      <div class="cta-row" style="justify-content:center;margin-top:22px"><a class="btn btn-gold"
          href="{{ route('show_vote') }}">Cast Your Vote</a><a class="btn btn-ghost"
          href="{{ route('show_tickets') }}">Book Tickets</a></div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
