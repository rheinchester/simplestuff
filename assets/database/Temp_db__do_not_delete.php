<?php  
$host = "localhost";
$dbname = "new_dbase";
$password = "";
$user = "root";
$dsn = "mysql:host=localhost;dbname=new_dbase;charset=utf8";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
	$connection = new PDO($dsn,$user,$password,$options);
	echo "connection worked";
} catch (PDOException $e) {
	// echo $e->getMessage();
	header('location:../connection_error.php');
}
?>