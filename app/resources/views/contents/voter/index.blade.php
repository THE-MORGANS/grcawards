<!DOCTYPE html>
<html lang="en">
@section('title', 'Home')

<head>
	@include('partials.voter.head')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}" />
	<style>
	</style>
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
	@include('partials.voter.topbar')
	<section class="s-conference-slider">
	<div class="conference-slider">
			{{-- <div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/v1671453397/grcfincrimeawards/gallery/l3430eacq0c3496agrgi.jpg);"> --}}
			<div class="conference-slide" style="background-image: url('{{asset('assets/mart.webp')}}');">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">Lusaka Summit 2026</div>
						<div class="conference-slider-title">15th - 17th April 2026</div>
						<h2 class="title"><span>Lusaka, Zambia</span></h2>
						<h4 style="color:#fff">GRC & Financial Crime Prevention Conference - Africa</h4>
						<h4 style="color:#fff">Trust, Resilience and Sustainable Growth</h4>
					</div>
				</div>
			</div>
				
			<div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1664454953/grcfincrimeawards/gallery/xstjrdobdokjvyoyfk3f.jpg);">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">15th - 17th April 2026</div>
						<div class="conference-slider-title">Lusaka Summit</div>
						<h2 class="title"><span>GRC & FinCrime Prevention Conference</span></h2>
						<p>A high-level, three-day stakeholders conference convening senior leaders from government, regulatory authorities, financial institutions, and global organisations.</p>
					</div>
				</div>
			</div>
			
			<div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1671453427/grcfincrimeawards/gallery/afgdyjbjgtlrhqnd48zn.jpg);">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">15th - 17th April 2026</div>
						<div class="conference-slider-title">Lusaka Summit</div>
						<h2 class="title"><span>GRC & FinCrime Prevention Conference</span></h2>
						<p>A curated, senior-level convening designed for decision-makers, policy shapers, and institutional leaders.</p>
					</div>
				</div>
			</div>
			<div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1664454804/grcfincrimeawards/gallery/rjhnk2j9a5oq5j5kzqpw.jpg);">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">15th - 17th April 2026</div>
						<div class="conference-slider-title">Lusaka Summit</div>
						<h2 class="title"><span>GRC & FinCrime Prevention Conference</span></h2>
						<p>Strengthening trust, resilience, and sustainable growth through effective governance and risk management.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-SLIDER END ========= -->

	<!-- =========== S-CONFERENCE-COUNTER =========== -->
	<section id="about" class="s-conference-mission pt-0">
		<div class="s-conference-counter">
			<div class="container">
				<div class="conference-counter-wrap">
					<img class="conference-counter-effect-1" src="assets/images/counter-icon-1.svg" alt="img">
					<div class="conference-counter-cover">
						<h3>Join us at the GRC & Financial Crime Prevention Conference - Africa</h3>
						<h4>15th - 17th April 2026 | Lusaka, Zambia</h4>
					</div> 
					<img class="conference-counter-effect-2" src="assets/images/counter-icon-2.svg" alt="img">
				</div>
			</div>
		</div>
		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>About the Conference</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img" style="margin-top:auto;margin-bottom:auto">
						<!-- <span> -->
						<img src="assets/images/placeholder-all.png" data-src="assets/images/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
						<img src="{{asset('/assets/lusaka_summit_banner_2026.jpeg')}}" style="width:100%; max-width:500px;">
						<img src="assets/images/placeholder-all.png" data-src="assets/images/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						<!-- </span> -->
					</div>
					<div class="col-lg-6 our-mission-info mt-5 mt-sm-0">
					<h4>GRC & Financial Crime Prevention Conference - Africa</h4>
						<div class="mission-info-text">
							<p>The Governance, Risk, Compliance & Financial Crime Prevention Conference – Africa is a high-level, three-day stakeholders conference convening senior leaders from government, regulatory authorities, financial institutions, corporates, development partners, and global organisations.</p>
							<p>Hosted in Lusaka, Zambia, the conference provides a strategic platform to address how institutions across Africa can strengthen trust, resilience, and sustainable growth through effective governance, risk management, regulatory compliance, and integrated financial crime prevention.</p>
							<p><strong>This is not a mass-attendance event.</strong> It is a curated, senior-level convening designed for decision-makers, policy shapers, and institutional leaders.</p>
						</div>
						<a href="{{route('show_summit_lusaka_2026')}}" class="btn" tabindex="-1"><span>Learn More</span></a>
					</div>
				</div>
			</div>
		</div>

		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>Lusaka Summit 2026</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img" style="margin-top:auto;margin-bottom:auto">
						<!-- <span> -->
						<img src="assets/images/placeholder-all.png" data-src="assets/images/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
						<img src="{{asset('/assets/lusaka_summit_banner_2026.jpeg')}}" width="500px"> 
						<img src="assets/images/placeholder-all.png" data-src="assets/images/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						<!-- </span> -->
					</div>
					<div class="col-lg-6 our-mission-info mt-5 mt-sm-0">
					<h3>GRC & Financial Crime Prevention Conference - Africa</h3>
						Date: <h3>15th - 17th April 2026</h3>
						Venue: <h3>Lusaka, Zambia</h3>
						Theme: <h3>Trust, Resilience and Sustainable Growth</h3>
						<a href="{{route('show_summit_lusaka_2026')}}" class="btn" tabindex="-1"><span>Learn More</span></a>
					</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->
	<!-- ============ SPEAKER & SCHEDULE ============ -->
	<section id="programme" class="s-event-schedule s-choose-us" style="text-align:left">
		<div class="container">
			<h2 class="title"><span>Programme Overview</span></h2>
			<img class="schedule-effect-white" src="{{asset('assets/images/tringle-white.svg')}}" alt="img">
			<img class="schedule-effect-yellow" src="{{asset('assets/images/tringle-yellow-little.svg')}}" alt="img">
			<div class="row">
				<div class="col-xl-4" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-calendar-today mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">Day 1 - 15th April 2026</div>
								<h4>Governance & Trust</h4>
								<div class="schedule-info-content">
									<p>Governance reform, accountability, board oversight and ethical leadership.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<i class="mdi mdi-shield-check mdi-48px" style="color:#D4AF37"></i>
							</div>
							<div class="schedule-item-info">
								<div class="date">Day 2 - 16th April 2026</div>
								<h4>Enterprise Risk & Resilience</h4>
								<div class="schedule-info-content">
									<p>Operational risk management, regulatory compliance and supervisory expectations.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                
                <div class="col-xl-4" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<i class="mdi mdi-laptop mdi-48px" style="color:#D4AF37"></i>
							</div>
							<div class="schedule-item-info">
								<div class="date">Day 3 - 17th April 2026</div>
								<h4>Technology & Cyber Risk</h4>
								<div class="schedule-info-content">
									<p>Digital trust, emerging technologies and financial crime prevention systems.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- ========== SPEAKER & SCHEDULE END ========== -->

	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients s-partners">
		<div class="container">
			<h2 class="title-conference"><span>Our Sponsors</span></h2>
			<div class="clients-cover">
				{{-- <div class="client-slide">
					<div class="client-slide-cover">
						<img class="rx-lazy" src="{{asset('assets/coca.png')}}" data-src="{{asset('assets/coca.png')}}" alt="img">
                      
					</div>
				</div> --}}
			
				{{-- <div class="client-slide">
					<div class="client-slide-cover">
						<img class="rx-lazy" src="{{asset('assets/images/sponsors/gtb.png')}}" data-src="{{asset('assets/images/sponsors/gtb.png')}}" alt="img">
                       
					</div>
				</div> --}}
				<div class="client-slide">
					<div class="client-slide-cover">
					    <img class="rx-lazy" src="{{asset('assets/images/sponsors/tolex.png')}}" data-src="{{asset('assets/images/sponsors/tolex.png')}}" alt="img">
                        </div>
				</div>
				{{-- <div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('assets/images/sponsors/mtn_logo.jpg')}}" alt="img">
					</div>
				</div> --}}
				{{-- <div class="client-slide">
					<div class="client-slide-cover">
						<img class="rx-lazy" src="{{asset('assets/images/sponsors/slt.png')}}" data-src="{{asset('assets/images/sponsors/slt.png')}}" alt="img">
                        
					</div>
				</div> --}}
				
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('assets/images/sponsors/oystercheckslogo.png')}}" alt="img">
					</div>
				</div>
			
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('assets/images/sponsors/tmc_academy.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('assets/images/sponsors/tmc_company.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('assets/images/sponsors/tyne_prints.png')}}" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('partials.voter.footer')
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
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
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=2392242014282784&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Meta Pixel Code -->
</body>

</html>