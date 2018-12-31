<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/projectjunta/config.php');
require_once(DBAPI3);

$atas = null;
$ata = null;

/**
 *  Listagem de Clientess
 */
function index() {
	global $atas;
	$atas = find_all('atas');
}



/**
 *  Cadastro de Clientes
 */
function addAta() {

  if (!empty($_POST['ata'])) {
    
    $ata = $_POST['ata'];    

      

      ///////////UPLOAD LINKS/////////////

      /////UPLOAD IMAGE/////
      if(!isset($_POST['ficheiro'])) {
      $imgFile = $_FILES['ficheiro']['name'];
      $tmp_dir = $_FILES['ficheiro']['tmp_name'];
      $imgSize = $_FILES['ficheiro']['size'];

      $upload_dir = 'atas-pdf/'; // upload directory
 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
      // valid image extensions
     $valid_extensions = array('pdf'); // valid extensions
  
      // rename uploading image
     $userpic = $imgFile.".".$imgExt;
    
     // allow valid image file formats
     if(in_array($imgExt, $valid_extensions)){   
     // Check file size '3MB'
      if($imgSize < 10000000){
      move_uploaded_file($tmp_dir,$upload_dir.$imgFile);

      }else{
       echo 'Sorry, your file is too large.';}

     }else{
     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';  
    };
     

    $ata['ficheiro'] = $imgFile;

    save('atas', $ata);

    header('location: admin-ata.php');
  }
  
  }
}




function editAta() {


  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['ata'])) {

      $ata = $_POST['ata'];


      if (!empty($_FILES['ficheiro']['name'][0])) { 
      /////UPLOAD IMAGE/////
      if(!isset($_POST['ficheiro'])) {
      $imgFile = $_FILES['ficheiro']['name'];
      $tmp_dir = $_FILES['ficheiro']['tmp_name'];
      $imgSize = $_FILES['ficheiro']['size'];

      $upload_dir = 'atas-pdf/'; // upload directory
 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
      // valid image extensions
     $valid_extensions = array('pdf'); // valid extensions
  
      // rename uploading image
     $userpic = $imgFile.".".$imgExt;
    
     // allow valid image file formats
     if(in_array($imgExt, $valid_extensions)){   
     // Check file size '3MB'
      if($imgSize < 10000000){
      move_uploaded_file($tmp_dir,$upload_dir.$imgFile);

      }else{
       echo 'Sorry, your file is too large.';}

     }else{
     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';  
    };
   
    print_r($_FILES);   

    $atas['ficheiro'] = $imgFile;
    }
  }
    


      update('atas', $id, $ata);
      header('location: edit-ata.php');
      echo "Success!";
    } else {

      global $ata;
      $ata = find('atas', $id);
    } 
  } else {
    header('location: admin-ata.php');
  }
}

/**/
function view($id = null) {
  global $ata;
  $ata = find('atas', $id);
}



/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $ata;
  $ata = remove('atas', $id);

  header('location: admin-ata.php');
}


