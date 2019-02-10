<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JeDi Web corp</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    
</head>
<style>
    .logo img{
        width: 160px;
    }
    </style>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="logo pull-left">
                <h1><a href="#intro" class="scrollto"><img src="img/logo.jpg"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">Quem somos </a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Time</a></li>
<!--
                    <li class="menu-has-children"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
-->
                    <li><a href="#contact">Contato</a></li>
                    <li><a href="">Peça seu orçamento</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->



    <main id="main">

  

        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action " class="wow fadeIn fundo-1">
            <div class="container text-center">
                <header class="section-header">
                    <h3 class="section-title">Portfolio</h3>
                </header>
               
            </div>
        </section><!-- #call-to-action -->

   

         <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Portfolio</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-web">DESENVOLVIMENTO WEB</li>
                            <li data-filter=".filter-digital">MARKETING DIGITAL</li>
                            <li data-filter=".filter-visual">IDENTIDADE VISUAL</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
                        <div class="portfolio-wrap">
                            <style>
                                .lb-details{
                        background: red;
                    }
                </style>
                            <figure>
                                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">

                                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>


                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-1"><i class="ion ion-android-open"></i></a>
                            </figure>



                            <div class="portfolio-info">

                                <h4><a href="#">www.godoytornearia.com.br</a></h4>
                                <p>Site</p>

                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="portfolio-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">DESENVOLVIMENTO WEB <br> NOME DO PROJETO</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                           <a href="">link.do.site</a> </p>
                                           <p>
                                           Categoria: DESENVOLVIMENTO WEB <br>
                                           Data: 00/00/0000
                                           </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">SAIR</button>
<!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-digital wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                                
                                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                                
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-2"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                            </div>
                                <!-- Modal -->
                            <div class="modal fade" id="portfolio-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">MARKETING DIGITAL <br> NOME DO PROJETO 2</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                           <a href="">link.do.site</a> </p>
                                           <p>
                                           Categoria: MARKETING DIGITAL <br>
                                           Data: 00/00/0000
                                           </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">SAIR</button>
<!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                               <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                            </div>
                             <!-- Modal -->
                            <div class="modal fade" id="portfolio-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">IDENTIDADE VISUAL <br> NOME DO PROJETO 3</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                           <a href="">link.do.site</a> </p>
                                           <p>
                                           Categoria: IDENTIDADE VISUAL <br>
                                           Data: 00/00/0000
                                           </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">SAIR</button>
<!--                                            <button type="button" class="btn btn-primary">Save changes</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  





                </div>
<!--                        <div class="botao-servicos"><a href="portfolio.html" class="btn-get-started ">ver mais</a></div>-->
            </div>
        </section><!-- #portfolio -->


   



    </main>

    <?php
   require_once 'inferior.php';
?>