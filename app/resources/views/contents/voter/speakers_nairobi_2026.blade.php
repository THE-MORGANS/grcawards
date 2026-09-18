<!DOCTYPE html>
<html lang="en">
@section('title', 'Nairobi 2026 Speakers')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/speakers_nairobi_2026.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> ·
        <a href="{{ route('edition.africa') }}">Nairobi 2026</a> · Speakers</div>
      <h1>Meet this year's <span class="ac">speakers.</span></h1>
      <p>The confirmed line-up for THE GLOBAL PERIMETER — Nairobi, 20 November 2026. Tap any card to read the full
        profile.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Nairobi 2026</div>
      <h2 class="sec-title">The <span class="ac">line-up.</span></h2>

      @php
      $speakers = [
      ['image' => '1.jpg'],
      ['image' => '2.jpg'],
      ['image' => '3.jpg'],
      ['image' => '4.jpg'],
      ['image' => '5.jpg'],
      ['image' => '6.jpg'],
      ['image' => '7.jpg'],
      ['image' => '8.jpg'],
      ['image' => '9.jpg'],
      ['image' => '10.jpg'],
      ['image' => '11.jpg'],
      ['image' => '12.jpg'],
      ['image' => '13.jpg'],
      ['image' => '14.jpg'],
      ['image' => '15.jpg'],
      ['image' => '16.jpg'],
      ['image' => '17.jpg'],
      ['image' => '18.jpg'],
      ['image' => '19.jpg'],
      ['image' => '20.jpg'],
      ['image' => '21.jpg'],
      ['image' => '22.jpg'],
      ['image' => '23.jpg'],
      ];
      @endphp

      @if(empty($speakers))
        <p class="no-nominees" style="margin-top:30px">Speaker announcements are coming soon.</p>
      @else
        <div class="spk-grid">
          @foreach($speakers as $index => $speaker)
            <button type="button" class="spk-card" onclick="openSpeakerLightbox({{ $index }})" aria-label="View speaker {{ $index + 1 }}">
              <img src="{{ asset('assets/images/speakers/nairobi_2026/thumb/'.$speaker['image']) }}" alt="Speaker {{ $index + 1 }}" loading="lazy">
            </button>
          @endforeach
        </div>
      @endif
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="callout navy"
        style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
        <div>
          <h3 style="color:#fff">Join them in Nairobi.</h3>
          <p style="color:#c2cae0;font-size:14px">20 November 2026 · Radisson Blu Hotel, Upper Hill.</p>
        </div>
        <a class="btn btn-gold" href="{{ route('show_tickets') }}">Book Tickets</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

  @if(!empty($speakers))
  <div class="spk-lightbox" id="spkLightbox" role="dialog" aria-modal="true">
    <button type="button" class="spk-lightbox-close" onclick="closeSpeakerLightbox()" aria-label="Close">&times;</button>
    <button type="button" class="spk-lightbox-nav spk-lightbox-prev" onclick="navSpeakerLightbox(-1)" aria-label="Previous">&#8249;</button>
    <img id="spkLightboxImg" src="" alt="">
    <button type="button" class="spk-lightbox-nav spk-lightbox-next" onclick="navSpeakerLightbox(1)" aria-label="Next">&#8250;</button>
    <div class="spk-lightbox-counter" id="spkLightboxCounter"></div>
  </div>

  <script>
    const spkFulls = @json(collect($speakers)->map(fn($s) => asset('assets/images/speakers/nairobi_2026/full/'.$s['image'])));
    let spkIndex = 0;

    function openSpeakerLightbox(index) {
      spkIndex = index;
      renderSpeakerLightbox();
      document.getElementById('spkLightbox').classList.add('open');
      document.body.style.overflow = 'hidden';
    }

    function closeSpeakerLightbox() {
      document.getElementById('spkLightbox').classList.remove('open');
      document.body.style.overflow = '';
    }

    function navSpeakerLightbox(delta) {
      spkIndex = (spkIndex + delta + spkFulls.length) % spkFulls.length;
      renderSpeakerLightbox();
    }

    function renderSpeakerLightbox() {
      document.getElementById('spkLightboxImg').src = spkFulls[spkIndex];
      document.getElementById('spkLightboxCounter').textContent = (spkIndex + 1) + ' / ' + spkFulls.length;
    }

    document.getElementById('spkLightbox').addEventListener('click', function (e) {
      if (e.target === this) closeSpeakerLightbox();
    });

    document.addEventListener('keydown', function (e) {
      if (!document.getElementById('spkLightbox').classList.contains('open')) return;
      if (e.key === 'Escape') closeSpeakerLightbox();
      if (e.key === 'ArrowLeft') navSpeakerLightbox(-1);
      if (e.key === 'ArrowRight') navSpeakerLightbox(1);
    });
  </script>
  @endif

</body>

</html>
