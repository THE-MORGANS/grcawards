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
                            <h6 class="col-12" style="padding-left:0;padding-right:0;">🎯 About the Conference</h6>
                            <p>
                                The Africa Governance, Risk, Compliance & Financial Crime Prevention Conference is a three-day, high-level stakeholders convening bringing together senior leaders from government, regulatory authorities, central banks, financial institutions, corporates, development partners, and global organisations.
                            </p>
                            <p>
                                Hosted in Lusaka, Zambia, the conference is designed as a secure, invitation-led and professionally curated platform for strategic dialogue, collaboration, and leadership on the most critical governance, risk, compliance, technology, cyber, and financial crime challenges facing Africa today.
                            </p>
                            <p>
                                <strong>This is not a general conference.</strong> It is a transformational, decision-maker-level forum for those shaping Africa's governance and integrity agenda.
                            </p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">📜 Conference Theme & Philosophy</h5>
                            <p><strong>Trust, Resilience and Sustainable Growth</strong><br>
                            Advancing Governance, Risk, Compliance and Financial Crime Prevention in Africa</p>
                            <p>A global approach to building resilient institutions, strengthening governance, and advancing next-generation risk management in an increasingly digital and interconnected economy. The theme reflects the understanding that:</p>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>Financial crime prevention is an outcome of strong governance</li>
                                <li>Compliance is effective only when embedded within enterprise risk management</li>
                                <li>Sustainable growth requires institutional trust, resilience, and accountability</li>
                            </ul>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">🌍 Why This Conference Matters</h5>
                            <p>Across Africa, institutions are operating in an environment of:</p>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>Rising regulatory and supervisory expectations</li>
                                <li>Accelerating technology and cyber risk</li>
                                <li>Increasing financial crime, integrity, and reputational threats</li>
                                <li>Pressure to deliver sustainable economic growth and public trust</li>
                            </ul>
                            <p>This conference provides a strategic response to these realities by convening those who set policy, regulate markets, govern institutions, and manage systemic risk.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">👥 Who Should Attend?</h5>
                            <p>This conference is designed for senior-level participation, including:</p>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>Government Ministries and Agencies</li>
                                <li>Central Banks and Financial Regulators</li>
                                <li>Anti-Corruption, Financial Intelligence & Law Enforcement Agencies</li>
                                <li>Board Chairs, Non-Executive Directors, Trustees</li>
                                <li>CEOs, CROs, CCOs, CIOs, CISOs</li>
                                <li>Heads of Risk, Compliance, Internal Audit & Governance</li>
                                <li>Financial Institutions and Corporates</li>
                                <li>Development Partners and Multilateral Organisations</li>
                                <li>Technology, Cybersecurity & RegTech Providers</li>
                            </ul>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">📅 Programme Overview (3 Days)</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p><strong>Day 1 – Governance, Leadership & Institutional Trust</strong></p>
                                    <ul style="font-size: 14px;">
                                        <li>Ministerial and regulatory keynotes</li>
                                        <li>Governance reform & accountability</li>
                                        <li>Board oversight & ethical leadership</li>
                                        <li>Public sector trust</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Day 2 – Enterprise Risk & Organisational Resilience</strong></p>
                                    <ul style="font-size: 14px;">
                                        <li>Enterprise & operational risk mgmt</li>
                                        <li>Regulatory compliance expectations</li>
                                        <li>Risk culture, controls & assurance</li>
                                        <li>Resilience in complex environments</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Day 3 – Tech, Cyber & FinCrime Prevention</strong></p>
                                    <ul style="font-size: 14px;">
                                        <li>Cyber risk and digital trust</li>
                                        <li>Data governance & emerging tech</li>
                                        <li>FinCrime prevention as a system outcome</li>
                                        <li>Intelligence, enforcement & collaboration</li>
                                    </ul>
                                </div>
                            </div>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">🎙️ Speakers & Contributors</h5>
                            <p>The conference will feature:</p>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>Senior government and regulatory leaders</li>
                                <li>Central bank governors and supervisors</li>
                                <li>Board members and executive leaders</li>
                                <li>Global GRC, risk and compliance experts</li>
                                <li>Technology, cyber and financial crime specialists</li>
                            </ul>
                            <p>Confirmed and invited speakers will be announced progressively.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💎 Value & Benefits of Attending</h5>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>Engage directly with policy-makers and regulators</li>
                                <li>Gain insight into emerging governance and risk expectations</li>
                                <li>Learn practical approaches to enterprise, cyber and integrity risk</li>
                                <li>Build relationships across public and private sectors</li>
                                <li>Contribute to shaping Africa's governance and resilience agenda</li>
                                <li>Participate in a secure, high-trust, senior-level environment</li>
                            </ul>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">🎟️ Registration & Delegate Fees</h5>
                            <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; border-left: 4px solid #D4AF37;">
                                <p><strong>Full Conference Pass (3 Days): USD 1,300</strong></p>
                                <p style="font-size: 14px;"><em>Please note: The fee excludes accommodation and travel costs. Delegate places are strictly limited.</em></p>
                                <p><strong>Delegate fee includes:</strong></p>
                                <ul style="font-size: 14px;">
                                    <li>Access to all sessions (3 days)</li>
                                    <li>Conference materials and documentation</li>
                                    <li>Daily refreshments and lunches</li>
                                    <li>Networking and stakeholder engagements</li>
                                    <li>Certificate of participation</li>
                                </ul>
                            </div>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">✅ Booking, Payment & Confirmation</h5>
                            <ul style="list-style: disc; padding-left: 20px;">
                                <li>All bookings must be completed online via <a href="https://www.grcfincrimeawards.com/">www.grcfincrimeawards.com</a></li>
                                <li>Online payment only (secure payment gateway)</li>
                                <li>Registration is confirmed only upon receipt of payment</li>
                                <li>No on-site or offline payments will be accepted</li>
                            </ul>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">🏨 Conference Venue</h5>
                            <p><strong>Southern Sun Ridgeway Hotel, Lusaka, Zambia</strong></p>
                            <p>A secure, professional venue suitable for high-level meetings, plenary sessions, closed-door roundtables, and executive networking.</p>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">💡 About THE MORGANS</h5>
                            <p>THE MORGANS CONSORTIUM is a globally connected platform advancing leadership, dialogue, and practical solutions in Governance, Risk, Compliance and Financial Crime Prevention across Africa, Europe, and beyond.</p>

                            <div style="margin-top: 40px; text-align: center;">
                                <a href="https://www.grcfincrimeawards.com/" class="btn btn-primary" style="background-color: #D4AF37; border-color: #D4AF37; padding: 15px 30px; font-weight: bold;">REGISTER SECURELY ONLINE</a>
                            </div>

                            <p class="p-3"></p>
                            <h5 class="col-12 mb-1" style="padding-left:0;padding-right:0;">❓ Frequently Asked Questions (FAQs)</h5>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item" style="border: none; border-bottom: 1px solid #eee;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" style="border:none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="background: none; box-shadow: none; font-weight: bold; padding: 15px 0;">
                                            Who should attend this conference?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="padding: 0 0 15px 0;">
                                            This conference is designed for senior stakeholders, including government officials, regulators, board members, executives, heads of risk and compliance, financial institutions, development partners, and technology leaders.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border: none; border-bottom: 1px solid #eee;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" style="border:none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="background: none; box-shadow: none; font-weight: bold; padding: 15px 0;">
                                            Is this an open public event?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="padding: 0 0 15px 0;">
                                            No. This is a curated, high-profile stakeholders conference. Attendance is limited to ensure quality engagement, security, and senior-level dialogue.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border: none; border-bottom: 1px solid #eee;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" style="border:none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="background: none; box-shadow: none; font-weight: bold; padding: 15px 0;">
                                            Does the USD 1,300 fee include accommodation?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="padding: 0 0 15px 0;">
                                            No. The conference fee does not include accommodation or travel. Delegates are responsible for arranging their own accommodation and flights.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="border: none; border-bottom: 1px solid #eee;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" style="border:none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" style="background: none; box-shadow: none; font-weight: bold; padding: 15px 0;">
                                            Are group or institutional registrations available?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="padding: 0 0 15px 0;">
                                            Yes. Group and institutional bookings may be considered on request, subject to availability. Please contact the organising team at <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a> for details.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
