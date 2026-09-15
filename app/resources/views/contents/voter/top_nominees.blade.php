<!DOCTYPE html>
<html lang="en">
@section('title', 'Top 3 Finalists')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/categories_new_theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/top_nominees_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Top 3 Finalists</div>
      <h1>Meet this year's <span class="ac">finalists.</span></h1>
      <p>The top 3 finalists per award, decided the same way the eventual winner is — combining the public vote
        with independent judging. Who's on top of each shortlist stays under wraps: the winner in each award is
        revealed for the first time at the Gala.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Finalists — {{ $award_program->year ?? '2026' }}</div>
      <h2 class="sec-title">This year's <span class="ac">shortlists.</span></h2>

      <div class="tn-note">
        <span class="ico">🏆</span>
        <span><b>These are not the winners.</b> Each shortlist is the actual top 3 by overall score — judges' scores
          (75%) plus the public vote (25%) — the same calculation that decides the winner. The order is
          intentionally not shown here so nothing is given away before the Gala.</span>
      </div>

      @if($categories->isEmpty())
        <p class="no-nominees" style="margin-top:30px">Results will appear here once voting data is available.</p>
      @endif

      <div class="cat-group">
        @foreach($categories as $category)
          <div class="cat-item {{ $loop->first ? 'active' : '' }}">
            <button type="button" class="cat-header" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
              aria-controls="content-{{ $category->hashid }}" onclick="toggleCatAccordion(event, this)">
              <span class="cat-title">{{ $category->name }}</span>
              <span class="cat-icon">▾</span>
            </button>

            <div id="content-{{ $category->hashid }}" class="cat-content">
              <div class="cat-inner">
                <div class="sector-grid">
                  @foreach($category->sectors as $sector)
                    <div class="sector-card">
                      <div class="sector-name">{{ $sector->id == 12 ? 'General Categories' : $sector->name }}</div>

                      @if($sector->awards->isEmpty())
                        <p class="no-nominees">Awaiting category details...</p>
                      @else
                        @foreach($sector->awards as $award)
                          <div class="award-item">
                            <div class="award-name">🏆 {{ $award->name }}</div>

                            @if($award->top_nominees->isEmpty())
                              <p class="top3-empty">Results not available yet</p>
                            @else
                              <div class="top3-list">
                                @foreach($award->top_nominees as $name)
                                  <div class="top3-item"><span class="dot"></span><span>{{ $name }}</span></div>
                                @endforeach
                              </div>
                            @endif
                          </div>
                        @endforeach
                      @endif
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="callout navy"
        style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
        <div>
          <h3 style="color:#fff">The winners are revealed at the Gala.</h3>
          <p style="color:#c2cae0;font-size:14px">Judges' scores stay confidential until the night — join us in
            Nairobi to see who takes it.</p>
        </div>
        <a class="btn btn-gold" href="{{ route('show_tickets') }}">Get Your Ticket →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

  <script>
    // Each category toggles independently — deliberately NOT closing sibling
    // categories. Auto-closing another (possibly much taller) open category
    // at the same time it opens this one meant two competing height
    // transitions ran concurrently right above the click point, and the
    // page would visibly lurch as they raced each other. Letting items
    // stay open removes the concurrent-collapse entirely, which removes
    // the jump.
    function toggleCatAccordion(event, header) {
      if (event) event.preventDefault();
      const item = header.parentElement;
      const isOpen = item.classList.contains('active');

      if (isOpen) {
        item.classList.remove('active');
        header.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('active');
        header.setAttribute('aria-expanded', 'true');
        requestAnimationFrame(() => {
          header.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      }
    }
  </script>

</body>

</html>
