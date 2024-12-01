<!DOCTYPE html>
<html lang="en">
@section('title', '2024 WINNERS')
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
                    <li>WINNER</li>
                </ul>
            </div>
            <h1 class="title">2024 WINNERS</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Winners for Governance Risk Compliance and Financial Crime Prevention Awards 2024</h4>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        <div class="accordion" style="overflow: scroll">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1" checked />
                            <label class="accordion-label" for="category1">GRC & FINANCIAL CRIME PREVENTION EXCELLENCE AWARDS CATEGORY </label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <h4>ACHIEVEMENT AWARDS - COMMERCIAL BANK</h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/jobome.png')}}" height="50">
                                                                <p>DR. GREGORY JOBOME,    <span style="font-size:9px"><br> HCIB (Chief risk officer) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>GT Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/osa.jpeg')}}" height="50">
                                                                <p>OSA AIWERIOGHENE
                                                                    <span style="font-size:9px"><br> (CHIEF COMPLIANCE OFFICER) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                               
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>ACHIEVEMENT AWARDS - PENSION INDUSTRY </h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p> STANBIC  IBTC PENSION MANAGERS </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/okonkwo.png')}}" height="40">
                                                                <p>CHUKWUNENYE OKONKWO
                                                                    <span style="font-size:9px"><br>   (HEAD, RISK MANAGEMENT AND 
                                                                    INTERNAL CONTROLS) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER 
                                                            OF THE YEAR AWARDS </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>STANBIC IBTC 
                                                                    PENSION MANAGERS </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/akan.png')}}" height="40">
                                                                <p>EDIDIONG AKAN
                                                                    <span style="font-size:9px"><br>  (CHIEF COMPLIANCE 
                                                                    OFFICER) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>ACHIEVEMENT AWARDS - ASSET MANAGEMENT</h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/stanbicasset_wbw3fc.png" height="40">
                                                                <p>STANBIC IBTC ASSET 
                                                                    MANAGEMENT</p>
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('assets/kola.png')}}" height="40">
                                                                <p>  MR. KOLA LAWAL
                                                                    <span style="font-size:9px"><br> (EXECUTIVE DIRECTOR, RISK)  </span></p>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER OF THE 
                                                            YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/stanbicasset_wbw3fc.png" height="40">
                                                                <p>STANBIC IBTC ASSET 
                                                                    MANAGEMENT</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/nkechi.png')}}" height="40">
                                                                <p>NKECHI EKEOPARA
                                                                    <span style="font-size:9px"><br>   (HEAD OF COMPLIANCE / 
                                                                    AML/CFT) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>ACHIEVEMENT AWARDS - INSURANCE</h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lead.png')}}" height="40">
                                                                <p>Leadway 
                                                                    Assurance</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/kiki.png')}}" height="40">
                                                                <p>MRS. KIKELOMO FISCHER
                                                                        <span style="font-size:9px"><br>  (chief risk officer) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER OF THE 
                                                            YEAR AWARDS </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lead.png')}}" height="40">
                                                                <p>Leadway 
                                                                    Assurance</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/kiki.png')}}" height="40">
                                                                <p>MRS. KIKELOMO FISCHER
                                                                    <span style="font-size:9px"><br>  (chief risk officer) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>ACHIEVEMENT AWARDS - MICROFINANCE BANK</h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/finatrust_xybdq8.jpg" height="40">
                                                                <p>FINATRUST MFB</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('assets/akande.png')}}" height="40">
                                                                <p>AKANDE OLUTAYO 
                                                                    LAWRENCE
                                                                    <span style="font-size:9px"><br>   (CHIEF RISK OFFICER) </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER OF THE 
                                                            YEAR AWARDS </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/finatrust_xybdq8.jpg" height="40">
                                                                <p>FINATRUST MFB</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <p>MOSES BIODUN LONGE
                                                                    <img src="{{asset('/assets/moses.png')}}" height="40">
                                                                    <span style="font-size:9px"><br>   (COMPLIANCE OFFICER, 
                                                                    FINATRUST MFB) </span> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                             
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>ACHIEVEMENT AWARDS - FINTECH</h4>
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
                                                        <p>GRC EMPLOYER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/IMAGE-2023-09-03-011712_m59rag.jpg" height="40">
                                                                <p>MoniePoint</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/IMAGE-2023-09-03-011712_m59rag.jpg" height="40">
                                                                <p>Moniepoint</p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML/ FINCRIME PREVENTION EMPLOYER 
                                                            OF THE YEAR AWARDS </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/OPay-Mastercard_lwuqhz.jpg" height="40">
                                                                <p>Opay</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/crusada.png')}}" height="40">
                                                                <p>Edidiong Akan </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>PROMOTERS AWARDS - MEDIA</h4>
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
                                                        <p>GRC & ANTI-FINCRIME REPORTER/ STATION 
                                                            OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/Arise-News-Copy_v5rsvj.jpg" height="40">
                                                                <p>ARISE TV </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ndoka.png')}}" height="40">
                                                                <p>NDUKA OBAIGBENA
                                                                    <span style="font-size:9px"><br>   (CEO, ARISE TV) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="buy-ticket-form mt-5">
                                         <h4>PROVIDERS AWARDS</h4>
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
                                                        <p>BEST GRC & FINANCIAL CRIME PREVENTION 
                                                            RECRUITMENT & TALENTS FIRM AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/Jobberman_lflvgb.png" height="40">
                                                                <p>JOBBERMAN</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ore.png')}}" height="40">
                                                                <p>ORE BOBOYE
                                                                    <span style="font-size:9px"><br>  (CEO, JOBBERMAN) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>BEST GRC & FINANCIAL CRIME PREVENTION 
                                                            SOLUTION PROVIDER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/download_hoagd7.png" height="40">
                                                                <p>YOUVERIFY </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/gbe.png')}}" height="40">
                                                                <p>GBENGA ODEGBAMI, 
                                                                    
                                                                    <span style="font-size:9px"><br>   (CEO,YOUVERIFY) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>BEST GRC & FINANCIAL CRIME PREVENTION 
                                                            ADVISORY SERVICE AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/KPMG_NoCP_RGB_280_puoee7.png" height="40">
                                                                <p>KPMG </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/yinka.png')}}" height="40">
                                                                <p>OLUMIDE OLAYINKA
                                                                   
                                                                    <span style="font-size:9px"><br> (PARTNER & HEAD, ADVISORY, KPMG) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>BEST GRC & FINCRIME PREVENTION TRAINING 
                                                            PROVIDER OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/Institute-of-Chartered-Accountants-of-Nigeria_lgpbxu.png" height="40">
                                                                <p>ICAN </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lanre.png')}}" height="40">
                                                                <p>MR. MUSIBAU LANRE 
                                                                    OLASUNKANMI
                                                                   
                                                                    <span style="font-size:9px"><br> (CEO, ICAN) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                 

                                        <div class="buy-ticket-form mt-5">
                                            <h4>LIFETIME ACHIEVEMENT AWARDS </h4>
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
                                                        <p>LIFETIME ACHIEVEMENT AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/Arise-News-Copy_v5rsvj.jpg" height="40">
                                                                <p>ARISE TV </p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/obi.png')}}" height="40">
                                                                <p>DR. OBY EZEKWESILI
                                                                    <span style="font-size:9px"><br> (ECONOMIC POLICY EXPERT) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>WOMEN GRC & FINANCIAL CRIME PREVENTION 
                                                AWARDS- WOMAN IN GOVERNANCE, RISK & 
                                                COMPLIANCE</h4>
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
                                                        <p>GRC WOMAN OF THE YEAR (FINANCIAL 
                                                            SECTOR / INDUSTRY) AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/Arise-News-Copy_v5rsvj.jpg" height="40">
                                                                <p>ARISE TV </p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ibk.png')}}" height="40">
                                                                <p>IBUKUN AWOSIKA
                                                                    
                                                                    <span style="font-size:9px"><br>   (FOUNDER / CEO THE CHAIR CENTRE GROUP) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>WOMAN IN FINANCIAL CRIME 
                                                            PREVENTION AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/wema.png')}}" height="40">
                                                                <p>WEMA BANK </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/toyin.png')}}" height="40">
                                                                <p>OLUWATOYIN 
                                                                    ADENIKE KARIEREN
                                                                   
                                                                    
                                                                    <span style="font-size:9px"><br>    (CHIEF COMPLIANCE 
                                                                        OFFICER, WEMA BANK) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - HEALTH SECTOR</h4>
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
                                                        <p>EXCELLENCE IN HEALTHCARE FINANCIAL CRIME 
                                                            PREVENTION EXCELLENCE AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lasuth.png')}}" height="40">
                                                                <p>LASUTH </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/faba.png')}}" height="40">
                                                                <p>PROF. A.O. FABANWO
                                                                    
                                                                    <span style="font-size:9px"><br>   (PROFESSOR OF OBSTETRICS 
                                                                        AND GYNAECOLOGY, LASUTH) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>EXCELLENCE IN HEALTH AND CARE INDUSTRY / 
                                                            SECTOR , GOVERNANCE, RISK, AND COMPLIANCE 
                                                            (GRC) AWARD</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/emzor_ko111u.png" height="40">
                                                                <p>EMZOR </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/stella.png')}}" height="40">
                                                                <p>DR. STELLA CHINYELU 
                                                                    OKOLI, OON, MON
                                                                  
                                                                    
                                                                    <span style="font-size:9px"><br>    (FOUNDER, EMZOR 
                                                                        PHARMACEUTICAL 
                                                                        INDUSTRIES) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - ENERGY/OIL & GAS</h4>
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
                                                        <p>EXCELLENCE IN ENERGY SECTOR , GOVERNANCE, 
                                                            RISK, AND COMPLIANCE (GRC) AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/chev_b934mm.png" height="40">
                                                                <p>CHEVRON NIGERIA </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/jim.png')}}" height="40">
                                                                <p>JIM SWARTZ
                                                                    
                                                                    <span style="font-size:9px"><br>   (MD, CHEVRON NIGERIA) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>EXCELLENCE IN ENERGY FINANCIAL CRIME 
                                                            PREVENTION EXCELLENCE AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/chev_b934mm.png" height="40">
                                                                <p>CHEVRON NIGERIA </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/jim.png')}}" height="40">
                                                                <p>JIM SWARTZ
                                                                    
                                                                    <span style="font-size:9px"><br>   (MD, CHEVRON NIGERIA) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - UTILITIES (TELECOMS, ISP)</h4>
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
                                                        <p>EXCELLENCE IN UTILITY SERVICE PROVIDERS -
                                                            FINANCIAL CRIME PREVENTION EXCELLENCE 
                                                            AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/mtn.png')}}" height="40">
                                                                <p>MTN </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/oby.png')}}" height="40">
                                                                <p>OBY UGBOMA
                                                                    
                                                                    <span style="font-size:9px"><br>   (RISK, COMPLIANCE AND 
                                                                        GOVERNANCE EXECUTIVE, 
                                                                        MTN NIGERIA) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>EXCELLENCE IN UTILITY SERVICE PROVIDERS ( 
                                                            TELCOS, ISP ETC) GOVERNANCE, RISK, AND 
                                                            COMPLIANCE (GRC) AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/mtn.png')}}" height="40">
                                                                <p>MTN </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/oby.png')}}" height="40">
                                                                <p>OBY UGBOMA
                                                                    
                                                                    <span style="font-size:9px"><br>   (RISK, COMPLIANCE AND 
                                                                        GOVERNANCE EXECUTIVE, 
                                                                        MTN NIGERIA) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - FG PARASTATALS</h4>
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
                                                        <p>EXCELLENCE IN PUBLIC SECTOR PARASTATALS 
                                                            GOVERNANCE, RISK, AND COMPLIANCE 
                                                            (GRC) AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/CBN-logo_fatjgm.jpg" height="40">
                                                                <p>CBN </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ije.png')}}" height="40">
                                                                <p>DR. BLAISE IJEBOR
                                                                   
                                                                    
                                                                    <span style="font-size:9px"><br>   (Director, Risk 
                                                                        Management, Cbn) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>EXCELLENCE IN PUBLIC SECTOR 
                                                            PARASTATALS FINANCIAL CRIME PREVENTION 
                                                            EXCELLENCE AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/CBN-logo_fatjgm.jpg" height="40">
                                                                <p>CBN </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ije.png')}}" height="40">
                                                                <p>DR. BLAISE IJEBOR
                                                                   
                                                                    
                                                                    <span style="font-size:9px"><br>   (Director, Risk 
                                                                        Management, Cbn) </span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - LEGAL & REAL ESTATE</h4>
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
                                                        <p>EXCELLENCE IN LEGAL AND REAL ESTATE INDUSTRY / 
                                                            SECTOR , GOVERNANCE RISK COMPLIANCE AND 
                                                            FINANCIAL CRIME PREVENTION AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/cropped-updc-plc_rdveaa.webp" height="40">
                                                                <p>UPDC PLC </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ngozi.png')}}" height="40">
                                                                <p>NGOZI IKEADIGH
                                                                   
                                                                    
                                                                    <span style="font-size:9px"><br>  (HEAD OF INTERNAL 
                                                                        CONTROL & COMPLIANCE, 
                                                                        UPDC PLC)</span>  </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>EXCELLENCE AWARDS - ESG INITIATIVE</h4>
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
                                                        <p>ESG INITIATIVE OF THE YEAR AWARDS</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/images_wu3y6o.png" height="40">
                                                                <p> DANGOTE CEMENT PLC </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/nike.png')}}" height="40">
                                                                <p>ADENIKE FAJEMIROKUN
                                                                    
                                                                    
                                                                    <span style="font-size:9px"><br>   (GROUP EXECUTIVE DIRECTOR / 
                                                                        GROUP CHIEF RISK OFFICER, 
                                                                        DANGOTE CEMENT PLC) </span>  </p>
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