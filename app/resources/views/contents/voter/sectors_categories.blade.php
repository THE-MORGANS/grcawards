<!DOCTYPE html>
<html lang="en">
@section('title', 'Sectors & Categories')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/categories_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Sectors &amp; Categories</div>
      <h1>Excellence recognised across <span class="ac">every sector.</span></h1>
      <p>Six pillars spanning every regulated sector — applied consistently across both the Africa and Europe
        editions. Browse the categories below, and nominate a candidate directly into the official list.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      @if(Session::has('msg'))
        <div class="alert-box alert-success">{{ Session::get('msg') }}</div>
      @endif
      @if(Session::has('error'))
        <div class="alert-box alert-error">{{ Session::get('error') }}</div>
      @endif

      <div class="sec-eyebrow">Award Categories 2026</div>
      <h2 class="sec-title">Browse the <span class="ac">six pillars.</span></h2>

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
                <div class="cat-desc">{!! $category->description !!}</div>

                <div class="sector-grid">
                  @foreach($category->sectors as $sector)
                    <div class="sector-card">
                      <div class="sector-name">{{ $sector->id == 12 ? 'General Categories' : $sector->name }}</div>

                      <div>
                        @if($sector->awards->isEmpty())
                          <p class="no-nominees">Awaiting category details...</p>
                        @else
                          @foreach($sector->awards as $award)
                            <div class="award-item">
                              <div class="award-name">🏆 {{ $award->name }}</div>
                              @if($award->criteria)
                                <span class="criteria-label">Judging Criteria</span>
                                <div class="criteria-text">{!! $award->criteria !!}</div>
                              @endif

                              <div>
                                <!-- <button type="button" class="btn-nominate"
                                  onclick="toggleNominationForm(event, '{{ $award->hashid }}')">+ Nominate
                                  Someone</button> -->
                              </div>

                              <div id="nomination-form-{{ $award->hashid }}" class="nom-form" style="display:none">
                                <form action="{{ route('add.nominee_new') }}" method="POST">
                                  @csrf
                                  <input type="hidden" name="awards_id" value="{{ $award->hashid }}">
                                  <label>Nominee Name</label>
                                  <input type="text" name="nominee_name" placeholder="Enter name or organization"
                                    required>
                                  <div class="nom-actions">
                                    <button type="submit" class="btn-submit-nom">Add Official Nominee</button>
                                    <button type="button" class="btn-cancel-nom"
                                      onclick="toggleNominationForm(event, '{{ $award->hashid }}')">Cancel</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          @endforeach
                        @endif
                      </div>

                      @if($sector->nominees && $sector->nominees->count() > 0)
                        <div class="nominees-block">
                          <div class="nominees-label">Official Nominees</div>
                          <div class="nominee-tags">
                            @foreach($sector->nominees as $nominee)
                              <span class="nominee-tag">{{ $nominee->name }}</span>
                            @endforeach
                          </div>
                        </div>
                      @else
                        <p class="no-nominees">No official nominees yet</p>
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
          <h3 style="color:#fff">Africa Edition voting is live</h3>
          <p style="color:#c2cae0;font-size:14px">Vote before 15 August 2026. Europe Edition nominations are in
            progress — register interest to take part.</p>
        </div>
        <a class="btn btn-gold" href="{{ route('show_vote') }}">Vote Now →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

  <script>
    function toggleCatAccordion(event, header) {
      if (event) event.preventDefault();
      const group = header.closest('.cat-group');
      const item = header.parentElement;
      const isOpen = item.classList.contains('active');

      group.querySelectorAll('.cat-item').forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
          otherItem.querySelector('.cat-header').setAttribute('aria-expanded', 'false');
        }
      });

      if (isOpen) {
        item.classList.remove('active');
        header.setAttribute('aria-expanded', 'false');
      } else {
        item.classList.add('active');
        header.setAttribute('aria-expanded', 'true');
      }
    }

    function toggleNominationForm(event, awardId) {
      if (event) event.preventDefault();
      const formContainer = document.getElementById(`nomination-form-${awardId}`);
      const isVisible = formContainer.style.display !== 'none';

      document.querySelectorAll('.nom-form').forEach(form => {
        form.style.display = 'none';
      });

      if (!isVisible) {
        formContainer.style.display = 'block';
      } else {
        formContainer.style.display = 'none';
      }
    }
  </script>

</body>

</html>
