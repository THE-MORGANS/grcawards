<!DOCTYPE html>
<html lang="en">
@section('title', 'Advisory Governing Council')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/board_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Advisory Council</div>
      <h1>Our Advisory <span class="ac">Governing Council.</span></h1>
      <p>Appointed in 2025, the Advisory Governing Council provides strategic guidance and upholds transparency and
        integrity across the judging process — bringing distinguished leaders from across the GRC and financial
        crime prevention profession.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">The Council</div>
      <h2 class="sec-title">GRC &amp; FinCrime Prevention <span class="ac">Advisory Governing Council.</span></h2>

      <div class="board-grid">
        @foreach($boards as $board)
          <div class="board-card" data-bs-toggle="modal" data-bs-target="#j{{ $board->id }}" role="button"
            tabindex="0">
            <img class="board-photo" src="{{ $board->path_to_image }}" alt="{{ $board->name }}">
            <div class="board-info">
              <div class="board-name">{{ $board->name }}</div>
              <div class="board-role">{{ $board->position }}</div>
              @if($board->ln_link != '')
                <div class="board-social">
                  <a href="{{ $board->ln_link }}" onclick="event.stopPropagation();" target="_blank">
                    <i class="mdi mdi-linkedin"></i> LinkedIn
                  </a>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  @foreach($boards as $board)
    <div class="modal fade board-modal" id="j{{ $board->id }}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ $board->position }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
              style="background:none;border:none;color:var(--navy);font-size:24px;cursor:pointer;opacity:1;">&times;</button>
          </div>
          <div class="modal-body">
            <img class="board-modal-photo" src="{{ $board->path_to_image }}" alt="{{ $board->name }}">
            <div class="board-modal-name">{{ $board->name }}</div>
            <div class="board-modal-role">{{ $board->position }}</div>
            <div class="board-modal-bio">{{ $board->profile }}</div>
            @if($board->ln_link != '')
              <div class="board-modal-social">
                <a target="_blank" href="{{ $board->ln_link }}"><i class="mdi mdi-linkedin"></i> View LinkedIn
                  Profile</a>
              </div>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-close-modal" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')
  <script src="{{asset('assets/js/vendor.min.js')}}"></script>
  <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
