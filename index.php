<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IBR Informática</title>
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
    <link rel="stylesheet" href="css/whats.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <SCRIPT language=JavaScript src="js/nav.js"></SCRIPT>
</head>

<body id="main">
    <?php require "html/whats.html" ?>
    <?php require "html/sidenav.html"?>
    <!-- navbar-->
    <header class="header">
        <div class="top-bar bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 bg-primary py-2 text-center text-lg-left">
                        <p class="mb-0 text-small"><i class="fas fa-clock mr-2"></i>Atendimento: Seg - Sab 8:00 - 21:00</p>
                    </div>
                    <div class="col-lg-8 text-right py-2 text-center text-lg-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-mobile mr-2"></i>(33) 3516-2598 | (33) 9118-0660</a></li>
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-envelope mr-2"></i>ibrcap@yahoo.com.br</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.svg" alt="" width="200"></a>
                <a class="navbar-brand" href="index.php"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets9.lottiefiles.com/packages/lf20_rkhhgeu9.json"  background="transparent"  speed="1"  style="width: 175px; height: 120px;"  loop  autoplay></lottie-player></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
                        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="sobre.php">Empresa</a></li>
                        <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contato.php">Contatos</a></li>
                        <li class="nav-item ml-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ferramentas</a>
                            <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item font-weight-bold text-small" href="https://fast.com" target="blank">Teste de velocidade</a><a class="dropdown-item font-weight-bold text-small" href="https://central.ibrinformatica.hubsoft.com.br/central/login" target="blank">Central do cliente</a><a class="dropdown-item font-weight-bold text-small" href="atendimento.php">Atendimento Online</a></div>
                        </li>
                        <li class="nav-item ml-lg-3 pl-lg-3"><a class="btn btn-outline-primary btn-sm" href="contato.php">Planos de Internet</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Hero Slider -->
    <section>
        <div class="owl-carousel owl-theme-default hero-slider owl-nav-custom">
            <!-- Hero Slide-->
            <div class="hero-slide bg-size bg-center py-5" style="background: url(img/banner01.jpg)">
                <div class="container text-white py-5 index-forward">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1>A internet que mais cresce na região</h1>
                            <p class="lead">A IBR informática é a empresa de conexão de internet que mais cresce em capelinha e região e 
conta com planos de fibra óptica que conectam você ao mundo com a mais alta velocidade.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="btn btn-primary" href="#">Planos</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Sobre a Empresa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide -->
            <div class="hero-slide bg-size bg-center py-5" style="background: url(img/banner02.jpg)">
                <div class="container text-white py-5 index-forward">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1>Planos para todos os gostos e usos</h1>
                            <p class="lead">Com os planos de fibra óptica da IBR informática você pode jogar sem aquele lag,
                                ver sua série sem travamentos e ter altas velocidades para bombar nas redes sociais. 
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="btn btn-primary" href="#">Planos de Fibra Óptica</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Contatos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide -->
            <div class="hero-slide bg-size bg-center py-5" style="background: url(img/banner03.jpg)">
                <div class="container text-white py-5 index-forward">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1>Mais estabilidade e velocidade para sua empresa</h1>
                            <p class="lead">Com a qualidade da infraestrutura das redes fornecidas pela IBR as empresas tem acesso a planos
                                personalizados, planejamentos para links dedicados, montagem de redes internas e alta velocidade de conexão.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="btn btn-primary" href="#">Planos e Serviços</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Atendimentos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide bg-size bg-center py-5" style="background: url(img/banner04.jpg)">
                <div class="container text-white py-5 index-forward">
                    <div class="row">
                        <div class="col-lg-7">
                            <h1>Manutenção de computadores</h1>
                            <p class="lead">Se seu computador esta travando ou tendo algum problema os melhores técnicos de informática da IBR podem
                                te ajudar nessa, com a manutenção e suporte completos em informática a solução dos seus problemas esta aqui.                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="btn btn-primary" href="#">Atendimentos Online</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light" href="#">Contatos e Endereço</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <p class="h6 mb-1 text-uppercase text-primary mb-3">Our main features</p>
                    <h2 class="mb-4">We Work With You To Address Your Most Critical Business Priorities</h2>
                    <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <ul class="list-check list-unstyled row px-3 mb-4">
                        <li class="text-small text-muted col-lg-6 mb-2">Acquire live chat enables sales</li>
                        <li class="text-small text-muted col-lg-6 mb-2">Learn from customer feedback</li>
                        <li class="text-small text-muted col-lg-6 mb-2">Engage - marketing automation</li>
                        <li class="text-small text-muted col-lg-6 mb-2">Support -customer support</li>
                        <li class="text-small text-muted col-lg-6 mb-2">Acquire live chat enables sales</li>
                        <li class="text-small text-muted col-lg-6 mb-2">Learn from customer feedback</li>
                    </ul>
                    <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">
                        <li class="list-inline-item pr-4 mr-0"><img src="img/about-sign.png" alt="" width="80"></li>
                        <li class="list-inline-item px-4 mr-0 border-left">
                            <h5 class="mb-0">Jack Foxx</h5>
                            <p class="small font-weight-normal text-muted mb-0">Chairnan and founder </p>
                        </li>
                        <li class="list-inline-item pl-4 border-left">
                            <h5 class="mb-0">+420 754 6545 6564</h5>
                            <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 ml-auto mb-4 mb-lg-0 order-1 order-lg-2">
                    <div class="p-2 border"><img class="img-fluid" src="img/about-img.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="py-5">
        <div class="container py-5 text-center">
            <header class="mb-5">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <p class="h6 text-uppercase text-primary mb-0">Our services</p>
                        <h2>We Creating Solutions For Your Organization</h2>
                    </div>
                </div>
            </header>
            <div class="row align-items-stretch">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#laptop-screen-1"> </use>
              </svg>
                        <h3 class="h5">Business Finance Strategy</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#quality-1"> </use>
              </svg>
                        <h3 class="h5">Portfolio &amp; Resource Allocation</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#survey-1"> </use>
              </svg>
                        <h3 class="h5">Organization &amp; Decision Process</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#pie-chart-1"> </use>
              </svg>
                        <h3 class="h5">Decision &amp; Risk Analytic</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#pay-1"> </use>
              </svg>
                        <h3 class="h5">Banking &amp; Capital Markets</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="px-4 py-5 border border-width-md border-dash h-100">
                        <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                <use xlink:href="#stack-1"> </use>
              </svg>
                        <h3 class="h5">Modern &amp; Tribe Workplace</h3>
                        <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section -->
    <section class="bg-cover bg-center" style="background: url(img/hero-banner-2.jpg)">
        <div class="primary-overlay py-5">
            <div class="overlay-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
                            <h2 class="text-white mb-2">You Always Get the Best Guidance</h2>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="col-lg-3 ml-auto text-center text-lg-right"><a class="btn btn-outline-light" href="#">Request a quote</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 px-lg-0">
                    <div class="bg-primary pr-lg-3"><img class="img-fluid w-100" src="img/feature-img.jpg" alt=""></div>
                </div>
                <div class="col-lg-7 px-lg-0">
                    <div class="p-4 p-md-5 shadow bg-white">
                        <p class="h6 mb-1 text-uppercase text-primary mb-3">Why choose us</p>
                        <h2 class="mb-5">We Provide Experts To Create A Great Value For Your Business</h2>
                        <div class="row">
                            <div class="col-lg-9">
                                <ol class="list-numbers mb-0">
                                    <li class="mb-4">
                                        <h5>We modify whole system</h5>
                                        <p class="text-small text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
                                    </li>
                                    <li class="mb-4">
                                        <h5>Safeguard for Your Business</h5>
                                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </li>
                                    <li class="mb-4">
                                        <h5>Beneficial Strategies</h5>
                                        <p class="text-small text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
                                    </li>
                                    <li>
                                        <h5>Build Solid Human Resource</h5>
                                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section -->
    <section class="bg-center bg-cover" style="background: url(img/hero-banner-3.jpg)">
        <div class="dark-overlay py-5">
            <div class="overlay-content text-white">
                <div class="container py-5">
                    <header class="text-center">
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <button class="video-btn mb-5" type="button" data-video-id="pwGiwY4UWjM"><i class="fas fa-play"></i></button>
                                <p class="h6 mb-1 text-uppercase text-primary mb-3">We make a difference</p>
                                <h2 class="h1 mb-5">The Best Solutions For Developing Your Business</h2><a class="btn btn-primary" href="#">View more services</a>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section-->
    <section class="py-5">
        <div class="container py-5">
            <p class="h6 mb-1 text-uppercase text-primary mb-3">Our clients say</p>
            <div class="row mb-5">
                <div class="col-lg-5">
                    <h2 class="mb-5">The Best Solutions For Developing Your Business</h2>
                </div>
                <div class="col-lg-7">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonial p-5 shadow-sm m-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-1.jpg" alt=""></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Rodel Colez</h5>
                            <p class="small text-muted mb-1">Businessman</p>
                            <ul class="small list-inline text-primary mb-0">
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="testimonial p-5 shadow-sm m-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-2.jpg" alt=""></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Mark Huff</h5>
                            <p class="small text-muted mb-1">Businessman</p>
                            <ul class="small list-inline text-primary mb-0">
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="testimonial p-5 shadow-sm m-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-1.jpg" alt=""></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Rodel Colez</h5>
                            <p class="small text-muted mb-1">Businessman</p>
                            <ul class="small list-inline text-primary mb-0">
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="testimonial p-5 shadow-sm m-2">
                    <div class="d-flex align-items-center mb-4">
                        <div class="testimonial-img"><img class="img-fluid rounded-circle" src="img/person-2.jpg" alt=""></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Mark Huff</h5>
                            <p class="small text-muted mb-1">Businessman</p>
                            <ul class="small list-inline text-primary mb-0">
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                                <li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </section>
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