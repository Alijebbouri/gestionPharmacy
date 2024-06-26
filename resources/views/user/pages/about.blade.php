<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>medical</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"> <img src="{{asset('img/logo.png')}}" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-end"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('pages/about')}}">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('pages/contact')}}">Contact</a>
                                    </li>
                                    @if (Route::has('login'))
                    @auth
                        @if(Auth::user()->role === '1')
                            <li class="nav-item ">
                                <a href="{{ url('/redirect') }}" class="nav-link">Dashboard</a>
                            </li>
                            @else
                                            <li class="nav-item">
                                                <a href="{{ url('/redirect') }}" class="nav-link">Voir Products</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                        </li>
                                        <li class="nav-item">
                                             @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                                            @endif
                                        </li>
                    @endauth
                @endif
                                    <li class="d-none d-lg-block">
                                        <a class="btn_1" href="#">learn more</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>About Us</h2>
                            <p>Home<span>/</span>About Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- our_ability part start-->
    <section class="our_ability section_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="our_ability_img">
                        <img src="{{asset('img/ability_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="our_ability_member_text">
                        <h2>Our Patients
                            Are at the Centre of
                            Everything We Do</h2>
                        <p>Kind lesser bring said midst they're created signs made the beginni years
                            created Beast upon whales herb seas evening she'd day green dominion
                            evening in moved have fifth in won't in darkness fruitful god behold
                            whos without bring created creature.</p>
                        <ul>
                            <li><span class="ti-mouse"></span>Modern Technology</li>
                            <li><span class="ti-heart-broken"></span>Worldclass Facilities</li>
                            <li><span class="ti-package"></span>Experienced Nurse</li>
                            <li><span class="ti-headphone-alt"></span>24 Hours Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_ability part end-->

    <!--::review_part start::-->
    <section class="review_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="{{asset('img/Quote.png')}}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{asset('img/Quote.png')}}" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{asset('img/Quote.png')}}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{asset('img/Quote.png')}}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part padding_bottom">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7 col-md-6">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Select service</option>
                                        <option value="2">Name of service</option>
                                        <option value="3">Name of service</option>
                                        <option value="4">Name of service</option>
                                        <option value="5">Name of service</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="regerv_btn_iner">Make an Appointment</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="{{asset('img/reservation.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>View Our History</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Services Link</h4>
                        <ul>
                            <li><a href="#">Eye treatment</a></li>
                            <li><a href="#">Skin Surgery</a></li>
                            <li><a href="#">Diagnosis clinic</a></li>
                            <li><a href="#"> Dental care</a></li>
                            <li><a href="#">Neurology service</a></li>
                            <li><a href="#">Plastic surgery</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Department</a></li>
                            <li><a href="#"> Online payment</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="#">In the community</a></li>
                            <li><a href="#">IU health foundation</a></li>
                            <li><a href="#">Family support </a></li>
                            <li><a href="#">Business solution</a></li>
                            <li><a href="#">Community clinic</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Lights were season</a></li>
                            <li><a href="#"> Their is let wherein</a></li>
                            <li><a href="#">which given over</a></li>
                            <li><a href="#">Without given She</a></li>
                            <li><a href="#">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{asset('user/js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('user/js/popper.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('user/js/swiper.min.js')}}"></script>
    <script src="{{asset('user/js/masonry.pkgd.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/slick.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('user/js/waypoints.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.form.js')}}"></script>
    <script src="{{asset('user/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/js/mail-script.js')}}"></script>
    <script src="{{asset('user/js/contact.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>
</body>

</html>
