<?php 
ob_start();
session_start();

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
  require_once('functions-ata.php'); 
  editAta();

/*if($_SESSION["business_line"]=="guest"){
  header('Location:../home.php');
} else {
  echo "";
}*/
?>


<h2>Editar Noticia</h2>

<form action="edit-ata.php?id=<?php echo $ata['id']; ?>" method="post" enctype="multipart/form-data" class="form-style">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="titulo">Titulo Ata</label>
      <input type="text" class="form-control" name="ata['titulo']" value="<?php echo $ata['titulo']; ?>" required>
    </div>
  </div>

  <div class="row"> 
    <div class="form-group col-md-3">
      <label for="ficheiro">Ficheiro PDF (10MB Max)</label>
      <input class="form-control" type="file" id="ficheiro" name="ficheiro" accept="application/pdf" required>
      <br>
    </div>
    <div class="form-group col-md-3">
      <label for="ficheiro">Tipo</label>
      <input type="radio" name="ata['tipo']" value="relatorio"> Relatório<br>
      <input type="radio" name="ata['tipo']" value="ata"> Ata<br>
    </div>
    <br>

    <div class="form-group col-md-3">
      <label for="data">Data</label>
      <input type="date" class="form-control" name="ata['data']" value="<?php echo $ata['data']; ?>" required>
    </div>

 
  </div>
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="admin-ata.php" class="btn btn-default">Cancel</a>
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
<script type="text/javascript">

  var uploadField = document.getElementById("ficheiro");
uploadField.onchange = function() {
    if(this.files[0].size > 10242880){
       alert("PDF demasiado grande! 10MB MAX");
       this.value = "";
    };
};


    

</script>