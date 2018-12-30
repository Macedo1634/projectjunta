<?php
include_once 'config.php';

	class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** for registration process ***/
		/*public function reg_user($name,$username,$password,$email){

			$password = md5($password);
			$sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";

			//checking if the username or email is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}*/

		/*** for login process ***/
		public function check_login($user, $pass){

        	$pass = ($pass);
			$sql2 = "SELECT id, user from users WHERE user = '$user' and pass = '$pass'";

			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['id'] = $user_data['id'];
	            $_SESSION['user'] = $user_data['user'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** for showing the username ***/
    	public function get_user($id){
    		$sql3="SELECT user FROM users WHERE id = $id";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['user'];
    	}

    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}
?>