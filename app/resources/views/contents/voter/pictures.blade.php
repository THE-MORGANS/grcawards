<!DOCTYPE html>
<html lang="en">
@section('title', $award_program->year == '2023'? '2022':$award_program->year.'Pictures')

<head>
    @include('partials.voter.head')
    <link href="{{asset('assets/css/model-new.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/vendor/slick/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/vendor/slick/slick-theme.css')}}" rel="stylesheet" />


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
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('landing.index')}}">Home</a></li>
                    <li><a href="{{route('show_pictures_categories')}}">Pictures</a></li>
                    <li>{{$award_program->year}}</li>
                </ul>
            </div>
            <h3 class="title">{{$award_program->year}} Pictures</h3>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Gallery</h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($award_program->gallery as $gallery)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="instagram-cover">
                                <a href="{{$gallery->path}}" data-name="imageView-click" class="instagram-item p-0" style="width: 100% !important; height:150px !important;" data-id="{{$loop->iteration}}">
                                    <img class="rx-lazy rx-lazy_hidden rx-lazy_item" loading="lazy" src="{{$gallery->path}}" data-src="{{$gallery->path}}" alt="img">
                                    <!-- <ul> -->
					                    <!-- <li class="comments">234 <i class="far fa-comment"></i></li> -->
					                    <!-- <li class="like">134 <i class="far fa-heart"></i></li> -->
				                    <!-- </ul> -->
                                </a>
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
    <div class="modal fade" id="imageView" tabindex="-1" aria-labelledby="imageView" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="background:none">
                <div class="modal-header border-0" style="background:none">
                    <h6 class="modal-title m-0" id=""></h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slicker" style="width:80vw">
                                @foreach($award_program->gallery as $gallery)
                                <div>
                                    <img src="{{$gallery->path}}" alt="{{$award_program->year}} Pictures" class="img-fluid" style="width:100%" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>

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
    <script src="{{asset('assets/css/vendor/slick/slick.min.js')}}"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.4.0.min.js" integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript">
    $(document).ready(function(){
        var imageId;
        $('a[data-name="imageView-click"]').on('click', ()=>{
          imageId = $(this).attr('data-id');
          $('#imageView').modal('show');
          console.log(imageId);
        });


      $('.slicker').slick({
        // initialSlide:imageId,
        dots: false,
        infinite:true,
        speed: 300,
        slidesToShow:1,
        adaptiveHeight:true,
        fade:true,
        cssEase:'linear',
        arrows:true,

        
      });

    });

    
  </script>

</body>

</html>