<!DOCTYPE html>
<html lang="en">
@section('title', 'Sponsors')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Sponsors</div>
      <h1>Partner with a <span class="ac">two-continent platform.</span></h1>
      <p>Sponsor the Africa Edition, the Europe Edition, or both — and network with C-suite executives and corporate
        leaders across the profession, with brand visibility spanning the full pre-event, on-the-night and
        post-event programme.</p>
    </div>
  </header>

  <section class="band white" id="packages">
    <div class="wrap">
      <div class="sec-eyebrow">Sponsorship Packages</div>
      <h2 class="sec-title">Three tiers. <span class="ac">Maximum impact.</span></h2>
      <div class="price-grid" style="grid-template-columns:repeat(3,1fr);margin-top:34px">
        <div class="price feat">
          <div class="flag">Most Visibility</div>
          <h3>Gold Sponsor</h3>
          <ul>
            <li>Awards category named after your organisation</li>
            <li>Award presentation on your category on the night</li>
            <li>Colour advert &amp; company profile in the brochure (One Page)</li>
            <li>Company branding at the venue</li>
            <li>Logo on all pre-marketing: brochure, web banners, social</li>
            <li>10-second static advert on screen at the venue</li>
            <li>Sponsor mention across our social platforms</li>
            <li>Complimentary VIP tickets (6)</li>
            <li>Press release announcing the partnership</li>
            <li>Red-carpet interviews &amp; networking with dignitaries</li>
          </ul>
          <a class="btn btn-gold" href="https://forms.gle/xzXerKNH8vpaZeaF9">Get Started →</a>
        </div>
        <div class="price">
          <h3>Silver Sponsor</h3>
          <ul>
            <li>Awards category named after your organisation</li>
            <li>Award presentation on your category on the night</li>
            <li>Colour advert &amp; company profile in the brochure (Half Page)</li>
            <li>Company branding at the venue</li>
            <li>Logo on all pre-marketing: brochure, web banners, social</li>
            <li>10-second static advert on screen at the venue</li>
            <li>Sponsor mention across our social platforms</li>
            <li>Complimentary VIP tickets (4)</li>
            <li>Press release announcing the partnership</li>
            <li>Red-carpet interviews &amp; networking with dignitaries</li>
          </ul>
          <a class="btn btn-navy" href="https://forms.gle/xzXerKNH8vpaZeaF9">Get Started →</a>
        </div>
        <div class="price">
          <h3>Bronze Sponsor</h3>
          <ul>
            <li>Awards category named after your organisation</li>
            <li>Award presentation on your category on the night</li>
            <li>Colour advert &amp; company profile in the brochure (Quarter Page)</li>
            <li>Company branding at the venue</li>
            <li>Logo on all pre-marketing: brochure, web banners, social</li>
            <li>10-second static advert on screen at the venue</li>
            <li>Sponsor mention across our social platforms</li>
            <li>Complimentary VIP tickets (2)</li>
            <li>Press release announcing the partnership</li>
            <li>Red-carpet interviews &amp; networking with dignitaries</li>
          </ul>
          <a class="btn btn-navy" href="https://forms.gle/xzXerKNH8vpaZeaF9">Get Started →</a>
        </div>
      </div>
      <p class="center" style="color:var(--muted);font-size:13px;margin-top:16px">Multi-edition packages spanning
        both Nairobi and London are available on request.</p>
    </div>
  </section>

  <section class="band cream" id="becomeASponsor">
    <div class="wrap">
      <div class="sec-eyebrow">Why Become a Sponsor?</div>
      <h2 class="sec-title">Access, influence <span class="ac">and return.</span></h2>
      <div class="grid g4" style="margin-top:26px">
        <div class="card icard"><span class="em">📈</span>
          <div>
            <h3>Return on Investment</h3>
            <p>Measurable exposure across a high-value professional audience.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🎯</span>
          <div>
            <h3>Audience Insights</h3>
            <p>Direct access to corporate leaders and their networks.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🤝</span>
          <div>
            <h3>Lead Generation</h3>
            <p>Warm prospects and sales conversations.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🌐</span>
          <div>
            <h3>Reach</h3>
            <p>Website traffic, social reach and focused content.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🏷️</span>
          <div>
            <h3>Brand Building</h3>
            <p>Stand alongside the region's GRC leaders.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">🎤</span>
          <div>
            <h3>Thought Leadership</h3>
            <p>Showcase a product or service to decision-makers.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">💼</span>
          <div>
            <h3>C-Suite Network</h3>
            <p>Network with captains and C-suite on the night.</p>
          </div>
        </div>
        <div class="card icard"><span class="em">📰</span>
          <div>
            <h3>Media Exposure</h3>
            <p>Press coverage and red-carpet opportunities.</p>
          </div>
        </div>
      </div>
      <div class="callout navy"
        style="margin-top:32px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px">
        <div>
          <h3 style="color:#fff">Ready to discuss a partnership?</h3>
          <p style="color:#c2cae0;font-size:14px">Request our full Sponsorship Prospectus or a bespoke multi-edition
            package.</p>
        </div>
        <a class="btn btn-gold" href="mailto:events@grcfincrimeawards.com?subject=Sponsorship%20Enquiry">Request
          Prospectus →</a>
      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
