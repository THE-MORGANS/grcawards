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
      <h1>Reserve your place — <span class="ac">Nairobi, Kenya.</span></h1>
      <p>One ticket, the whole day. Global Summit 09:00–15:00 and Global Awards Gala 18:00–21:00 on 20 November
        2026. Booking is open now.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">

      <div class="tab-panel active" id="tab-af">
        <!-- <div id="slots-banner" class="slots-banner" style="display:none;text-align:center;padding:14px 20px;border-radius:8px;margin-bottom:24px;font-weight:600;font-size:15px;transition:all .3s ease">
          <span id="slots-text"></span>
        </div> -->
        <div class="price-grid" style="grid-template-columns:1fr;max-width:400px;margin:0 auto">
          <div class="price feat" style="text-align:center">
            <h3>Full Delegate Pass</h3>
            <div class="amt"><small>USD</small> 250 <small style="color:#8b93b0">/ KES 32,500</small></div>
            <div class="sub">Global Summit 09:00–15:00 + Global Awards Gala 18:00–21:00</div>
            <ul style="text-align:left">
              <li>Full Summit programme</li>
              <li>Networking breakfast &amp; refreshment breaks</li>
              <li>Red carpet &amp; global reception</li>
              <li>Gala &amp; formal dinner</li>
              <li>Reserved seating</li>
              <li>Delegate pack &amp; certificate</li>
            </ul>
            <a class="btn btn-gold" href="https://grcfincrimeawards.com/awards-summit/reserve/full">Reserve →</a>
          </div>

          <!--
          <div class="price">
            <h3>Summit Pass</h3>
            <div class="amt"><small>USD</small> 100 <small style="color:#8b93b0">/ KES 19,500</small></div>
            <div class="sub">Morning access only</div>
            <ul>
              <li>Summit sessions 09:00–15:00</li>
              <li>Networking luncheon</li>
              <li>Delegate pack</li>
              <li>Digital certificate</li>
            </ul>
            <a class="btn btn-navy" href="https://grcfincrimeawards.com/awards-summit/reserve/summit">Reserve →</a>
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
          -->
        </div>
        <div class="callout"
          style="margin-top:24px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
          <div>
            <h3>Group &amp; table bookings</h3>
            <p style="color:var(--muted);font-size:14px">Reserve a table of 10 at the Gala, or group Full Delegate
              Passes — 10% off early bookings and groups of ten.</p>
          </div>
          <a class="btn btn-crimson" href="mailto:events@grcfincrimeawards.com?subject=Group%20Booking">Enquire
            →</a>
        </div>
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
          <p>Pick your pass. Group and table bookings available.</p>
        </div>
        <div class="card">
          <div class="k">02</div>
          <h3>Submit your request</h3>
          <p>Email events@grcfincrimeawards.com with ticket type, delegates and organisation.</p>
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
    // Fetch and display remaining slots (single 200-seat pool)
    function fetchSlots(region, bannerId, textId, tabSelector) {
      fetch("{{ route('awards_summit.slots') }}?region=" + region)
        .then(r => r.json())
        .then(data => {
          const banner = document.getElementById(bannerId);
          const text = document.getElementById(textId);
          const remaining = data.remaining;
          const total = data.total;

          banner.style.display = 'block';

          if (remaining <= 0) {
            banner.style.background = '#FFE0E0';
            banner.style.color = '#B91C1C';
            banner.style.border = '1px solid #FECACA';
            text.innerHTML = '🚫 SOLD OUT — All ' + total + ' seats have been reserved.';
            // Disable all Reserve buttons for this edition
            document.querySelectorAll(tabSelector + ' .btn').forEach(btn => {
              btn.style.pointerEvents = 'none';
              btn.style.opacity = '0.5';
              btn.textContent = 'Sold Out';
            });
          } else if (remaining <= 20) {
            banner.style.background = '#FFF3E0';
            banner.style.color = '#E65100';
            banner.style.border = '1px solid #FFE0B2';
            text.innerHTML = '🔥 Only <strong>' + remaining + '</strong> of ' + total + ' seats left — book now!';
          } else if (remaining <= 50) {
            banner.style.background = '#FFFDE7';
            banner.style.color = '#F57F17';
            banner.style.border = '1px solid #FFF9C4';
            text.innerHTML = '⚡ <strong>' + remaining + '</strong> of ' + total + ' seats remaining — filling up fast!';
          } else {
            banner.style.background = '#E8F5E9';
            banner.style.color = '#2E7D32';
            banner.style.border = '1px solid #C8E6C9';
            text.innerHTML = '✅ <strong>' + remaining + '</strong> of ' + total + ' seats available';
          }
        })
        .catch(() => {
          // Silently fail — don't block the page if the API is unreachable
        });
    }

    // fetchSlots('africa', 'slots-banner', 'slots-text', '#tab-af');
  </script>

</body>

</html>