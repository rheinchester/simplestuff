<?php
	include_once ('../assets/database/session.php');
	include_once ('../assets/database/function.php');

	if(isset($_SESSION['user_id'])){
		unset($_SESSION['user_id']);
		$session->logout();
	}
	redirect('../AdminLogin.php');

?>