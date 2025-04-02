<!DOCTYPE html>
<html lang="en">
@section('title', '2023 WINNERS')
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
            <h1 class="title">2023 WINNERS</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Winners for Governance Risk Compliance and Financial Crime Prevention Awards 2023</h4>
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
                                            <h4>Commercial Banks</h4>
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
                                                        <p>Internal Controller Awards</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/firstbank.png')}}" height="50">
                                                                <p>First Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                {{-- <img src="{{asset('/assets/firstbank.png')}}" height="50"> --}}
                                                                <p>Mrs. OMOLADE OLUYEMISI </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>GT Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/olumide.png')}}" height="50">
                                                                <p>Mr. Olumide Oguntuase</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/femi.png')}}" height="50">
                                                                <p>Femi Jaiyeola</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>MLRO</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/festus.png')}}" height="50">
                                                                <p>Festus  Aisagbonhi</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/sterling.jpg')}}" height="50">
                                                                <p>Sterling Bank</p>
                                                            </div>
                                                            {{-- <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/wema.png')}}" height="50">
                                                                <p>Wema Bank</p>
                                                            </div>
                                                            {{-- <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
                                                            </div> --}}
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/aiico.png')}}" height="40">
                                                                <p>AIICO Insurance </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/abiodon.png')}}" height="40">
                                                                <p>Abiodun Adebanjo </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/aiico.png')}}" height="40">
                                                                <p>AIICO Insurance </p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/nem.jpg')}}" height="40">
                                                                <p>NEM Insurance </p>
                                                            </div> --}}
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>

                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/C5603AQEqqafOofdzzQ/profile-displayphoto-shrink_800_800/0/1639671624853?e=1705536000&v=beta&t=W_Jv-Cbw9Q-2qCBj53ZrTwzrw8ioDYKcjKWQvGlUBbQ" height="40">
                                                                <p>  Griffith Ehebha </p>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/C4E03AQHuIrGnFJi8ow/profile-displayphoto-shrink_800_800/0/1622659376298?e=1705536000&v=beta&t=wY2AQnWdhAQO1SBiyiylREYvMV4sDHj4cMYX3i1n1Ws" height="40">
                                                                <p>Alexander Ude</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/kuda.png')}}" height="40">
                                                                <p>Kuda </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year   </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669091299/grcfincrimeawards/nominees/interswitch_logo_nowti2.svg" height="40">
                                                                <p>Interswitch</p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/kuda.png')}}" height="40">
                                                                <p>Kuda </p>
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/accion.png')}}" height="40">
                                                                <p>ACCION Microfinace Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/stev.png')}}" height="40">
                                                                <p>Stephen Olalere</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/vfd.jpeg')}}" height="40">
                                                                <p>VFD Microfinace Bank</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/C4D03AQHmPZj9ddnhJQ/profile-displayphoto-shrink_800_800/0/1539641662077?e=1705536000&v=beta&t=0Dz6UKSjlgmvRrOycjaWJH3PBSSKVVoibxcJLxahbYI" height="40">
                                                                <p>Morenike Ominike</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/accion.png')}}" height="40">
                                                                <p>ACCION Microfinace Bank</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ab.jpeg')}}" height="40">
                                                                <p>AB Microfinance Bank </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year   </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/accion.png')}}" height="40">
                                                                <p>ACCION Microfinace Bank</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/ab.jpeg')}}" height="40">
                                                                <p>AB Microfinance Bank</p>
                                                            </div> --}}
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>Assets Management</h4>
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/aico.png')}}" height="40">
                                                                <p>AIICO Capital </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/C4E03AQEg3FAoaIoQ3Q/profile-displayphoto-shrink_800_800/0/1516930720710?e=1705536000&v=beta&t=lepob3dAz_vjwZH_9zi6MeeazZY0qxfQtW8PqHAV-BU" height="40">
                                                                <p>Mayowa Ogunsola</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/axa.png')}}" height="40">
                                                                <p>AXA Mansard Investments </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                {{-- <img src="{{asset('/assets/slt.jpeg')}}" height="40"> --}}
                                                                <p>Oyedoyin Awoyinfa</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/chapel.png')}}" height="40">
                                                                <p>Chapel hill Denham </p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/slt.jpeg')}}" height="40">
                                                                <p>STL Trustees </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year   </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                             <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/slt.jpeg')}}" height="40">
                                                                <p>STL Trustees </p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/axa.png')}}" height="40">
                                                                <p>AXA Mansard Investments</p>
                                                            </div> --}}
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy-ticket-form mt-5">
                                            <h4>Pensions</h4>
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/crusada.png')}}" height="40">
                                                                <p>Crusader Sterling Pensions </p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Olusegun Atundaolu</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div>
                                                            <div class="col-12 col-md-6 mt-2">
                                                                {{-- <img src="{{asset('/assets/crusada.png')}}" height="40"> --}}
                                                                <p>Edidiong Akan </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lead.png')}}" height="40">
                                                                <p>Leadway Pensions  </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year   </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669114203/grcfincrimeawards/nominees/stanbic-ibtc-pension_v2atab.jpg" height="40">
                                                                <p>Stanbic IBTC Pension Managers Ltd</p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lead.png')}}" height="40">
                                                                <p>Leadway Pensions  </p>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buy-ticket-form mt-5">
                                            <h4>Providers</h4>
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
                                                        <p>Chief Risk Officer of the year award</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/verify.png')}}" height="40">
                                                                <p>You Verify </p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/dg.png')}}" height="40">
                                                                <p>Digital Jewel  </p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/joba.jpg')}}" height="40">
                                                                <p>Jobberman</p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/chiefs.jpg')}}" height="40">
                                                                <p>Philips Consulting</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year  </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/delpotte.jpg')}}" height="40">
                                                                <p>Delliotte </p>
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/kpmg.jpg')}}" height="40">
                                                                <p>KPMG</p>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>AML Employer of the Year   </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/e4.jpg')}}" height="40">
                                                                <p>E4 and AAF</p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/lagosn.jpg')}}" height="40">
                                                                <p>Lagos Business School </p>
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
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>

                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Visionary Awards</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669037027/grcfincrimeawards/nominees/images_lk8jhy.png" height="50">
                                                                <p>Guaranty Trust Bank</p>
                                                            </div> --}}
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669035960/grcfincrimeawards/nominees/access_cbxktx.png" height="50">
                                                                <p>Access Bank</p>
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
                                                                <img src="https://media.licdn.com/dms/image/C4D03AQGTc6LH4AUTVg/profile-displayphoto-shrink_400_400/0/1648735369903?e=1704931200&v=beta&t=GvSrdPqtJAroY5iZgkWMs0Z24la3h2a6gIAhozbSAhM" height="120">
                                                                <p>Dr Chinyere Almona </p>
                                                                
                                                            </div>
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/D4D03AQH805n6VnfYwA/profile-displayphoto-shrink_800_800/0/1679691420408?e=1704931200&v=beta&t=VXaOyRKKxqNt97Io8Q71n0-QC5aYXx5fRSGgZHd2Zk4" height="120">
                                                                <p>Ngozi Ikeadigh </p>
                                                                
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention Woman of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/D4E03AQFPwj6OIxPMyA/profile-displayphoto-shrink_800_800/0/1672529012169?e=1704931200&v=beta&t=kqqH-VQ0L0KYQAAQHQV4UVQrYVqmlDsXKcc02BpBtFw" height="120">
                                                                <p>Confidence Staveley</p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://media.licdn.com/dms/image/D4D03AQH81OXBR4oDbg/profile-displayphoto-shrink_400_400/0/1693233035269?e=1704931200&v=beta&t=SFENJ-9H7S9NqSD0YRNRDCCa17m1tlqB9i6Zswae0XQ" height="120">
                                                                <p>Nneka Onyeali-Ikpe</p>
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
                            <label class="accordion-label" for="category3-1">GRC & FINANCIAL CRIME PREVENTION PROMOTER AWARDS CATEGORY</label>
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
                                                        <p>GRC & Anti-financial Crime Reporter of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669128838/grcfincrimeawards/nominees/img_7896_ydpsmk.jpg" height="120">
                                                                <p>David Hundeyin</p>
                                                            </div> --}}
                                                                <div class="col-12 col-md-6 mt-2">
                                                                    <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669122793/grcfincrimeawards/nominees/Channels_TV_ln3fqb.jpg" height="40">
                                                                    <p>Channels TV</p>
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
                            <label class="accordion-label" for="category3-1">Non FI Awards </label>
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
                                                        <p>ESG Initiative Award </p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                    <div class=" row">
                                                            {{-- <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/bua.png')}}" height="120">
                                                                <p>BUA </p>
                                                            </div> --}}
                                                            <div class="col-12 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/mtn.png')}}" height="120">
                                                                <p>MTN Nigeria</p>
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
                                                        <h6>WINNER</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Governor of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 mt-2">
                                                                <img src="{{asset('/assets/olu.jpeg')}}" height="120">
                                                                <p>Lagos State Governor: Babajide Sanwo-Olu</p>
                                                            </div>
                                                            {{-- <div class="col-6 col-md-6 mt-2">
                                                                <img src="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1669132425/grcfincrimeawards/nominees/Oluseyi_Makinde_tmo6ak.png" height="120">
                                                                <p>Oyo State Governor: Seyi Makinde </p>
                                                            </div> --}}
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