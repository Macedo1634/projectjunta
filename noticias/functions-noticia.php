<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/projectjunta/config.php');
require_once(DBAPI2);

$noticias = null;
$noticia = null;

/**
 *  Listagem de Clientess
 */
function index() {
	global $noticias;
	$noticias = find_all('noticias');
}



/**
 *  Cadastro de Clientes
 */
function addNoticia() {

  if (!empty($_POST['noticia'])) {
    
    $noticia = $_POST['noticia'];    

      

      ///////////UPLOAD LINKS/////////////

      /////UPLOAD IMAGE/////
      if(!isset($_POST['imagem'])) {
      $imgFile = $_FILES['imagem']['name'];
      $tmp_dir = $_FILES['imagem']['tmp_name'];
      $imgSize = $_FILES['imagem']['size'];

      $upload_dir = 'noticias-img/'; // upload directory
 
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
     

    $noticia['imagem'] = $imgFile;

    save('noticias', $noticia);

    header('location: admin-noticia.php');
  }
  
  }
}




function editNoticia() {


  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['noticia'])) {

      $noticia = $_POST['noticia'];


      if (!empty($_FILES['imagem']['name'][0])) { 
      /////UPLOAD IMAGE/////
      if(!isset($_POST['imagem'])) {
      $imgFile = $_FILES['imagem']['name'];
      $tmp_dir = $_FILES['imagem']['tmp_name'];
      $imgSize = $_FILES['imagem']['size'];

      $upload_dir = 'noticias-img/'; // upload directory
 
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

    $noticia['imagem'] = $imgFile;
    }
  }
    


      update('noticias', $id, $noticia);
      header('location: edit-noticia.php');
      echo "Success!";
    } else {

      global $noticia;
      $noticia = find('noticias', $id);
    } 
  } else {
    header('location: admin-noticia.php');
  }
}

/**/
function view($id = null) {
  global $noticia;
  $noticia = find('noticias', $id);
}



/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $noticia;
  $noticia = remove('noticias', $id);

  header('location: admin-noticia.php');
}


