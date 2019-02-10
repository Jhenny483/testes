<?php
           include 'superior.php';
?>
             <?php
           include '../src/_conecta.php';

setlocale(LC_ALL, 'pt_BR');
?>

       
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Library List</h4>
                            <div class="add-product">
                                <a href="#">Add Library</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>Imagem</th>
                                        <th>Nome do produto</th>
                                        <th>Status</th>
                                        <th>Sub-Categoria</th>
                                        <th>Categoria</th>
                                        <th>Tipo</th>
                                        <th>Preço</th>
                                        <th>Configurações</th>
                                    </tr>
                                     <?php
                        $consulta_produtos = "SELECT * FROM produto ";
                        $produtos = mysqli_query($conecta,$consulta_produtos);
                        
                        if(!$produtos){die("Falana consulta ao banco");}
                        ?>
              
              
              <?php 
                while ($registro = mysqli_fetch_assoc($produtos)){
                    
                    ?>
                                    
                                    <tr>
                                        <td><?php echo $registro["idProduto"];?></td>
                                        <td><img src="../loja/img/produtos/<?php echo $registro["fotoProduto1"];?>" alt="" /></td>
                                        <td><?php echo $registro["nomeProduto"];?></td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>Html, Css</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        <td>$1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"><a href="edit-library-assets.php?codigo_produto_editar=<?php echo $registro["idProduto"];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                            <button data-toggle="tooltip" title="Deletar" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    
                                    <?php
                }?>
                                                                       
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>