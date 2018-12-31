<?php
ob_start();
session_start();
require_once('functions-ata.php');

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
index();

/*if($_SESSION["business_line"]=="guest"){
 $guest = true;
} else {
  $guest = false;
}

if($_SESSION["business_line"]=="admin"){
  $admin = true;
} else {
  $admin = false;
}*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Junta de Freguesia de Pardilhó</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap-theme.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="../assets/css/ionicons.min.css">
        
        <!-- Flexslider -->
        <link rel="stylesheet" href="../assets/css/flexslider.css">
        
        <!-- Owl -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-calendar/0.2.5/css/calendar.css">

    </head>
    <body>

<style type="text/css">

  .card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.materials-card{
  margin-top: 20px;
}

.column {
    float: left;
    width: 33.33%;
    display: block; /* Hide all elements by default */
}
/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

#list-group{
border-left: 3px solid #4dc2c4;
}

#list-group button{
  display: block;
  font-size: 18px;
  background: none;
  border: none; /* Green border */
  margin: 10px 0px 10px 0px;
  color: #287082;

}

#list-group button:hover{
  font-weight: bold;
}

.selected{
  font-weight: bold;
}

.filter-div{
  margin-top: 60px;
}

@media screen and (max-width: 992px) {
.filter-div{
  margin-top: 10px;
}
}

.icons{
float:right;
color: #b2b2b2;
font-size: 20px !important;
position: relative;
right: 0;
margin-left: 10px;
}

.fa-trash:hover{
color: #d14040;
}

.fa-edit:hover{
color: #4c4c4c;
}

@media screen and (max-width: 768px) {
 .icons{
 float:right;
 color: #b2b2b2;
 font-size: 26px !important;
 position: relative;
 right: 0;
 margin-left: 10px;
}
}
</style>

    <!--<link type="text/css" rel="stylesheet" href="../css/simplePagination.css"/>

    <script src="../js/excel-bootstrap-table-filter-bundle.js"></script>
    <link rel="stylesheet" href="../css/excel-bootstrap-table-filter-style.css">-->
<!--  Header & Menu  -->
        <header id="header">
            <div class="top-nav">
                <!--  Header Logo  -->
                <div id="logo">
                    <a class="navbar-brand" href="index.html">
                        <img src="../assets/img/BrasaoPardilho_nav.png" class="normal" alt="logo">
                        <img src="../assets/img/logo@2x.png" class="retina" alt="logo">
                    </a>
                    <!--<label>Junta de Freguesia de Pardilhó</label>-->
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
                                <a href="turismo.html">Turismo</a>
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

<div class="container">

  <div class="row">

    <div class="col-lg-2  filter-div">

      <a href="../admin.php">Voltar Admin</a><br>
      <a href="add-ata.php" id="new-project-button"><i class="fa fa-plus"></i> Adicionar Ata</a>
      
    </div>

    <div class="col-lg-10">
      <h1 class="my-4">Admin Atas</h1>
      <hr/>
      <?php if ($atas) : ?>
      <?php foreach ($atas as $ata) : ?>
          <div class="col-lg-4 col-md-6 col-xs-12 mb-4 target materials-card column">
              <div class="card h-100">
                    <div class="card-body">
                        <p class="card-title">
                         <b><?php echo $ata['titulo']; ?></b> 
                        </p>
                        <a target="_blank" href="atas-pdf/<?php echo $ata['ficheiro']; ?>">Ver ata</a>
                        <p class="cat"><?php echo $ata['data']; ?></p>

                        <div class="row">
                        
                        <div class="col-lg-4 material-btn" style="">
                            <a href="#" data-target="#delete-modal" data-toggle="modal" data-material="<?php echo $ata['id']; ?>"><i class="fa fa-trash icons"></i></a>
                            <a href="edit-ata.php?id=<?php echo $ata['id']; ?>"><i class="fa fa-edit icons"></i></a>
                        </div>
                        </div>

                    </div>
              </div>
          </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>

<!-- Modal de Delete-->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Apagar Noticia</h4>
      </div>
      <div class="modal-body">
        Pretende apagar esta ata?
      </div>
      <div class="modal-footer">
        <a id="confirm" href="#">Sim</a>
        <a id="cancel" data-dismiss="modal">Não</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->

</div>

<!--  Footer  -->
        <footer>
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-4 text">
                        <div class="logo">
                            <img src="../assets/img/BrasaoPardilho_favIcon.png" class="normal" alt="logo">
                            <img src="../assets/img/logo_white@2x.png" class="retina" alt="logo">
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



<script type="text/javascript">
  
 /* function searchMaterials() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('target');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}

var guest = '<?php  $guest; ?>';

    $(document).ready(function(){    // labBox appears when box is clicked
        if(guest == "1") {             
         $("#new-project-button").hide();   
        } else {
        $("#new-project-button").show();                         
        }
    });
    
    var admin = '<?php  $admin; ?>';

    $(document).ready(function(){    // labBox appears when box is clicked
        if(admin == "1") {             
         $(".material-btn").show();   
        } else {
        $(".material-btn").hide();                         
        }
    });

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}*/

/*function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}*/

/*function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}*/



$('#delete-modal').on('shown.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var id = button.data('material');
  
  var modal = $(this);
  modal.find('.modal-title').text('Apagar ata #' + id);
  modal.find('#confirm').attr('href', 'delete-ata.php?id=' + id);
});
</script>
</body>
</html>