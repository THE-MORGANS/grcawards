<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Lusaka Summit 2026')

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
					<li>Lusaka Summit 2026</li>
				</ul>
			</div>
            {{-- <h5 class="title">GRC & FinCrime Prevention Conference – Africa
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
                <center><img src="{{asset('/assets/lusaka_summit_banner_2026.jpeg')}}" width="100%" style="max-width:1200px; margin-top:20px; margin-bottom:30px;"></center>
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
                            <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Lusaka, Zambia
                            </li>
                            <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 15th – 17th April 2026
                            </li>
                            <li><i class="mdi mdi-clock-outline"></i>3-Day Conference</li>
                            <li class="pt-3"><i class="mdi mdi-email-outline"></i> <a
                                    href="mailto:events@grcfincrimeawards.com" style="font-size:20px">
                                    Contact for Sponsorship </a> </li>

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
                            Theme: Trust, Resilience and Sustainable Growth<br>
                            <span style="font-size:18px;">Advancing Governance, Risk, Compliance and Financial Crime Prevention in Africa</span>
                        </h4>

                        <div class="mission-info-text">

                            <p></p><br>
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 Executive Overview
                            </h6>
                            <p>
                                The Governance, Risk, Compliance & Financial Crime Prevention Conference Africa is a high-level, three-day stakeholders conference convening senior leaders from government, regulatory authorities, financial institutions, corporates, development partners, and global organisations.
                            </p>
                            <p>
                                Hosted in Lusaka, Zambia, the conference provides a strategic platform to address how institutions across Africa can strengthen trust, resilience, and sustainable growth through effective governance, risk management, regulatory compliance, and integrated financial crime prevention.
                            </p>
                            <p>
                                This is not a mass-attendance event. It is a curated, senior-level convening designed for decision-makers, policy shapers, and institutional leaders.
                            </p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 About THE MORGANS </h5>
                            <p>THE MORGANS CONSORTIUM is a globally connected platform advancing leadership, dialogue, and practical solutions in Governance, Risk, Compliance and Financial Crime Prevention across Africa, Europe, and other regions.</p>
                            <p>Through flagship conferences, summits, publications, and professional networks, THE MORGANS brings together senior stakeholders to:</p>
                            <ul style="list-style: disc">
                                <li>Shape policy and regulatory dialogue</li>
                                <li>Strengthen institutional resilience</li>
                                <li>Promote ethical leadership and accountability</li>
                                <li>Bridge public and private sector perspectives</li>
                            </ul>
                            <p class="pt-3">Our events are designed to deliver substance, credibility, and long-term value, not just visibility.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Conference Format & Highlights </h5>
                            <ul style="list-style: disc">
                                <li>Ministerial and regulatory keynote addresses</li>
                                <li>High-level plenary sessions</li>
                                <li>Expert panel discussions</li>
                                <li>Executive and regulatory roundtables</li>
                                <li>Networking receptions and stakeholder engagements</li>
                                <li>Exhibition and solution showcase</li>
                            </ul>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">💡 Who Will Attend?
                            </h5>
                            <br>
                            <ul style="list-style: disc">
                                <li>Government Ministries and Agencies</li>
                                <li>Central Banks and Financial Regulators</li>
                                <li>Anti-Corruption, Financial Intelligence, and Law Enforcement Agencies</li>
                                <li>Board Members and Non-Executive Directors</li>
                                <li>CEOs, CROs, CCOs, CIOs, CISOs</li>
                                <li>Heads of Risk, Compliance, Internal Audit, and Governance</li>
                                <li>Financial Institutions and Corporates</li>
                                <li>Development Partners and Multilateral Organisations</li>
                                <li>Technology, Cybersecurity, and RegTech Providers</li>
                            </ul>
                        </div>
                        <br>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Why Sponsor This Conference </h5>
                            <p>Sponsoring this conference offers organisations a unique opportunity to:</p>
                            <ul style="list-style: disc">
                                <li>Engage directly with government leaders, regulators, and policy-makers</li>
                                <li>Position your organisation as a trusted partner in governance and integrity</li>
                                <li>Influence high-level conversations shaping Africa's regulatory and risk landscape</li>
                                <li>Showcase thought leadership in front of senior decision-makers</li>
                                <li>Build long-term relationships across public and private sectors</li>
                                <li>Align your brand with trust, resilience, and sustainable growth</li>
                            </ul>
                            <p class="pt-3"><strong>This conference attracts decision-makers, not observers.</strong></p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Sponsorship Opportunities </h5>
                            <p>To encourage local ownership while maintaining international standards, sponsorship is offered under <strong>Local (Zambian)</strong> and <strong>International / Regional</strong> tiers.</p>
                            
                            <h6 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">Strategic Partner (Title Sponsor)</h6>
                            <p class="mb-2"><strong>Investment:</strong> USD 50,000 (International) | USD 30,000 (Local)</p>
                            <p class="mb-2">Exclusive Strategic Partner designation, co-branding, opening remarks, keynote opportunity, premium exhibition, 10 delegate passes, VIP roundtable access.</p>

                            <h6 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">Platinum Sponsor</h6>
                            <p class="mb-2"><strong>Investment:</strong> USD 30,000 (International) | USD 18,000 (Local)</p>
                            <p class="mb-2">High-visibility branding, keynote/panel speaking slot, premium exhibition, 6 delegate passes, VIP networking access.</p>

                            <h6 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">Gold Sponsor</h6>
                            <p class="mb-2"><strong>Investment:</strong> USD 20,000 (International) | USD 12,000 (Local)</p>
                            <p class="mb-2">Panel speaking opportunity, exhibition space, 4 delegate passes, logo on programme and website.</p>

                            <h6 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">Silver Sponsor</h6>
                            <p class="mb-2"><strong>Investment:</strong> USD 12,000 (International) | USD 7,000 (Local)</p>
                            <p class="mb-2">Panel participation, exhibition tabletop, 3 delegate passes, logo on conference materials.</p>

                            <h6 class="col-12 mb-1 pt-3" style="padding-left:0;padding-right:0;">Bronze Sponsor</h6>
                            <p class="mb-2"><strong>Investment:</strong> USD 7,500 (International) | USD 4,500 (Local)</p>
                            <p class="mb-2">Exhibition tabletop, 2 delegate passes, logo on sponsor recognition slides.</p>

                            <p class="pt-3">Custom partnerships available for banks, technology providers, professional services firms, and development organisations.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 Contact & Engagement </h5>
                            <p>To discuss sponsorship, partnership, or customised packages:</p>
                            <p class="pt-2"><strong>THE MORGANS CONSORTIUM</strong><br>
                            Email: <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a><br>
                            Website: <a href="https://www.grcfincrimeawards.com/" target="_blank">www.grcfincrimeawards.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= S-CONFERENCE-COUNTER END ========= -->
    <section class="s-our-speaker s-event-schedule pt-0">
        <div class="container">
            <h2 class="title-conference"><span>Conference Details</span></h2>
            <ul class="pt-5">
                <li><i class="mdi mdi-email-outline"></i> <a href="mailto:events@grcfincrimeawards.com"
                        style="font-size:20px"> Contact for Sponsorship </a> </li>
                <li><i aria-hidden="true" class="mdi mdi-map-marker-outline mdi-18px"></i>Venue: Lusaka, Zambia</li>
                <li><i aria-hidden="true" class="uil uil-calendar-alt"></i>Date: 15th – 17th April 2026</li>
                <li><i class="mdi mdi-clock-outline"></i>3-Day Conference</li>
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
        var countDownDate = new Date("Apr 15, 2026 09:00:00").getTime();

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
