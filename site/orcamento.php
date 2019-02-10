
<?php include "_funcao.php";

//if(isset($_POST['enviarOrcamento'])){
//echo $nomeOrc = $_POST['nomeOrc'];
//echo "<br>";
//echo $emailOrc = $_POST['emailOrc'];
//echo "<br>";
//echo $telefoneOrc = $_POST['telefoneOrc'];
//echo "<br>";
//echo $empresaOrc = $_POST['empresaOrc'];
//echo "<br>";
//echo $cepOrc = $_POST['cepOrc'];
//echo "<br>";
//echo $enderecoOrc = $_POST['enderecoOrc'];
//echo "<br>";
//echo $cidadeOrc = $_POST['cidadeOrc'];
//echo "<br>";
//echo $estadoOrc = $_POST['estadoOrc'];
//echo "<br>";
//echo $numeroOrc = $_POST['numeroOrc'];
//echo "<br>";
//echo $siteOrc = $_POST['siteOrc'];
//echo "<br>";
//echo $urgenciaOrc = $_POST['urgenciaOrc'];
//echo "<br>";
//echo $conheceuOrc = $_POST['conheceuOrc'];
//echo "<br>";
//echo $mensagemOrc = $_POST['mensagemOrc'];
//foreach($_POST["servico"] as $numero)
//    {
//        echo "<br>".$numero ;
//    }
//    
//}

if(isset($_POST["enviarOrcamento"])){
    
    if( enviarMensagemOrcamento($_POST)){
        
        echo 'teste';
    }else{
        echo 'teste1';
    }}
?>

<?php
require_once 'superior-paginas.php';
   ?>


    <main>




        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Orçamento</h3>
                    <p>CONTE-NOS SOBRE SEU PROJETO</p>
                </div>



                <div class="form">
                    
                    <form method="POST" class="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="nomeOrc" class="form-control" id="name" placeholder="Nome *" />

                            </div>


                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="emailOrc" id="email" placeholder="Email *" />

                            </div>





                            <div class="form-group col-md-6">
                                <input type="tel" name="telefoneOrc" class="form-control" id="telefoneOrc" placeholder="Telefone *" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"/>
                            </div>
                            
                            
                            
                            

                            <div class="form-group col-md-6">
                                <input type="text" name="empresaOrc" class="form-control" id="name" placeholder="Empresa *" />

                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="cepOrc"  class="form-control" id="cepOrc" placeholder="CEP *" />

                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="enderecoOrc" class="form-control" id="name" placeholder="Endereço *" />

                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" name="cidadeOrc" class="form-control" id="name" placeholder="Cidade *" />

                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" name="estadoOrc" class="form-control" id="name" placeholder="Estado *" />

                            </div>

                            <div class="form-group col-md-4">
                                <input type="text" name="numeroOrc" class="form-control" id="name" placeholder="Nº *" />

                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" name="siteOrc" class="form-control" id="name" placeholder="Já possui um site? Caso sim, informe o link aqui:" />

                            </div>


                            <div class="col-md-12 text-center">
                                <h3>
                                    Com quais serviços podemos ajudá-lo? *</h3>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group col-md-6 offset-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Criação de Site" name="servico[]">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Criação de Site
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Criação de E-commerce" name="servico[]">
                                        <label class="form-check-label">
                                            Criação de E-commerce
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Criação de LandingPage" name="servico[]">
                                        <label class="form-check-label">
                                            Criação de LandingPage
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Criação de Blog" name="servico[]">
                                        <label class="form-check-label">
                                            Criação de Blog
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Design de Impresso" name="servico[]">
                                        <label class="form-check-label" >
                                            Design de Impresso
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group col-md-6 offset-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Criação da Marca" name="servico[]">
                                        <label class="form-check-label" >
                                            Criação da Marca
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Redesign da Marca" name="servico[]">
                                        <label class="form-check-label" >
                                            Redesign da Marca
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Marketing Digital" name="servico[]">
                                        <label class="form-check-label" >
                                            Marketing Digital
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Redes Sociais" name="servico[]">
                                        <label class="form-check-label" >
                                            Redes Sociais
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Outros" name="servico[]">
                                        <label class="form-check-label" >
                                            Outros
                                        </label>
                                    </div>
                                </div>

                            </div>





                            <div class="form-group col-md-6">
                                <select id="inputState" name="urgenciaOrc" class="form-control">
                                    <option selected>Qual a urgência para a conclusão deste projeto? *</option>
                                    <option>Pouca</option>
                                    <option>Media</option>
                                    <option>Alta</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <select id="inputState" name="conheceuOrc" class="form-control">
                                    <option selected>Como nós conheceu *</option>
                                    <option>Google</option>
                                    <option>Facebook</option>
                                    <option>Instagram</option>
                                    <option>Amigos</option>
                                    <option>Outras</option>
                                </select>
                            </div>


                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="mensagemOrc" id="exampleFormControlTextarea1" rows="3" placeholder="Fale um pouco mais sobre os detalhes do seu projeto *"></textarea>
                            </div>

                        </div>

                        <div class="text-center"><button type="submit" name="enviarOrcamento">Enviar orçamento</button></div>
                    </form>
                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>

   <?php
   require_once 'inferior.php';
?>