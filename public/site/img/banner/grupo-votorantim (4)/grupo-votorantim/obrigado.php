<?php
   session_start();
   error_reporting(0);
ini_set(“display_errors”, 0 );

   if(!isset($_SESSION["email"])){
    echo '<script type="text/javascript">
    window.location="index.html";
  </script>';
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Instituto Votorantim</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icons/icone.png">
    
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&Raleway:300,400,500,600,700,800,900">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- custom style -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body class="cont">

<div class="main-content"> 

<section class="overview-block-ptb iq-how-it-work sera-selecao" style=" width: 100%; height:990px; background-position: right; background-image: url(images/banner/selecao.jpg); background-repeat:no-repeat; background-size: 100% 100%">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <h2 class="msg-obrigado">OBRIGADO PELA <br> SUA MENSAGEM</h2>
                        <h3 class="desc-selecao">
                       Em breve você receberá <br> a nossa resposta.
                        </h3>
             <br><br>
                        <div class="col-sm-4">
                    <div class="heading-title  espaco-bottom">
                        <form action="index.html">
                        <button class="button-down">
                            <strong> Voltar ao Site </strong>
                        </button>
                    </form>
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
            <h2 class="votorantim" style="margin-top:0px;">Juntos</h2>
                   <h2 class="corona">#todoscontraocoronavirus</h2>
                   <img src="images/logo-votorantim.png" alt="" class="logo-votorantim-inscricao obrigado">
        </div>
    </section>
    <section class="overview-block-ptb" style="padding-bottom: 20px!important; padding-top: 50px!important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <div class="heading-title">
                       <h1 class="realizacao">Realização:</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="heading-title">
                        <img src="images/logov2.png" alt="" class="logo-v2">
                    </div>
                </div>
            </div>
            <div class="divisao-black"></div>
        </div>
    </section> 
    <section class="overview-block-ptb iq-about-1">
        <div class="container">
            <div class="row">
                <h5 class="apoio"> <strong> Apoio: </strong> </h5>
                <div class="col-sm-1">
                   
                </div>
                <div class="col-sm-2">
                    <img class="empresa img-responsive" src="images/empresas/1.png" alt="#">
                </div>
                <div class="col-sm-2">
                    <img class="empresa" src="images/empresas/2.png" alt="#">
                </div>
                <div class="col-sm-2">
                    <img class="empresa" src="images/empresas/3.png" alt="#">
                </div>
                <div class="col-sm-2">
                    <img class="empresa" src="images/empresas/4.png" alt="#">
                </div>
                <div class="col-sm-2">
                    <img class="empresa logo-5" src="images/empresas/5.png" alt="#">
                </div>
            </div>
            <div class="row top-40">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <img class="empresa img-responsive" src="images/empresas/6.png" alt="#">
                </div>
                <div class="col-sm-2">
                    <img class="empresa img-responsive" src="images/empresas/7.png" alt="#">
                </div>
                <div class="col-sm-3 duas-logos" style="margin-right:-100px;">
                    <img class="" style="width: 100px;" src="images/empresas/8.png" alt="#">
                    <img class="logo-3" style="width: 100px;" src="images/empresas/9.png" alt="#">
                </div>
              
                <div class="col-sm-4">
                    <img class="logo-4" style="width: 200px;" src="images/empresas/10.png" alt="#">
                    <img class="logo-5" style="width: 100px;" src="images/empresas/11.png" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>