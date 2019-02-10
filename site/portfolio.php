<?php require_once 'superior-paginas.php';?>


        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Portifólio</h3>
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
                            <!--
                            <style>
                                .lb-details {
                                    background: red;
                                }

                            </style>
-->
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
                                                Categoria: DESENVOLVIMENTO WEB <br> Data: 00/00/0000
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
                                <img src="img/portfolio/alecrimEcanela.jpg" class="img-fluid" alt="">

                                <a href="img/portfolio/alecrimEcanela.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>

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
                                                Categoria: MARKETING DIGITAL <br> Data: 00/00/0000
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
                                <img src="img/portfolio/alecrimEcanela-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/alecrimEcanela-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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
                                <img src="img/portfolio/photosDavisonSilva-cartao.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/photosDavisonSilva-cartao.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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
                                <img src="img/portfolio/koisaDePaty-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/koisaDePaty-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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
                                <img src="img/portfolio/shawarmas-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/shawarmas-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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










                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/alecrimEcanela.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/alecrimEcanela.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Cartão de Visita - Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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
                                <img src="img/portfolio/atelieDeCostura.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/atelieDeCostura.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Atelie De Costura</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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


                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/cadaDaArte-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/cadaDaArte-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - Casa da arte</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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




                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/kEkBrigadeirosGourmet-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/kEkBrigadeirosGourmet-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - K & K Brigadeiros Gourmet</p>
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
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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






                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/ilearn-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/ilearn-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - iLearn</p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="portfolio-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">IDENTIDADE VISUAL <br> iLearn</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                                <a href="">link.do.site</a> </p>
                                            <p>
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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







                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/webPorti-logo.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/webPorti-logo.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - iLearn</p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="portfolio-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">IDENTIDADE VISUAL <br> iLearn</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                                <a href="">link.do.site</a> </p>
                                            <p>
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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




                    <div class="col-lg-4 col-md-6 portfolio-item filter-visual wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="img/portfolio/webPorti-cartao.jpg" class="img-fluid" alt="">
                                <a href="img/portfolio/webPorti-cartao.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#portfolio-3"><i class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">IDENTIDADE VISUAL</a></h4>
                                <p>Logo - iLearn</p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="portfolio-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">IDENTIDADE VISUAL <br> iLearn</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ratione, a dolorum voluptates dignissimos quos sint illo. Vitae amet eveniet, ipsa ullam voluptatum nisi aut! Nihil, et ipsam totam tenetur! <br>
                                                <a href="">link.do.site</a> </p>
                                            <p>
                                                Categoria: IDENTIDADE VISUAL <br> Data: 00/00/0000
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
                <div class="botao-servicos"><a href="portfolio.php" class="btn-get-started ">ver mais</a></div>
            </div>
        </section>
        <!-- #portfolio -->



<?php require_once 'inferior.php';?>