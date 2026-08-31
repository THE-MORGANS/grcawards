<!DOCTYPE html>
<html lang="en">
@section('title', 'Past Winners — GRC & Financial Crime Prevention Awards & Summit')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Past Winners</div>
      <h1>Celebrating past <span class="ac">award recipients.</span></h1>
      <p>Honouring every individual and organisation recognised across previous editions of the GRC &amp; Financial
        Crime Prevention Awards.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">

      @php
      $pastWinners = array_merge(config('past_winners.africa', []), config('past_winners.europe', []));
      @endphp

      <div class="honourees-tabs">
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

      <div class="callout center" style="max-width:820px;margin:36px auto 0">
        <h3>The 2026 edition has moved to judging.</h3>
        <p style="color:var(--muted);font-size:14px;margin-bottom:14px">Nominations and public voting have closed —
          winners will be announced live at the Gala.</p>
        <a class="btn btn-crimson" href="{{ route('show_tickets') }}">Book Your Gala Ticket →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

</body>

</html>
