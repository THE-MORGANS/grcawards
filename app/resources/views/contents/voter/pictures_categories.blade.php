<!DOCTYPE html>
<html lang="en">
@section('title', 'Pictures')

<head>
    @include('partials.voter.head')
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
</head>

<body id="conference-page">
    <!-- =============== PRELOADER =============== -->
    {{-- @include('partials.voter.preloader') --}}
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
                    <li>Media</li>
                </ul>
            </div>
            <h3 class="title">Media</h3>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Picture Gallery</h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($award_programs as $award_program)
                       
                        <div class="col-12 col-md-6">
                            <div class="conference-news-slide wow fadeInUp" data-wow-duration=".35s" data-wow-delay=".4s">
					            <div class="conference-news-item" style="box-shadow: 0px 0px 15px rgba(0,0,0,0.05);">
						            <div class="conference-post-thumbnail">
							            <a href="{{route('show_pictures', ['award_program'=> $award_program->hashid])}}"><img src="{{$award_program->random_gallery->path}}" alt="img"></a>
						            </div>
						            <div class="conference-post-content">
							            <h4><a href="{{route('show_pictures', ['award_program'=> $award_program->hashid])}}">{{$award_program->year}}</a></h4>
						            </div>
						        </div>
					        </div>
                        </div>
                        @endforeach
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
    <!-- <script src="{{asset('assets/js/modal.js')}}"></script> -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>


</body>

</html>