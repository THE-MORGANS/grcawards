<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Summit 2026')

<head>
    @include('partials.voter.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}" />
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />

</head>

<body id="conference-page">
    <!-- =============== PRELOADER =============== -->
    @include('partials.voter.preloader')
    <!-- ============== PRELOADER END ============== -->
    <!-- ================= HEADER ================= -->
    @include('partials.voter.topbar')
    <!-- =============== HEADER END =============== -->
    <!-- Page title -->
    <div class="page-title" style="background-color:#D4AF37; height:150px">
        <div class="container">
            <div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>WGRCFP Inaugural Summit 2026</li>
				</ul>
			</div>
            {{-- <h5 class="title">WGRCFP Inaugural Summit 2026
            </h5> --}}
        </div>
    </div>
    <!-- page title -->
    <!-- =========== S-CONFERENCE-COUNTER =========== -->
    <section id="about" class="s-conference-mission pt-0">
        <div class="s-our-mission ">

            <div class="container">

                <div class="conference-counter-wrap">
                    {{-- <div class="conference-counter-cover">
							<h4>The event will begin through</h4>
							<div id="" class="clock-timer clock-timer-conference">
								<div class="clock-item days-item">
									<span class="days" id="days">30</span>
									<div class="smalltext">Days</div>
								</div>
								<div class="clock-item hours-item">
									<span class="hours" id="hours">23</span>
									<div class="smalltext">Hours</div>
								</div>
								<div class="clock-item minutes-item">
									<span class="minutes" id="minutes">59</span>
									<div class="smalltext">Minutes</div>
								</div>
								<div class="clock-item seconds-item">
									<span class="seconds" id="seconds">37</span>
									<div class="smalltext">Seconds</div>
								</div>
							</div>
						</div> --}}
                </div>
                <br>
                {{-- <center><img src="{{asset('/assets/summit3.jpeg')}}" width="42%"></center>	 --}}
                <center><img src="{{asset('/assets/wgrcfp_summit_banner_2026.jpeg')}}" width="100%" style="max-width:1200px; margin-top:20px; margin-bottom:30px;"></center>
                {{-- <h5 class="btn btn-primary"> <a href="{{ route('summit_programme') }}"> Go to Summit Programme </a></h5> --}}
                <div class="row">
                    <div class="col-lg-6 our-mission-img">
                        <span>
                            <img src="assets/img/placeholder-all.png" data-src="assets/img/our-mission-2.svg"
                                alt="" class="mission-img-effect-1 rx-lazy">
                            <img class="mission-img rx-lazy" src="assets/img/placeholder-all.png"
                                data-src="assets/img/img-about-home2.jpg" alt="img">
                            <img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-gray-little.svg"
                                alt="" class="about-img-effect-2 rx-lazy">
                        </span>
                    </div>

                    <div class="col-12" style="text-align:justify; ">
                        <ul class="mission-meta p-3" style="display: block">
                            <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Virtual (MS Teams / LinkedIn Live) 
                            </li>
                            <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 17 March 2026
                            </li>
                            <li><i class="mdi mdi-clock-outline"></i>Time: 12:00 – 13:30 (UK time)</li>
                            <li class="pt-3"><i class="mdi mdi-account-outline"></i> <a
                                    href="{{ route('summit_register') }}" target="_blank" style="font-size:25px">
                                    REGISTER HERE </a> </li>

                        </ul>

                        <ul class="mission-meta">
                            <li><i aria-hidden="true" class="mdi mdi-facebook"></i><a
                                    href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl"
                                    target="_blank"> Follow on Facebook </a> </li>
                            <li><i aria-hidden="true" class="mdi mdi-instagram "></i><a
                                    href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link"
                                    target="_blank"> Follow on Instagram </a> </li>
                            <li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a
                                    href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop">
                                    Follow on LinkedIn</a></li>
                        </ul>

                        <h4 class="col-12"
                            style="max-width:1300px;line-height:140%; margin-bottom:32px;padding-left:0;padding-right:0;">
                            Theme: “Shaping the Future of Governance, Risk, Compliance and Financial Crime Prevention: Women Leading the Change”
                        </h4>

                        <div class="mission-info-text">

                            <p></p><br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 About the Inaugural Summit
                            </h6>
                            <p>
                                The WGRCFP Inaugural Summit marks the official launch of a global initiative dedicated to advancing leadership, excellence, and collaboration across governance, risk, compliance, and financial crime prevention.
                            </p>
                            <p>
                                This first summit is intentionally focused. Not on doing everything at once, but on setting the tone.
                            </p>
                            <p>
                                At a time of heightened regulatory scrutiny, rapid technological change, geopolitical instability, and increasing expectations of accountability, organisations need more than frameworks and policies. They need strong judgement, inclusive leadership, and cultures that can hold under pressure.
                            </p>
                            <p>
                                WGRCFP exists to support exactly that.
                            </p>
                            <p>
                                This inaugural event brings together senior leaders, practitioners, emerging professionals, and allies to explore how women are shaping the future of GRC and financial crime prevention, and what that leadership looks like in practice.
                            </p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Why This Summit Matters </h5>
                            <p>This inaugural event marks a strategic shift. It is designed to:</p>
                            <ul style="list-style: disc">
                                <li>Set a clear strategic direction for WGRCFP as a professional community</li>
                                <li>Create a credible, inclusive space for leadership-level conversations</li>
                                <li>Bridge technical GRC expertise with leadership, culture, and decision-making</li>
                                <li>Inspire both established and emerging professionals across sectors</li>
                                <li>Build momentum for a long-term, global WGRCFP programme of events, research, and collaboration</li>
                            </ul>
                            <p class="pt-3">For organisations, it offers insight into the leadership capabilities required for the next phase of regulatory and risk maturity. For individuals, it offers connection, perspective, and a sense of shared purpose.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Programme Overview </h5>
                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Welcome and Opening Remarks</h6>
                            <p class=" mb-2"> Opening reflections on why governance, risk, and financial crime prevention matter now, and the purpose of WGRCFP as an inclusive, global initiative.</p>
                            
                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">WGRCFP Overview and Strategic Focus</h6>
                            <p class=" mb-2"> An introduction to WGRCFP, why it was established, and how professionals and organisations can engage through membership, events, research, and collaboration.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Keynote: The State of GRC and Financial Crime Prevention</h6>
                            <p class=" mb-2">A strategic keynote exploring emerging risks, regulatory trends, technology pressures, and what organisations must prioritise over the next 2–3 years.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;"> Leadership Framing Keynote: Women Leading the Change</h6>
                            <p class=" mb-2">A short leadership keynote offering a systems and cultural lens on leadership under pressure and judgement in uncertainty.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Panel Discussion: Women Leading the Change in GRC and Financial Crime Prevention</h6>
                            <p class=" mb-2">A moderated conversation with senior leaders exploring real-world leadership challenges and career pathways.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Audience Q&A</h6>
                            <p class=" mb-2">Live and pre-submitted questions connecting insights across discussions.</p>

                            <h6 class="col-12 mb-1" style="padding-left:0;padding-right:0;">Closing Remarks and Community Invitation</h6>
                            <p class=" mb-2">An invitation to engage with WGRCFP’s growing community and upcoming initiatives.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">💡 Who Should Attend?
                            </h5>
                            <br>
                            <ul style="list-style: disc">
                                <li> Governance, risk, compliance, and financial crime professionals </li>
                                <li> Chief Risk Officers, Chief Compliance Officers, Heads of Financial Crime</li>
                                <li> Regulators, advisors, consultants, and policymakers</li>
                                <li> Emerging leaders and early-career professionals</li>
                                <li> Allies committed to inclusive and effective leadership</li>
                            </ul>
                            <p class="pt-3">WGRCFP is inclusive and open to all professionals and allies who share its values.</p>
                        </div>
                        <br>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Value Proposition </h5>
                            <p>By attending the WGRCFP Inaugural Summit, participants will:</p>
                            <ul style="list-style: disc">
                                <li>Gain strategic insight into the future of GRC and financial crime prevention</li>
                                <li>Hear directly from respected industry and leadership voices</li>
                                <li>Understand how leadership, culture, and judgement shape effective risk management</li>
                                <li>Connect with a growing global community of professionals</li>
                                <li>Learn how to engage with WGRCFP through membership and collaboration</li>
                            </ul>
                            <p class="pt-3">This is about building capability, credibility, and connection. Together.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Join the WGRCFP Community </h5>
                            <p>The summit also marks the opening of WGRCFP membership and engagement opportunities, including:</p>
                            <ul style="list-style: disc">
                                <li>Professional development events</li>
                                <li>Research and thought leadership</li>
                                <li>Speaking and collaboration opportunities</li>
                                <li>Mentorship and peer networks</li>
                            </ul>
                            <p class="pt-3">More details will be shared during the event.</p>
                            <p class="pt-3"><strong>WGRCFP Inaugural Summit 2026</strong><br>
                            Women leading the change. Systems that work. Leadership that lasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= S-CONFERENCE-COUNTER END ========= -->
    <section class="s-our-speaker s-event-schedule pt-0">
        <div class="container">
            <h2 class="title-conference"><span>Our Speakers</span></h2>
            <div class="slider-our-speaker">

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="{{asset('assets/img/placeholder-all.png')}}"
                            alt="Elena Pykhova">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Elena Pykhova</h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Keynote Speaker</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">CEO, DORA Advisory | Former Chief Risk Officer</p>
                        </div>
                    </div>
                </div>

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="{{asset('assets/img/placeholder-all.png')}}"
                            alt="Natalie Turner">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Natalie Turner</h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Leadership Framing Keynote</p>
                            <p class="prof mt-2" style="font-size:16px;line-height:1rem;">Leadership and innovation specialist</p>
                        </div>
                    </div>
                </div>

                <div class="slide-our-speaker">
                    <div class="our-speaker-item">
                        <img src="{{asset('assets/img/placeholder-all.png')}}"
                            alt="Panelist">
                        <div class="speaker-item-info"
                            style="position: relative;padding-left:15px;padding-right:15px;bottom:40px">
                            <h3 class="name" style="font-size:18px">Panel Speakers</h3>
                            <p class="prof" style="font-size:16px;line-height:1rem;">Curated Panelists</p>
                            <p class="prof mt-2" style="font-size:14px;line-height:1.2rem;">Senior female leaders, consulting partners, emerging leaders, and senior male allies.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <ul class="pt-5">
                <li><i class="mdi mdi-account-outline"></i> <a href="{{ route('summit_register') }}" target="_blank"
                        style="font-size:20px"> REGISTER HERE </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Virtual (MS Teams / LinkedIn Live)</li>
                <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 17 March 2026</li>
                <li><i class="mdi mdi-clock-outline"></i>Time: 12:00 – 13:30 (UK time)</li>
            </ul>

            <ul class="mission-meta">
                <li><i aria-hidden="true" class="mdi mdi-facebook"></i><a
                        href="https://web.facebook.com/grcfincrimeawards/posts/pfbid02ByNyK4N1jeNwKTiuvbS9a4AUuLu9X3kkx6Qxj5cRqCL94LFgpQMKcHSpigBEi9Pfl"
                        target="_blank"> Follow on Facebook </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-instagram "></i><a
                        href="https://www.instagram.com/p/CqLlPP2MVi7/?utm_source=ig_web_copy_link" target="_blank">
                        Follow on Instagram </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-linkedin"></i><a
                        href="https://www.linkedin.com/posts/the-morgans-grc-fin-crime-awards_fis-professionals-finance-activity-7045015444889440256-Jbjz?utm_source=share&utm_medium=member_desktop">
                        Follow on LinkedIn</a></li>
            </ul>
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    @include('partials.voter.footer')
    <!--================== FOOTER END ==================-->

    <!-- ================ MODALS ================ -->


    <div class="modal fade" id="order-of-programme-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title" id="modal-title">Order of Programme</h5>
                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close-circle mdi-24px" style="color: red;"></i></a>
                </div>

                <div class="modal-body px-4 pb-4 pt-0">
                    <section class="s-our-mission s-about-speaker" style="padding:0px">
                        <div class="row" style="flex-direction: column;">
                            <div class="col-lg-12 our-mission-info">
                                <img src="{{asset('/assets/summit_order_of_programme.jpg')}}" alt="direction image" style="width: 100%;height:auto;">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ MODALS END ================ -->
    <!--=================== TO TOP ===================-->
    <a class="to-top" href="#home">
        <i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
    </a>
    <!--================= TO TOP END =================-->

    <!--=================== SCRIPT	===================-->
    @include('partials.voter.scripts')
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 17, 2026 12:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text 
        }, 1000);
    </script>

</body>


</html>
