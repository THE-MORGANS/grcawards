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
				<img class="ball" src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1664067165/grcfincrimeawards/landing_page/grc_awards_summit_logo_y8nqdz.png"/>
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
					<li>About the award</li>
				</ul>
			</div>
			<h1 class="title">About The Award</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">GRC & Financial Crime Prevention Awards</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
							<p>
								<p>The GRC & Financial Crime Prevention Annual Awards was created to recognise outstanding contributions by individuals and companies to the development, understanding, or implementation of GRC systems in Nigeria and the dissemination of the values associated with those people and businesses who embrace the challenge of embedding compliance, risk, ethics and governance in their organisation. The Awards will be an annual event which will be held at the end of every year.</p>

							</div>
						</div>
					</div>
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">The Objective</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									To help business comply with GRC & Financial Crime Prevention regulations by providing them the motivation and recognition on a national and international level with prestigious GRC & Financial Crime Prevention industry awards.
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									To also help businesses showcase the need and benefits of being GRC compliant because this could change the world for the better
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									These awards aim to showcase best practices in GRC and financial crime prevention, encouraging other organizations in the industry to adopt similar strategies to improve their own processes.
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									The awards encourages organizations to innovate and stay ahead of emerging risks and compliance challenges by highlighting innovative approaches and solutions in governance, risk management, compliance, and FinCrime prevention.
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									The awards provide a platform for benchmarking organizations against industry peers, facilitating knowledge sharing and setting benchmarks for excellence in GRC and FinCrime prevention.
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									Recognizing organizations and individuals for their achievements in GRC and FinCrime prevention can help foster a culture of compliance, ethics, and integrity within the sectors covered, driving overall industry improvement.
								</p>
								<p><i class="mdi mdi-chevron-right mdi-18px"></i>
									Winning such awards can enhance an organization's reputation, credibility, and trust among stakeholders, including investors, customers, and regulators, by demonstrating a commitment to robust governance, risk management, compliance, and financial crime prevention measures.
								</p>
							</div>
						</div>
					</div>
						<div class="widget widget-archive">
							<h4 class="title">Benefits</h4>

							<ul style="font-size:16px; text-align: justify">
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0; mdi mdi-chevron-right"><i class="mdi mdi-chevron-right mdi-18px"></i> Recognition and Prestige:</h6>
									<p>
										The summit offers a hybrid experience, providing both physical attendance and online participation options. Attendees can choose the mode that suits their preferences and circumstances, ensuring inclusivity and accessibility for professionals across the globe.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi mdi-chevron-right mdi-18px"></i>Benchmarking and Best Practices:</h6>
									<p>
										Participating in these awards allows organizations to benchmark their risk management, governance, and compliance efforts against industry peers, as well as learn from and adopt best practices highlighted by other award recipients.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi mdi-chevron-right mdi-18px"></i>Employee Motivation and Retention:</h6>
									<p>
										Recognition through awards can increase employee morale, motivation, and pride in their organization, leading to improved retention and recruitment prospects.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi mdi-chevron-right mdi-18px"></i>Enhanced Compliance Culture:</h6>
									<p>
										Winning or being shortlisted for awards can reinforce a culture of compliance and good governance within an organization, demonstrating a commitment to ethical business practices and industry standards.	
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi mdi-chevron-right mdi-18px"></i>Publicity and Marketing Opportunities:</h6>
									<p>
										GRC and FinCrime awards provide organizations with valuable marketing opportunities, offering a platform to showcase their commitment to regulatory compliance, risk management, and financial crime prevention to a wider audience.
									</p>
								</li>
								<li>
									<h6 class="col-12" style="padding-left:0;padding-right:0;"><i class="mdi mdi-chevron-right mdi-18px"></i>Stakeholder Trust and Confidence:</h6>
									<p>
										Awards serve as a demonstration of an organization's dedication to excellence in GRC and FinCrime Prevention, helping to build trust and confidence among stakeholders, including customers, partners, and regulatory bodies.
									</p>
								</li>
							</ul>
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