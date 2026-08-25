<!DOCTYPE html>
<html lang="en">
@section('title', '7th Annual GRC & Financial Crime Prevention Global Awards & Summit | Nairobi, Kenya · 20 November 2026')

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
      <g opacity=".8">
        <circle cx="980" cy="100" r="7" fill="#C9A24B" />
        <circle cx="980" cy="100" r="16" fill="none" stroke="#C9A24B" stroke-width="1.4" opacity=".5" />
        <circle cx="980" cy="100" r="26" fill="none" stroke="#C9A24B" stroke-width="1" opacity=".3" />
        <text x="980" y="150" fill="#E2C988" font-family="Poppins,sans-serif" font-size="16" font-weight="600"
          text-anchor="middle" letter-spacing="1.5">NAIROBI</text>
      </g>
    </svg>
    <div class="wrap">
      <span class="hero-badge" style="margin-bottom: 50px"><span class="dot"></span>
        <!-- THE MORGANS ·  -->
        7th Annual · Nairobi, Kenya · 20 November 2026 · Radisson Blu Hotel</span>
      <div style="font-family:var(--sans);font-size:12px;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold-soft);margin-bottom:10px">
        The Global Perimeter</div>
      <h1>GRC &amp; Financial Crime Prevention <span class="ac">Global Awards &amp; Summit.</span></h1>
      <p style="font-family:var(--sans);font-weight:600;font-size:16px;letter-spacing:0.01em;color:#fff;margin:14px 0 0">
        Cross-sector. Cross-border. Global.</p>
      <p class="lede">Building Resilient Institutions Across Borders. A Global Platform. An African Home. Bringing
        together regulators, policymakers, financial institutions, corporate leaders, law enforcement, technology
        innovators and GRC and financial crime professionals from Africa and across the world.</p>
      <div class="cta-row"><a class="btn btn-gold" href="#venue">Explore the Event →</a><a class="btn btn-ghost"
          href="{{ route('show_vote') }}">Cast Your Vote</a></div>
    </div>
  </header>

  <section class="band white" id="venue">
    <div class="wrap">
      <div class="center">
        <div class="sec-eyebrow">20 November 2026 — Nairobi, Kenya</div>
        <h2 class="sec-title">One flagship gathering. <span class="ac">A global standard.</span></h2>
        <p class="sec-intro" style="margin:14px auto 0">THE GLOBAL PERIMETER brings the full Awards &amp; Summit
          experience to Nairobi — a morning of rigorous dialogue and an evening of well-earned recognition, uniting
          the profession from across the world in one African home.</p>
      </div>
      <div style="margin-top:36px">
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
          <span class="status-pill live" style="align-self:flex-end">● Voting Live</span>
          <div class="lbl" style="margin-top:12px">7th Annual Awards &amp; Summit</div>
          <h3>Nairobi, Kenya</h3>
          <div class="city">Radisson Blu Hotel · Upper Hill</div>
          <div class="row"><span>📅 <b>20 November 2026</b></span><span>🕙 Summit + Gala</span></div>
          <div class="acts"><span class="btn btn-gold btn-sm">View Full Details →</span></div>
        </a>
      </div>
      <div class="callout" style="margin-top:32px">
        <h3>Seven years of building this.</h3>
        <p style="font-size:15px;color:var(--ink);margin-bottom:10px">For six years, the GRC &amp; Financial Crime
          Prevention Awards &amp; Summit established its foundations in Lagos, Nigeria, building a growing community
          of leaders and practitioners committed to strengthening governance, risk, compliance and financial crime
          prevention.</p>
        <p style="font-size:15px;color:var(--ink);margin-bottom:0">In 2026, the platform enters a new chapter. The
          7th Annual GRC &amp; Financial Crime Prevention Global Awards &amp; Summit is hosted in Nairobi, Kenya —
          marking the evolution of the platform into one annual global flagship, hosted in Africa and connected to
          the world.</p>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">Where This Came From</div>
      <h2 class="sec-title">Six years in Lagos. A seventh in Nairobi. <span class="ac">A permanent home in
          Africa.</span></h2>
      <p class="sec-intro">The host city rotates. The home does not.</p>
      <div class="grid g3" style="margin-top:28px">
        <div class="card" style="border-top:3px solid var(--line-soft)">
          <div style="font-family:var(--sans);font-weight:700;font-size:11.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--muted)">
            Years 1–6</div>
          <h3>Lagos</h3>
          <p>Six editions established the platform, the award pillars and the community that built it.</p>
        </div>
        <div class="card" style="border-top:3px solid var(--crimson)">
          <div style="font-family:var(--sans);font-weight:700;font-size:11.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--crimson)">
            Year 7 — 2026</div>
          <h3>Nairobi</h3>
          <p>The first host outside Nigeria, and the point at which the platform becomes a single global flagship.</p>
        </div>
        <div class="card" style="border-top:3px solid var(--gold)">
          <div style="font-family:var(--sans);font-weight:700;font-size:11.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold-deep)">
            Year 8 Onward</div>
          <h3>Africa, Rotating</h3>
          <p>One annual Global Awards &amp; Summit, hosted across strategically significant African markets, with
            international forums year-round.</p>
        </div>
      </div>
      <p style="text-align:center;font-family:var(--sans);font-size:11px;letter-spacing:0.14em;text-transform:uppercase;color:var(--muted);margin-top:32px">Established
        in Lagos &nbsp;&middot;&nbsp; Growing across Africa &nbsp;&middot;&nbsp; Connecting the world</p>
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
          <div class="n">1</div>
          <div class="l">Global Edition</div>
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
      <p class="sec-intro" style="margin:14px auto 0">Not a vendor showcase. MLROs, chief compliance officers, chief
        risk officers and heads of financial crime; board and audit committee members; regulators, supervisors and
        financial intelligence units; correspondent banking, sanctions and trade finance leads; and RegTech, fintech
        and payments risk leadership — whose work crosses African, European and international markets.</p>
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
      <p class="sec-intro">A transparent, four-stage journey — combining public voice with independent, conflict-free
        judging.</p>
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
          <div class="when">15 Jun – 15 Aug</div>
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

  <!-- =============== PAST EVENTS SLIDESHOW =============== -->
  <section class="band white past-events-section">
    <style>
      .past-events-section {
        padding: 60px 0;
        background: #ffffff;
      }

      .events-slideshow-container {
        position: relative;
        max-width: 980px;
        margin: 0 auto;
        padding: 0 10px;
      }

      .slideshow-track-wrap {
        overflow: hidden;
        border-radius: 14px;
        box-shadow: 0 20px 45px rgba(14, 24, 56, 0.14);
        border: 1px solid var(--line-soft, #ece4d2);
        background: var(--navy-deep, #0e1838);
      }

      .slideshow-track {
        display: flex;
        transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        will-change: transform;
      }

      .slideshow-slide {
        flex: 0 0 100%;
        min-width: 100%;
        box-sizing: border-box;
      }

      .slide-card {
        position: relative;
        width: 100%;
        height: 440px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background: var(--navy-deep, #0e1838);
        overflow: hidden;
      }

      .real-slide-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
      }

      .slide-caption {
        position: relative;
        z-index: 6;
        padding: 26px 32px;
        background: linear-gradient(to top, rgba(14, 24, 56, 0.95) 0%, rgba(14, 24, 56, 0.65) 75%, transparent 100%);
        color: #ffffff;
      }

      .caption-tag {
        display: inline-block;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: var(--gold, #c9a24b);
        margin-bottom: 6px;
      }

      .slide-caption h3 {
        font-size: 22px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 6px;
        font-family: var(--sans);
      }

      .slide-caption p {
        font-size: 14px;
        color: #cbd5e1;
        line-height: 1.45;
        margin: 0;
      }

      .slideshow-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(22, 34, 76, 0.88);
        border: 1px solid rgba(201, 162, 75, 0.45);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.25s ease;
        backdrop-filter: blur(4px);
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
      }

      .slideshow-arrow:hover {
        background: var(--gold, #c9a24b);
        color: var(--navy-deep, #0e1838);
        border-color: var(--gold, #c9a24b);
        transform: translateY(-50%) scale(1.08);
      }

      .slideshow-arrow.prev {
        left: -18px;
      }

      .slideshow-arrow.next {
        right: -18px;
      }

      .slideshow-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 20px;
      }

      .slideshow-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #cbd5e1;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
      }

      .slideshow-dot.active {
        background: var(--gold, #c9a24b);
        width: 28px;
        border-radius: 10px;
      }

      @media (max-width: 768px) {
        .slide-card {
          height: 350px;
        }

        .slideshow-arrow.prev {
          left: 4px;
        }

        .slideshow-arrow.next {
          right: 4px;
        }

        .slide-caption {
          padding: 18px 20px;
        }

        .slide-caption h3 {
          font-size: 18px;
        }

        .slide-caption p {
          font-size: 12px;
        }
      }
    </style>

    @php
    $pastEventFiles = [
    'event1.jpeg', 'event2.jpeg', 'event3.jpeg', 'event4.jpeg', 'event5.jpeg',
    'event6.jpeg', 'event7.jpeg', 'event8.jpeg', 'event9.jpeg', 'event10.jpeg',
    'event11.jpeg', 'event12.jpeg', 'event13.jpeg', 'event14.jpeg', 'event15.jpeg',
    'event16.jpeg', 'event17.jpeg',
    ];
    $pastEventImages = array_map(fn($file) => asset('assets/images/past_events/' . $file), $pastEventFiles);
    @endphp

    <div class="wrap">
      <div class="center" style="margin-bottom:28px">
        <div class="sec-eyebrow">Past Events Gallery</div>
        <h2 class="sec-title">Highlights from <span class="ac">previous editions.</span></h2>
        <p class="sec-intro" style="margin:10px auto 0">Celebrating excellence, keynotes, panel discussions, and gala awards ceremonies across our past events.</p>
      </div>

      <div class="events-slideshow-container">
        <button type="button" class="slideshow-arrow prev" id="eventsPrevBtn" aria-label="Previous Slide">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button type="button" class="slideshow-arrow next" id="eventsNextBtn" aria-label="Next Slide">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>

        <div class="slideshow-track-wrap">
          <div class="slideshow-track" id="eventsSlideshowTrack">

            @foreach($pastEventImages as $index => $imgUrl)
            <div class="slideshow-slide {{ $loop->first ? 'active' : '' }}">
              <div class="slide-card">
                <img src="{{ $imgUrl }}" alt="Past Event Photo {{ $loop->iteration }}" class="real-slide-img" style="display:block; z-index:5;" />
                <div class="slide-caption">
                  <div class="caption-tag">Past Event Highlight</div>
                  <h3>GRC & FinCrime Summit</h3>
                  <p>Highlights from our previous annual awards and summit edition.</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        <div class="slideshow-dots" id="eventsSlideshowDots"></div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('eventsSlideshowTrack');
        const slides = document.querySelectorAll('.slideshow-slide');
        const prevBtn = document.getElementById('eventsPrevBtn');
        const nextBtn = document.getElementById('eventsNextBtn');
        const dotsContainer = document.getElementById('eventsSlideshowDots');

        if (!track || slides.length === 0) return;

        let currentIndex = 0;
        let autoplayTimer = null;

        slides.forEach((_, index) => {
          const dot = document.createElement('button');
          dot.classList.add('slideshow-dot');
          if (index === 0) dot.classList.add('active');
          dot.setAttribute('aria-label', `Slide ${index + 1}`);
          dot.addEventListener('click', () => goToSlide(index));
          dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.slideshow-dot');

        function updateSlideshow() {
          track.style.transform = `translateX(-${currentIndex * 100}%)`;
          dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
          });
          slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentIndex);
          });
        }

        function goToSlide(index) {
          currentIndex = index;
          if (currentIndex >= slides.length) currentIndex = 0;
          if (currentIndex < 0) currentIndex = slides.length - 1;
          updateSlideshow();
          resetAutoplay();
        }

        function nextSlide() {
          goToSlide(currentIndex + 1);
        }

        function prevSlide() {
          goToSlide(currentIndex - 1);
        }

        function startAutoplay() {
          if (!autoplayTimer) {
            autoplayTimer = setInterval(nextSlide, 4500);
          }
        }

        function stopAutoplay() {
          if (autoplayTimer) {
            clearInterval(autoplayTimer);
            autoplayTimer = null;
          }
        }

        function resetAutoplay() {
          stopAutoplay();
          startAutoplay();
        }

        if (prevBtn) prevBtn.addEventListener('click', prevSlide);
        if (nextBtn) nextBtn.addEventListener('click', nextSlide);

        const container = document.querySelector('.events-slideshow-container');
        if (container) {
          container.addEventListener('mouseenter', stopAutoplay);
          container.addEventListener('mouseleave', startAutoplay);
        }

        let startX = 0;
        let isSwiping = false;

        track.addEventListener('touchstart', (e) => {
          startX = e.touches[0].clientX;
          isSwiping = true;
          stopAutoplay();
        }, {
          passive: true
        });

        track.addEventListener('touchend', (e) => {
          if (!isSwiping) return;
          const endX = e.changedTouches[0].clientX;
          const diffX = startX - endX;
          if (Math.abs(diffX) > 40) {
            if (diffX > 0) nextSlide();
            else prevSlide();
          }
          isSwiping = false;
          startAutoplay();
        }, {
          passive: true
        });

        startAutoplay();
      });
    </script>
  </section>

  <section class="band cream previous-sponsors-section">
    <style>
      .previous-sponsors-section {
        padding: 60px 0;
      }

      .sponsors-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
        gap: 22px;
        margin-top: 34px;
      }

      .sponsor-logo-card {
        background: #ffffff;
        border: 1px solid var(--line-soft, #ece4d2);
        border-radius: 12px;
        box-shadow: 0 8px 22px rgba(14, 24, 56, 0.06);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 130px;
        padding: 20px;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
      }

      .sponsor-logo-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 30px rgba(14, 24, 56, 0.12);
      }

      .sponsor-logo-card img {
        max-width: 100%;
        max-height: 72px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.75;
        transition: filter 0.25s ease, opacity 0.25s ease;
      }

      .sponsor-logo-card:hover img {
        filter: grayscale(0%);
        opacity: 1;
      }
    </style>

    @php
    $sponsorFiles = [
    'award_sponsor_1.png', 'award_sponsor_2.png', 'award_sponsor_3.png', 'award_sponsor_4.png',
    'award_sponsor_5.png', 'award_sponsor_6.png', 'award_sponsor_7.png', 'award_sponsor_8.png',
    'award_sponsor_9.png', 'award_sponsor_10.png', 'award_sponsor_11.png',
    ];
    $sponsorLogos = array_map(fn($file) => asset('assets/images/awards_sponsors/' . $file), $sponsorFiles);
    @endphp

    <div class="wrap">
      <div class="center" style="margin-bottom:8px">
        <div class="sec-eyebrow">Previous Sponsors</div>
        <h2 class="sec-title">Backed by <span class="ac">industry leaders.</span></h2>
        <p class="sec-intro" style="margin:10px auto 0">Organisations who partnered with us to champion GRC and financial crime prevention excellence.</p>
      </div>

      <div class="sponsors-grid">
        @foreach($sponsorLogos as $index => $logoUrl)
        <div class="sponsor-logo-card">
          <img src="{{ $logoUrl }}" alt="Sponsor Logo {{ $index + 1 }}" loading="lazy" />
        </div>
        @endforeach
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

  <section class="band navy">
    <div class="wrap center">
      <div class="sec-eyebrow">The Judging Panel</div>
      <h2 class="sec-title">Independent, <span class="ac">and visibly so.</span></h2>
      <p class="sec-intro" style="margin:14px auto 0;color:#c2cae0">Recognition is only worth what the panel is
        worth. The 2026 Global Awards are assessed by an independent panel constituted internationally — drawn from
        regulators, supervisory bodies, financial institutions, academia and practice across Africa, Europe and
        international markets. Judges declare conflicts and recuse from any category in which their organisation is
        nominated; criteria are published in advance and applied uniformly to every entry, and panel members are
        named publicly.</p>
      <p style="font-family:var(--serif);font-style:italic;font-size:17px;color:var(--gold-soft);margin:16px auto 0;max-width:560px">One
        panel. One published set of criteria. Every entry assessed the same way.</p>
      <div style="margin-top:26px"><a class="btn btn-gold" href="{{ route('judging_process') }}">See the Judging
          Process →</a></div>
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

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Past Winners</div>
      <h2 class="sec-title">Celebrating past <span class="ac">award recipients.</span></h2>
      <p class="sec-intro">Honouring the individuals and organisations recognised across previous editions of the GRC
        &amp; Financial Crime Prevention Awards.</p>

      @php
      $pastWinners = array_slice(array_merge(config('past_winners.africa', []), config('past_winners.europe', [])), 0, 8);
      @endphp

      <div class="honourees-tabs" style="margin-top:32px">
        <div class="honouree-edition">
          <div class="honouree-row">
            @foreach($pastWinners as $winner)
            <div class="honouree-card">
              <img class="honouree-photo" src="{{ asset('assets/images/past_winners/'.$winner['image']) }}"
                alt="{{ $winner['name'] }}">
              <div class="honouree-name">{{ $winner['name'] }}</div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="center" style="margin-top:26px"><a class="btn btn-navy" href="{{ route('show_past_winners') }}">See
          More Past Winners →</a></div>
    </div>
  </section>

  <section class="band navy">
    <div class="wrap center">
      <div class="sec-eyebrow">Get Involved</div>
      <h2 class="sec-title">Vote. Attend. <span class="ac">Partner.</span></h2>
      <p style="font-family:var(--serif);font-style:italic;font-size:19px;color:var(--gold-soft);margin:14px auto 0">A
        Global Platform. An African Home.</p>
      <p style="font-family:var(--serif);font-style:italic;font-size:15px;color:var(--gold-soft);opacity:0.85;margin:6px auto 0">Spirit
        of Excellence Distilled&hellip;</p>
      <p class="sec-intro" style="margin:14px auto 0">Cast your vote, reserve your place in Nairobi, or partner with
        us as a sponsor.</p>
      <div class="callout"
        style="max-width:420px;margin:26px auto 0;text-align:center;background:rgba(255,255,255,0.04);border-color:rgba(201,162,75,0.35)">
        <div class="sec-eyebrow" style="margin-bottom:8px">One Ticket. The Whole Day.</div>
        <div style="font-family:var(--serif);font-size:30px;color:var(--gold-soft)">USD 250 <span
            style="color:#8b93b0;font-size:0.6em">/</span> KES 32,500</div>
        <p style="font-size:13px;color:#c2cae0;margin-top:8px">Full Delegate Pass — Global Summit 09:00–15:00 and
          Global Awards Gala 18:00–21:00.<br><strong style="color:var(--gold-soft)">10% off early bookings and
            groups of ten.</strong></p>
      </div>
      <div class="cta-row" style="justify-content:center;margin-top:26px">
        <a class="btn btn-crimson" href="{{ route('show_vote') }}">Cast Your Vote</a><a class="btn btn-gold" href="{{ route('show_tickets') }}">Book
          Tickets</a><a class="btn btn-ghost" href="{{ route('show_sponsors') }}">Become a Sponsor</a>
      </div>
    </div>
  </section>



  @include('partials.voter.footer_new_theme')


</body>

</html>