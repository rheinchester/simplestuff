<?php 
  // include_once('header.php');
  //include_once 'includes/Category.php';
  include_once '../assets/database/Article.php';
  include_once '../assets/database/Category.php';
  include_once ('../assets/database/session.php');
  include_once ('../assets/database/function.php');  
  // if(!$session->is_logged_in()) redirect('logout.php');
  $msg = "";
  if(isset($_POST['submit'])){
    $article = Article::instantiate($_POST);
    // ($article->create()) ? $msg ='successful' : $msg = 'Failed';
    $article->attach_file($_FILES['image']);
    if ($article->save_with_file()) {
      $msg = "Successful";
    }else{
      $msg = "Failed";
    }
     var_dump($article);
  }
 include_once 'Admin_header.php'; 
 ?>
<script src = "../assets/plugin/plugin/tinymce/tinymce.min.js"></script>
<script src = "../assets/plugin/plugin/tinymce/init-tinymce.js"></script>