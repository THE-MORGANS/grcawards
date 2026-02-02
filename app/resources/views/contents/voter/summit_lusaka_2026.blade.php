<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Lusaka Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />

    <style>
        :root {
            --gold: #D4AF37;
            --dark: #0f1115;
            --dark-accent: #1a1d24;
            --light-bg: #f8f9fa;
            --text-body: #555;
            --text-dark: #222;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: var(--text-body);
            background-color: #fff;
        }

        /* --- Header & Hero --- */
        /* Fix Navbar Z-Index Conflict */
        .conference-header-fixed {
            z-index: 99999 !important;
        }

        /* --- Header & Hero --- */
        .page-header-premium {
            position: relative;
            background: var(--dark);
            padding: 120px 0 60px;
            color: #fff;
            /* overflow: hidden; Removed to prevent clipping if interactions occur */
        }

        .header-bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(15,17,21,0.95) 0%, rgba(26,29,36,0.9) 100%);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .premium-breadcrumbs {
            display: inline-flex;
            gap: 15px;
            padding: 8px 20px;
            background: rgba(255,255,255,0.05);
            border-radius: 50px;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .premium-breadcrumbs a {
            color: var(--gold);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .premium-breadcrumbs span {
            color: rgba(255,255,255,0.3);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 15px;
            background: linear-gradient(to right, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
             font-size: 1.25rem;
             color: rgba(255,255,255,0.7);
             max-width: 700px;
             margin: 0 auto;
             line-height: 1.6;
        }

        /* Banner Image Wrapper */
        .banner-wrapper {
            margin-top: -50px;
            position: relative;
            z-index: 10;
            padding: 0 15px;
        }
        .summit-banner {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            display: block;
        }

        /* --- Sections --- */
        .section-premium {
            padding: 80px 0;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 30px;
            position: relative;
            padding-left: 20px;
        }
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            bottom: 5px;
            width: 4px;
            background: var(--gold);
            border-radius: 2px;
        }

        .highlight-gold {
            color: var(--gold);
            font-weight: 600;
        }

        /* Premium Cards */
        .card-premium {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .card-premium:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            border-color: rgba(212, 175, 55, 0.3);
        }
        .card-premium h5 {
            color: var(--dark);
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Lists */
        .list-check li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            list-style: none;
            line-height: 1.6;
        }
        .list-check li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            height: 24px;
            width: 24px;
            background: rgba(212, 175, 55, 0.1);
            color: var(--gold);
            border-radius: 50%;
            text-align: center;
            line-height: 24px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Programme Cards */
        .programme-card {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 25px;
            height: 100%;
            border: 1px solid transparent;
            transition: 0.3s;
        }
        .programme-card:hover {
            background: #fff;
            border-color: var(--gold);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        .day-badge {
            display: inline-block;
            background: var(--dark);
            color: #fff;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Sidebar & Widgets */
        .sidebar-sticky {
            position: sticky;
            top: 100px;
        }

        .widget-box {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid #f0f0f0;
        }
        
        .widget-dark {
            background: var(--dark);
            color: #fff;
            border: none;
        }
        .widget-dark h3 { color: var(--gold); }
        .widget-dark .text-muted { color: rgba(255,255,255,0.6) !important; }
        .widget-dark hr { border-color: rgba(255,255,255,0.1); }

        .btn-gold-block {
            display: block;
            width: 100%;
            background: var(--gold);
            color: #fff;
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
            text-decoration: none;
        }
        .btn-gold-block:hover {
            background: #b59226;
            color: #fff;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }

        .meta-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        .meta-row i {
            font-size: 1.2rem;
            color: var(--gold);
            margin-right: 15px;
            margin-top: 2px;
        }

        /* FAQ Accordion */
        .accordion-item {
            border: 1px solid #eee;
            border-radius: 10px !important;
            margin-bottom: 10px;
            overflow: hidden;
        }
        .accordion-button {
            background: #fff;
            font-weight: 600;
            color: var(--dark);
            box-shadow: none !important;
        }
        .accordion-button:not(.collapsed) {
            background: rgba(212, 175, 55, 0.05);
            color: var(--dark);
        }
        .accordion-button:focus {
            border-color: rgba(212, 175, 55, 0.5);
        }

        /* Mobile */
        @media (max-width: 991px) {
            .hero-title { font-size: 2.5rem; }
            .page-header-premium { padding: 80px 0 40px; }
            .sidebar-sticky { position: static; margin-top: 40px; }
        }
    </style>
</head>

<body id="conference-page">
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <!-- Premium Hero Section -->
    <header class="page-header-premium">
        <div class="header-bg-overlay"></div>
        <div class="container header-content">
            <div class="premium-breadcrumbs">
                <a href="{{route('landing.index')}}">Home</a> <span>•</span> Lusaka Summit 2026
            </div>
            <h1 class="hero-title">Lusaka Summit 2026</h1>
            <p class="hero-subtitle">Trust, Resilience and Sustainable Growth: Advancing Governance, Risk, Compliance and Financial Crime Prevention in Africa.</p>
        </div>
    </header>

    <!-- Banner -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="banner-wrapper">
                    <img src="{{asset('/assets/lusaka_summit_banner_2026.jpeg')}}" alt="Lusaka Summit Banner" class="summit-banner mx-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="section-premium">
        <div class="container">
            <div class="row">
                
                <!-- Main Column -->
                <div class="col-lg-8">
                    
                    <div class="mb-5">
                       <h2 class="section-title">About the Conference</h2>
                       <p class="lead" style="color: #444; font-weight: 500;">
                           The Africa Governance, Risk, Compliance & Financial Crime Prevention Conference is a high-level convening bringing together senior leaders from government, regulatory authorities, central banks, and financial institutions.
                       </p>
                       <p>
                           Hosted in Lusaka, Zambia, this is a secure, professionally curated platform for strategic dialogue on the critical challenges facing Africa today.
                       </p>
                        <div class="card-premium bg-light border-0" style="background: #fdfdfd; border-left: 4px solid var(--gold) !important;">
                            <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; margin-bottom: 10px;">Executive Forum</h6>
                            <p class="mb-0"><strong>This is not a general conference.</strong> It is a transformational, decision-maker-level forum for those shaping Africa's governance and integrity agenda.</p>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="section-title">Conference Theme</h2>
                        <h4 class="mb-3">Trust, Resilience and Sustainable Growth</h4>
                        <p class="mb-4">A global approach to building resilient institutions and advancing next-generation risk management. The theme reflects that:</p>
                        <ul class="list-check">
                            <li>Financial crime prevention is an outcome of strong governance</li>
                            <li>Compliance is effective only when embedded within enterprise risk management</li>
                            <li>Sustainable growth requires institutional trust and accountability</li>
                        </ul>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="card-premium h-100">
                                <h5>Why It Matters</h5>
                                <ul class="list-check small">
                                    <li>Rising regulatory expectations</li>
                                    <li>Accelerating technology & cyber risk</li>
                                    <li>Increasing financial crime threats</li>
                                    <li>Pressure for sustainable growth</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-premium h-100">
                                <h5>Who Should Attend</h5>
                                <ul class="list-check small">
                                    <li>Government Ministries & Agencies</li>
                                    <li>Central Banks & Regulators</li>
                                    <li>Boards & C-Suite Executives</li>
                                    <li>Heads of Risk & Compliance</li>
                                    <li>Technology & Cyber Providers</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="section-title">Programme Overview</h2>
                        <div class="row g-4">
                            <!-- Day 1 -->
                            <div class="col-md-4">
                                <div class="programme-card">
                                    <span class="day-badge">Day 1</span>
                                    <h6>Governance & Leadership</h6>
                                    <p class="small text-muted mb-0">Ministerial keynotes, reform, accountability, and ethical leadership.</p>
                                </div>
                            </div>
                            <!-- Day 2 -->
                            <div class="col-md-4">
                                <div class="programme-card">
                                    <span class="day-badge">Day 2</span>
                                    <h6>Risk & Resilience</h6>
                                    <p class="small text-muted mb-0">Enterprise risk, compliance expectations, culture, and controls.</p>
                                </div>
                            </div>
                            <!-- Day 3 -->
                            <div class="col-md-4">
                                <div class="programme-card">
                                    <span class="day-badge">Day 3</span>
                                    <h6>Tech & FinCrime</h6>
                                    <p class="small text-muted mb-0">Cyber risk, digital trust, data governance, and intelligence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-5">
                        <h2 class="section-title">Value & Benefits</h2>
                        <ul class="list-check">
                            <li>Engage directly with policy-makers and regulators</li>
                            <li>Insight into emerging governance and risk expectations</li>
                            <li>Practical approaches to enterprise and cyber risk</li>
                            <li>Build relationships across public and private sectors</li>
                            <li>Contribute to shaping Africa's governance agenda</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                         <h2 class="section-title">Common Questions</h2>
                         <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        Who is the target audience?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Senior stakeholders: government officials, regulators, board members, executives, heads of risk and compliance, and technology leaders.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Is accommodation included?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        No. The delegate fee covers the conference, materials, and meals. Accommodation and travel are the delegate's responsibility.
                                    </div>
                                </div>
                            </div>
                             <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Are group bookings available?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes. Please contact <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a> for group registration inquiries.
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        
                        <!-- Event Info -->
                        <div class="widget-box">
                            <h4 class="mb-4">Event Details</h4>
                            <div class="meta-row">
                                <i class="mdi mdi-map-marker-outline"></i>
                                <div>
                                    <h6 class="mb-0">Lusaka, Zambia</h6>
                                    <small class="text-muted">Southern Sun Ridgeway Hotel</small>
                                </div>
                            </div>
                            <div class="meta-row">
                                <i class="uil uil-calendar-alt"></i>
                                <div>
                                    <h6 class="mb-0">15 – 17 April 2026</h6>
                                    <small class="text-muted">3-Day Conference</small>
                                </div>
                            </div>
                            <a href="{{route('landing.summit_lusaka_2026_register')}}" class="btn-gold-block">Register Now</a>
                        </div>

                        <!-- Fees -->
                        <div class="widget-box widget-dark">
                            <h4 class="text-white mb-3">Delegate Fees</h4>
                            <h3>USD 1,300</h3>
                            <p class="text-muted mb-4">Full Conference Pass (3 Days)</p>
                            
                            <hr>
                            
                            <h6 class="text-white mt-4 mb-3">Includes:</h6>
                            <ul class="list-unstyled text-muted small mb-0">
                                <li class="mb-2">✓ Access to all sessions</li>
                                <li class="mb-2">✓ Conference materials</li>
                                <li class="mb-2">✓ Refreshments & Lunches</li>
                                <li class="mb-2">✓ Networking events</li>
                                <li>✓ Participation Certificate</li>
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div class="widget-box">
                             <h4 class="mb-3">Contact Us</h4>
                             <p class="small text-muted mb-3">For sponsorship and general inquiries:</p>
                             <a href="mailto:events@grcfincrimeawards.com" class="text-decoration-none text-dark fw-bold">
                                 <i class="mdi mdi-email-outline text-warning me-2"></i> events@grcfincrimeawards.com
                             </a>
                             
                             <hr class="my-4">
                             
                             <div class="d-flex gap-2 justify-content-center">
                                <a href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank" class="btn btn-light rounded-circle shadow-sm p-2"><i class="mdi mdi-facebook text-primary"></i></a>
                                <a href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-light rounded-circle shadow-sm p-2"><i class="mdi mdi-instagram text-danger"></i></a>
                                <a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop" class="btn btn-light rounded-circle shadow-sm p-2"><i class="mdi mdi-linkedin text-info"></i></a>
                             </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Modals -->
    <div class="modal fade" id="order-of-programme-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header border-0 py-3 px-4">
                    <h5 class="modal-title">Order of Programme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                   <img src="{{asset('/assets/summit_order_of_programme.jpg')}}" alt="Order of Programme" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    @include('partials.voter.footer')
    
    <!-- Scripts -->
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <script>
        // Optional: Count down timer script if needed again later
        var countDownDate = new Date("Apr 15, 2026 09:00:00").getTime();
    </script>
</body>
</html>
