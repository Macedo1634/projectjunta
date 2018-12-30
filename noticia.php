<?php   
require_once('noticias/functions-noticia.php');
view($_GET['id']);
?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="icon" href="assets/img/BrasaoPardilho_favIcon.png" type="image/png">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Junta de Freguesia de Pardilhó</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        
        <!-- Flexslider -->
        <link rel="stylesheet" href="assets/css/flexslider.css">
        
        <!-- Owl -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      
        <!--  loader  -->
        <div id="myloader">
            <div class="loader">
                <div class="grid">
                    <div class="cube cube1"></div>
                    <div class="cube cube2"></div>
                    <div class="cube cube3"></div>
                    <div class="cube cube4"></div>
                    <div class="cube cube5"></div>
                    <div class="cube cube6"></div>
                    <div class="cube cube7"></div>
                    <div class="cube cube8"></div>
                    <div class="cube cube9"></div>
                </div>
            </div>
        </div>
        
       <!--  Header & Menu  -->
        <header id="header">
            <div class="top-nav">
                <!--  Header Logo  -->
                <div id="logo">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/BrasaoPardilho_nav.png" class="normal" alt="logo">
                        <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                    </a>
                </div>
                <!--  END Header Logo  -->
                <div class="secondary-menu">
                    <ul>
                        <li class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="maito:geral@jf-pardilho.com">geral@jf-pardilho.com</a></li>
                        <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i>(+351) 234 287 211</li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <!--  Classic menu, responsive menu classic  -->
                <div id="menu-classic">
                    <div class="menu-holder">
                        <ul>
                            <li>
                                <a href="index.html">Inicio</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0)">Freguesia</a>
                                <ul class="sub-menu">
                                    <li><a href="historia.html">História</a></li>
                                    <li><a href="heraldica.html">Heráldica</a></li>
                                    <li><a href="demografia.html">Demografia</a></li>
                                    <li><a href="coletividades.html">Coletividades</a></li>
                                    <li><a href="talento.html">Talento das nossas gentes</a></li>
                                    <li><a href="executivo.html">Executivo</a></li>
                                    <li><a href="assembleia.html">Assembleia</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0)">Atualidade</a>
                                <ul class="sub-menu">
                                    <li><a href="noticias.html">Notícias</a></li>
                                    <li><a href="#">Agenda</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0)">Serviços</a>
                                <ul class="sub-menu">
                                    <li><a href="ctt.html">CTT</a></li>
                                    <li><a href="polointernet.html">Polo Internet</a></li>
                                    <li><a href="guiche.html">Guiché Online</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Portal</a>
                            </li>
                            <li>
                                <a href="#">Turismo</a>
                            </li>
                            <li>
                                <a href="#">Contactos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--  END Classic menu, responsive menu classic  -->
                <!--  Button for Responsive Menu Classic  -->
                <div id="menu-responsive-classic">
                    <div class="menu-button">
                        <span class="bar bar-1"></span>
                        <span class="bar bar-2"></span>
                        <span class="bar bar-3"></span>
                    </div>
                </div>
                <!--  END Button for Responsive Menu Classic  -->
                <div class="secondary-menu-mobile">
                    <ul>
                        <li class="mail"><i class="fa fa-envelope" aria-hidden="true"></i><a href="maito:geral@jf-pardilho.com">geral@jf-pardilho.com</a></li>
                        <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i>(+351) 234 287 211</li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  END Header & Menu  -->
            
        <!--  Main Wrap  -->
        <div id="main-wrap">
            <!--  Page Content  -->
            <div id="page-content" class="header-static">
                <!--  Post Header  -->
                <div id="post-header">
                    <div class="bg-image" style="background-image:url(noticias/noticias-img/<?php echo $noticia['imagem']; ?>)"></div>
                    <div class="container">
                        <div class="row no-margin">
                            <div class="text secondary-background">
                                <div class="post-meta">
                                    <h1 class="white margin-bottom-small"><?php echo $noticia['titulo']; ?></h1>
                                    <!--<ul class="categories white">
                                        <li>Desporto</li>
                                        <li>Sociedade</li>
                                    </ul>-->
                                    <span class="date white"><?php echo $noticia['data']; ?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  END Post Header  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
                    <div class="container">
                       
                        <!-- Post Content -->
                        <div class="row no-margin post-content">
                            <div class="col-md-12 padding-leftright-null">
                               <div class="text padding-topbottom-null">
                                   <p><?php echo $noticia['texto']; ?></p>                                 
                               </div>
                            </div>
                        </div>
                         <p><a href="noticias.php">Voltar a Notícias</a>
                        <!-- Post Content -->
                        
                    </div>
                </div>
            </div>
            <!--  END Page Content -->
        </div>
        <!--  Main Wrap  -->
        
        <!--  Footer  -->
        <footer>
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-4 text">
                        <div class="logo">
                            <img src="assets/img/BrasaoPardilho_favIcon.png" class="normal" alt="logo">
                            <img src="assets/img/logo_white@2x.png" class="retina" alt="logo">
                        </div>
                        <p>Telefone: (+351) 234 287 211<br>
                           Email: geral@jf-pardilho.com</p>
                        
                    </div>
                    <div class="col-md-3 text small">
                        <h4 class="heading white margin-bottom-small weight-300 footer-title">Morada</h4>
                        <p>Junta de Freguesia de Pardilhó<br>
                            Rua Prof. Saavedra Guedes, nº 27<br>
                            3860-437 Pardilhó<br>
                            Portugal</a></p>
                    </div>
                    <div class="col-md-2 text small">
                        <h4 class="heading white margin-bottom-small weight-300 footer-title">Links úteis</h4>
                        <ul class="info">
                            <li><a href="">Home</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contactos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text">
                        <h4 class="heading white margin-bottom-small weight-300 footer-title">Redes sociais</h4>
                        <div>
                            <ul class="social">
                                <li><a href="https://www.facebook.com/Junta-de-Freguesia-de-Pardilh%C3%B3-397978673664395/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="copy">
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-6 text">
                        <p>©2018 <a href="http://www.we-advisor.com/" target="_blank">WeAdvisor</a>. Todos os direitos reservados. </p>
                    </div>
                    <div class="col-md-6 text text-right">
                        <ul>
                            <li><a href="#">Politica de privacidade</a></li>
                            <li><a href="#">Politica de Cookies</a></li>
                            <li><a href="#">Termos e Condições</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--  END Footer. Class fixed for fixed footer  -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- All js library -->
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/smooth.scroll.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.scrolly.js"></script>
        <script src="assets/js/plugins-scroll.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>