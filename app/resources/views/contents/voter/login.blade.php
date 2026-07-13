<!DOCTYPE html>
<html lang="en">
@section('title', 'Voter Access')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/login_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="hero login-hero">
    <div class="wrap">
      <span class="hero-badge eyebrow"><span class="dot"></span>VOTER PORTAL</span>
      <h1>Cast Your <span class="ac">Vote.</span></h1>
      <p>Enter your email below to access your ballot and vote for this year's GRC &amp; Financial Crime Prevention
        Awards nominees.</p>
    </div>
  </header>

  <section class="band cream login-wrap">
    <div class="wrap">

      <div class="callout"
        style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;margin-bottom:26px">
        <p style="margin:0;font-size:14px;color:var(--muted)"><b style="color:var(--navy)">This login is for the
            Africa Edition.</b> Looking to vote in the Europe Edition instead?</p>
        <a class="btn btn-navy btn-sm" href="https://eu.grcfincrimeawards.com/vote" style="background:#3F6FB0">Vote —
          Europe Edition →</a>
      </div>

      <div class="login-split">

        {{-- Left informational panel --}}
        <div class="login-info">
          <div>
            <div class="tag">Why Vote</div>
            <h2><strong>One Vote.</strong>One Voice.</h2>
            <p class="desc">Welcome to the GRC &amp; Financial Crime Prevention Awards voting portal. Your vote helps
              decide which nominees advance to independent judging across all award pillars.</p>
          </div>
          <div class="login-facts">
            <div class="login-fact">
              <span class="lf-ico">✓</span>
              <div class="lf-txt"><strong>Secure &amp; Private</strong>Your vote is encrypted and anonymous.</div>
            </div>
            <div class="login-fact">
              <span class="lf-ico">✦</span>
              <div class="lf-txt"><strong>Quick Access</strong>No password required — just your email.</div>
            </div>
            <div class="login-fact">
              <span class="lf-ico">●</span>
              <div class="lf-txt"><strong>One Vote Per Voter</strong>Votes are verified to ensure fairness.</div>
            </div>
          </div>
        </div>

        {{-- Right form panel --}}
        <div class="login-form-panel">
          <div class="step">Step 1 of 2</div>
          <h3>Enter Your Email</h3>
          <p class="sub">We'll use this to verify and register your vote.</p>

          <form id="loginForm" method="POST" action="{{ route('register') }}" name="loginForm">
            @csrf

            {{-- Email Field --}}
            <div class="field">
              <label for="email">Email Address</label>
              <input id="email" type="email" name="email" placeholder="yourname@example.com"
                value="{{ old('email') }}">
              @error('email')
                <div class="field-err">{{ $message }}</div>
              @enderror
              @if(Session::has('danger'))
                <div class="field-err">{{ session('danger') }}</div>
              @endif
            </div>

            {{-- Captcha Field --}}
            <div class="field">
              <label>Security Check</label>
              <div class="captcha-box">
                <div class="cap-img">
                  {!! captcha_img('flat') !!}
                </div>
                <button type="button" class="cap-refresh"
                  onclick="document.querySelector('.cap-img img').src = '/captcha/flat?' + Math.random()">
                  ↻ Generate New Code
                </button>
              </div>
              <input id="captcha" type="text" name="captcha" placeholder="Enter the code shown above" required>
              @error('captcha')
                <div class="field-err">{{ $message }}</div>
              @enderror
            </div>

            {{-- Agreement --}}
            <div class="agree-row">
              <input type="checkbox" name="i_agree" id="i_agree" value="1Xagrzi" checked>
              <p>I have read and agree to the
                <a href="{{ route('show_policy') }}" target="_blank">Privacy Policy</a>
                and
                <a href="{{ route('show_tc') }}" target="_blank">Terms &amp; Conditions</a>.
              </p>
            </div>

            {{-- Submit --}}
            <button id="submits" type="submit" class="btn btn-gold btn-block">
              Proceed to Voting Page →
            </button>

          </form>
        </div>

      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
