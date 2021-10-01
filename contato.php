<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consultive | Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <!-- Modal Video-->
    <link rel="stylesheet" href="vendor/modal-video/css/modal-video.min.css">
    <!-- Leaflet-->
    <link rel="stylesheet" href="vendor/leaflet/leaflet.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <div class="top-bar bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 bg-primary py-2 text-center text-lg-left">
              <p class="mb-0 text-small"><i class="fas fa-clock mr-2"></i>Opening hours: Mon - Sat 9:00 - 18:00</p>
            </div>
            <div class="col-lg-8 text-right py-2 text-center text-lg-right">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-mobile mr-2"></i>+535 421 895 6523</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-envelope mr-2"></i>Construction@example.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="img/logo.svg" alt="" width="200"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="index.html">Home </a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.html">About</a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contact.html">Contact</a></li>
              <li class="nav-item ml-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item font-weight-bold text-small" href="index.html">Home</a><a class="dropdown-item font-weight-bold text-small" href="about.html">About</a><a class="dropdown-item font-weight-bold text-small" href="contact.html">Contact                </a></div>
              </li>
              <li class="nav-item ml-lg-3 pl-lg-3"><a class="btn btn-outline-primary btn-sm" href="contact.html">Request a quote</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->
    <section class="hero bg-cover bg-position py-4" style="background: url(img/hero-banner-3.jpg)">
      <div class="container py-5 index-forward text-white">
        <h1>Contact Us</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-none mb-0 p-0">
            <li class="breadcrumb-item pl-0"><a href="index.html"> <i class="fas fa-home mr-2"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="py-5 shadow-sm index-forward">
      <div class="container py-5">
        <header>
          <h2>Request a <span class="text-primary">Call </span>Back</h2>
          <p class="mb-5 text-muted">Nanotechnology immersion along the information highway will close the loop on focusing</p>
        </header>
        <div class="row">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="pt-1 bg-primary">
              <div class="p-4 p-lg-5 bg-white shadow-sm">
                <form action="#">
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <input class="form-control" type="text" name="firstname" placeholder="First name">
                    </div>
                    <div class="form-group col-lg-6">
                      <input class="form-control" type="text" name="lastname" placeholder="Last name">
                    </div>
                    <div class="form-group col-lg-6">
                      <input class="form-control" type="tel" name="phone" placeholder="Phone number">
                    </div>
                    <div class="form-group col-lg-6">
                      <input class="form-control" type="text" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group col-lg-12">
                      <input class="form-control" type="email" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group col-lg-12">
                      <textarea class="form-control" name="message" rows="5" placeholder="Leave your message"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <button class="btn btn-outline-primary" type="submit">Submit now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h3>Have a quesion?</h3>
            <p class="text-muted mb-5">If you got any questions please do not hesitate to send us a message.</p>
            <ul class="list-unstyled">
              <li class="d-flex mb-3">
                <div class="icon bg-primary"><i class="fas fa-map-marker-alt text-white fa-fw"></i></div>
                <div class="ml-3">
                  <h5 class="mb-0">Address</h5>
                  <p class="text-muted text-small">1798 Pretty View Lane, California</p>
                </div>
              </li>
              <li class="d-flex mb-3">
                <div class="icon bg-primary"><i class="fas fa-envelope text-white fa-fw"></i></div>
                <div class="ml-3">
                  <h5 class="mb-0">Email</h5>
                  <p class="text-muted text-small">Construction@example.com</p>
                </div>
              </li>
              <li class="d-flex mb-3">
                <div class="icon bg-primary"><i class="fas fa-mobile text-white fa-fw"></i></div>
                <div class="ml-3">
                  <h5 class="mb-0">Phone</h5>
                  <p class="text-muted text-small">+535 421 895 6523</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section -->
    <section class="gmap" id="map"></section>
    <footer class="bg-dark">
      <div class="bg-primary py-5 text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">705</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Projects completed</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">809</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Satisfied customers</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">354</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Awards recieved</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
              <div class="d-flex align-items-center">
                <h6 class="h1 mb-0">35</h6>
                <p class="ml-3 flex-grow-1 text-uppercase mb-0">Years of experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-dark py-5 text-white">
        <div class="container">
          <div class="row py-5">
            <div class="col-lg-4 col-md-6"><img class="mb-4" src="img/logo-white.svg" alt="" width="200">
              <p class="text-muted text-small mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <p class="mb-1"><i class="fas fa-envelope mr-3 text-primary fa-fw"></i><span class="text-small text-muted">Construction@example.com</span></p>
              <p class="mb-1"><i class="fas fa-mobile mr-3 text-primary fa-fw"></i><span class="text-small text-muted">+535 421 895 6523</span></p>
              <p class="mb-1"><i class="fas fa-map-marker-alt mr-3 text-primary fa-fw"></i><span class="text-small text-muted">1798 Pretty View Lane, California</span></p>
            </div>
            <div class="col-lg-2 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Quick links</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="#">Home</a></li>
                <li class="mb-2"><a class="footer-link" href="#">About</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contacts</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Pages</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Our services</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="footer-link" href="#">Make Appointment</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Customer Services</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Department Service</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Our Case Studies</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Free Consultation</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Meet Our Experts</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6">
              <h5 class="mt-3 mb-4 font-weight-normal">Latest news</h5>
              <ul class="list-unstyled mb-0">
                <li class="d-flex mb-4">
                  <div class="pr-2"><img src="img/blog-thumb-1.jpg" alt="" width="60"></div>
                  <div class="ml-3">
                    <p class="small text-muted mb-0">May 01, 2019 </p>
                    <h6 class="text-light font-weight-normal mb-0">Successful Growth In Business 2018</h6><a class="reset-anchor text-primary text-small" href="#">Read more<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="pr-2"><img src="img/blog-thumb-2.jpg" alt="" width="60"></div>
                  <div class="ml-3">
                    <p class="small text-muted mb-0">May 01, 2019 </p>
                    <h6 class="text-light font-weight-normal mb-0">Successful Growth In Business 2018</h6><a class="reset-anchor text-primary text-small" href="#">Read more<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-darker py-4">
        <div class="container text-center">
          <!-- You are completely free to use this template for your personal use or as a work for your client as long as you keep the link at the template footer pointing to our partner and us.-->
          <!-- If you would prefer removing the backlink from the theme footer, please purchase the attribution-free license at the theme page at https://bootstraptemple.com.-->
          <p class="mb-0 text-muted text-small">&copy; All rights reserved. Template designed by <a href="https://bootstraptemple.com/p/consulting-bootstrap-template">Bootstrap Temple</a>. </p>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/modal-video/js/modal-video.js"></script>
    <script src="vendor/leaflet/leaflet.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>