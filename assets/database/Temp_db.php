<?php  
$server = "localhost";
$database = "palmline";
$password = "";
$user = "root";
$dsn = "mysql:host=localhost;dbname=palmline;charset=utf8";
$options = array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
	$connection = new PDO($dsn,$user,$password,$options);
	echo "connection worked";
} catch (PDOException $e) {
	echo $e->getMessage();
	header('location:../connection_error.php');
}
?>