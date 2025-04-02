<!DOCTYPE html>
<html lang="en">
@section('title', 'Shortlisted Finalists')
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
                    <li>Shortlisted Finalists</li>
                </ul>
            </div>
            <h1 class="title">Shortlisted Finalists</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Shortlisted Finalists for Governance Risk Compliance and Financial Crime Prevention Awards 2022</h4>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Risk & Compliance Champion</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Risk & Compliance Educator</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Anti-Bribery & Corruption</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669036293/grcfincrimeawards/nominees/Stanbic_20ibtc_203_dejuep.png" height="40">
                                                                <p>Stanbic IBTC Bank Ltd.</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Fraud Prevention</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Fraud Prevention</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037691/grcfincrimeawards/nominees/logo_riqo6g.png" height="40">
                                                                <p>AXA Mansard Insurance Plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669038041/grcfincrimeawards/nominees/logo_i4nne8.png" height="40">
                                                                <p>AIICO Insurance Plc</p>
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
                            <label class="accordion-label" for="category1-1">GRC & FINANCIAL CRIME PREVENTION JOURNEY AWARDS CATEGORY</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Commercial Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Visionary Awards</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank Plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
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
                            <label class="accordion-label" for="category2">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY</label>
                            <div class="accordion-content" style="max-height:700vh">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>Commercial Banks</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669039532/grcfincrimeawards/nominees/UBA-Logo_ajucub.svg" height="50">
                                                                <p>United Bank of Africa Plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669039923/grcfincrimeawards/nominees/ocnqdnxhwlegwdcyb021.png" height="50">
                                                                <p>Sterling Bank Plc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669040334/grcfincrimeawards/nominees/First-Bank_d8qf6x.svg" height="50">
                                                                <p>First Bank of Nigeria Plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669039923/grcfincrimeawards/nominees/ocnqdnxhwlegwdcyb021.png" height="50">
                                                                <p>Sterling Bank Plc</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Risk management Team of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669040725/grcfincrimeawards/nominees/citilogoredesign_zslf64.png" height="50">
                                                                <p>Citibank Nigeria plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669036293/grcfincrimeawards/nominees/Stanbic_20ibtc_203_dejuep.png" height="50">
                                                                <p>Stanbic IBTC Bank plc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Compliance Team of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>MLRO or Head of Anti-Financial Crime of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035715/grcfincrimeawards/nominees/zenith-bank-logo_1_adpjmj.png" height="50">
                                                                <p>Zenith Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037691/grcfincrimeawards/nominees/logo_riqo6g.png" height="40">
                                                                <p>AXA Mansard Insurance Plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669038041/grcfincrimeawards/nominees/logo_i4nne8.png" height="40">
                                                                <p>AIICO Insurance Plc</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669063343/grcfincrimeawards/nominees/logo.3494da11_sfqfer.png" height="30">
                                                                <p>Heirs Insurance plc</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037691/grcfincrimeawards/nominees/logo_riqo6g.png" height="40">
                                                                <p>AXA Mansard Insurance Plc</p>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669092936/grcfincrimeawards/nominees/hVkLGMQo2I5nyUCEgAymMQhw6iDCQFm-Xo8xvMu2enzFAMvIGZh30ICC4FPbYO5fB_U_nufnwv.png" height="40">
                                                                <p>Opay</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669092936/grcfincrimeawards/nominees/hVkLGMQo2I5nyUCEgAymMQhw6iDCQFm-Xo8xvMu2enzFAMvIGZh30ICC4FPbYO5fB_U_nufnwv.png" height="40">
                                                                <p>Opay</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669092936/grcfincrimeawards/nominees/hVkLGMQo2I5nyUCEgAymMQhw6iDCQFm-Xo8xvMu2enzFAMvIGZh30ICC4FPbYO5fB_U_nufnwv.png" height="40">
                                                                <p>Opay</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669092936/grcfincrimeawards/nominees/hVkLGMQo2I5nyUCEgAymMQhw6iDCQFm-Xo8xvMu2enzFAMvIGZh30ICC4FPbYO5fB_U_nufnwv.png" height="40">
                                                                <p>Opay</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093466/grcfincrimeawards/nominees/logo_mezemd.png" height="50">
                                                                <p>Addosser Microfinance Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093444/grcfincrimeawards/nominees/logo_kvguff.png" height="50">
                                                                <p>Accion Microfinance Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093942/grcfincrimeawards/nominees/lqjkedq0w6vgwvjucfkh.png" height="40">
                                                                <p>Rehoboth Microfinance Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093444/grcfincrimeawards/nominees/logo_kvguff.png" height="40">
                                                                <p>Accion Microfinance Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093444/grcfincrimeawards/nominees/logo_kvguff.png" height="40">
                                                                <p>Accion Microfinance Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093572/grcfincrimeawards/nominees/ibile-microfinance-bank-nigeria-retina-logo_oajlqc.png" height="40">
                                                                <p>Ibile Microfinance Bank</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093444/grcfincrimeawards/nominees/logo_kvguff.png" height="40">
                                                                <p>Accion Microfinance Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669093590/grcfincrimeawards/nominees/MTMfBank_LandscapeLogo_fgo0km.png" height="40">
                                                                <p>Mutual Trust Microfinance Bank</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>Asset Management </h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107384/grcfincrimeawards/nominees/login-logo_wblhcz.png" height="40">
                                                                <p>Chapel Hill Denham Management Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107679/grcfincrimeawards/nominees/zgvtqfikaioapry55lzl.png" height="40">
                                                                <p>Stanbic IBTC Asset Management Ltd</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107823/grcfincrimeawards/nominees/IM-logo_gxgcpv.png" height="40">
                                                                <p>ARM Investment Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669113228/grcfincrimeawards/nominees/exvfakljqw0ejpxl7fgq.png" height="40">
                                                                <p>AIICO Capital Ltd</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107823/grcfincrimeawards/nominees/IM-logo_gxgcpv.png" height="40">
                                                                <p>ARM Investment Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107679/grcfincrimeawards/nominees/zgvtqfikaioapry55lzl.png" height="40">
                                                                <p>Stanbic IBTC Asset Management Ltd</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669107823/grcfincrimeawards/nominees/IM-logo_gxgcpv.png" height="40">
                                                                <p>ARM Investment Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669110727/grcfincrimeawards/nominees/images_3_lhkru3.jpg" height="40">
                                                                <p>United Capital Ltd</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>Pension Fund Operators</h4>
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114213/grcfincrimeawards/nominees/f038588_j5cvst.png" height="40">
                                                                <p>ARM Pension Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114213/grcfincrimeawards/nominees/f038588_j5cvst.png" height="40">
                                                                <p>ARM Pension Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114213/grcfincrimeawards/nominees/f038588_j5cvst.png" height="40">
                                                                <p>ARM Pension Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114213/grcfincrimeawards/nominees/f038588_j5cvst.png" height="40">
                                                                <p>ARM Pension Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
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
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC Woman of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669118061/grcfincrimeawards/nominees/n9ue8pdcpizfhqgjfngd.jpg" height="120">
                                                                <p>Dr. Chinyere Almona</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669118470/grcfincrimeawards/nominees/STL-Funmi-Ekundayo-MD-343x500_mbcbvn.jpg" height="120">
                                                                <p>Funmi Ekundayo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Financial Crime Prevention Woman of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669120276/grcfincrimeawards/nominees/1662327670176_ujutgy.jpg" height="120">
                                                                <p>Atinuke Victoria</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669122122/grcfincrimeawards/nominees/Chinelo_Ubah_umnyxz.jpg" height="120">
                                                                <p>Chinelo Ubah</p>
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
                            <label class="accordion-label" for="category3-1">GRC & FINANCIAL CRIME PREVENTION PROMOTER AWARDS CATEGORY <br>(Insurance)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC & Anti-financial Crime Reporter of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669128838/grcfincrimeawards/nominees/img_7896_ydpsmk.jpg" height="120">
                                                                <p>David Hundeyin</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669128855/grcfincrimeawards/nominees/Seun-Okinbaloye1_h1rvy3.jpg" height="120">
                                                                <p>Seun Okinbaloye</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>GRC & Anti-financial Crime TV Programme/Stations of the year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669122793/grcfincrimeawards/nominees/Channels_TV_ln3fqb.jpg" height="40">
                                                                <p>Channels TV</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669122959/grcfincrimeawards/nominees/dyxdigwcrmvy5hjreeki.png" height="40">
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
                            <label class="accordion-label" for="category4">GRC & FINANCIAL CRIME PREVENTION PARTNER AWARDS CATEGORY <br>(Microfinance BankS)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-5">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best GRC & Financial Crime Prevention Advisory Service</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131087/grcfincrimeawards/nominees/kpmg-logo-1_xrsyc8.jpg" height="40">
                                                                <p>KMPG</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131151/grcfincrimeawards/nominees/1280px-Deloitte.svg_cb5tks.png" height="40">
                                                                <p>Deloitte</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best GRC & Financial Crime Prevention Recruitment & Talents Firm</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131284/grcfincrimeawards/nominees/landscape_sju3fa.svg" height="40">
                                                                <p>Jobberman</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131391/grcfincrimeawards/nominees/bxwwhkusdocyitsv6k7d.png" height="60">
                                                                <p>Phillips Consulting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best GRC Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131635/grcfincrimeawards/nominees/logo-small_fxpmuv.png" height="40">
                                                                <p>Mitiget</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131645/grcfincrimeawards/nominees/vn8q2twhs8foty8mg4ha.png" height="40">
                                                                <p>Digital Jewels</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best Financial Crime Prevention Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131926/grcfincrimeawards/nominees/https_3A_2F_2F1560512915-files.gitbook.io_2F_2Ffiles_2Fv0_2Fb_2Fgitbook-x-prod.appspot.com_2Fo_2Fspaces_252FsMPDRW8jU5LkIC7Fv2Jb_252Fsocialpreview_252FzWpcLe5h2AxOcWwaBUJZ_252FYouVerify_Logo_o2wn6j.png" height="40">
                                                                <p>Youverify</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669131869/grcfincrimeawards/nominees/sp_black_logo_kqusqs.svg" height="40">
                                                                <p>Shufti Pro</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best GRC Training Provider of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132112/grcfincrimeawards/nominees/logo-home_gyp2ra.png" height="40">
                                                                <p>Lagos Business School</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132160/grcfincrimeawards/nominees/main-logo_jpqlqi.jpg" height="40">
                                                                <p>E-four & AAF</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Best Financial Crime Prevention Training Provider of the Yea</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                    <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132302/grcfincrimeawards/nominees/1666543975468_ccsmwr.jpg" height="40">
                                                                <p>ACFCS Nigeria Chapter</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132112/grcfincrimeawards/nominees/logo-home_gyp2ra.png" height="40">
                                                                <p>Lagos Business School</p>
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
                            <label class="accordion-label" for="category10">SPECIAL RECOGNITION AWARD FOR GOVERNORS SUPPORTING GRC & ANTI-FINCRIME INITIATIVES</label>
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
                                                        <h6>SHORTLISTED FINALISTS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-5">
                                                        <p>Governor of the Year</p>
                                                    </div>
                                                    <div class="col-7 widget-archive">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132421/grcfincrimeawards/nominees/GIEJfJA__400x400_jrvljm.jpg" height="120">
                                                                <p>Gov. Babajide Sanwo-Olu</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132425/grcfincrimeawards/nominees/Oluseyi_Makinde_tmo6ak.png" height="120">
                                                                <p>Gov. Seyi Makinde</p>
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