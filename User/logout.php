<?php
	include_once ('session.php');
	include_once ('../assets/database/function.php');

	if(isset($_SESSION['email'])){
		unset($_SESSION['emial']);
		$session->logout();
	}
	redirect('../index.php');

?>