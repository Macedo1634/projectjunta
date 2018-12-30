<?php
ob_start();
session_start();

include_once '../class_user.php';
$usern = new User(); $id = $_SESSION['id'];
if (!$usern->get_session()){
header("location:../login.php");
}
require_once('functions-agenda.php');

//include_once '../class_user.php';
//$usern = new User(); $id_user = $_SESSION['id_user'];
//if (!$usern->get_session()){
 //header("location:index.php");
//}
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


<div class="container">

  <div class="row">

    <div class="col-lg-2  filter-div">

      <a href="../admin.php">Voltar Admin</a><br>
      <a href="add-agenda.php" id="new-project-button"><i class="fa fa-plus"></i> Adicionar evento</a>
      
    </div>

    <div class="col-lg-10">
      <h1 class="my-4">Eventos</h1>
      <hr/>
      <?php if ($events) : ?>
      <?php foreach ($events as $event) : ?>
          <div class="col-lg-4 col-md-6 col-xs-12 mb-4 target materials-card column">
              <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="agenda-img/<?php echo $event['imagem']; ?>" alt=""></a>
                    <div class="card-body">
                        <p class="card-title">
                          <?php echo $event['title']; ?>
                        </p>
                        <p class="cat"><?php echo $event['descricao']; ?></p>
                        <p class="cat"><?php echo $event['date']; ?></p>

                        <div class="row">
                        
                        <div class="col-lg-4 material-btn" style="">
                            <a href="#" data-target="#delete-modal" data-toggle="modal" data-event="<?php echo $event['id']; ?>"><i class="fa fa-trash icons"></i></a>
                            <a href="edit-agenda.php?id=<?php echo $event['id']; ?>"><i class="fa fa-edit icons"></i></a>
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
        <h4 class="modal-title" id="modalLabel">Apagar Evento</h4>
      </div>
      <div class="modal-body">
        Pretende apagar este evento?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Yay</a>
        <a id="cancel" class="btn btn-danger" data-dismiss="modal">Nay</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->

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

var guest = '<?php echo $guest; ?>';

    $(document).ready(function(){    // labBox appears when box is clicked
        if(guest == "1") {             
         $("#new-project-button").hide();   
        } else {
        $("#new-project-button").show();                         
        }
    });
    
    var admin = '<?php echo $admin; ?>';

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

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("list-group");
var btns = btnContainer.getElementsByClassName("filter-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("selected");
    current[0].className = current[0].className.replace("selected", "");
    this.className += " selected";
  });
}

$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('event');
  
  var modal = $(this);
  modal.find('.modal-title').text('Delete #' + id);
  modal.find('#confirm').attr('href', 'delete-agenda.php?id=' + id);
});
</script>
</body>
</html>