<!DOCTYPE html>
<html lang="en">
@section('title', '7th Annual GRC & Financial Crime Prevention Global Awards & Summit — Nairobi, Kenya | 20 November 2026')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <span class="ed-tag af"><span class="pin af"></span>THE GLOBAL PERIMETER · 20 November 2026</span>
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Nairobi</div>
      <h1>7th Annual Global Awards &amp; Summit — <span class="ac">Nairobi.</span></h1>
      <p>THE GLOBAL PERIMETER: building resilient institutions across borders. A global platform, an African home —
        the Awards &amp; Summit convenes in Nairobi, East Africa's foremost financial and innovation hub.</p>
      <div class="cta-row" style="margin-top:20px"><a class="btn btn-gold" href="{{ route('show_tickets') }}">Book Tickets →</a></div>
    </div>
  </header>

  <section class="band navy" style="padding:32px 0">
    <div class="wrap">
      <div class="glance">
        <div class="gi">
          <div class="lab">Theme</div>
          <div class="val">The Global Perimeter</div>
        </div>
        <div class="gi">
          <div class="lab">Date</div>
          <div class="val">20 Nov 2026</div>
        </div>
        <div class="gi">
          <div class="lab">Summit</div>
          <div class="val">09:00–15:00 EAT</div>
        </div>
        <div class="gi">
          <div class="lab">Gala</div>
          <div class="val">18:00–21:00 EAT</div>
        </div>
        <div class="gi">
          <div class="lab">Dress</div>
          <div class="val">Black Tie / African Formal</div>
        </div>
        <div class="gi">
          <div class="lab">Venue</div>
          <div class="val">Radisson Blu, Nairobi</div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream" style="padding:36px 0">
    <div class="wrap">
      <div class="callout" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:20px">
        <div>
          <span class="status-pill soon">Voting Closed</span>
          <h3 style="margin-top:10px">Public voting has closed</h3>
          <p style="color:var(--muted);font-size:14px;max-width:640px">Thank you to everyone who cast a vote for
            the individuals and organisations you believe deserve recognition at the Nairobi Gala. The top 5 per
            category by public vote now proceed to independent judging.</p>
        </div>
        <a class="btn btn-crimson" href="{{ route('show_login_form') }}">Learn More →</a>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">About This Event</div>
      <h2 class="sec-title">A global perimeter, <span class="ac">anchored in Africa.</span></h2>
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
      <div class="sec-eyebrow">Who the Summit Is For</div>
      <h2 class="sec-title">GRC is not <span class="ac">a sector.</span></h2>
      <p class="sec-intro">It is the infrastructure through which responsible institutions are governed. Financial
        crime is not solely a banking problem. Legal liability does not stop at national borders. Cyber risk does
        not respect industry boundaries. Third-party risk travels through entire supply chains. And institutional
        resilience cannot be owned by a single department.</p>
      <div class="grid g3" style="margin-top:28px">
        <div class="card">
          <h3>Financial Services</h3>
          <p>Banking · Insurance · FinTech · Payments · Microfinance · Asset Management · Capital Markets · Digital
            Assets · Pensions</p>
        </div>
        <div class="card">
          <h3>Legal &amp; Professional Services</h3>
          <p>Law Firms · In-House Legal · General Counsel · Company Secretaries · Accountancy · Audit · Consulting ·
            Insolvency · Forensics · Investigations</p>
        </div>
        <div class="card">
          <h3>Technology &amp; Telecommunications</h3>
          <p>Technology · Telecoms · Cybersecurity · Cloud · AI · Data · Digital Identity · RegTech · Platforms</p>
        </div>
        <div class="card">
          <h3>Energy, Extractives &amp; Infrastructure</h3>
          <p>Oil &amp; Gas · Mining · Energy · Utilities · Engineering · Construction · Infrastructure</p>
        </div>
        <div class="card">
          <h3>Real Estate &amp; Property</h3>
          <p>Development · Real Estate · Estate Agency · Property Investment · Housing · Facilities Management</p>
        </div>
        <div class="card">
          <h3>Healthcare &amp; Life Sciences</h3>
          <p>Healthcare · Pharmaceuticals · Medical Technology · Health Insurance · Research</p>
        </div>
        <div class="card">
          <h3>Consumer &amp; Commercial</h3>
          <p>Retail · E-commerce · Manufacturing · FMCG · Hospitality · Media · Entertainment · Sports</p>
        </div>
        <div class="card">
          <h3>Transport &amp; Global Trade</h3>
          <p>Aviation · Maritime · Ports · Shipping · Logistics · Freight · Automotive · International Trade</p>
        </div>
        <div class="card">
          <h3>Public &amp; Third Sectors</h3>
          <p>Government · Regulators · Law Enforcement · State-Owned Enterprises · NGOs · Charities · Development ·
            Education</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Global Summit — 20 November 2026 · 09:00–15:00 EAT</div>
      <h2 class="sec-title">Cross-sector <span class="ac">by design.</span></h2>
      <p class="sec-intro">Governance, risk, compliance and financial crime are no longer challenges belonging
        exclusively to banks. The 2026 Summit is built for financial services and the wider economy alike — legal
        and professional services, technology and telecoms, energy and extractives, healthcare, real estate,
        transport and trade, government and the third sector.</p>
      <div class="sched" style="margin-top:26px">
        <div class="sr">
          <div class="t">08:00</div>
          <div class="d">Registration, welcome breakfast &amp; cross-sector networking</div>
        </div>
        <div class="sr">
          <div class="t">09:00</div>
          <div class="d"><b>Global Opening</b> — Welcome to Nairobi and to the 7th Annual Global Awards &amp;
            Summit</div>
        </div>
        <div class="sr">
          <div class="t">09:10</div>
          <div class="d"><b>Convener's Address</b> — From Lagos to Nairobi: six years of heritage, a seventh-year
            transformation, one global community</div>
        </div>
        <div class="sr">
          <div class="t">09:25</div>
          <div class="d"><b>Host Country Welcome</b></div>
        </div>
        <div class="sr">
          <div class="t">09:40</div>
          <div class="d"><b>Opening keynote — THE GLOBAL PERIMETER</b> · establishing GRC as an enterprise and
            societal issue, not a financial-services compliance discipline</div>
        </div>
        <div class="sr">
          <div class="t">10:00</div>
          <div class="d">Governance &amp; Board Leadership — <b>Global Leadership Panel: Governing Beyond
              Borders</b></div>
        </div>
        <div class="sr">
          <div class="t">10:40</div>
          <div class="d">Legal, Enforcement &amp; Corporate Accountability — <b>When Compliance Becomes a Legal
              Question</b></div>
        </div>
        <div class="sr">
          <div class="t">11:20</div>
          <div class="d">Networking &amp; refreshment break</div>
        </div>
        <div class="sr">
          <div class="t">11:40</div>
          <div class="d">Financial Crime, AML/CFT &amp; Fraud — <b>Financial Crime Doesn't Stop at the Bank</b></div>
        </div>
        <div class="sr">
          <div class="t">12:20</div>
          <div class="d">Cross-Sector &amp; Cross-Border Cooperation — <b>Beyond Financial Services: Why GRC Is Now
              Everyone's Business</b></div>
        </div>
        <div class="sr">
          <div class="t">13:00</div>
          <div class="d">AI, Cyber, Data &amp; Emerging Technology — <b>AI, Cyber, RegTech &amp; the Intelligent
              Enterprise</b></div>
        </div>
        <div class="sr">
          <div class="t">13:40</div>
          <div class="d">Cross-Sector &amp; Cross-Border Cooperation — <b>Across the Corridor: Global Corridors
              Dialogue</b></div>
        </div>
        <div class="sr">
          <div class="t">14:20</div>
          <div class="d">Risk &amp; Institutional Resilience — <b>Closing Boardroom: The Resilient
              Institution</b></div>
        </div>
        <div class="sr">
          <div class="t">14:50</div>
          <div class="d"><b>THE NAIROBI DECLARATION</b> — a global call for resilient institutions, closing
            conclusions from Nairobi 2026</div>
        </div>
        <div class="sr">
          <div class="t">15:00</div>
          <div class="d"><b>Global Summit closes</b></div>
        </div>
        <div class="sr">
          <div class="t">15:00</div>
          <div class="d"><b>Summit–Gala intermission</b> — a three-hour protected break: delegate refresh, ballroom
            transformation, awards setup, technical rehearsal and media coordination</div>
        </div>
        <div class="sr">
          <div class="t">17:15</div>
          <div class="d">Red carpet &amp; global reception</div>
        </div>
        <div class="sr">
          <div class="t">18:00</div>
          <div class="d"><b>Global Awards Gala</b> — five chapters: Governance &amp; Organisational Excellence ·
            Compliance &amp; Financial Crime Prevention · Legal, Professional &amp; Cross-Sector · Technology,
            Innovation, Women &amp; Emerging Leadership · Global Honours</div>
        </div>
        <div class="sr">
          <div class="t">21:00</div>
          <div class="d"><b>Formal event closes</b></div>
        </div>
      </div>
      <p class="sec-intro" style="margin-top:20px;font-size:13px">Global Summit 09:00–15:00 EAT. Global Awards Gala
        18:00–21:00 EAT. Every session belongs to one of nine programme themes. Programme provisional; speakers
        confirmed on a rolling basis.</p>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Summit Sessions</div>
      <h2 class="sec-title">Seven panels. <span class="ac">Nine programme themes.</span></h2>
      <div style="margin-top:28px">
        <div class="sessions">
          <div class="ses">
            <div class="no">01</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Governance &amp; Board Leadership</div>
              <h4>Global Leadership Panel — Governing Beyond Borders</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Regulator · Board/CEO · General Counsel
                · CRO/CCO · Public Sector · Industry leader. Cross-border expectations, corporate accountability,
                regulatory fragmentation, institutional resilience.</p>
              <span class="tag">Plenary</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">02</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Legal, Enforcement &amp; Corporate Accountability</div>
              <h4>When Compliance Becomes a Legal Question</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Senior Counsel · General Counsel ·
                Regulator · Prosecutor · CCO/MLRO. Corporate criminal liability, personal accountability, privilege,
                cross-border investigations, professional enablers, beneficial ownership.</p>
              <span class="tag">Flagship</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">03</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Financial Crime, AML/CFT &amp; Fraud</div>
              <h4>Financial Crime Doesn't Stop at the Bank</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Banking · Legal · Telecoms/Technology ·
                Real Estate/Extractives · Law Enforcement. Following money, assets, companies and professional
                enablers across industries.</p>
              <span class="tag">Flagship</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">04</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Cross-Sector &amp; Cross-Border Cooperation</div>
              <h4>Beyond Financial Services — Why GRC Is Now Everyone's Business</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Telecoms · Energy &amp; Mining ·
                Healthcare · Technology · Manufacturing · Transport · Real Estate. Enterprise risk, anti-bribery,
                third-party and supply-chain integrity, ESG, whistleblowing, board oversight.</p>
              <span class="tag">Flagship</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">05</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                AI, Cyber, Data &amp; Emerging Technology</div>
              <h4>AI, Cyber, RegTech &amp; the Intelligent Enterprise</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">AI governance, deepfakes, synthetic
                identity, algorithmic accountability, model risk, digital identity, responsible AI — across every
                industry.</p>
              <span class="tag">Panel</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">06</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Cross-Sector &amp; Cross-Border Cooperation</div>
              <h4>Across the Corridor — Global Corridors Dialogue</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Africa · UK/Europe · Middle
                East/International · Multinational corporate. Trade, capital, sanctions, supply chains, corporate
                structures, cross-border investigations and regulatory cooperation.</p>
              <span class="tag">Panel</span>
            </div>
          </div>
          <div class="ses">
            <div class="no">07</div>
            <div>
              <div style="font-family:var(--sans);font-size:10.5px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px">
                Risk &amp; Institutional Resilience</div>
              <h4>Closing Boardroom — The Resilient Institution</h4>
              <p style="font-size:12.5px;color:var(--muted);margin-top:5px">Board Director · General Counsel · CRO ·
                CCO/MLRO · CISO · Internal Audit. Breaking the silos between governance, legal, risk, compliance,
                cyber and financial crime.</p>
              <span class="tag">Boardroom</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Speakers — 2026 Programme</div>
      <h2 class="sec-title">The voices leading <span class="ac">the global GRC conversation.</span></h2>
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
      <div class="sec-eyebrow">Award Categories — 2026</div>
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
          <p class="sec-intro" style="margin-top:0">The Radisson Blu sits on Elgon Road in Upper Hill — Nairobi's
            business and financial district, home to the regional offices of international banks, development
            finance institutions, regulators and multilaterals. It offers one of the largest conference facilities
            in Kenya: fourteen meeting spaces totalling 1,419 sq m, a 150 sq m exhibition area, and the 590 sq m
            Mount Kilimanjaro Ballroom.</p>
          <p class="sec-intro">271 guest rooms and suites are on site — worth booking, given a delegate day that
            runs from 08:00 registration to a 21:00 close.</p>
          <div class="chips" style="margin-top:18px"><span class="chip">Mount Kilimanjaro Ballroom</span><span
              class="chip">14 meeting spaces</span><span class="chip">150 sq m exhibition area</span><span
              class="chip">271 guest rooms</span><span class="chip">~10 min from CBD</span></div>
          <div class="callout" style="margin-top:20px">
            <p style="font-size:13.5px;color:var(--muted);margin:0">🧳 A delegate travel pack — covering visa
              guidance, negotiated hotel rates, airport transfers and a suggested arrival schedule — is issued on
              registration. Most nationalities require a Kenya eVisa or Electronic Travel Authorisation; apply at
              least three weeks ahead.</p>
          </div>
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
      <div style="font-family:var(--sans);font-size:11px;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold-soft);margin-bottom:10px">
        Voting Has Closed</div>
      <h2 class="sec-title">Be part of THE GLOBAL PERIMETER.</h2>
      <div class="cta-row" style="justify-content:center;margin-top:22px"><a class="btn btn-gold"
          href="{{ route('show_tickets') }}">Book Tickets</a></div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
