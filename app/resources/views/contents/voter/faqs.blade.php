<!DOCTYPE html>
<html lang="en">
@section('title', 'FAQs')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · FAQs</div>
      <h1>Frequently asked <span class="ac">questions.</span></h1>
      <p>Everything you need to know about attending, voting, sponsoring and the awards process for the 2026
        Awards &amp; Summit.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="faq">
        <details>
          <summary>When and where is the 2026 Awards &amp; Summit?</summary>
          <p>13 November 2026 at the Marriott Hotel, Upper Hill, Nairobi — Summit 10:00–14:00 EAT; Gala Awards
            16:00–19:00 EAT — plus a virtual Mid-Year Summit each June. Six award pillars apply across the
            programme.</p>
        </details>
        <details>
          <summary>How do I vote?</summary>
          <p>Public voting runs 15 June – 15 August 2026 on the secure online platform — one vote per person per
            category. The top 5 per category proceed to independent judging.</p>
        </details>
        <details>
          <summary>What ticket options are available?</summary>
          <p>Summit Pass (USD 100 / KES 19,500), Full Delegate Pass (USD 250 / KES 45,500), Gala Only Pass (USD 150
            / KES 28,600) and Student / Academic (USD 60 / KES 7,800). Group and table rates are available.</p>
        </details>
        <details>
          <summary>How are winners chosen?</summary>
          <p>Public voting shortlists the top 5 per category; an independent panel of judges then assesses those
            nominees against published, sector-specific criteria — without conflict or bias — and recommends the
            top 3 finalists. Winners are announced on the night.</p>
        </details>
        <details>
          <summary>Can my organisation sponsor?</summary>
          <p>Yes — Gold, Silver and Bronze packages are available. Contact events@grcfincrimeawards.com for the
            prospectus.</p>
        </details>
        <details>
          <summary>Can I speak or chair a session?</summary>
          <p>We welcome expressions of interest from senior practitioners, regulators, fintech leaders and academics.
            Email events@grcfincrimeawards.com with a short profile and topic.</p>
        </details>
        <details>
          <summary>Do international delegates need a visa?</summary>
          <p>Many nationalities require a Kenya eVisa/eTA — apply in advance via the official portal. We can provide
            invitation letters on request.</p>
        </details>
      </div>

      <div class="callout center" style="max-width:820px;margin:30px auto 0">
        <h3>Still have a question?</h3>
        <p style="color:var(--muted);font-size:14px;margin-bottom:14px">Our events team is happy to help.</p>
        <a class="btn btn-crimson" href="{{ route('show_contact') }}">Contact Us →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
