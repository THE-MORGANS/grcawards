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
          <p>20 November 2026 at the Radisson Blu Hotel, Upper Hill, Nairobi — Global Summit 09:00–15:00 EAT; Global
            Awards Gala 18:00–21:00 EAT — plus a virtual Mid-Year Summit each June. Six award pillars apply across
            the programme.</p>
        </details>
        <details>
          <summary>Who is this for?</summary>
          <p>MLROs, chief compliance officers, chief risk officers and heads of financial crime; board and audit
            committee members; regulators, supervisors and financial intelligence units; correspondent banking,
            sanctions and trade finance leads; and RegTech, fintech and payments risk leadership. The delegate list
            is weighted toward second-line leadership and supervisors rather than vendors.</p>
        </details>
        <details>
          <summary>Is this an African event or a global one?</summary>
          <p>It is a global event hosted in Africa. Nairobi is the host city for 2026 — that is a role, not a
            boundary. The programme, the speaker list and the judging panel are recruited internationally by design,
            across African markets, the UK and Europe, and international institutions.</p>
        </details>
        <details>
          <summary>Will Nairobi host every year?</summary>
          <p>Africa is the permanent home of the Global Awards &amp; Summit; the host city rotates. Nairobi hosts the
            7th Annual edition — the 2027 host city will be announced after Nairobi.</p>
        </details>
        <details>
          <summary>Can organisations outside Africa be nominated?</summary>
          <p>Yes. All principal categories are open to international entries and assessed by the same panel against
            the same published criteria. Categories with a defined regional scope are marked as such on the entry
            form.</p>
        </details>
        <details>
          <summary>Can I nominate my own team?</summary>
          <p>Yes — self-nomination is welcome and common. Entry guidance and the criteria for each pillar are
            published alongside the nomination form.</p>
        </details>
        <details>
          <summary>How do I vote?</summary>
          <p>Public voting runs 15 June – 15 August 2026 on the secure online platform — one vote per person per
            category. The top 5 per category proceed to independent judging.</p>
        </details>
        <details>
          <summary>What ticket options are available?</summary>
          <p>One ticket, the whole day — the Full Delegate Pass (USD 250 / KES 32,500) covers the Global Summit
            09:00–15:00 and the Global Awards Gala 18:00–21:00. 10% off early bookings and groups of ten.</p>
        </details>
        <details>
          <summary>How are winners chosen?</summary>
          <p>Public voting shortlists the top 5 per category; an independent panel of judges then assesses those
            nominees against published, sector-specific criteria — without conflict or bias — and recommends the
            top 3 finalists. Winners are announced on the night.</p>
        </details>
        <details>
          <summary>Can my organisation sponsor?</summary>
          <p>Yes — Global Headline, Programme, Awards and Hospitality Partner tiers are available. Contact
            events@grcfincrimeawards.com for the prospectus.</p>
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
