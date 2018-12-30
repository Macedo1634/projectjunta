<?php

require_once('../config.php');
require_once(DBAPI);

$events = null;
$event = null;

/**
 *  Listagem de Clientess
 */
function index() {
	global $events;
	$events = find_all('events');
}



/**
 *  Cadastro de Clientes
 */
function addEvent() {

  if (!empty($_POST['event'])) {
    
    $event = $_POST['event'];    

      

      ///////////UPLOAD LINKS/////////////

      /////UPLOAD IMAGE/////
      if(!isset($_POST['imagem'])) {
      $imgFile = $_FILES['imagem']['name'];
      $tmp_dir = $_FILES['imagem']['tmp_name'];
      $imgSize = $_FILES['imagem']['size'];

      $upload_dir = 'agenda-img/'; // upload directory
 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
      // valid image extensions
     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
      // rename uploading image
     $userpic = $imgFile.".".$imgExt;
    
     // allow valid image file formats
     if(in_array($imgExt, $valid_extensions)){   
     // Check file size '3MB'
      if($imgSize < 3000000){
      move_uploaded_file($tmp_dir,$upload_dir.$imgFile);

      }else{
       echo 'Sorry, your file is too large.';}

     }else{
     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';  
    };
     

    $event['imagem'] = $imgFile;
    $event['status'] = 1;

    save('events', $event);

    header('location: add-agenda.php');
  }
  
  }
}




function editEvent() {


  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['event'])) {

      $event = $_POST['event'];


      if (!empty($_FILES['imagem']['name'][0])) { 
      /////UPLOAD IMAGE/////
      if(!isset($_POST['imagem'])) {
      $imgFile = $_FILES['imagem']['name'];
      $tmp_dir = $_FILES['imagem']['tmp_name'];
      $imgSize = $_FILES['imagem']['size'];

      $upload_dir = 'agenda-img/'; // upload directory
 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
      // valid image extensions
     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
      // rename uploading image
     $userpic = $imgFile.".".$imgExt;
    
     // allow valid image file formats
     if(in_array($imgExt, $valid_extensions)){   
     // Check file size '3MB'
      if($imgSize < 3000000){
      move_uploaded_file($tmp_dir,$upload_dir.$imgFile);

      }else{
       echo 'Sorry, your file is too large.';}

     }else{
     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';  
    };
   
    print_r($_FILES);   

    $event['imagem'] = $imgFile;
    }
  }
    


      update('events', $id, $event);
      header('location: edit-agenda.php');
      echo "Success!";
    } else {

      global $event;
      $event = find('events', $id);
    } 
  } else {
    header('location: edit-agenda.php');
  }
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $event;
  $event = remove('events', $id);

  header('location: admin-agenda.php');
}


