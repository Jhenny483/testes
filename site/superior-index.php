<?php
require_once '../src/_conecta.php';
$con = PdoConexao::getInstancia();

if(isset($_POST['enviarNewsletter'])){
$emailNewsletter = $_POST['emailNewsletter'];
    
     
$mensagemNews = "Newsletter enviada com sucesso.";
        
        
        $msgNews ='<div class="alert alert-success alert-dismissible fade show mensagem" role="alert">
               <strong>';
        $msgNews .= $mensagemNews ;
                        
        $msgNews .= '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>';
        $sql = "insert into newsletter (emailNewsletter)values('$emailNewsletter')";
        $con->query($sql);
}else{
        $mensagem = "Erro ao enviar Newsletter.";
        $msg ='<div class="alert alert-danger alert-dismissible fade show mensagem" role="alert">
               <strong>';
        $msg .= $mensagem ;
                        
        $msg .= '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>';
    }


?>

<!--      MENSAGEM DE SUCESSO E DE ERRO AO ENVIAR MENSAGEM         -->

<?php
    if(isset($mensagemNews)){
        echo $msgNews;
    }
    ?>
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="css/style-site.css" rel="stylesheet">


</head>
<style>
    .top .logo img {
        width: 200px;
    }
    
    #header .logo img {
        width: 150px;
    }

</style>

<body>
    <?php include "_funcao.php";?>
    <?php
if(isset($_POST["enviar"])){
    
    if( enviarMensagem($_POST)){
        $mensagem = "Mensagem enviada com sucesso.";
        
        
        $msg ='<div class="alert alert-success alert-dismissible fade show mensagem" role="alert">
               <strong>';
        $msg .= $mensagem ;
                        
        $msg .= '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>';
        
        
    }else{
        $mensagem = "Erro no envio.";
        $msg ='<div class="alert alert-danger alert-dismissible fade show mensagem" role="alert">
               <strong>';
        $msg .= $mensagem ;
                        
        $msg .= '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>';
    }
}


?>
    <style>
        .top {
            /*          background: red;*/
            background: rgba(255, 255, 255, 0)!important;
            position: relative;
            z-index: 999;
            top: 50px;
            width: 100%;
            text-align: center;
        }
        
        .top h1 {
            margin: 0 auto;
        }
        
        body {
            top: 0;
        }
        
        .intro-container {
            position: relative;
            margin-top: -70px;
        }

    </style>

    <!-- #header -->
    <?php
require_once 'banners.php';
   ?>
    <!-- #intro -->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="logo pull-left">
                <h1>
                    <a href="#intro" class="scrollto">
                        <span class="logoB">
                            <img src="img/logo.png">
                        </span>

                        <span class="logoP">
                            <img src="img/logo.png">
                        </span>
                    </a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#sobre">Quem somos </a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#portfolio">Portfólio</a></li>
                    <li><a href="#time">Time</a></li>
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
                    <li><a href="orcamento.php">Peça seu orçamento</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->