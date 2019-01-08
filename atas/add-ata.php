<?php 
ob_start();
session_start();

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
  require_once('functions-ata.php'); 
  addAta();

//if($_SESSION["business_line"]=="guest"){
  //header('Location:../home.php');
//} else {
  //echo "";
//}
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

<h2>Adicionar Ata</h2>

<form action="add-ata.php" method="post" enctype="multipart/form-data" class="form-style">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="titulo">Titulo da Ata</label>
      <input type="text" class="form-control" name="ata['titulo']" required>
    </div>
  </div>

  <div class="row"> 
    <div class="form-group col-md-3">
      <label for="ficheiro">Ficheiro PDF (10MB Max)</label>
      <input class="form-control" type="file" id="ficheiro" name="ficheiro" accept="application/pdf" required>
    </div>
  <div class="form-group col-md-3">
      <label for="ficheiro">Tipo</label>
      <input type="radio" name="ata['tipo']" value="relatorio"> Relatório<br>
      <input type="radio" name="ata['tipo']" value="ata"> Ata<br>
    </div>
    <div class="form-group col-md-3">
      <label for="data">Data da ata</label>
      <input type="date" class="form-control" name="ata['data']">
    </div>   
  </div>
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" id="botao-add" class="btn btn-primary">Adicionar</button>
      <a href="admin-ata.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>




<!--<script type="text/javascript">

  var radios = document.getElementsByClassName('bl');
for(i=0; i<radios.length; i++ ) {
    radios[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}

</script>-->
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

<script type="text/javascript">

  var uploadField = document.getElementById("ficheiro");
uploadField.onchange = function() {
    if(this.files[0].size > 10242880){
       alert("Ficheiro demasiado grande! 10MB MAX");
       this.value = "";
    };
};


</script>
</body>
</html>