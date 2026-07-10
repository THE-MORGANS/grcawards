<!DOCTYPE html>
<html lang="en">
@section('title', 'Tickets & Booking | GRC & Financial Crime Prevention Awards & Summit')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Tickets</div>
      <h1>Reserve your place — <span class="ac">Nairobi or London.</span></h1>
      <p>Tickets cover the morning Summit and the evening Gala Awards Ceremony. Africa Edition (Nairobi, 20 Nov)
        booking is open now; Europe Edition (London Marriott Hotel, 6 Nov) pricing is announced shortly.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="tabs">
        <button class="tab-btn active" data-tab="af"><span class="pin af"></span>Africa · Nairobi</button>
        <button class="tab-btn" data-tab="eu"><span class="pin eu"></span>Europe · London</button>
      </div>

      <div class="tab-panel active" id="tab-af">
        <div class="price-grid">
          <div class="price">
            <h3>Summit Pass</h3>
            <div class="amt"><small>USD</small> 100 <small style="color:#8b93b0">/ KES 19,500</small></div>
            <div class="sub">Morning access only</div>
            <ul>
              <li>Summit sessions 10:00–14:00</li>
              <li>Networking luncheon</li>
              <li>Delegate pack</li>
              <li>Digital certificate</li>
            </ul>
            <a class="btn btn-navy" href="https://grcfincrimeawards.com/awards-summit/reserve/summit">Reserve →</a>
          </div>
          <div class="price feat">
            <div class="flag">Most Popular</div>
            <h3>Full Delegate Pass</h3>
            <div class="amt"><small>USD</small> 250 <small style="color:#8b93b0">/ KES 45,500</small></div>
            <div class="sub">Summit + Gala</div>
            <ul>
              <li>Full Summit programme</li>
              <li>Networking luncheon</li>
              <li>Cocktail reception</li>
              <li>Gala &amp; formal dinner</li>
              <li>Reserved seating</li>
              <li>Delegate pack &amp; certificate</li>
            </ul>
            <a class="btn btn-gold" href="https://grcfincrimeawards.com/awards-summit/reserve/full">Reserve →</a>
          </div>
          <div class="price">
            <h3>Gala Only Pass</h3>
            <div class="amt"><small>USD</small> 150 <small style="color:#8b93b0">/ KES 28,600</small></div>
            <div class="sub">Evening access</div>
            <ul>
              <li>Cocktail reception</li>
              <li>Gala &amp; formal dinner</li>
              <li>Standard seating</li>
              <li>Digital programme</li>
            </ul>
            <a class="btn btn-navy" href="https://grcfincrimeawards.com/awards-summit/reserve/gala">Reserve →</a>
          </div>
          <div class="price">
            <h3>Student / Academic</h3>
            <div class="amt"><small>USD</small> 60 <small style="color:#8b93b0">/ KES 7,800</small></div>
            <div class="sub">ID required</div>
            <ul>
              <li>Summit sessions</li>
              <li>Networking luncheon</li>
              <li>Delegate pack</li>
              <li>Valid ID at registration</li>
            </ul>
            <a class="btn btn-navy" href="https://grcfincrimeawards.com/awards-summit/reserve/student">Reserve →</a>
          </div>
        </div>
        <div class="callout"
          style="margin-top:24px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
          <div>
            <h3>Group &amp; table bookings</h3>
            <p style="color:var(--muted);font-size:14px">Reserve a table of 10 at the Gala, or group Full Delegate
              Passes — 10% off groups of 6+.</p>
          </div>
          <a class="btn btn-crimson" href="mailto:events@grcfincrimeawards.com?subject=Africa%20Group%20Booking">Enquire
            →</a>
        </div>
      </div>

      <div class="tab-panel" id="tab-eu">
        <div class="price-grid">
          <div class="price">
            <h3>Summit Pass</h3>
            <div class="amt"><small></small>TBA</div>
            <div class="sub">Morning access only</div>
            <ul>
              <li>Summit sessions &amp; panels</li>
              <li>Networking luncheon</li>
              <li>Delegate pack</li>
              <li>Digital certificate</li>
            </ul>
            <a class="btn btn-navy" style="background:#3F6FB0" href="{{ route('show_contact') }}">Register Interest
              →</a>
          </div>
          <div class="price feat">
            <div class="flag">Most Popular</div>
            <h3>Full Delegate Pass</h3>
            <div class="amt"><small></small>TBA</div>
            <div class="sub">Summit + Gala</div>
            <ul>
              <li>Full Summit programme</li>
              <li>Networking luncheon</li>
              <li>Cocktail reception</li>
              <li>Gala &amp; formal dinner</li>
              <li>Reserved seating</li>
            </ul>
            <a class="btn btn-gold" href="{{ route('show_contact') }}">Register Interest →</a>
          </div>
          <div class="price">
            <h3>Gala Only Pass</h3>
            <div class="amt"><small></small>TBA</div>
            <div class="sub">Evening access</div>
            <ul>
              <li>Cocktail reception</li>
              <li>Gala &amp; formal dinner</li>
              <li>Standard seating</li>
              <li>Digital programme</li>
            </ul>
            <a class="btn btn-navy" style="background:#3F6FB0" href="{{ route('show_contact') }}">Register Interest
              →</a>
          </div>
          <div class="price">
            <h3>Group &amp; Tables</h3>
            <div class="amt"><small></small>TBA</div>
            <div class="sub">Corporate &amp; sponsor tables</div>
            <ul>
              <li>Tables of 10 at the Gala</li>
              <li>Group delegate rates</li>
              <li>Preferential pricing</li>
              <li>Priority booking</li>
            </ul>
            <a class="btn btn-navy" style="background:#3F6FB0" href="{{ route('show_contact') }}">Register Interest
              →</a>
          </div>
        </div>
        <p class="center" style="color:var(--muted);font-size:13px;margin-top:16px">Europe Edition — <b>6 November
            2026, London Marriott Hotel</b>. Pricing (GBP) is confirmed shortly; register interest for priority
          booking.</p>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="sec-eyebrow">How to Book</div>
      <h2 class="sec-title">Four steps to <span class="ac">your seat.</span></h2>
      <div class="grid g4" style="margin-top:26px">
        <div class="card">
          <div class="k">01</div>
          <h3>Choose your ticket</h3>
          <p>Pick your edition and pass. Group and table bookings available.</p>
        </div>
        <div class="card">
          <div class="k">02</div>
          <h3>Submit your request</h3>
          <p>Email events@grcfincrimeawards.com with edition, ticket type, delegates and organisation.</p>
        </div>
        <div class="card">
          <div class="k">03</div>
          <h3>Confirmation &amp; invoice</h3>
          <p>We confirm availability and issue an invoice. Pay by transfer or card; e-ticket on receipt.</p>
        </div>
        <div class="card">
          <div class="k">04</div>
          <h3>Check in on the day</h3>
          <p>Bring your e-ticket and photo ID to registration.</p>
        </div>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

  <script>
    document.querySelectorAll('.tab-btn').forEach(b => b.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(x => x.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(x => x.classList.remove('active'));
      b.classList.add('active');
      document.getElementById('tab-' + b.dataset.tab).classList.add('active');
    }));
  </script>

</body>

</html>