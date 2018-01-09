<?php
	include_once ('config.php');
		/**
		You can  catch a PDOException and rethrow it as a different Exception if they wrap their database calls in an external library.
		Or
		You should catch all kind of exception and the last one should be Exception
		It depends on how deep the code goes


		Also PDOException is an extension oof runtime exception which is an extension of  Exception class
		* 
		*/
	class MyPDO {
		protected $connection;
		function __construct(){
			$this->open_connection();
		}
		protected function open_connection (){
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