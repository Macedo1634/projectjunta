<?php 
session_start();
	include_once 'class_user.php';
	$usern = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
	    $login = $usern->check_login($user, $pass);
	    if ($login) {
	        $_SESSION['login'] = true;
	        // Registration Success
	       header("location:admin.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
	
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
  </head>
 

  <body id="container">
  

            
         
        <div class="container">  
        <form class="form-signin">            
               <label class="form-label" for="user">User</label>
               <input id="user" type="text" class="form-control" name="user" placeholder="" required/>
              
               <label id="label-pass" class="form-label" for="pass">Pass</label>
               <input id="pass" type="password" class="form-control" name="pass" placeholder="" required/> 
               
               <button class="btn btn-primary" type="submit" name="submit" id="signin" onclick="return(submitlogin());">Sign in</button>


            </form>
            
          </div>
            
      

       


    <script>
      function submitlogin() {
        var form = document.login;
        if (form.user.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.pass.value == "") {
          alert("Enter password.");
          return false;
        }
      }
      
    </script>


  </body>
  </html>