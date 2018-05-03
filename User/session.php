<?php
	class Session{
		public $email;
		private $logged_in = false;

		function __construct(){
			session_start();//a built in
			$this->check_login();
		}

		public function check_login(){
			if(isset($_SESSION['email'])){
				$this->email = $_SESSION['email'];
				$this->logged_in = true;
			}else {
				unset($this->email);
				$this->logged_in = false;
			}
		}

		public function is_logged_in (){
			return $this->logged_in;
		}

		public function login ($user){
			if($user){
				$this->email = $_SESSION['email'] = $user->email;//how is mysql_thread_id()s code working without include or extention...ask lewis or moses
				$this->logged_in = true;
			}
		}
		public function logout (){
			$this->logged_in = false;
			$this->email = null;
			session_destroy();
		}
	}
	$session = new Session();
 ?>