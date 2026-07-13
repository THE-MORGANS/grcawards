<!DOCTYPE html>
<html lang="en">
@section('title', 'Terms & Conditions')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/legal_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Terms &amp; Conditions</div>
      <h1>Terms &amp; <span class="ac">Conditions.</span></h1>
      <p>Please read the following terms carefully before registering, nominating, voting or attending the GRC
        &amp; Financial Crime Prevention Awards &amp; Summit.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="legal-content">
        <ul>
          <li>All materials, presentations, and speeches made by event speakers and trainers are and remain, the
            intellectual property of the organisers.</li>
          <li>The organizers reserves the right to cancel, suspend or change the operation of our obligations to
            you if events occur which are like force majeure fire, flood, storms, plant breakdowns, strikes,
            lockouts, riot, hostilities, non-availability of material or suppliers, or any event outside of our
            control; and we shall not be held liable for any breach of contract or tort resulting from such an
            event.</li>
          <li>You have the right to ask us not to process personal data for marketing purposes.</li>
          <li>You agree to all the terms &amp; conditions set out by TMC in place of awards or event registration
            provided.</li>
        </ul>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
