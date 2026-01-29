<!DOCTYPE html>
<html lang="zxx">
@section('title', 'WGRC Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />

    <style>
        :root {
            --gold: #D4AF37;
            --dark: #111;
            --grey: #f4f4f4;
            --text-body: #333;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; /* Cleaner, editorial font stack */
            color: var(--text-body);
            background-color: #fff;
            padding-bottom: 80px; /* Space for sticky bar */
        }

        /* Centered Header */
        .editorial-header {
            text-align: center;
            padding: 80px 0 40px;
            background: #fff;
        }
        
        .editorial-breadcrumbs {
            display: flex;
            justify-content: center;
            gap: 10px;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }
        .editorial-breadcrumbs a {
            color: var(--gold);
            text-decoration: none;
        }
        .editorial-breadcrumbs span {
            color: #ccc;
        }

        .editorial-title {
            font-size: 3.5rem;
            font-weight: 300; /* Light weight for elegance */
            line-height: 1.1;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .editorial-subtitle {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            font-family: 'Georgia', serif; /* Serif for subtitle contrast */
            font-style: italic;
        }

        /* Full Width Banner */
        .hero-banner-wrapper {
            width: 100%;
            height: auto;
            position: relative;
            margin-bottom: 60px;
        }
        .hero-banner-img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Content Layout */
        .content-wrapper {
            max-width: 800px; /* Narrower reading column */
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        .section-heading h3 {
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
            display: inline-block;
            border-bottom: 2px solid var(--gold);
            padding-bottom: 10px;
        }

        .drop-cap:first-letter {
            float: left;
            font-size: 3.5rem;
            line-height: 0.8;
            padding-right: 15px;
            padding-top: 5px;
            color: var(--gold);
            font-family: 'Georgia', serif;
        }

        .quote-box {
            border-left: 2px solid var(--gold);
            padding-left: 30px;
            margin: 40px 0;
            font-family: 'Georgia', serif;
            font-size: 1.4rem;
            color: var(--dark);
            font-style: italic;
        }

        /* Timeline */
        .timeline {
            position: relative;
            margin: 50px 0;
            padding-left: 30px;
            border-left: 1px solid #ddd;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            padding-left: 20px;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -35px;
            top: 5px;
            width: 11px;
            height: 11px;
            background: #fff;
            border: 2px solid var(--gold);
            border-radius: 50%;
        }
        .timeline-time {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--gold);
            margin-bottom: 5px;
            font-weight: 700;
        }
        .timeline-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        /* Speakers Grid - Minimalist */
        .speaker-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 40px;
            text-align: center;
        }
        .speaker-minimal img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            filter: grayscale(100%);
            transition: all 0.5s ease;
        }
        .speaker-minimal:hover img {
            filter: grayscale(0%);
        }
        .speaker-minimal h5 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .speaker-role {
            font-size: 0.8rem;
            color: #888;
            font-style: italic;
        }

        /* Value Features */
        .value-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        .value-item {
            padding: 20px;
            border: 1px solid #eee;
            transition: 0.3s;
        }
        .value-item:hover {
            border-color: var(--gold);
        }

        /* Sticky Action Bar */
        .sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff;
            border-top: 1px solid #eee;
            padding: 15px 0;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.05);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .sticky-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .event-meta {
            font-size: 0.9rem;
            font-weight: 600;
        }
        .event-meta span {
            margin-right: 20px;
        }
        .event-meta i {
            color: var(--gold);
            margin-right: 5px;
        }
        
        .btn-reserve {
            background: var(--dark);
            color: #fff;
            padding: 12px 30px;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            border: none;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-reserve:hover {
            background: var(--gold);
            color: #fff;
        }
        
        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .editorial-title { font-size: 2.5rem; }
            .hero-banner-wrapper { height: 40vh; }
            .value-grid { grid-template-columns: 1fr; }
            .sticky-content { flex-direction: column; gap: 10px; text-align: center; }
            .event-meta span { display: block; margin: 2px 0; }
        }

    </style>
</head>

<body>
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <!-- Editorial Header -->
    <div class="editorial-header">
        <div class="container">
            <div class="editorial-breadcrumbs">
                <a href="{{route('landing.index')}}">Home</a> <span>/</span> WGRCFP Summit 2026
            </div>
            <h1 class="editorial-title">Women Leading the Change</h1>
            <p class="editorial-subtitle">Shaping the Future of Governance, Risk, Compliance and Financial Crime Prevention</p>
        </div>
    </header>

    <!-- Full Width Hero -->
    <div class="hero-banner-wrapper">
        <img src="{{asset('/assets/wgrcfp_summit_banner_2026.jpeg')}}" alt="WGRCFP Summit 2026" class="hero-banner-img">
    </div>

    <!-- Main Content Flow -->
    <div class="content-wrapper">
        
        <!-- Introduction -->
        <div class="section-heading">
            <h3>About the Summit</h3>
        </div>
        <p class="drop-cap lead" style="margin-bottom: 30px;">
            The WGRCFP Inaugural Summit marks the official launch of a global initiative dedicated to advancing leadership, excellence, and collaboration across governance, risk, compliance, and financial crime prevention.
        </p>
        <p>
            At a time of heightened regulatory scrutiny, rapid technological change, geopolitics instability, and increasing expectations of accountability, organisations need more than frameworks and policies. They need strong judgement, inclusive leadership, and cultures that can hold under pressure.
        </p>
        <div class="quote-box">
            "WGRCFP exists to support exactly that. Women leading the change. Systems that work. Leadership that lasts."
        </div>

        <!-- Strategy -->
        <div style="background: var(--grey); padding: 40px; margin: 60px -20px;">
            <div class="section-heading">
                <h3>Why It Matters</h3>
            </div>
            <div class="value-grid">
                <div class="value-item">
                    <h5>Strategic Direction</h5>
                    <p class="small text-muted mb-0">Set a clear strategic direction for WGRCFP as a professional community.</p>
                </div>
                <div class="value-item">
                    <h5>Inclusive Space</h5>
                    <p class="small text-muted mb-0">Create a credible, inclusive space for leadership-level conversations.</p>
                </div>
                <div class="value-item">
                    <h5>Expertise Bridge</h5>
                    <p class="small text-muted mb-0">Bridge technical GRC expertise with leadership, culture, and decision-making.</p>
                </div>
                <div class="value-item">
                    <h5>Global Momentum</h5>
                    <p class="small text-muted mb-0">Build momentum for a long-term, global programme of events and research.</p>
                </div>
            </div>
        </div>

        <!-- Programme -->
        <div class="section-heading">
            <h3>The Programme</h3>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-time">Opening</div>
                <div class="timeline-title">Welcome & Opening Remarks</div>
                <p class="small text-muted">Reflections on why governance matters now and the purpose of WGRCFP.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">Overview</div>
                <div class="timeline-title">WGRCFP Strategic Focus</div>
                <p class="small text-muted">Introduction to membership, events, research, and collaboration.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">Keynote</div>
                <div class="timeline-title">The State of GRC & FinCrime Prevention</div>
                <p class="small text-muted">Emerging risks, regulatory trends, and technology pressures.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">Leadership</div>
                <div class="timeline-title">Women Leading the Change</div>
                <p class="small text-muted">A systems and cultural lens on leadership under pressure.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">Panel</div>
                <div class="timeline-title">Leadership Discussion</div>
                <p class="small text-muted">Senior leaders exploring challenges and career pathways.</p>
            </div>
             <div class="timeline-item">
                <div class="timeline-time">Closing</div>
                <div class="timeline-title">Q&A and Remarks</div>
                <p class="small text-muted">Community invitation and next steps.</p>
            </div>
        </div>

        <!-- Speakers -->
        <div class="section-heading" style="margin-top: 80px;">
            <h3>Who is Speaking</h3>
        </div>
        <div class="speaker-grid">
            <div class="speaker-minimal">
                <img src="{{asset('assets/img/placeholder-all.png')}}" alt="Elena Pykhova">
                <h5>Elena Pykhova</h5>
                <div class="speaker-role">Keynote: CEO, DORA Advisory</div>
            </div>
            <div class="speaker-minimal">
                <img src="{{asset('assets/img/placeholder-all.png')}}" alt="Natalie Turner">
                <h5>Natalie Turner</h5>
                <div class="speaker-role">Keynote: Innovation Specialist</div>
            </div>
            <div class="speaker-minimal">
                <img src="{{asset('assets/img/placeholder-all.png')}}" alt="Panelist">
                <h5>Panel Leaders</h5>
                <div class="speaker-role">Curated Senior Leaders</div>
            </div>
        </div>

        <!-- Who Should Attend & Join (Text Block) -->
        <div style="margin: 80px 0; text-align: center;">
            <p class="lead"><strong>Who Should Attend?</strong></p>
            <p class="text-muted">CROs, CCOs, Heads of Financial Crime, Regulators, and Emerging Leaders.</p>
            <p class="small" style="max-width: 500px; margin: 20px auto;">We invite all professionals and allies who share our values to join the WGRCFP community for mentorship, research, and growth.</p>
        </div>

    </div>

    <!-- Sticky Bottom Bar -->
    <div class="sticky-bar">
        <div class="sticky-content">
            <div class="event-meta">
                <span><i class="uil uil-calendar-alt"></i> 17 March 2026</span>
                <span><i class="mdi mdi-clock-outline"></i> 12:00 – 13:30 (UK)</span>
                <span><i class="mdi mdi-video"></i> Virtual Event</span>
            </div>
            <div>
                <a href="{{ route('summit_register') }}" target="_blank" class="btn-reserve">Reserve Your Spot</a>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
</body>
</html>
