<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cirebon Dev</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="public/template/img/icon.jpeg" rel="icon">
  <link href="public/template/img/icon.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('/public/template/lib/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('/public/template/lib/nivo-slider/css/nivo-slider.css')  }}" rel="stylesheet">
  <link href="{{ url('/public/template/lib/owlcarousel/owl.carousel.css')  }}" rel="stylesheet">
  <link href="{{ url('/public/template/lib/owlcarousel/owl.transitions.css')  }}" rel="stylesheet">
  <link href="{{ url('/public/template/lib/font-awesome/css/font-awesome.min.css')  }}" rel="stylesheet">
  <link href="{{ url('/public/template/lib/animate/animate.min.css')  }}" rel="stylesheet">
  <link href="{{ url('/public/template/lib/venobox/venobox.css')  }}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{ url('/public/template/css/nivo-slider-theme.css')  }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('/public/template/css/style.css')  }}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ url('/public/template/css/responsive.css')  }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  @include('Web/header')
  <!-- header end -->

  <!-- Start Slider Area -->
  @include('Web/slide')
  <!-- End Slider Area -->

  <!-- Start About area -->
  @include('Web/about')
  <!-- End About area -->

  <!-- Start Service area -->
  @include('Web/service')
  <!-- End Service area -->

  <!-- our-skill-area start -->
  @include('Web/skill')
  <!-- our-skill-area end -->

  <!-- Faq area start -->
  @include('Web/faq_area')
  <!-- End Faq Area -->

  <!-- Start Wellcome Area -->
  @include('Web/welcome_area')
  <!-- End Wellcome Area -->

  <!-- Start team Area -->
  <!-- @include('Web/team') -->
  <!-- End Team Area -->

  <!-- Start reviews Area -->
  @include('Web/riview')
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  @include('Web/portofolio')
  <!-- awesome-portfolio end -->
 
  <!-- Start Suscrive Area -->
  @include('Web/suscrive')
  <!-- End Suscrive Area -->

  <!-- Start contact Area -->
  @include('Web/contact')
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  @include('Web/footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ url('/public/template/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/knob/jquery.knob.js') }}"></script>
  <script src="{{ url('/public/template/lib/wow/wow.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/parallax/parallax.js') }}"></script>
  <script src="{{ url('/public/template/lib/easing/easing.min.js') }}"></script>
  <script src="{{ url('/public/template/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ url('/public/template/lib/appear/jquery.appear.js') }}"></script>
  <script src="{{ url('/public/template/lib/isotope/isotope.pkgd.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ url('/public/template/contactform/contactform.js') }}"></script>

  <script src="{{ url('/public/template/js/main.js') }}"></script>
</body>

</html>
