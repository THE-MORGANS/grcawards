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
        assessing shortlisted nominees against published, sector-specific criteria.</p>
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
      <p class="sec-intro">An independent panel of judges from multiple countries brings regional perspective and
        sector-specific expertise to the 2026 judging process.</p>



      <!--['name' => 'Dayo Adeyemi', 'image' => 'dayo-adeyemi.jpg'],-->
      <!--['name' => 'Emeka Offor', 'image' => 'emeka-offor.jpg'],-->
      <!--['name' => 'Jayden Yoon', 'image' => 'jayden-yoon.jpg'],-->
      <!--['name' => 'Priju Sham', 'image' => 'priju-sham.jpg'],-->


      @php
      $judges = [
      ['name' => 'Esosa Balogun', 'image' => 'esosa-balogun.jpg', 'role' => 'Chair, Panel of Judges'],
      ['name' => 'Kenneth Ashiabuchi', 'image' => 'kenneth-ashiabuchi.jpg'],
      ['name' => 'Ndidi Ahiauzu', 'image' => 'ndidi-ahiauzu.jpg'],
      ['name' => 'Banke Ogunbodede', 'image' => 'banke-ogunbodede.jpg'],
      ['name' => 'Gbugbemi Atimomo', 'image' => 'gbugbemi-atimomo.jpg'],

      ['name' => 'Ope Osiyemi', 'image' => 'ope-osiyemi.jpg'],
      ['name' => 'Emmanuel Michael', 'image' => 'emmanuel-michael.jpg'],
      ['name' => 'Temitope Yusuff', 'image' => 'temitope-yusuff.jpg'],
      ['name' => 'Ebuwa Babajide', 'image' => 'ebuwa-babajide.jpg'],
      ['name' => 'Sunny Ukeachu', 'image' => 'sunny-ukeachu.jpg'],
      ['name' => 'Abraham Awe', 'image' => 'abraham-awe.jpg'],
      ['name' => 'Femi Mosaku-Johnson', 'image' => 'femi-mosaku-johnson.jpg'],
      ['name' => 'Richard Mayungbe', 'image' => 'richard-mayungbe.jpg'],

      ['name' => 'Tayo Felix Ogunneye', 'image' => 'tayo-felix-ogunneye.jpg'],
      ['name' => 'Kenneth Oguzie', 'image' => 'kenneth-oguzie.jpg'],
      ['name' => 'Olu Ajayi', 'image' => 'olu-ajayi.jpg'],
      ['name' => 'Yahya Oubrahim', 'image' => 'yahya-oubrahim.jpg'],
      ['name' => 'Joash Ombati', 'image' => 'joash-ombati.jpg'],
      ['name' => 'Meryem Bouzoubaa', 'image' => 'meryem-bouzoubaa.jpg'],
      ['name' => 'Raksha Beecum-Khadaroo', 'image' => 'raksha-beecum-khadaroo.jpg'],
      ['name' => 'Babongile Mthwthwa', 'image' => 'babongile-mthwthwa.jpg'],
      ['name' => 'Catherine Jeruto', 'image' => 'catherine-jeruto.jpg'],
      ['name' => 'Shehu Ibrahim Idris', 'image' => 'shehu-ibrahim-idris.jpg'],
      ['name' => 'Faithful Kumbula', 'image' => 'faithful-kumbula.jpeg'],

      ['name' => 'Said Katarzyna', 'image' => 'said-katarzyna.jpg'],
      ['name' => 'Daniel Wynne', 'image' => 'daniel-wynne.jpg'],

      ['name' => 'Tarun Sukhija', 'image' => 'tarun-sukhija.jpg'],
      ['name' => 'Handan Tokdogan', 'image' => 'handan-tokdogan.jpg'],
      ['name' => 'Helentung Chambers', 'image' => 'helentung-chambers.jpg'],
      ['name' => 'Emer McPartland', 'image' => 'emer-mcpartland.jpg'],
      ['name' => 'Sinead Halhed-Moran Walsh', 'image' => 'sinead-halhed-moran-walsh.jpg'],
      ['name' => 'Claire Convallaria', 'image' => 'claire-convallaria.jpg'],
      ['name' => 'Craig Skinner', 'image' => 'craig-skinner.jpg'],
      ['name' => 'Paolo Rovatti', 'image' => 'paolo-rovatti.jpg'],
      ['name' => 'Izabella Ferreira Pinto de Calvaho', 'image' => 'izabella-ferreira-pinto-de-calvaho.jpg'],
      ['name' => 'Brendan Greiner', 'image' => 'brendan-greiner.jpg'],
      ['name' => 'Debbie Rawson', 'image' => 'debbie-rawson.jpeg'],
      ['name' => 'Justin Smith', 'image' => 'justin-smith.jpeg'],
      ['name' => 'Michelle Grandison', 'image' => 'michelle-grandison.jpeg'],
      ['name' => 'Ninah Mwende', 'image' => 'ninah-mwende.jpg'],
      ['name' => 'Rajitha Prabhakaran', 'image' => 'rajitha-prabhakaran.png'],
      ['name' => 'Shoaib Masood', 'image' => 'shoaib-masood.png'],
      ['name' => 'Adnal Sanli', 'image' => 'adnal-sanli.jpg'],
      ['name' => 'Muklesur Bharuya', 'image' => 'muklesur-bharuya.png'],
      ['name' => 'Rehman Noormohamed', 'image' => 'rehman-noormohamed.jpeg'],
      ['name' => 'Mukesh Malhotra', 'image' => 'mukesh-malhotra.jpeg'],
      ['name' => 'Oumila Sibartie', 'image' => 'oumila-sibartie.jpeg'],
      ];
      @endphp
      <div class="grid g4" style="margin-top:28px">
        @foreach ($judges as $judge)
        <div class="spk">
          <div class="av">
            @php
            $initials = collect(explode(' ', $judge['name']))->map(fn($w) => mb_substr($w, 0, 1))->join('');
            @endphp
            @if ($judge['image'])
            <img src="{{ asset('assets/images/judges/'.$judge['image']) }}" alt="{{ $judge['name'] }}" loading="lazy"
              onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <span style="display:none;width:100%;height:100%;align-items:center;justify-content:center;">{{ $initials }}</span>
            @else
            {{ $initials }}
            @endif
          </div>
          <div class="nm">{{ $judge['name'] }}</div>
          @if (!empty($judge['role']))
          <div class="rl">{{ $judge['role'] }}</div>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>