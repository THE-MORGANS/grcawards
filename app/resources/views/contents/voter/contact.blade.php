<!DOCTYPE html>
<html lang="en">
@section('title', 'Contact')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Contact</div>
      <h1>Let's <span class="ac">talk.</span></h1>
      <p>Questions about either edition — tickets, nominations, judging, speaking or sponsorship? Reach the events
        team, or any of our three international offices.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="grid g3">
        <div class="office">
          <div class="flag">Africa — Lagos</div>
          <h3>Nigeria</h3>
          <p>1 Adeola Adeoye Street, Ikeja, Lagos, Nigeria<br><br>📞 +234 915 341 4314<br>✉️ <a
              href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a></p>
        </div>
        <div class="office">
          <div class="flag">United Kingdom — London</div>
          <h3>England</h3>
          <p>85 Great Portland Street, First Floor, London W1W 7LT, United Kingdom<br><br>📞 +44 20 7856 0149<br>✉️
            <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a>
          </p>
        </div>
        <div class="office">
          <div class="flag">Ireland — Cork</div>
          <h3>Republic of Ireland</h3>
          <p>21 Gillabbey Terrace, Gillabbey Street, Cork, T12 KPN4, Ireland<br><br>📞 +353 87 712 3968<br>✉️ <a
              href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="grid g2" style="align-items:start">
        <div>
          <div class="sec-eyebrow">Send a Message</div>
          <h2 class="sec-title" style="font-size:28px">We'll reply <span class="ac">within 3 business days.</span>
          </h2>
          <p class="sec-intro">Africa Edition representatives: <b>Joyce</b> +254 724 222 016 · <b>Julius</b> +254 710
            540 354. For the Europe Edition, email the London office to register interest.</p>
        </div>
        <div class="card">
          <div class="form-row">
            <div class="field">
              <label>First name</label>
              <input placeholder="Your first name">
            </div>
            <div class="field">
              <label>Last name</label>
              <input placeholder="Your last name">
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label>Email</label>
              <input type="email" placeholder="you@organisation.com">
            </div>
            <div class="field">
              <label>Organisation</label>
              <input placeholder="Your organisation">
            </div>
          </div>
          <div class="form-row">
            <div class="field">
              <label>Edition</label>
              <select>
                <option>Africa — Nairobi</option>
                <option>Europe — London</option>
                <option>Both editions</option>
              </select>
            </div>
            <div class="field">
              <label>Enquiry type</label>
              <select>
                <option>Tickets &amp; booking</option>
                <option>Sponsorship</option>
                <option>Speaking interest</option>
                <option>Nominations &amp; judging</option>
                <option>Media &amp; press</option>
                <option>General</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label>Message</label>
            <textarea rows="4" placeholder="How can we help?"></textarea>
          </div>
          <a class="btn btn-crimson" href="mailto:events@grcfincrimeawards.com?subject=Website%20Enquiry"
            style="justify-content:center;width:100%">Send Message →</a>
        </div>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
