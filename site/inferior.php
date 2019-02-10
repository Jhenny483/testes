<!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>JeDi Web Corp</h3>
                        <p>A JeDi Web Corp é uma empresa especializada em desenvolver soluções web criativas. Nosso foco é o designer gráfico, desenvolvimento web e marketing digital. Criamos a JeDi no intuito de atender nossos clientes desde a criação de sua marca até serem devidamente conhecidos no mercado.  </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#home">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#sobre">Quem somos</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#servicos">Serviços</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#portfolio">Portfólio</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#time">Time</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="index.php#contato">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contato</h4>
                        <p>

                            <strong>WhatsApp:</strong> (11) 9 9999-9999<br>
                            <strong>Email:</strong> contato@jediweb.com.br<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/jediweb17/" target="_blank" class="facebook">

                                <!--                            <i class="fa fa-facebook"></i>-->
                                <i class="fab fa-facebook-f"></i>

                            </a>
                            <a href="https://www.instagram.com/jediweb_corp/" target="_blank" class="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>

                            <!--                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>-->
                            <a href="#" class="linkedin">

                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://br.pinterest.com/jediwebcorp/" target="_blank" class="linkedin">
                                <i class="fab fa-pinterest">

                                </i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="emailNewsletter"><input type="submit" value="Subscribe" name="enviarNewsletter">
                        </form>
                    </div>

                </div>
            </div>
        </div>



        
        <div class="container">
            <div class="copyright">
                &copy; Copyright 2019 <strong> JeDi WEB CORP </strong>. Todos os direitos reservados
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    
    
   
    
    
     <script src="lib/mask-jquery/jquery.mask.min.js"></script>
     
     

     
     
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    
    
<!--
    <script>
    var cep = "05187510";
    $.ajax({

        type: "GET",
        url: "http://viacep.com.br/ws/" + cep + "/json",
        async: false
    }).done(function(data) {
        console.log(data);
    }).fail(function(){
        console.log("erro");
    });

</script>
    
-->
   
  <script>
$('#cepOrc').blur(function(e){
    var cep=$('#cepOrc').val();
    
    var url='http://viacep.com.br/ws/' + cep + "/json/";
    
    var validaCEP=/^[0-9]{5}-?[0-9]{3}$/;
    
    if(validaCEP.test(cep)){
        $("#mensagem").hide();
       pesquisarCEP(url); 
    }else{
        $("#mensagem").show();
        $('#mensagem p').html('CEP inválido');
    }
    
    
    
    
    console.log(cep);
//    console.log('saiu');

});
      function pesquisarCEP(endereco){
          $.ajax({
              type: "GET",
              url:endereco,
              async:false
          }).done(function(data){
              $('#enderecoOrc').val(data.logradouro);
              $('#bairroOrc').val(data.bairro);
              $('#cidadeOrc').val(data.localidade);
              $('#estadoOrc').val(data.uf);
          }).fail(function(){
        console.log("erro");
          })
      };
</script> 
   
   
   
   
   
   
   
   
   
    
    
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
   
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>
    
    <script>
        $("#telefoneOrc").mask("(00) 0000-00009");
        $("#cepOrc").mask("00000-000");
    </script>
    
    
    

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>
