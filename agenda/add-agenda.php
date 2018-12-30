<?php 
ob_start();
session_start();

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
  require_once('functions-agenda.php'); 
  addEvent();

//if($_SESSION["business_line"]=="guest"){
  //header('Location:../home.php');
//} else {
  //echo "";
//}
?>


<h2>Add New Evento</h2>

<form action="add-agenda.php" method="post" enctype="multipart/form-data" class="form-style">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="title">Evento titulo</label>
      <input type="text" class="form-control" name="event['title']" required>
    </div>
  </div>

  <div class="row"> 
    <div class="form-group col-md-3">
      <label for="imagem">Imagem (3MB Max)</label>
      <input class="form-control" type="file" id="imagem" name="imagem" accept="image/*" required>
    </div>
    <div class="form-group col-md-3">>

      <label for="descricao">Descição</label>
      <input type="text" class="form-control" name="event['descricao']">
    </div    <div class="form-group col-md-3">
      <label for="date">Data do evento</label>
      <input type="date" class="form-control" name="event['date']">
    </div>   
  </div>
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Adicionar Eventos</button>
      <a href="agenda.php" class="btn btn-default">Cancelar</a>
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
       alert("Image is too big! 3MB MAX");
       this.value = "";
    };
};

</script>