<!DOCTYPE html>
<html lang="en">
@section('title', 'Privacy Policy')

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
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Privacy Policy</div>
      <h1>Privacy <span class="ac">Policy.</span></h1>
      <p>How we collect, use and protect your personal information across the GRC &amp; Financial Crime Prevention
        Awards &amp; Summit website and voting platform.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="legal-content">
        <ul>
          <li>We collect the personal information that you provide to us.</li>
          <li>Some information — such as your Internet Protocol (IP) address and/or browser and device
            characteristics — is collected automatically when you visit our website.</li>
          <li>We may collect limited data from public databases, marketing partners, and other outside sources.
          </li>
          <li>We process your information for purposes based on legitimate business interests, the fulfillment of
            our contract with you, compliance with our legal obligations, and/or your consent.</li>
          <li>We only share information with your consent, to comply with laws, to provide you with services, to
            protect your rights, or to fulfill business obligations.</li>
          <li>We aim to protect your personal information through a system of organizational and technical security
            measures.</li>
        </ul>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
