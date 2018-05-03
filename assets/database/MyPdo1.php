<?php
	 /**
		Database Connection	
	 */

	class MyPDO {
		protected $connection;
		function __construct(){
			$this->open_connection();
		}
		protected function open_connection (){
			$dsn = "mysql:host=localhost;dbname=palmline;charset=utf8";
			$db_user = "root";
			$db_password = "";							//If your password field is empty ensure that there isn't any empty whitespace in the double quote/'.
			$options =  array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
			try {
				$this->connection = new PDO (DSN,DB_USER,DB_PASSWORD, $options);
			} catch (PDOException $e){
				echo $e->getMessage();
				header('location:../connection_error.php');
			}
		}	

		protected function close_connection(){
			$this->connection = null;
		}
	}
?>