<!DOCTYPE html>
<html lang="zxx">
@section('title', 'THE MORGANS Annual Global Mid-Year Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0B0F19;
            --primary-light: #1E293B;
            --gold: #A8862D;
            --gold-light: #ECC844;
            --gold-gradient: linear-gradient(135deg, #ECC844 0%, #A8862D 100%);
            --gold-soft-bg: rgba(168, 134, 45, 0.05);
            --gold-border: rgba(168, 134, 45, 0.15);
            --bg-main: #FFFFFF;
            --bg-accent: #FCFBF9;
            --bg-accent-alt: #F8FAFC;
            --border-sleek: #F1EFF5;
            --border-heavy: #E2E8F0;
            --text-title: #0B0F19;
            --text-body: #475569;
            --text-light: #94A3B8;
            --shadow-sm: 0 2px 8px rgba(11, 15, 25, 0.02);
            --shadow-md: 0 8px 30px rgba(11, 15, 25, 0.04);
            --shadow-lg: 0 16px 40px rgba(11, 15, 25, 0.06);
            --transition-premium: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            color: var(--text-body);
            background-color: var(--bg-main);
            overflow-x: hidden;
            letter-spacing: -0.1px;
        }

        /* --- Scrollbar --- */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-main);
        }
        ::-webkit-scrollbar-thumb {
            background: #E2E8F0;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--gold);
        }

        /* --- Navbar Fix --- */
        .conference-header-fixed {
            z-index: 99999 !important;
        }

        /* --- Hero Section --- */
        .page-header-premium {
            position: relative;
            background: radial-gradient(circle at 80% 20%, rgba(236, 200, 68, 0.06), transparent 45%),
                        radial-gradient(circle at 20% 80%, rgba(248, 250, 252, 0.9), transparent 50%),
                        var(--bg-accent);
            padding: 200px 0 120px;
            color: var(--text-title);
            border-bottom: 1px solid var(--border-sleek);
            text-align: center;
        }

        .premium-breadcrumbs {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 8px 24px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 100px;
            margin-bottom: 35px;
            border: 1px solid var(--border-sleek);
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            box-shadow: var(--shadow-sm);
        }
        .premium-breadcrumbs a {
            color: var(--text-body);
            text-decoration: none;
            transition: var(--transition-premium);
        }
        .premium-breadcrumbs a:hover {
            color: var(--gold);
        }
        .premium-breadcrumbs span {
            color: var(--text-light);
            font-size: 0.6rem;
        }

        .premium-summit-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--gold-soft-bg);
            border: 1px solid var(--gold-border);
            padding: 8px 20px;
            border-radius: 100px;
            color: var(--gold);
            font-weight: 800;
            font-size: 0.78rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(168, 134, 45, 0.03);
        }

        .hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 4.5rem;
            font-weight: 800;
            letter-spacing: -2.5px;
            margin-bottom: 25px;
            line-height: 1.05;
            color: var(--text-title);
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-subtitle {
             font-size: 1.55rem;
             color: var(--gold);
             max-width: 900px;
             margin: 0 auto;
             line-height: 1.5;
             font-weight: 600;
             font-family: 'Playfair Display', serif;
             font-style: italic;
             position: relative;
             display: inline-block;
        }

        /* --- Banner Wrapper --- */
        .banner-wrapper {
            margin-top: -60px;
            position: relative;
            z-index: 10;
            padding: 0 15px;
        }
        .summit-banner {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 30px 70px rgba(11, 15, 25, 0.08), 0 0 40px rgba(168, 134, 45, 0.02);
            display: block;
            border: 4px solid var(--bg-main);
            transition: var(--transition-premium);
        }
        .banner-wrapper:hover .summit-banner {
            transform: translateY(-6px);
            box-shadow: 0 35px 80px rgba(11, 15, 25, 0.12), 0 0 50px rgba(168, 134, 45, 0.04);
        }

        /* --- Sections & Layout --- */
        .section-premium {
            padding: 100px 0;
        }

        .section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--text-title);
            margin-bottom: 35px;
            position: relative;
            padding-left: 24px;
            letter-spacing: -1px;
        }
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 6px;
            bottom: 6px;
            width: 5px;
            background: var(--gold-gradient);
            border-radius: 10px;
        }

        .highlight-gold {
            color: var(--gold);
            font-weight: 700;
        }

        /* --- Sleek Cards --- */
        .card-premium {
            background: var(--bg-main);
            border: 1px solid var(--border-sleek);
            border-radius: 20px;
            padding: 35px;
            margin-bottom: 30px;
            transition: var(--transition-premium);
            position: relative;
            box-shadow: var(--shadow-sm);
        }
        .card-premium::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 20px;
            border: 1px solid transparent;
            background: linear-gradient(135deg, rgba(168, 134, 45, 0.2), transparent) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
            pointer-events: none;
            opacity: 0;
            transition: var(--transition-premium);
        }
        .card-premium:hover {
            transform: translateY(-5px);
            border-color: transparent;
            box-shadow: var(--shadow-lg);
        }
        .card-premium:hover::after {
            opacity: 1;
        }
        .card-premium h5 {
            font-family: 'Outfit', sans-serif;
            color: var(--text-title);
            font-weight: 800;
            margin-bottom: 25px;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
        }
        .card-premium h5 i {
            color: var(--gold);
            font-size: 1.4rem;
        }

        /* --- Sleek Bullet Lists --- */
        .list-check {
            padding-left: 0;
        }
        .list-check li {
            position: relative;
            padding-left: 36px;
            margin-bottom: 16px;
            list-style: none;
            line-height: 1.6;
            color: var(--text-body);
            font-size: 0.98rem;
        }
        .list-check li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 2px;
            height: 24px;
            width: 24px;
            background: var(--gold-soft-bg);
            color: var(--gold);
            border-radius: 50%;
            text-align: center;
            line-height: 22px;
            font-size: 0.8rem;
            font-weight: bold;
            border: 1px solid var(--gold-border);
            transition: var(--transition-premium);
        }
        .list-check li:hover::before {
            background: var(--gold);
            color: #FFFFFF;
            border-color: var(--gold);
            transform: scale(1.1);
        }

        /* --- Programme Grid --- */
        .programme-card {
            background: var(--bg-accent);
            border-radius: 20px;
            padding: 35px;
            height: 100%;
            border: 1px solid var(--border-sleek);
            transition: var(--transition-premium);
            box-shadow: var(--shadow-sm);
        }
        .programme-card:hover {
            border-color: var(--gold-border);
            background: #FFFFFF;
            box-shadow: var(--shadow-lg);
            transform: translateY(-4px);
        }
        .day-badge {
            display: inline-block;
            background: var(--text-title);
            color: #FFFFFF;
            padding: 6px 18px;
            border-radius: 100px;
            font-size: 0.72rem;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* --- Sticky Sidebar --- */
        .sidebar-sticky {
            position: sticky;
            top: 120px;
        }

        .widget-box {
            background: var(--bg-main);
            border-radius: 24px;
            padding: 35px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-sleek);
            transition: var(--transition-premium);
        }
        .widget-box:hover {
            box-shadow: var(--shadow-lg);
            border-color: var(--border-heavy);
        }
        .widget-box h5 {
            font-family: 'Outfit', sans-serif;
        }
        
        .btn-gold-block {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            background: var(--gold-gradient);
            color: #FFFFFF !important;
            text-align: center;
            padding: 16px;
            border-radius: 14px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: var(--transition-premium);
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(168, 134, 45, 0.25);
            border: none;
            overflow: hidden;
            font-size: 0.9rem;
        }
        .btn-gold-block::before {
            content: '';
            position: absolute;
            top: 0; left: -100%; width: 100%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.6s;
        }
        .btn-gold-block:hover::before {
            left: 100%;
        }
        .btn-gold-block:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(168, 134, 45, 0.35);
        }

        .meta-row {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-sleek);
        }
        .meta-row:last-of-type {
            border-bottom: none;
            margin-bottom: 30px;
            padding-bottom: 0;
        }
        .meta-icon-wrapper {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: var(--gold-soft-bg);
            border: 1px solid var(--gold-border);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            color: var(--gold);
            font-size: 1.3rem;
            transition: var(--transition-premium);
        }
        .meta-row:hover .meta-icon-wrapper {
            background: var(--gold);
            color: #FFFFFF;
            border-color: var(--gold);
            transform: rotate(5deg) scale(1.05);
        }
        .meta-row h6 {
            color: var(--text-title);
            font-weight: 800;
            margin-bottom: 4px;
            font-size: 0.98rem;
            font-family: 'Outfit', sans-serif;
        }

        /* --- Sponsorship Deck --- */
        .sponsorship-box {
            background: var(--bg-main);
            border-radius: 24px;
            padding: 35px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-md);
            border: 1px dashed var(--gold-border);
            transition: var(--transition-premium);
        }
        .sponsorship-box:hover {
            border-color: var(--gold);
            box-shadow: var(--shadow-lg);
        }
        .sponsorship-box h5 {
            font-family: 'Outfit', sans-serif;
        }

        /* --- Forms Styling --- */
        .sponsorship-form .form-group {
            margin-bottom: 20px;
        }
        .sponsorship-form label {
            font-size: 0.72rem;
            font-weight: 800;
            color: var(--text-title);
            margin-bottom: 8px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .sponsorship-form .form-control {
            background: var(--bg-accent-alt);
            border-radius: 10px;
            border: 1px solid var(--border-sleek);
            padding: 12px 16px;
            font-size: 0.92rem;
            color: var(--text-title);
            transition: var(--transition-premium);
            font-weight: 500;
        }
        .sponsorship-form .form-control::placeholder {
            color: var(--text-light);
        }
        .sponsorship-form .form-control:focus {
            background: #FFFFFF;
            border-color: var(--gold);
            box-shadow: 0 0 0 4px rgba(168, 134, 45, 0.08);
            outline: none;
        }
        .btn-download-prospectus {
            background: var(--bg-accent-alt);
            color: var(--text-title);
            border: 1px solid var(--border-heavy);
            padding: 14px;
            border-radius: 10px;
            font-weight: 800;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: var(--transition-premium);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-top: 15px;
            font-size: 0.82rem;
        }
        .btn-download-prospectus:hover {
            background: var(--text-title);
            color: #FFFFFF;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(11, 15, 25, 0.1);
        }

        /* --- Speakers Grid Styling --- */
        .speakers-section-bg {
            background: var(--bg-accent);
            padding: 110px 0;
            border-top: 1px solid var(--border-sleek);
            border-bottom: 1px solid var(--border-sleek);
        }

        .speaker-card {
            text-align: center;
            padding: 35px 24px;
            background: var(--bg-main);
            border-radius: 24px;
            border: 1px solid var(--border-sleek);
            transition: var(--transition-premium);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: var(--shadow-sm);
        }
        .speaker-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--gold-border);
        }
        .speaker-image-wrapper {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 25px;
            border: 4px solid var(--border-sleek);
            transition: var(--transition-premium);
            box-shadow: var(--shadow-sm);
            position: relative;
            z-index: 1;
        }
        .speaker-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 50%;
            border: 3px solid transparent;
            background: var(--gold-gradient) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
            opacity: 0;
            transition: var(--transition-premium);
            z-index: 2;
        }
        .speaker-card:hover .speaker-image-wrapper {
            transform: scale(1.05);
            border-color: var(--bg-main);
            box-shadow: 0 10px 20px rgba(168, 134, 45, 0.15);
        }
        .speaker-card:hover .speaker-image-wrapper::after {
            opacity: 1;
        }
        .speaker-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .speaker-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--text-title);
            margin-bottom: 8px;
            letter-spacing: -0.4px;
        }
        .speaker-role {
            font-size: 0.72rem;
            color: var(--gold);
            font-weight: 800;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            background: var(--gold-soft-bg);
            padding: 3px 12px;
            border-radius: 100px;
            border: 1px solid var(--gold-border);
        }
        .speaker-position {
            font-size: 0.85rem;
            color: var(--text-body);
            font-weight: 500;
            line-height: 1.5;
            margin-bottom: 0;
        }

        /* --- Accordion / FAQs --- */
        .accordion-item {
            border: none;
            background: #FFFFFF !important;
            border: 1px solid var(--border-sleek) !important;
            border-radius: 16px !important;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition-premium);
        }
        .accordion-item:hover {
            border-color: var(--border-heavy);
            box-shadow: var(--shadow-md);
        }
        .accordion-button {
            background: transparent !important;
            padding: 22px 28px;
            font-weight: 700;
            color: var(--text-title) !important;
            box-shadow: none !important;
            font-size: 1.05rem;
            font-family: 'Outfit', sans-serif;
        }
        .accordion-button:not(.collapsed) {
            color: var(--gold) !important;
            border-bottom: 1px solid var(--border-sleek);
        }
        .accordion-body {
            padding: 24px 28px;
            color: var(--text-body);
            line-height: 1.7;
            font-size: 0.95rem;
            background: var(--bg-accent);
        }

        /* --- Responsiveness --- */
        @media (max-width: 991px) {
            .hero-title { font-size: 3rem; letter-spacing: -1px; }
            .hero-subtitle { font-size: 1.25rem; }
            .page-header-premium { padding: 140px 0 70px; }
            .sidebar-sticky { position: static; margin-top: 50px; }
        }

        .aesthetic-badge {
            background: #FFFFFF;
            border: 1px solid var(--border-sleek);
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 0.78rem;
            color: var(--text-body);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: var(--shadow-sm);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .aesthetic-badge i {
            color: var(--gold);
        }
    </style>
</head>

<body id="conference-page">
    @include('partials.voter.preloader')
    @include('partials.voter.topbar')

    <!-- Premium Hero Section -->
    <header class="page-header-premium">
        <div class="header-content container">
            <div class="premium-breadcrumbs">
                <a href="{{route('landing.index')}}">Home</a> <span>•</span> Annual Global Mid-Year Summit 2026
            </div>
            <div>
                <span class="premium-summit-badge"><i class="mdi mdi-shield-check-outline"></i> THE MORGANS • GRC & Financial Crime Prevention Summit</span>
            </div>
            <h1 class="hero-title">Annual Global Mid-Year Summit 2026</h1>
            @if($isEarlyBird ?? false)
            <div class="early-bird-banner mt-3">
                <span class="badge bg-danger p-3" style="font-size: 1.1rem; border: 2px solid #fff; box-shadow: 0 4px 20px rgba(220, 53, 69, 0.1); border-radius: 100px;">
                    <i class="mdi mdi-fire"></i> FLASH SALE: 50% EARLY BIRD DISCOUNT ACTIVE!
                </span>
                <p class="mt-2 text-dark" style="font-weight: 600;">Offer valid from March 2nd to 15th, 2026</p>
            </div>
            @endif
            <p class="hero-subtitle">“Beyond Compliance Theatre: Exposing Invisible Risk & Finding Signal in the Noise”</p>
        </div>
    </header>

    <!-- Banner image container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="banner-wrapper">
                    <img src="{{asset('/assets/mid_year_2026.jpeg')}}" alt="Annual Global Mid-Year Summit Banner" class="summit-banner mx-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="section-premium">
        <div class="container">
            <div class="row">
                
                <!-- Main Content Column -->
                <div class="col-lg-8">
                    
                    <!-- About Section -->
                    <div class="mb-5">
                       <h2 class="section-title">About the Summit</h2>
                       <p class="lead" style="color: var(--text-title); font-weight: 500; font-size: 1.15rem; line-height: 1.7;">
                           Now in its 7th year running, the <strong class="highlight-gold">THE MORGANS Annual Global Mid-Year Summit</strong> continues to serve as an international platform bringing together regulators, financial institutions, governance leaders, compliance professionals, policymakers, cybersecurity experts, technology innovators and industry stakeholders from across sectors and regions globally.
                       </p>
                       <p style="font-size: 1rem; line-height: 1.7; color: var(--text-body);">
                           As organisations continue to navigate increasingly complex regulatory, operational and digital environments, this year’s summit will explore the growing gap between formal compliance structures and the real risks emerging beneath the surface of modern organisations.
                       </p>
                        <div class="card-premium mt-4" style="background: rgba(166, 124, 0, 0.02); border-left: 4px solid var(--gold) !important; border-top: none; border-right: none; border-bottom: none; border-radius: 0 14px 14px 0;">
                            <h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1.2px; font-size: 0.8rem; margin-bottom: 8px; font-weight: 800;">Distinguished Convening</h6>
                            <p class="mb-0" style="color: var(--text-title); line-height: 1.6; font-size: 0.95rem;">The summit will feature distinguished keynote speakers, thought leaders and industry experts including corporate and industry leaders contributing perspectives on governance, resilience and institutional leadership.</p>
                        </div>
                    </div>
                    
                    <!-- Theme & Discussions -->
                    <div class="mb-5">
                        <h2 class="section-title">Summit Theme</h2>
                        <h4 class="mb-4" style="color: var(--text-title); font-weight: 700; font-style: italic; font-family: 'Playfair Display', serif; font-size: 1.35rem;">“Beyond Compliance Theatre: Exposing Invisible Risk & Finding Signal in the Noise”</h4>
                        <p class="mb-4" style="font-size: 1rem; line-height: 1.6;">Alongside executive panelists and global governance professionals, discussions will focus on key operational areas and critical topics:</p>
                        <ul class="list-check">
                            <li>Invisible enterprise risks</li>
                            <li>Emerging financial crime trends</li>
                            <li>Cybersecurity and digital vulnerabilities</li>
                            <li>AI and data governance risks</li>
                            <li>Weak governance signals and operational blind spots</li>
                            <li>Regulatory resilience and institutional trust</li>
                        </ul>
                    </div>

                    <!-- Split Info Cards -->
                    <div class="row mb-5">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="card-premium h-100">
                                <h5> Features</h5>
                                <ul class="list-check small">
                                    <li>High-level keynote addresses</li>
                                    <li>Executive panel discussions</li>
                                    <li>Industry thought leadership sessions</li>
                                    <li>Practical governance and compliance insights</li>
                                    <li>Strategic conversations on financial crime prevention & digital resilience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-premium h-100">
                                <h5> Target Audience</h5>
                                <ul class="list-check small">
                                    <li>Regulators and policymakers</li>
                                    <li>Financial institutions and banks</li>
                                    <li>Governance, risk and compliance professionals</li>
                                    <li>Technology and cybersecurity leaders</li>
                                    <li>Audit, legal and risk practitioners</li>
                                    <li>Public and private sector executives globally</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Programme Overview -->
                    <div class="mb-5">
                        <h2 class="section-title">Programme Overview</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="programme-card">
                                    <span class="day-badge">Friday, 26th June 2026</span>
                                    <h4 style="color: var(--text-title); font-weight: 800; margin-bottom: 12px; font-size: 1.25rem;">THE MORGANS Annual Global Mid-Year Summit</h4>
                                    <p class="mb-0" style="line-height: 1.7; font-size: 0.95rem;">A high-level intensive 2-hour virtual summit running from 12:00 PM – 2:00 PM (UK Time) hosted securely on Microsoft Teams, exploring the real risks emerging beneath the surface of modern organisations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Value and Benefits -->
                    <div class="mb-5">
                        <h2 class="section-title">Value & Benefits</h2>
                        <p class="mb-4" style="font-size: 1rem;">Participants will gain valuable perspectives on how organisations can strengthen:</p>
                        <ul class="list-check">
                            <li>Governance and accountability</li>
                            <li>Risk intelligence capabilities</li>
                            <li>Operational resilience</li>
                            <li>Digital trust frameworks</li>
                            <li>Regulatory preparedness and cross-sector collaboration</li>
                        </ul>
                    </div>

                    <!-- Beautiful Shape the Future Quote Card -->
                    <div class="card-premium mb-5" style="border: 1px solid rgba(166, 124, 0, 0.2); background: radial-gradient(circle at top right, rgba(212, 175, 55, 0.05), transparent 60%), #FFFFFF !important; box-shadow: 0 6px 20px rgba(0,0,0,0.015);">
                        <h4 class="text-gold mb-3" style="font-weight: 800; font-family: 'Playfair Display', serif; font-style: italic; font-size: 1.3rem;">Shaping the Future of Resilience</h4>
                        <p class="mb-0" style="font-size: 1rem; line-height: 1.7; color: var(--text-body);">As the global risk landscape continues to evolve, the summit provides an important opportunity for leaders and professionals to engage in forward-looking conversations focused on resilience, accountability, innovation and sustainable institutional growth.</p>
                    </div>

                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        
                        <!-- Event Info Box -->
                        <div class="widget-box">
                            <h5 style="color: var(--text-title); font-weight: 800; margin-bottom: 25px; border-bottom: 1px solid var(--border-sleek); padding-bottom: 15px; letter-spacing: -0.3px;">Event Details</h5>
                            
                            <div class="meta-row">
                                <div class="meta-icon-wrapper">
                                    <i class="mdi mdi-calendar-blank-outline"></i>
                                </div>
                                <div>
                                    <h6>Friday, 26th June 2026</h6>
                                    <small class="text-muted">Global Mid-Year Summit</small>
                                </div>
                            </div>

                            <div class="meta-row">
                                <div class="meta-icon-wrapper">
                                    <i class="mdi mdi-clock-outline"></i>
                                </div>
                                <div>
                                    <h6>12:00 PM – 2:00 PM</h6>
                                    <small class="text-muted">UK Time (BST)</small>
                                </div>
                            </div>

                            <div class="meta-row">
                                <div class="meta-icon-wrapper">
                                    <i class="mdi mdi-laptop"></i>
                                </div>
                                <div>
                                    <h6>Global Virtual Access</h6>
                                    <small class="text-muted">Microsoft Teams Platform</small>
                                </div>
                            </div>

                            <a href="https://events.teams.microsoft.com/event/9afd5c1d-8782-4014-ac44-b4e96693df75@252fbfd9-7d72-47b6-bc0d-43af771c9b6e" target="_blank" class="btn-gold-block">Register to Attend <i class="mdi mdi-arrow-right"></i></a>
                        </div>

                        <!-- Sponsorship Prospectus Form -->
                        <div class="sponsorship-box">
                            <h5 style="color: var(--text-title); font-weight: 800; margin-bottom: 8px; letter-spacing: -0.3px;">For Sponsorship</h5>
                            <p class="small text-muted mb-4">Complete the form below to download our partnership prospectus.</p>
                            
                            <form id="sponsorship-download-form" action="{{ route('summit.sponsorship.download') }}" method="POST" class="sponsorship-form">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" class="form-control" placeholder="John Doe" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+260 ..." required>
                                </div>
                                <button type="submit" class="btn-download-prospectus" id="download-btn">
                                    <span class="btn-text"><i class="mdi mdi-download"></i> Download Prospectus</span>
                                    <span class="btn-loader d-none">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Contact & Socials Info -->
                        <div class="widget-box">
                             <h5 style="color: var(--text-title); font-weight: 800; margin-bottom: 12px; letter-spacing: -0.3px;">Contact Us</h5>
                             <p class="small text-muted mb-3">For sponsorship and general inquiries:</p>
                             <a href="mailto:events@grcfincrimeawards.com" class="text-decoration-none fw-bold" style="color: var(--gold); font-size: 0.95rem; display: flex; align-items: center; gap: 8px;">
                                 <i class="mdi mdi-email-outline"></i> events@grcfincrimeawards.com
                             </a>
                             
                             <hr class="my-4" style="border-color: var(--border-sleek);">
                             
                             <div class="d-flex gap-3 justify-content-center">
                                <a href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank" class="btn rounded-circle p-2" style="background: var(--bg-accent); border: 1px solid var(--border-sleek); color: #3b5998; width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; transition: 0.2s;"><i class="mdi mdi-facebook"></i></a>
                                <a href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank" class="btn rounded-circle p-2" style="background: var(--bg-accent); border: 1px solid var(--border-sleek); color: #ac2bac; width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; transition: 0.2s;"><i class="mdi mdi-instagram"></i></a>
                                <a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop" class="btn rounded-circle p-2" style="background: var(--bg-accent); border: 1px solid var(--border-sleek); color: #0077b5; width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; transition: 0.2s;"><i class="mdi mdi-linkedin"></i></a>
                             </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Distinguished Speakers Section with beautiful grids -->
    <section class="speakers-section-bg">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="aesthetic-badge mb-2"><i class="mdi mdi-star-circle-outline"></i> Elite Panelists</span>
                    <h2 style="color: var(--text-title); font-weight: 800; font-size: 2.3rem; letter-spacing: -1px;">Distinguished Speakers & Experts</h2>
                    <p style="color: var(--text-body); max-width: 600px; margin: 12px auto 0; font-size: 0.95rem;">Meet the industry thought leaders, directors, and compliance visionaries who will head our panels.</p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                @php
                     $speakers = [
                        // Host / Convener
                        ['name' => 'Dr. Foluso Amusa', 'role' => 'Host / Convener', 'position' => 'Chair, GRC and FinCrime Prevention Summit and Awards', 'image' => 'foluso_amusa.jpg'],

                        // Keynote Speakers
                        ['name' => 'Kevin Brear', 'role' => 'Keynote Speaker', 'position' => 'Resilience and GRC Professional', 'image' => 'kevin_brear.jpg'],
                        ['name' => 'Olatunji Vincent', 'role' => 'Keynote Speaker', 'position' => 'National Commissioner of the Nigeria Data Protection Commission', 'image' => 'vincent_olatunji.jpg'],
                        ['name' => 'Dr Mosaku Johnson', 'role' => 'Keynote Speaker', 'position' => 'National Commissioner of the Nigeria Data Protection Commission', 'image' => 'mosaku.jpg'],
                        ['name' => 'Dr. Diksha Pandey', 'role' => 'Keynote Speaker', 'position' => 'National Commissioner of the Nigeria Data Protection Commission', 'image' => 'diksha.jpg'],
                        ['name' => 'Oonagh Vandenberg', 'role' => 'Keynote Speaker', 'position' => 'National Commissioner of the Nigeria Data Protection Commission', 'image' => 'oonagh.png'],
                        ['name' => 'Marilia Aires', 'role' => 'Keynote Speaker', 'position' => 'National Commissioner of the Nigeria Data Protection Commission', 'image' => 'marilia.jpg'],

                        // Panel Speakers
                        ['name' => 'Grace Tabea Letseka', 'role' => 'Panel Speaker', 'position' => 'Head of Resilience & Data, FNB South Africa', 'image' => 'grace_tabea.png'],
                        ['name' => 'Nneka Nwaka', 'role' => 'Panel Speaker', 'position' => 'CCO, Moment Holdings Limited', 'image' => 'nneka_nwaka.jpg'],
                        ['name' => 'Bawo Egbakhumeh', 'role' => 'Panel Speaker', 'position' => 'CEO, Compliance Institute Nigeria', 'image' => 'bawo_egbakhumeh.jpg'],
                        ['name' => 'Dr. Nishal Khusial', 'role' => 'Panel Speaker', 'position' => 'Chief of Strategy - Cyber-Alliance EMEA', 'image' => 'nishal_khusial.jpg'],
                        ['name' => 'Sarah Lloyd', 'role' => 'Panel Speaker', 'position' => 'Chief Risk Officer (CRO) at Absa Bank Zambia', 'image' => 'sarah_lloyd.jpg'],
                        ['name' => 'Warren Manuel', 'role' => 'Panel Speaker', 'position' => 'AI Architect & Advisor', 'image' => 'warren_manuel.jpg'],
                        ['name' => 'Prof. Ehi Esoimeme', 'role' => 'Panel Speaker', 'position' => 'Professor of Business Law and Ethics @ James Hope University, Daaru Salaam University, Rudolph Kwanue University, Kennedy University, Hamar University and African Union University', 'image' => 'ehi_esoimeme.jpg'],
                        ['name' => 'Salaheddine Elgbouri', 'role' => 'Panel Speaker', 'position' => 'Africa AML Compliance Director at Western Union', 'image' => 'salaheddine_elgbouri.jpg'],
                        ['name' => 'Leonardo Limiti', 'role' => 'Panel Speaker', 'position' => 'Compliance Director at Mooney', 'image' => 'leonardo_limiti.jpg'],
                        ['name' => 'Ben McConnachie', 'role' => 'Panel Speaker', 'position' => 'Financial Crime, AML & Fraud Risk Specialist', 'image' => 'ben_mcconnachie.jpg'],
                        ['name' => 'Sally Farid', 'role' => 'Panel Speaker', 'position' => 'Senior Director, IT Audit at The American University in Cairo', 'image' => 'sally_farid.jpg'],
                    ];
                @endphp

                @foreach($speakers as $speaker)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="speaker-card">
                        <div class="speaker-image-wrapper">
                            <img src="{{ asset('assets/images/speakers/midYear_2026/'.($speaker['image'] ?? 'speaker_placeholder.png')) }}" alt="{{ $speaker['name'] }}" class="speaker-image">
                        </div>
                        <h6 class="speaker-name">{{ $speaker['name'] }}</h6>
                        <span class="speaker-role">{{ $speaker['role'] }}</span>
                        <p class="speaker-position">{{ $speaker['position'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQs Accordion -->
    <section class="section-premium" style="background: transparent;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="aesthetic-badge mb-2"><i class="mdi mdi-help-circle-outline"></i> FAQ</span>
                    <h2 style="color: var(--text-title); font-weight: 800; font-size: 2.2rem; letter-spacing: -0.8px;">Frequently Asked Questions</h2>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Who is the target audience for this summit?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Senior stakeholders: government officials, regulators, board members, executives, heads of risk and compliance, technology leaders, legal risk advisors, and security innovators across public and private sectors globally.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How can I contact the event coordinators for sponsorship packages?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For sponsorship or speaker inquiries, you can complete the downloadable partnership prospectus on our sidebar or reach out directly via email to <a href="mailto:events@grcfincrimeawards.com" style="color: var(--gold); text-decoration: none;">events@grcfincrimeawards.com</a>.
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order of Programme Modal -->
    <div class="modal fade" id="order-of-programme-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0" style="background: #FFFFFF; border: 1px solid var(--border-sleek) !important; border-radius: 16px; overflow: hidden;">
                <div class="modal-header border-0 py-4 px-4" style="border-bottom: 1px solid var(--border-sleek) !important;">
                    <h5 class="modal-title" style="color: var(--text-title); font-weight: 800; font-size: 1.2rem;">Order of Programme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                   <img src="{{asset('/assets/summit_order_of_programme.jpg')}}" alt="Order of Programme" class="img-fluid w-100" style="opacity: 0.95;">
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
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('sponsorship-download-form');
            const btn = document.getElementById('download-btn');
            const btnText = btn.querySelector('.btn-text');
            const btnLoader = btn.querySelector('.btn-loader');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Show loading state
                    btn.disabled = true;
                    btnText.classList.add('d-none');
                    btnLoader.classList.remove('d-none');

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            // Reset button
                            btn.disabled = false;
                            btnText.classList.remove('d-none');
                            btnLoader.classList.add('d-none');

                            // Trigger download
                            const link = document.createElement('a');
                            link.href = data.download_url;
                            link.download = data.file_name;
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                            
                            form.reset();
                        } else {
                            throw new Error(data.message || 'Something went wrong');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        btn.disabled = false;
                        btnText.classList.remove('d-none');
                        btnLoader.classList.add('d-none');
                        
                        if(typeof Swal !== 'undefined') {
                            Swal.fire('Error', error.message, 'error');
                        } else {
                            alert('Error: ' + error.message);
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>
