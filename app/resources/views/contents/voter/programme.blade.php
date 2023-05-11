<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit')

<head>
	@include('partials.voter.head')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}" />
</head>
 
<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container"  style="min-height:10px">
			{{-- <div class="breadcrumbs"> --}}
				{{-- <ul> 
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Summit</li>
				</ul> --}}
			{{-- </div> --}}
			<h4 class="title">The Summit Programme</h4>
		</div>
	</div>
	<!-- page title -->
	<!-- =========== S-CONFERENCE-COUNTER =========== -->
	<section id="about" class="s-conference-mission pt-0">
		<div class="s-our-mission ">
			<div class="container">
				<div class="row">
					{{-- <div class="col-lg-6 our-mission-img">
						<span>
							<img src="assets/img/placeholder-all.png" data-src="assets/img/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">
							<img class="mission-img rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/img-about-home2.jpg" alt="img">
							<img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						</span>
					</div> --}}
					<div class="col-12" style="text-align:justify;">
						<ul class="mission-meta">
							{{-- <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual / Online - Microsoft Teams </li>
							<li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023</li>
							<li><i class="mdi mdi-clock-outline"></i>12pm - 2pm</li> --}}
							{{-- <li><i class="mdi mdi-account-outline"></i> <a  href="https://events.teams.microsoft.com/event/08b9affe-26a5-4f61-b136-16c8cab79002@252fbfd9-7d72-47b6-bc0d-43af771c9b6e" target="_blank" style="font-size:20px"> REGISTER HERE </a> </li> --}}
						</ul>

						{{-- <ul class="mission-meta">
							<li><i aria-hidden="true" class="mdi mdi-facebook"></i><a  href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl" target="_blank"> Follow on Facebook </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-instagram "></i><a  href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank"> Follow on Instagram </a> </li>
							<li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop"> Follow on LinkedIn</a></li>			
				    	</ul> --}}

						<h5 class="col-12" style="max-width:1300px;line-height:20%; ;margin-bottom:20px; padding-left:0;padding-right:0; color:#D4AF37">Welcome</h5>
						<hr style="margin-bottom:32px; border-color:#D4AF37; :20px">
						<h4 class="col-12" style="max-width:1300px;line-height:10%; margin-bottom:32px;padding-left:0;padding-right:0; color:#D4AF37">PROGRAMME</h4>
					
						
						<div class="mission-info-text">
							<h6 class="col-12" style="padding-left:0;padding-right:0; color:#D4AF37; margin-bottom:10px;" >Main Summit </h6>
							<hr style="margin-bottom:32px; border-color:#D4AF37; :20px; width:50px; border-style:dotted">
							<li style="list-style-type:none"> <i aria-hidden="true" class="uil uil-calendar-alt"></i>Thursday, 15th June 2023 <i class="mdi mdi-clock-outline"></i>12pm - 2pm</li>
							<br>

							<div class="row">
								<div class="col-1">
									<ol style="list-style-type:none;padding-right:0px; padding-bottom:50px; ;">
										<li style="font-size: 14px; padding-bottom:10px;">   12:00pm  </li> 
										<li style="font-size: 14px; padding-bottom:10px">   12:10pm   </li>
										<li style="font-size: 14px; padding-bottom:15px ">   12:15pm  </li>
										<li style="font-size: 14px; padding-bottom:25px ">   12:30pm   </li>
										<li style="font-size: 14px; padding-bottom:40px ">   12:33pm   </li>
										<li style="font-size: 14px;  padding-bottom:65px">   12:43pm   </li>
										<li style="font-size: 14px; padding-bottom:30px">   12:53pm   </li>
										<li style="font-size: 14px; padding-bottom:15px">   1:03pm   </li>
										<li style="font-size: 14px; padding-bottom:40px">   1:08pm   </li>
										<li style="font-size: 14px; padding-bottom:25px">   1:18pm   </li>
										<li style="font-size: 14px; padding-bottom:15px">   1:28pm   </li>
										{{-- <li style="font-size: 14px; padding-bottom:35px">   1:38pm   </li> --}}
										<li style="font-size: 14px; padding-bottom:10px">   1:48pm   </li>
										<li style="font-size: 14px; padding-bottom:10px">   1:50pm   </li>
										<li style="font-size: 14px; padding-bottom:10px">   1:55pm   </li>
										<li style="font-size: 14px; padding-bottom:10px">   2:05pm   </li>
				

									</ol> </div> 
								<div class="col-8">
									<ol style="list-style-type:none;padding-right:10px;">
										<li style="font-size: 14px;padding-bottom:10px ">    General Introduction</li>
										<li style="font-size: 14px;padding-bottom:10px ">   Welcome Address  - <span style="color:#D4AF37">Dr. Foluso Amusa, Host </span></li>
										<li style="font-size: 14px;padding-bottom:10px "> First Poll - <span style="color:#D4AF37">Theme Centered </span></li>
										<li style="font-size: 14px;padding-bottom:10px "> Introduction to the Summit -  <span style="color:#D4AF37">Summary of Summit theme </span>

											<br> Speakers Introduction <span style="color:#D4AF37">(Keynote and Panelists)</span> </li>
										<li style="font-size: 14px; padding-bottom:10px"> 1st Keynote Speaker  <span style="color:#D4AF37">SMCR & Conduct Risk from the UK/ Europe Perspective</span> <br>  <span style="color:chocolate"> <strong> Speaker:  </strong>Elena Pykhova</span> </li>
										<li style="font-size: 14px; padding-bottom:10px"> 2nd Keynote Speaker <span style="color:#D4AF37"> The audit view on the theme in line with the standards and prevailing regulations in Nigeria/Africa</span> <br>  <span style="color:chocolate"><strong> Speaker:  </strong> Adekunle Koleosho PhD, FCA, ACS</span></li>
										<li style="font-size: 14px; padding-bottom:10px"> 3rd Keynote Speaker -<span style="color:#D4AF37"> Ring Fencing in the FinCrime Space </span>  <br>  <span style="color:chocolate"> <strong> Speaker:  </strong> Daniel Saliba  </span></li>
										<li style="font-size: 14px; padding-bottom:10px">  <span style="color:#D4AF37">Sponsors/Promotional Ads</span></li>
										<li style="font-size: 14px;padding-bottom:10px "> 4th Keynote Speaker  <span style="color:#D4AF37"> -Legal & regulatory view of the theme in line with UK& Nigeria</span><br><span style="color:chocolate"> <strong> Speaker:  </strong>  George, Lawrence Badejo-Adegbenga </span> </li>
										<li style="font-size: 14px;padding-bottom:10px "> 5th Keynote Speaker - <span style="color:#D4AF37"> Conduct Risk from the Nigeria/ Africa Perspective </span> <br><span style="color:chocolate"> <strong> Speaker:  </strong> Dr. Emmanuel Moore ABOLO, PhD-Econs, FGRCP,FIMC, FNIMN,FPSSN </span></li>
										<li style="font-size: 14px;padding-bottom:10px "> Panel Session</li>
										{{-- <li style="font-size: 14px;padding-bottom:10px "> 6th Keynote Speaker <br><span style="color:chocolate"> <strong> Speaker:  </strong> Ola Olayinka </span></li> --}}
										<li style="font-size: 14px;padding-bottom:10px "> Interraction Polls</li>
										<li style="font-size: 14px;padding-bottom:10px "> Sponsors roll call + Media Partners</li>
										<li style="font-size: 14px; padding-bottom:10px"> General Q&A</li>
										<li style="font-size: 14px; padding-bottom:10px"> Closing remarks  <span style="color:chocolate">Esosa Balogun Bsc, FCA, CCSA, CRMA </span></li>
									</ol> </div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->

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