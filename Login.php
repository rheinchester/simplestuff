<?php
      // include_once 'header.php';
      include_once "assets/database/User.php";//may be customer
      include_once "User/session.php";//adjust session
      include_once "assets/database/function.php";
      $msg = '';
      if(isset($_POST['init'])){
        $password = $_POST['password'];
        $email = $_POST['email'];

        $user = User::authenticate($password,$email);

        if($user){
          $session->login($user);
          // $msg = "Login Successful";
          redirect('index.php');
        }

        else {
          echo "<script> 
              alert('Invalid login details')
              window.location = 'index.php'
              </script>";
           
          // displayMessage('Login Failed','invalid admin_id or password','warning');
        }
      }

      
  ?>

