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
			{{-- <div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1671454134/grcfincrimeawards/gallery/kovtdfmqtiqzklvq1h0r.jpg);"> --}}
				<div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1671453416/grcfincrimeawards/gallery/rb6xu9gaqe38igyleywp.jpg);">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">7th Nov 2025</div>
						<div class="conference-slider-title">GRC & FinCrime</div>
						<h2 class="title"><span>Prevention Awards & Summit</span></h2>
						<p>We pride ourselves in celebrating Governance, Risk Management, Compliance and Financial Crime Prevention wins of businesses across the globe.</p>
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
			<div class="conference-slide" style="background-image: url(https://res.cloudinary.com/the-morgans-consortium/image/upload/q_50/v1671449112/grcfincrimeawards/gallery/nkjnn2vv0na9qmk5qfad.jpg);">
				<img class="conference-slide-tringle" src="assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">15th - 17th April 2026</div>
						<div class="conference-slider-title">Lusaka Summit</div>
						<h2 class="title"><span>GRC & FinCrime Prevention Conference</span></h2>
						<p>Join senior leaders from across Africa for this landmark conference in Lusaka, Zambia.</p>
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

		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>Exciting Announcements</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img" style="margin-top:auto;margin-bottom:auto">
						<!-- <span> -->
						<img src="assets/images/placeholder-all.png" data-src="assets/images/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
						<video style="width:100%;" controls autoplay muted>
							<source src="https://res.cloudinary.com/the-morgans-consortium/video/upload/AWARDS_2024_owex9v.mp4" type="video/mp4">
						</video>
						<img src="assets/images/placeholder-all.png" data-src="assets/images/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						<!-- </span> -->
					</div>
					<div class="col-lg-6 our-mission-info mt-5 mt-sm-0">
					<h4>🌍 Announcing the Inaugural UK & Ireland GRC & Financial Crime Prevention Awards & Summit 2025! 🎉.</h4>
						<div class="mission-info-text">
							<p>We are excited to introduce the first-ever UK & Ireland GRC & Financial Crime Prevention Awards & Summit 2025, 
								a groundbreaking event dedicated to recognizing excellence and innovation in Governance, Risk, Compliance (GRC), 
								and Financial Crime Prevention.</p>
							<p>This inaugural event will bring together leading professionals, regulators, policymakers, and organizations across Europe and the UK to 
								address emerging risks, evolving regulations, and the latest advancements in financial crime prevention.</p>
						</div>
						<a href="{{route('about_uk_awards')}}" class="btn" tabindex="-1"><span>Learn More</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->
	<!-- ============ SPEAKER & SCHEDULE ============ -->
	<section id="schedule" class="s-event-schedule s-choose-us" style="text-align:left">
		<div class="container">
			<h2 class="title"><span>Event schedule</span></h2>
			<img class="schedule-effect-white" src="{{asset('assets/images/tringle-white.svg')}}" alt="img">
			<img class="schedule-effect-yellow" src="{{asset('assets/images/tringle-yellow-little.svg')}}" alt="img">
			<div class="row">
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-trophy-award mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">6th June. 2025</div>
								<h4>GRC Mid-Year Summit 2025 </h4>
								<div class="schedule-info-content">
									<p>Theme: "Future-Proofing GRC & Financial Crime Prevention: The Convergence of AI, ESG, and Digital Compliance in a Rapidly Evolving Landscape.</p>
									<a href="{{route('show_summit')}}"> Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<i class="mdi mdi-account-multiple-plus mdi-48px" style="color:#D4AF37"></i>
							</div>
							<div class="schedule-item-info active">
								<div class="date">22nd July 2025 - 21st Aug. 2025</div>
								<h4>Nomination/Voting Process</h4>
								<div class="schedule-info-content" style="display: none;">
									<p>Voting is open to the public. The participants with the highest number of votes in every category in various sectors will shortlisted.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				
			</div>
			<div class="row">
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<i class="mdi mdi-bell-ring-outline mdi-48px" style="color:#D4AF37"></i>
							</div>
							<div class="schedule-item-info">
								<div class="date">1st Oct,2025 - 31st Oct. 2025</div>
								<h4>Notification of Shortlisted Nominees</h4>
								<div class="schedule-info-content" style="display: none;">
									<p>After nominees have been shortlisted, they are sent a notification informing them that they have been shortlisted and also inviting them to the award ceremony. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-ballot-outline mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">1st Oct. 2025 - 15th Oct. 2025</div>
								<h4>Shortlisting and Judging Process</h4>
								<div class="schedule-info-content">
									<p>The Votes are counted inorder to shortlist top 3 nominees under every category. Afterwhich, further screening and examination is done by the Judges to select the winners.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- ========== SPEAKER & SCHEDULE END ========== -->
	<section class="s-our-speaker s-event-schedule">
		<div class="container">
			<h2 class="title-conference"><span>Meet the Awards Judges </span></h2>
			<div class="slider-our-speaker">
				@foreach($judges as $judge)
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="{{$judge->path_to_image}}" alt="img" style="height: 360px;">
						<div class="speaker-item-info" style="padding-bottom:10px;">
							<h5 class="name" style="font-size:18px; margin-bottom:6px;">{{$judge->name}}</h5>
							<p class="prof" style="font-size:16px; line-height:1rem;margin-bottom:6px;">{{$judge->position}}</p>
							<div class="meta">
								@if($judge->ln_link != '')
								<span class="post-tag" style="margin-right:7px;">
									<a href="{{$judge->ln_link}}">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

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