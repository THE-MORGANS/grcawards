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
        Crime Prevention Awards, in Africa and Europe.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">

      @php
      $pastWinnersAfrica = config('past_winners.africa', []);
      $pastWinnersEurope = config('past_winners.europe', []);
      @endphp

      <div class="honourees-tabs">
        <div class="honouree-edition">
          <div class="honouree-edition-head"><span class="pin af"></span>
            <h3>Africa Edition — Past Winners</h3>
          </div>
          <div class="honouree-row">
            @foreach($pastWinnersAfrica as $winner)
            <div class="honouree-card">
              <img class="honouree-photo" src="{{ asset('assets/images/past_winners/'.$winner['image']) }}"
                alt="{{ $winner['name'] }}">
              <div class="honouree-name">{{ $winner['name'] }}</div>
            </div>
            @endforeach
          </div>
        </div>

        <div class="honouree-edition">
          <div class="honouree-edition-head"><span class="pin eu"></span>
            <h3>Europe Edition — Past Winners</h3>
          </div>
          <div class="honouree-row">
            @foreach($pastWinnersEurope as $winner)
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
        <h3>Ready to make your mark?</h3>
        <p style="color:var(--muted);font-size:14px;margin-bottom:14px">Cast your vote or nominate an
          organisation for the 2026 edition.</p>
        <a class="btn btn-crimson" href="{{ route('show_vote') }}">Cast Your Vote →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

</body>

</html>
