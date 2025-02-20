<!DOCTYPE html>
<html lang="zxx">
@section('title', 'About the Award')

<head>
	@include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner" >
				<img class="ball" src="{{asset('assets/logo.png')}}"/>
			</div>
		</div>
		 
	</div>
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>GRC & Financial Crime Prevention Awards & Summit in UK & Ireland</li>
				</ul>
			</div>
			<h1 class="title">GRC & Financial Crime Prevention Awards & Summit in UK & Ireland</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">🌍 Announcing the Inaugural UK & Ireland GRC & Financial Crime Prevention Awards & Summit 2025! 🎉</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
								<p class="mb-2">
									We are excited to introduce the first-ever UK & Ireland GRC & Financial Crime Prevention Awards & Summit 2025, a groundbreaking event dedicated to recognizing excellence and innovation in Governance, Risk, Compliance (GRC), and Financial Crime Prevention.
								</p>
								<p>
                                    This inaugural event will bring together leading professionals, regulators, policymakers, and organizations across Europe and the UK to address emerging risks, evolving regulations, and the latest advancements in financial crime prevention.
								</p>
							</div>
						</div>
					</div>
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">What to Expect?</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
								<p><i class="mdi mdi-18px"></i>
									<strong>
                                    🔹 Expert Panels & Keynote Sessions –</strong> Gain insights from global thought leaders in risk management, compliance, and financial crime prevention.
								</p>
								<p><i class="mdi  mdi-18px"></i>
									<strong>🔹 Interactive Workshops – </strong> Learn cutting-edge strategies to combat financial crime and strengthen governance frameworks.
								</p>
								<p><i class="mdi   mdi-18px"></i>
									<strong>🔹 High-Impact Networking – </strong>Connect with regulators, industry leaders, and peers to exchange best practices.
								</p>
								<p><i class="mdi   mdi-18px"></i>
								
                                    <strong> 🔹 Prestigious Awards Ceremony –</strong> Celebrate outstanding contributions to GRC and financial crime prevention across various industries.</p>
								
							</div>
						</div>
					</div>
						<div class="widget widget-archive">
							<h4 class="title">🏆 Award Categories Include:</h4>

							<ul style="font-size:16px; text-align: justify">
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0; mdi  "><i class="mdi   mdi-18px"></i> ✔️ Europe & UK GRC Leadership Award </h6>
									{{-- <p>
										The summit offers a hybrid experience, providing both physical attendance and online participation options. Attendees can choose the mode that suits their preferences and circumstances, ensuring inclusivity and accessibility for professionals across the globe.
									</p> --}}
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi   mdi-18px"></i>✔️ Financial Crime Prevention Champion</h6>
									{{-- <p>
										Participating in these awards allows organizations to benchmark their risk management, governance, and compliance efforts against industry peers, as well as learn from and adopt best practices highlighted by other award recipients.
									</p> --}}
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi   mdi-18px"></i>✔️ Best Risk & Compliance Framework</h6>
									{{-- <p>
										Recognition through awards can increase employee morale, motivation, and pride in their organization, leading to improved retention and recruitment prospects.
									</p> --}}
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi   mdi-18px"></i>✔️ Cybersecurity & Fraud Prevention Excellence:</h6>
									{{-- <p>
										Winning or being shortlisted for awards can reinforce a culture of compliance and good governance within an organization, demonstrating a commitment to ethical business practices and industry standards.	
									</p> --}}
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi   mdi-18px"></i>✔️ Women in GRC Leadership Award:</h6>
									{{-- <p>
										GRC and FinCrime awards provide organizations with valuable marketing opportunities, offering a platform to showcase their commitment to regulatory compliance, risk management, and financial crime prevention to a wider audience.
									</p> --}}
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi   mdi-18px"></i>✔️ Young Professional in GRC & Financial Crime Prevention …and more!</h6>
									{{-- <p>
										Awards serve as a demonstration of an organization's dedication to excellence in GRC and FinCrime Prevention, helping to build trust and confidence among stakeholders, including customers, partners, and regulatory bodies.
									</p> --}}
								</li>
							</ul>
						</div>
                        <div class="post-item-cover">
                            <div class="post-content">
                                <div class="text" style="text-align: justify;">
                                    <p><i class="mdi   mdi-18px"></i>
                                        <strong> Us in Setting the Standard for GRC & Financial Crime Prevention Excellence in Europe & the UK! </strong>
                                        The  <strong> Advisory Board & Judges Panel </strong> , composed of distinguished industry experts, will ensure a rigorous and transparent awards process.
                                    </p>
                                    <p><i class="mdi   mdi-18px"></i>
                                        <strong> 📢 Stay tuned for nomination details, speaker announcements, and partnership opportunities!</strong>
                                        🚀 Be part of this <strong> historic event </strong> as we shape the future of GRC and financial crime prevention across Europe and the UK.
                                    </p>
                                </div>
                            </div>
                        </div>
			
				</div>
				<!--================= SIDEBAR =================-->
				@include('partials.voter.sidebar')
				<!--=============== SIDEBAR END ===============-->
			</div>
	</section>

	<!--==================== FOOTER ====================-->
	@include('partials.voter.footer')
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	@include('partials.voter.scripts')
</body>

</html>