<?php
	include_once ('../database/session.php');
	include_once ('../database/function.php');

	if(isset($_SESSION['user_id'])){
		unset($_SESSION['user_id']);
		$session->logout();
	}
	redirect('../');
?>