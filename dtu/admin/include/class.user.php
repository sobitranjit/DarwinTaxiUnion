<?php
include "db_config.php";

	class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** for registration process ***/
		public function reg_user($firstname, $lastname, $username, $phonenumber, $password){

			$password = md5($password);
			$sql="SELECT * FROM admin WHERE username='$username' OR phonenumber='$phonenumber'";

			//checking if the username or phonenumber is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO admin SET firstname='$firstname', lastname='$lastname', username='$username', phonenumber='$phonenumber', password='$password' ";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}

		/*** for login process ***/
		public function check_login($username, $password){

        	$password = md5($password);
			$sql2="SELECT id from admin WHERE username='$username' or phonenumber='$username' and password='$password'";

			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['id'] = $user_data['id'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** for showing the username or fullname ***/
    	public function get_username($id){
    		$sql3="SELECT username FROM admin WHERE id = $id";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['username'];
    	}



    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }


	    public function delete_car($table,$id)
		 {
		  $res = mysql_query("DELETE FROM $table WHERE id=".$id);
		  return $res;
		 }

	}


?>