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
		public function reg_user($firstname, $lastname, $username, $phonenumber, $category, $password){

			$password = md5($password);
			$sql="SELECT * FROM users WHERE username='$username' OR phonenumber='$phonenumber'";

			//checking if the username or phonenumber is available in db
			$check =  $this->db->query($sql) ;
			$count_row = $check->num_rows;

			//if the username is not in db then insert to the table
			if ($count_row == 0){
				$sql1="INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', phonenumber='$phonenumber', category='$category', password='$password' ";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}

		/*** for login process ***/
		public function check_login($username, $password){

        	$password = md5($password);
			$sql2="SELECT id from users WHERE username='$username' or phonenumber='$username' and password='$password'";

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
    		$sql3="SELECT username FROM users WHERE id = $id";
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


	    /*** for registration process ***/
		public function reg_car($taxinumber, $date, $shift, $changeover, $phonenumber, $address, $image){


			$sql="SELECT * FROM car WHERE taxinumber='$taxinumber'";

			
			// insert to the table
			
				$sql1="INSERT INTO car SET taxinumber='$taxinumber', date='$date', shift='$shift', changeover='$changeover', phonenumber='$phonenumber', address='$address', image='$image' ";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}


		/*** for registration process ***/
		public function complain($taxinumber, $complain){


			$sql="SELECT * FROM complain WHERE taxinumber='$taxinumber'";

			
			// insert to the table
			
				$sql1="INSERT INTO complain SET taxinumber='$taxinumber', complain='$complain' ";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}



			/*** for showing the username or fullname ***/
    	public function get_taxinumber($id){
    		$sql3="SELECT * FROM car WHERE id = $id";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_array($result);
	        echo $user_data['taxinumber'];
	        echo $user_data['date'];
    	}

			

	}


?>