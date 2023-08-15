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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
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
              <h2>contact</h2>
              <p>Home<span>/</span>contact</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="{{route('pages.contact.store')}}" method="post" id="contactForm"
            novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone'" placeholder='Enter Phone'>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="commentaire" id="commentaire" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter commentaire'"
                    placeholder='Enter commentaire'></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Berkane.Oriental</h3>
              <p>Center, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+212 645237890</h3>
              <p>lundi à mardi 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>pharmacy@gmail.com</h3>
              <p>Contacter nous</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required=""
                  type="email">
                <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
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

  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- swiper js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <!-- contact js -->
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/contact.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>
