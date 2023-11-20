<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @notifyCss
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/animate.min.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/fonts/icomoon/style.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/aos.css">
  <link rel="stylesheet" href="https://themewagon.github.io/learner/css/style.css">

  <title>Learner Free Bootstrap Template by Untree.co</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  @include('frontend.partials.header')

  <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Learning</h1>
                    <p class="lead fw-normal text-white-50 mb-0">EEEE</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">

            @include('notify::components.notify')
            @yield('content')
            

            </div>
        </section>
                



                    
      



 


 
           
  @include('frontend.partials.footer')       

   
   

    <script src="https://themewagon.github.io/learner/js/jquery-3.4.1.min.js"></script>
    <script src="https://themewagon.github.io/learner/js/popper.min.js"></script>
    <script src="https://themewagon.github.io/learner/js/bootstrap.min.js"></script>
    <script src="https://themewagon.github.io/learner/js/owl.carousel.min.js"></script>
    <script src="https://themewagon.github.io/learner/js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>
    @notifyJs


  </body>

  </html>
