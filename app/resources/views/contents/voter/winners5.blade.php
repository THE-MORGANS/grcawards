<!DOCTYPE html>
<html lang="en">
@section('title', '2025 Winners')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
@endsection

<head>
    @include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
    <!-- =============== PRELOADER =============== -->
    @include('partials.voter.preloader')
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
                    <li>Winners</li>
                </ul>
            </div>
            <h1 class="title">2025 Winners</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Winners for Governance Risk Compliance and Financial Crime Prevention Awards 2025</h4>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1" checked />
                            <label class="accordion-label" for="category1">GRC & FINANCIAL CRIME PREVENTION EXCELLENCE AWARDS CATEGORY </label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Commercial Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gt_h.jpeg') }}" height="50">
                                                                <p>Guaranty Trust Holding Company</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gt_h.jpeg') }}" height="50">
                                                                <p>Guaranty Trust Holding Company</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Insurance</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/axa_m.jpeg') }}" height="50">
                                                                <p>Axa Assurance Maroc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/aiico.jpeg') }}" height="50">
                                                                <p>AIICO Insurance Plc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Asset And Wealth Management</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gt_fm.jpeg') }}" height="50">
                                                                <p>Guaranty Trust Fund Managers</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gt_fm.jpeg') }}" height="50">
                                                                <p>Guaranty Trust Fund Managers</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Microfinance Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/ft_mfb.jpeg') }}" height="50">
                                                                <p>Fina Trust Microfinance Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/kuda.jpg') }}" height="50">
                                                                <p>Kuda Microfinance Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Pension Industry</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/lw_pensure.jpeg') }}" height="50">
                                                                <p>Leadway Pensure</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/lw_pensure.jpeg') }}" height="50">
                                                                <p>Leadway Pensure</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Fintech</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Financial Crime Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/opay.jpeg') }}" height="50">
                                                                <p>OPay</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/opay.jpeg') }}" height="50">
                                                                <p>OPay</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Aviation & Aerospace</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/kenya_airways.jpeg') }}" height="50">
                                                                <p>Kenya Airways</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Transportation</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/nrc.jpeg') }}" height="50">
                                                                <p>Nigerian Railway Corporation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Health Sector</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/st_ives.jpeg') }}" height="50">
                                                                <p>St. Ives Hospital</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Utilites & Telecos</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/globacom.jpeg') }}" height="50">
                                                                <p>Globacom</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Legal & Real Estate</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/aluko_oyebode.jpeg') }}" height="50">
                                                                <p>Aluko & Oyebode (Nigeria)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Energy/Oil & Gas</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/nnpc.jpeg') }}" height="50">
                                                                <p>NNPC</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Emerging Talent / Rising Star Awards</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Organizational Excellence in Governance, Risk & Compliance</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/emily_mochama.jpeg') }}" height="100">
                                                                <p>Emily Mochama – CCO at Afriex Inc (Kenya)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1-1" checked />
                            <label class="accordion-label" for="category1-1">ESG AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Commercial Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>ESG Initiative of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/uba.jpeg') }}" height="50">
                                                                <p>United Bank for Africa</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1-1-1" checked />
                            <label class="accordion-label" for="category1-1-1">GRC & FINANCIAL CRIME PREVENTION TEAM OF THE YEAR AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Commercial Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Team of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/gt_h.jpeg') }}" height="50">
                                                                <p>GTBank AML/Financial Crime Team (Nigeria)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Public Sector/NGOs/Charities</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Team of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/ncc.jpeg') }}" height="50">
                                                                <p>Nigerian Communications Commission (NCC)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category2" checked />
                            <label class="accordion-label" for="category2">GRC & FINANCIAL CRIME PREVENTION CHAMPIONS AWARDS CATEGORY</label>
                            <div class="accordion-content" style="max-height:700vh">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Internal Audit and Assurance</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Internal Audit and Assurance Champions</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/vincent_mutisya.jpeg')}}" height="100">
                                                                <p>Vincent Mutisya</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category2" checked />
                            <label class="accordion-label" for="category2">GRC & FINANCIAL CRIME PREVENTION LEADERSHIP AWARDS CATEGORY</label>
                            <div class="accordion-content" style="max-height:700vh">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <!-- <h4>Internal Audit and Assurance</h4> -->
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime and Fraud Prevention Leader Award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/ehi_esoimeme.jpeg')}}" height="100">
                                                                <p>Professor Ehi Esoimeme</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Governance, Risk & Compliance Leader Award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/beauty_mtonga2.jpeg')}}" height="100">
                                                                <p>Beauty Mtonga</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Cybersecurity & Data Governance Champion - Leader Award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/toyosi_odukoya.jpeg')}}" height="100">
                                                                <p>Toyosi Odukoya (Nigeria)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3" checked />
                            <label class="accordion-label" for="category3">WOMEN IN GRC & FINANCIAL CRIME PREVENTION AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/beauty_mtonga2.jpeg') }}" height="120">
                                                                <p>Beauty Mtonga</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/xolisile_khanyile.jpeg') }}" height="120">
                                                                <p>Xolisile Khanyile</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3-1" checked />
                            <label class="accordion-label" for="category3-1">GRC & FINANCIAL CRIME PREVENTION MEDIA/PROMOTER AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Anti-financial Crime influencer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/tony_elumelu.jpeg')}}" height="120">
                                                                <p>Tony Elumelu (Nigeria)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Anti-financial Crime Reporter/Station of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{ asset('assets/images/winners_2025/arise_news.jpeg') }}" height="50">
                                                                <p>Arise News</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category4" checked />
                            <label class="accordion-label" for="category4">GRC & FINANCIAL CRIME PREVENTION PARTNER AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Advisory Service</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/kmpg.jpeg')}}" height="50">
                                                                <p>KPMG Africa</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Recruitment & Talents Firm</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/jobberman.jpeg')}}" height="50">
                                                                <p>Jobberman</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/huawei_cloud.jpeg')}}" height="50">
                                                                <p>Huawei Cloud</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC & Financial Crime Prevention Training Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/niit.jpeg')}}" height="50">
                                                                <p>Nigeria Institute of Information Technology (NIIT)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category10" checked />
                            <label class="accordion-label" for="category10">LIFETIME ACHIEVEMENT AWARDS</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNER</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Lifetime Achievement Award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/images/winners_2025/noi.jpeg')}}" height="120">
                                                                <p>Dr. Ngozi Okonjo-Iweala</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= SIDEBAR =================-->
                @include('partials.voter.sidebar')
                <!--=============== SIDEBAR END ===============-->
            </div>
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