<?php
	$myEmail = 'jaycobokoro@gmail.com';// We can get these from data
	$mypass = '1234';
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];
		if ($email == $myEmail and $pass == $mypass) {
			if (isset($_POST['remember'])) {
				setcookie('email',$email,time()+60*60*7);
				setcookie('pass',$pass,time()+60*60*7);
			} 
			session_start();
			$_SESSION['email'] = $email;
			header("location: welcome.php");
			} else {
				echo "invalid user and password <br> click <a href='login.php'>here</a>";
		}
	}

?>
