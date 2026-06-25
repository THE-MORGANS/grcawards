<!DOCTYPE html>
<html lang="en">
@section('title', 'Home')

<head>
	@include('partials.voter.head')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
	
	<style>
		:root {
			--primary: #0B0F19;
			--primary-light: #161A26;
			--gold: #D4AF37;
			--gold-light: #ECC844;
			--gold-gradient: linear-gradient(135deg, #ECC844 0%, #A8862D 100%);
			--gold-soft-bg: rgba(212, 175, 55, 0.05);
			--gold-border: rgba(212, 175, 55, 0.15);
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
			font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif !important;
			color: var(--text-body);
			background-color: var(--bg-main);
			overflow-x: hidden;
		}

		h1, h2, h3, h4, h5, h6, .title, .title-conference {
			font-family: 'Outfit', sans-serif !important;
			font-weight: 800;
			color: var(--text-title);
		}

		/* Custom adjustments for layout spacing */
		section {
			padding: 90px 0 !important;
		}

		.pt-0 {
			padding-top: 0 !important;
		}

		.pb-0 {
			padding-bottom: 0 !important;
		}

		/* --- Hero Section --- */
		.hero-premium {
			position: relative;
			background: radial-gradient(circle at 80% 20%, rgba(236, 200, 68, 0.08), transparent 45%),
						radial-gradient(circle at 20% 80%, rgba(15, 17, 25, 0.95), rgba(15, 17, 25, 0.98)),
						url('{{asset("assets/lusaka-hotel.webp")}}');
			background-size: cover;
			background-position: center;
			padding: 180px 0 120px !important;
			color: #ffffff;
			text-align: left;
			overflow: hidden;
		}

		.hero-overlay {
			position: absolute;
			top: 0; left: 0; right: 0; bottom: 0;
			background: linear-gradient(180deg, rgba(15, 17, 25, 0.75) 0%, rgba(15, 17, 25, 0.93) 100%);
			z-index: 1;
		}

		.hero-content {
			position: relative;
			z-index: 2;
		}

		.hero-badge {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			background: rgba(255, 255, 255, 0.08);
			border: 1px solid rgba(255, 255, 255, 0.15);
			padding: 6px 16px;
			border-radius: 100px;
			color: var(--gold-light);
			font-weight: 800;
			font-size: 0.75rem;
			letter-spacing: 2px;
			text-transform: uppercase;
			margin-bottom: 25px;
			backdrop-filter: blur(10px);
		}

		.hero-title {
			font-size: 3.5rem;
			font-weight: 900;
			line-height: 1.1;
			letter-spacing: -2px;
			margin-bottom: 20px;
			background: linear-gradient(to right, #ffffff, #e2e8f0);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}

		.hero-subtitle {
			font-size: 1.25rem;
			line-height: 1.6;
			color: #BAC2DE;
			max-width: 800px;
			margin-bottom: 35px;
		}

		.hero-ctas {
			display: flex;
			gap: 15px;
			flex-wrap: wrap;
		}

		.btn-premium-gold {
			background: var(--gold-gradient);
			color: #ffffff !important;
			border: none;
			padding: 14px 28px;
			font-size: 0.85rem;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			border-radius: 12px;
			transition: var(--transition-premium);
			box-shadow: 0 10px 25px rgba(168, 134, 45, 0.25);
			display: inline-flex;
			align-items: center;
			gap: 8px;
			text-decoration: none;
		}

		.btn-premium-gold:hover {
			transform: translateY(-3px);
			box-shadow: 0 12px 30px rgba(168, 134, 45, 0.35);
		}

		.btn-premium-outline {
			background: transparent;
			color: #ffffff !important;
			border: 2px solid rgba(255, 255, 255, 0.2);
			padding: 12px 26px;
			font-size: 0.85rem;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			border-radius: 12px;
			transition: var(--transition-premium);
			display: inline-flex;
			align-items: center;
			gap: 8px;
			text-decoration: none;
		}

		.btn-premium-outline:hover {
			border-color: #ffffff;
			background: rgba(255, 255, 255, 0.05);
			transform: translateY(-3px);
		}

		/* --- Stats Info Bar --- */
		.stats-bar {
			background: var(--primary-light);
			padding: 25px 0 !important;
			border-bottom: 1px solid rgba(255, 255, 255, 0.05);
			color: #ffffff;
		}

		.stat-item {
			display: flex;
			align-items: center;
			gap: 15px;
		}

		.stat-icon {
			width: 50px;
			height: 50px;
			border-radius: 12px;
			background: rgba(212, 175, 55, 0.1);
			border: 1px solid rgba(212, 175, 55, 0.2);
			display: flex;
			align-items: center;
			justify-content: center;
			color: var(--gold);
			font-size: 1.4rem;
		}

		.stat-info h6 {
			color: #ffffff;
			margin: 0 0 2px 0;
			font-size: 0.95rem;
			font-weight: 700;
			font-family: 'Outfit', sans-serif !important;
		}

		.stat-info p {
			margin: 0;
			font-size: 0.8rem;
			color: #94A3B8;
		}

		/* --- About Section --- */
		.section-about {
			background: var(--bg-main);
		}

		.about-banner-container {
			position: relative;
			padding-right: 20px;
			margin-bottom: 30px;
		}

		.about-banner-container::after {
			content: '';
			position: absolute;
			top: 20px; right: 0; bottom: -20px; left: 20px;
			border: 3px solid var(--gold-border);
			border-radius: 20px;
			z-index: 1;
		}

		.about-banner {
			width: 100%;
			border-radius: 20px;
			box-shadow: var(--shadow-lg);
			position: relative;
			z-index: 2;
			transition: var(--transition-premium);
		}

		.about-banner-container:hover .about-banner {
			transform: scale(1.02) translateY(-5px);
		}

		.title-premium {
			font-size: 2.2rem;
			font-weight: 800;
			letter-spacing: -1px;
			position: relative;
			padding-left: 20px;
			margin-bottom: 25px;
		}

		.title-premium::before {
			content: '';
			position: absolute;
			left: 0; top: 6px; bottom: 6px;
			width: 4px;
			background: var(--gold-gradient);
			border-radius: 4px;
		}

		.about-lead {
			font-size: 1.15rem;
			line-height: 1.7;
			color: var(--text-title);
			font-weight: 600;
			margin-bottom: 20px;
		}

		.about-text {
			font-size: 0.98rem;
			line-height: 1.7;
			color: var(--text-body);
			margin-bottom: 25px;
		}

		.list-features {
			padding: 0;
			margin: 0 0 35px 0;
		}

		.list-features li {
			list-style: none;
			position: relative;
			padding-left: 32px;
			margin-bottom: 12px;
			font-size: 0.95rem;
			color: var(--text-body);
			line-height: 1.6;
		}

		.list-features li::before {
			content: '✓';
			position: absolute;
			left: 0; top: 2px;
			width: 20px;
			height: 20px;
			border-radius: 50%;
			background: var(--gold-soft-bg);
			border: 1px solid var(--gold-border);
			color: var(--gold);
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 0.75rem;
			font-weight: 900;
		}

		/* --- Mid-Year Summit Style Additions --- */
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
		.section-dark-focus {
			background: var(--primary-light);
			color: #ffffff !important;
			border-top: 1px solid rgba(255, 255, 255, 0.05);
			border-bottom: 1px solid rgba(255, 255, 255, 0.05);
		}
		.section-dark-focus .title-premium {
			color: #ffffff !important;
		}
		.section-dark-focus p, .section-dark-focus li {
			color: #BAC2DE !important;
		}

		/* --- Program / Schedule Overview --- */
		.section-program {
			background: var(--bg-accent);
		}

		.program-card-premium {
			background: var(--bg-main);
			border-radius: 20px;
			padding: 35px;
			border: 1px solid var(--border-sleek);
			box-shadow: var(--shadow-md);
			transition: var(--transition-premium);
			text-align: left;
		}

		.program-card-premium:hover {
			transform: translateY(-5px);
			box-shadow: var(--shadow-lg);
			border-color: var(--gold-border);
		}

		.program-badge {
			display: inline-block;
			background: var(--primary);
			color: #ffffff;
			padding: 6px 16px;
			border-radius: 50px;
			font-size: 0.7rem;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: 1px;
			margin-bottom: 20px;
		}

		.program-card-premium h4 {
			font-size: 1.4rem;
			font-weight: 800;
			margin-bottom: 15px;
			color: var(--text-title);
		}

		.program-card-premium p {
			font-size: 0.95rem;
			line-height: 1.7;
			color: var(--text-body);
			margin-bottom: 25px;
		}

		/* --- Speakers Highlights Section --- */
		.section-speakers {
			background: var(--bg-main);
		}

		.speaker-card-premium {
			background: var(--bg-main);
			border: 1px solid var(--border-sleek);
			border-radius: 24px;
			padding: 35px 24px;
			text-align: center;
			transition: var(--transition-premium);
			box-shadow: var(--shadow-sm);
			height: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.speaker-card-premium:hover {
			transform: translateY(-8px);
			box-shadow: var(--shadow-lg);
			border-color: var(--gold-border);
		}

		.speaker-avatar-wrap {
			width: 140px;
			height: 140px;
			border-radius: 50%;
			overflow: hidden;
			margin-bottom: 20px;
			border: 3px solid var(--border-sleek);
			position: relative;
			transition: var(--transition-premium);
		}

		.speaker-avatar-wrap::after {
			content: '';
			position: absolute;
			top: 0; left: 0; right: 0; bottom: 0;
			border-radius: 50%;
			border: 2px solid transparent;
			background: var(--gold-gradient) border-box;
			-webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
			-webkit-mask-composite: destination-out;
			mask-composite: exclude;
			opacity: 0;
			transition: var(--transition-premium);
		}

		.speaker-card-premium:hover .speaker-avatar-wrap {
			transform: scale(1.05);
			border-color: transparent;
			box-shadow: 0 8px 20px rgba(212, 175, 55, 0.2);
		}

		.speaker-card-premium:hover .speaker-avatar-wrap::after {
			opacity: 1;
		}

		.speaker-avatar {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.speaker-name-prem {
			font-size: 1.2rem;
			font-weight: 800;
			margin-bottom: 6px;
			color: var(--text-title);
		}

		.speaker-tag {
			font-size: 0.68rem;
			font-weight: 800;
			color: var(--gold);
			background: var(--gold-soft-bg);
			padding: 4px 12px;
			border-radius: 50px;
			text-transform: uppercase;
			letter-spacing: 1px;
			border: 1px solid var(--gold-border);
			margin-bottom: 12px;
		}

		.speaker-desc {
			font-size: 0.85rem;
			color: var(--text-body);
			line-height: 1.5;
			margin: 0;
		}

		/* --- Sponsors Section --- */
		.section-sponsors {
			background: var(--bg-accent-alt);
		}

		.sponsors-grid {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
			margin-top: 40px;
		}

		.sponsor-card-premium {
			background: #ffffff;
			border: 1px solid var(--border-sleek);
			border-radius: 16px;
			width: calc(20% - 16px);
			min-width: 160px;
			height: 90px;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 15px;
			box-shadow: var(--shadow-sm);
			transition: var(--transition-premium);
		}

		.sponsor-card-premium:hover {
			transform: translateY(-3px);
			box-shadow: var(--shadow-md);
			border-color: var(--gold-border);
		}

		.sponsor-card-premium img {
			max-height: 100%;
			max-width: 100%;
			object-fit: contain;
			filter: grayscale(100%);
			opacity: 0.7;
			transition: var(--transition-premium);
		}

		.sponsor-card-premium:hover img {
			filter: grayscale(0%);
			opacity: 1;
		}

		@media (max-width: 991px) {
			.hero-title {
				font-size: 2.8rem;
				letter-spacing: -1px;
			}
			.hero-subtitle {
				font-size: 1.15rem;
			}
			.sponsor-card-premium {
				width: calc(33.333% - 15px);
			}
		}

		@media (max-width: 575px) {
			.hero-title {
				font-size: 2.2rem;
			}
			.sponsor-card-premium {
				width: calc(50% - 10px);
			}
		}
	</style>
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
	@include('partials.voter.topbar')

	<!-- =============== HERO SECTION =============== -->
	<section class="hero-premium">
		<div class="hero-overlay"></div>
		<div class="container hero-content">
			<div class="row">
				<div class="col-lg-10">
					<span class="hero-badge">
						<i class="mdi mdi-video"></i> Global Virtual Summit 2026
					</span>
					<h1 class="hero-title">Annual Global Mid-Year Summit 2026</h1>
					<p class="hero-subtitle">
						“Beyond Compliance Theatre: Exposing Invisible Risk & Finding Signal in the Noise”
					</p>
					<div class="hero-ctas">
						<a href="https://events.teams.microsoft.com/event/9afd5c1d-8782-4014-ac44-b4e96693df75@252fbfd9-7d72-47b6-bc0d-43af771c9b6e" target="_blank" class="btn-premium-gold">
							<i class="mdi mdi-ticket-confirmation"></i> Register Now
						</a>
						<a href="{{route('show_summit_mid_year_2026')}}" class="btn-premium-outline">
							<i class="mdi mdi-information-outline"></i> Learn More
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== STATS BAR =============== -->
	<section class="stats-bar py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="mdi mdi-calendar"></i>
						</div>
						<div class="stat-info">
							<h6>Friday, 26th June 2026</h6>
							<p>12:00 PM - 2:00 PM (UK Time)</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="mdi mdi-laptop"></i>
						</div>
						<div class="stat-info">
							<h6>Global Virtual Access</h6>
							<p>Microsoft Teams Platform</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="stat-item">
						<div class="stat-icon">
							<i class="mdi mdi-account-group"></i>
						</div>
						<div class="stat-info">
							<h6>Executive Forum</h6>
							<p>Curated Senior Convening</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== ABOUT SECTION =============== -->
	<section id="about" class="section-about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<div class="about-banner-container">
						<img src="{{asset('/assets/mid_year_2026.jpeg')}}" alt="Annual Global Mid-Year Summit" class="about-banner">
					</div>
				</div>
				<div class="col-lg-6">
					<h2 class="title-premium">About the Summit</h2>
					<p class="about-lead">
						Now in its 7th year running, the <strong>THE MORGANS Annual Global Mid-Year Summit</strong> continues to serve as an international platform.
					</p>
					<p class="about-text">
						This summit brings together regulators, financial institutions, governance leaders, compliance professionals, policymakers, cybersecurity experts, technology innovators, and industry stakeholders from across sectors and regions globally.
					</p>
					<p class="about-text">
						As organisations continue to navigate increasingly complex regulatory, operational and digital environments, this year’s summit will explore the growing gap between formal compliance structures and the real risks emerging beneath the surface of modern organisations.
					</p>
					
					<div class="card-premium mt-4" style="background: rgba(168, 134, 45, 0.02); border-left: 4px solid var(--gold) !important; border-top: none; border-right: none; border-bottom: none; border-radius: 0 14px 14px 0; padding: 20px;">
						<h6 style="color: var(--gold); text-transform: uppercase; letter-spacing: 1.2px; font-size: 0.8rem; margin-bottom: 8px; font-weight: 800;">Distinguished Convening</h6>
						<p class="mb-0" style="color: var(--text-title); line-height: 1.6; font-size: 0.9rem;">The summit will feature distinguished keynote speakers, thought leaders and industry experts including corporate and industry leaders contributing perspectives on governance, resilience and institutional leadership.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== FOCUS AREAS SECTION (DARK THEME) =============== -->
	<section class="section-dark-focus py-5">
		<div class="container py-4">
			<div class="row mb-5 justify-content-center text-center">
				<div class="col-lg-8">
					<h2 class="title-premium d-inline-block text-white" style="border: none !important;">Summit Theme & Key Focus Areas</h2>
					<p class="lead mt-2" style="font-family: 'Playfair Display', serif; font-style: italic; color: var(--gold-light) !important;">
						“Beyond Compliance Theatre: Exposing Invisible Risk & Finding Signal in the Noise”
					</p>
					<p class="text-muted mt-3">
						Alongside executive panelists and global governance professionals, discussions will focus on key operational areas and critical topics:
					</p>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> Invisible Risks</h5>
						<p class="small mb-0">Exposing invisible enterprise risks and understanding the hidden threats that operate beneath formal frameworks.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> FinCrime Trends</h5>
						<p class="small mb-0">Analyzing emerging financial crime trends and next-generation strategies for prevention and detection.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> Cybersecurity</h5>
						<p class="small mb-0">Addressing digital vulnerabilities and reinforcing critical system defenses in highly volatile environments.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> AI & Data Governance</h5>
						<p class="small mb-0">Navigating AI implementation challenges, complex data governance risks, and compliance guardrails.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> Weak Signals</h5>
						<p class="small mb-0">Detecting weak governance signals, operational blind spots, and cultural issues early within organisations.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card-premium h-100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
						<h5 style="color: #ffffff;"> Institutional Trust</h5>
						<p class="small mb-0">Building long-term regulatory resilience and establishing robust frameworks to foster institutional trust.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== FEATURES & AUDIENCE SECTION =============== -->
	<section class="section-premium bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-4 mb-md-0">
					<div class="card-premium h-100">
						<h5> Key Features</h5>
						<ul class="list-check small">
							<li>High-level keynote addresses from global thought leaders</li>
							<li>Executive panel discussions exploring invisible risks</li>
							<li>Industry thought leadership sessions and compliance frameworks</li>
							<li>Practical governance, risk and compliance operational insights</li>
							<li>Strategic conversations on financial crime prevention & digital resilience</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-premium h-100">
						<h5> Target Audience</h5>
						<ul class="list-check small">
							<li>Regulators, policymakers and central bankers</li>
							<li>Financial institutions, commercial banks and fintech entities</li>
							<li>Governance, risk and compliance professionals</li>
							<li>Technology innovators and cybersecurity leaders</li>
							<li>Audit, legal, risk practitioners, and corporate advisors</li>
							<li>Public and private sector executives globally</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== VALUE & BENEFITS / RESILIENCE SECTION =============== -->
	<section class="section-premium bg-light" style="border-top: 1px solid var(--border-sleek); border-bottom: 1px solid var(--border-sleek);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<h2 class="title-premium">Value & Benefits</h2>
					<p class="lead mb-4">Participants will gain valuable perspectives on how organisations can strengthen their internal core capacities:</p>
					<ul class="list-check">
						<li><strong>Governance & Accountability:</strong> Developing strong leadership structures.</li>
						<li><strong>Risk Intelligence:</strong> Enhancing the capability to detect operational blind spots early.</li>
						<li><strong>Operational Resilience:</strong> Adapting to rapid changes and macro shocks.</li>
						<li><strong>Digital Trust Frameworks:</strong> Fostering trusted operations in a virtual-first landscape.</li>
						<li><strong>Regulatory Preparedness:</strong> Strengthening collaboration across borders and sectors.</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="card-premium" style="border: 1px solid rgba(168, 134, 45, 0.2); background: radial-gradient(circle at top right, rgba(212, 175, 55, 0.05), transparent 60%), #FFFFFF !important; box-shadow: var(--shadow-lg); padding: 40px;">
						<h4 style="color: var(--gold); font-weight: 800; font-family: 'Playfair Display', serif; font-style: italic; font-size: 1.55rem; margin-bottom: 20px;">Shaping the Future of Resilience</h4>
						<p class="mb-0" style="font-size: 1.05rem; line-height: 1.8; color: var(--text-body);">
							"As the global risk landscape continues to evolve, the summit provides an important opportunity for leaders and professionals to engage in forward-looking conversations focused on resilience, accountability, innovation and sustainable institutional growth."
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== PROGRAM SECTION =============== -->
	<section id="programme" class="section-program">
		<div class="container text-center">
			<h2 class="title-premium d-inline-block">Programme Overview</h2>
			<p class="text-muted mb-5 max-width-600 mx-auto">Discover the core structural focus of this year's intensive summit.</p>
			
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="program-card-premium">
						<span class="program-badge">Friday, 26th June 2026 | Virtual Event</span>
						<h4>THE MORGANS Annual Global Mid-Year Summit</h4>
						<p>
							A high-level intensive 2-hour virtual summit running from 12:00 PM – 2:00 PM (UK Time) hosted securely on Microsoft Teams, exploring the real risks emerging beneath the surface of modern organisations.
						</p>
						<a href="{{route('show_summit_mid_year_2026')}}#programme" class="btn-premium-gold" style="padding: 10px 24px; font-size: 0.8rem;">
							View Detailed Schedule
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =============== SPONSORS SECTION =============== -->
	<section class="section-sponsors">
		<div class="container text-center">
			<h2 class="title-premium d-inline-block">Our Sponsors</h2>
			<p class="text-muted">Distinguished partners supporting the GRC & FinCrime Prevention Summit.</p>
			
			<div class="sponsors-grid">
				<div class="sponsor-card-premium">
					<img src="{{asset('assets/images/sponsors/tolex.png')}}" alt="Tolex">
				</div>
				<div class="sponsor-card-premium">
					<img src="{{asset('assets/images/sponsors/oystercheckslogo.png')}}" alt="Oyster Checks">
				</div>
				<div class="sponsor-card-premium">
					<img src="{{asset('assets/images/sponsors/tmc_academy.png')}}" alt="TMC Academy">
				</div>
				<div class="sponsor-card-premium">
					<img src="{{asset('assets/images/sponsors/tmc_company.png')}}" alt="TMC Company">
				</div>
				<div class="sponsor-card-premium">
					<img src="{{asset('assets/images/sponsors/tyne_prints.png')}}" alt="Tyne Prints">
				</div>
			</div>
		</div>
	</section>

	<!-- =============== FOOTER =============== -->
	@include('partials.voter.footer')
	
	<a class="to-top" href="#conference-page">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>

	<!-- =============== SCRIPTS =============== -->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
	
	<!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2392242014282784');
		fbq('track', 'PageView');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2392242014282784&ev=PageView&noscript=1"/>
	</noscript>
	<!-- End Meta Pixel Code -->
</body>

</html>