<!DOCTYPE html>
<html lang="en">
@section('title', 'Judges & Judging Process')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Judges &amp; Process</div>
      <h1>Independent judging. <span class="ac">Uncompromising integrity.</span></h1>
      <p>An Advisory Council and an independent, international panel of judges uphold transparency and rigour —
        assessing shortlisted nominees against published, sector-specific criteria across both editions.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">The Judging Process</div>
      <h2 class="sec-title">From public vote <span class="ac">to finalist.</span></h2>
      <div class="timeline" style="margin-top:30px">
        <div class="tl"><span class="num">01</span>
          <div class="status">Public</div>
          <h3>Voting</h3>
          <div class="when">Voting window</div>
          <p>The public votes via the secure online platform. Nominees with the highest votes are contacted about
            their category and criteria.</p>
        </div>
        <div class="tl"><span class="num">02</span>
          <div class="status">Shortlist</div>
          <h3>Top 5 to Judges</h3>
          <div class="when">After voting</div>
          <p>The top 5 per category submit documentary evidence demonstrating they meet the criteria for their
            category.</p>
        </div>
        <div class="tl"><span class="num">03</span>
          <div class="status">Independent</div>
          <h3>Assessment</h3>
          <div class="when">Judging window</div>
          <p>Judges score each nominee separately — without conflict, bias or knowledge of other judges' scores —
            against published criteria.</p>
        </div>
        <div class="tl"><span class="num">04</span>
          <div class="status">Finalists</div>
          <h3>Top 3 Recommended</h3>
          <div class="when">Before the Gala</div>
          <p>Consolidated scores determine the top 3 finalists per category, subject to Awards Committee review.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="band cream">
    <div class="wrap">
      <div class="callout" style="border-left:5px solid var(--crimson)">
        <h3>⚖️ Judge Independence &amp; Integrity</h3>
        <p style="color:var(--muted);font-size:14.5px">All judges assess nominees independently and without
          knowledge of other judges' scores. No judge may assess a category in which they have a personal,
          professional or commercial relationship with any nominee. Judges declare conflicts of interest before the
          process begins and recuse themselves from affected categories. Final recommendations reflect consolidated
          scores and are reviewed by the Awards Committee before announcement.</p>
      </div>
    </div>
  </section>

  <section class="band white">
    <div class="wrap">
      <div class="sec-eyebrow">Advisory Council &amp; Judges</div>
      <h2 class="sec-title">A global panel of <span class="ac">distinguished experts.</span></h2>
      <p class="sec-intro">Appointed in 2025, the Advisory Council provides strategic guidance and upholds
        transparency. An independent panel of judges from multiple countries brings regional perspective and
        sector-specific expertise. Members for 2026 are announced on a rolling basis across both editions.</p>
      <div class="grid g4" style="margin-top:28px">
        <div class="spk">
          <div class="av">AC</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Advisory Council — Governance</div>
        </div>
        <div class="spk">
          <div class="av">AC</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Advisory Council — Financial Crime</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Banking &amp; AML/CFT</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Fintech &amp; RegTech</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Public Sector &amp; Anti-Corruption</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Legal &amp; Investigations</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Cybersecurity &amp; Data</div>
        </div>
        <div class="spk">
          <div class="av">JG</div>
          <div class="nm">[To Be Announced]</div>
          <div class="rl">Judge — Academia &amp; Research</div>
        </div>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
