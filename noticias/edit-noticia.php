<?php 
ob_start();
session_start();

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
  require_once('functions-noticia.php'); 
  editNoticia();

/*if($_SESSION["business_line"]=="guest"){
  header('Location:../home.php');
} else {
  echo "";
}*/
?>


<h2>Editar Noticia</h2>

<form action="edit-noticia.php?id=<?php echo $noticia['id']; ?>" method="post" enctype="multipart/form-data" class="form-style">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="titulo">Titulo Evento</label>
      <input type="text" class="form-control" name="noticia['titulo']" value="<?php echo $noticia['titulo']; ?>" required>
    </div>
  </div>

  <div class="row"> 
    <div class="form-group col-md-3">
      <label for="imagem">Imagem (3MB Max)</label>
      <input class="form-control" type="file" id="imagem" name="imagem" accept="image/*" value="<?php echo $noticia['imagem']; ?>" required>
      <br>
      Imagem atual:<img src="noticias-img/<?php echo $noticia['imagem']; ?>" alt="" width="100px">
    </div>
    <br>

    <div class="form-group col-md-3">
      <label for="texto">Texto</label>
      <input type="text" class="form-control" name="noticia['texto']" value="<?php echo $noticia['texto']; ?>" required>
    </div>

    <div class="form-group col-md-3">
      <label for="data">Data</label>
      <input type="date" class="form-control" name="noticia['data']" value="<?php echo $noticia['data']; ?>" required>
    </div>

 
  </div>
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="admin-noticia.php" class="btn btn-default">Cancel</a>
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

  var uploadField = document.getElementById("imagem");
uploadField.onchange = function() {
    if(this.files[0].size > 3242880){
       alert("Image is too big! 3MB MAsX");
       this.value = "";
    };
};


    

</script>