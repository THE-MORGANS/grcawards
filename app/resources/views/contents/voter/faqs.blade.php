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
      <p>Everything you need to know about attending, voting, sponsoring and the awards process across both the
        Africa and Europe editions.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="faq">
        <details>
          <summary>How many editions are there in 2026?</summary>
          <p>Two in-person editions: the Europe Edition in London (6 November 2026, London Marriott Hotel) and the
            Africa Edition in Nairobi (20 November 2026, Marriott Hotel), plus a virtual Mid-Year Summit. The same
            six award pillars apply across both.</p>
        </details>
        <details>
          <summary>Where and when is the Africa Edition?</summary>
          <p>20 November 2026 at the Marriott Hotel, Upper Hill, Nairobi. Summit 10:00–14:00 EAT; Gala Awards
            16:00–19:00 EAT.</p>
        </details>
        <details>
          <summary>When is the Europe Edition in London?</summary>
          <p>The London Edition takes place on 6 November 2026 at the London Marriott Hotel. Register your interest
            to receive ticket details and priority booking.</p>
        </details>
        <details>
          <summary>How do I vote?</summary>
          <p>Africa Edition public voting runs 15 June – 15 August 2026 on the secure online platform — one vote per
            person per category. The top 5 per category proceed to independent judging. Europe Edition voting opens
            later in the year.</p>
        </details>
        <details>
          <summary>What ticket options are available?</summary>
          <p>Africa: Summit Pass (USD 150), Full Delegate (USD 350), Gala Only (USD 220) and Student (USD 60), with
            KES equivalents. Europe pricing (GBP) is confirmed shortly ahead of 6 November. Group and table rates
            are available for both.</p>
        </details>
        <details>
          <summary>How are winners chosen?</summary>
          <p>Public voting shortlists the top 5 per category; an independent panel of judges then assesses those
            nominees against published, sector-specific criteria — without conflict or bias — and recommends the
            top 3 finalists. Winners are announced on the night.</p>
        </details>
        <details>
          <summary>Can my organisation sponsor?</summary>
          <p>Yes — Gold, Silver and Bronze packages are available per edition, with multi-edition options spanning
            Nairobi and London. Contact events@grcfincrimeawards.com for the prospectus.</p>
        </details>
        <details>
          <summary>Can I speak or chair a session?</summary>
          <p>We welcome expressions of interest from senior practitioners, regulators, fintech leaders and academics
            for both editions. Email events@grcfincrimeawards.com with a short profile and topic.</p>
        </details>
        <details>
          <summary>Do international delegates need a visa?</summary>
          <p>For Nairobi, many nationalities require a Kenya eVisa/eTA — apply in advance via the official portal.
            For London, check UK entry requirements for your nationality. We can provide invitation letters on
            request.</p>
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
