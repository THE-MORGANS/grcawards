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
      <h1>Voting Has <span class="ac">Closed.</span></h1>
      <p>The public voting window for this year's GRC &amp; Financial Crime Prevention Awards has ended. Thank you to
        everyone who took part.</p>
    </div>
  </header>

  <section class="band cream login-wrap">
    <div class="wrap">

      @if(Session::has('danger'))
      <div class="callout" style="margin-bottom:26px">
        <p style="margin:0;font-size:14px;color:var(--navy)">{{ session('danger') }}</p>
      </div>
      @endif

      <div class="login-split" style="grid-template-columns:1fr;max-width:640px">

        <div class="login-info">
          <div>
            <div class="tag">What Happens Next</div>
            <h2><strong>Voting</strong> Has Closed.</h2>
            <p class="desc">The shortlisting stage is complete. Nominees who received the most public votes now move
              forward to independent judging, and winners will be announced live at the Gala.</p>
          </div>
          <div class="login-facts">
            <div class="login-fact">
              <span class="lf-ico">✓</span>
              <div class="lf-txt"><strong>Thank You</strong>To everyone who registered and cast a vote.</div>
            </div>
            <div class="login-fact">
              <span class="lf-ico">✦</span>
              <div class="lf-txt"><strong>What's Next</strong>Independent judging is now underway.</div>
            </div>
            <div class="login-fact">
              <span class="lf-ico">●</span>
              <div class="lf-txt"><strong>Winners</strong>Announced at the Gala — check back for details.</div>
            </div>
          </div>
          <div class="cta-row" style="margin-top:22px">
            <a class="btn btn-gold" href="{{ route('landing.index') }}">Back to Home →</a>
            <a class="btn btn-ghost" href="{{ route('show_past_winners') }}">See Past Winners</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>