<?php 
     // include_once '../header.php';
    include_once '../assets/database/Article.php';
    include_once '../assets/database/Category.php';
    include_once ('../assets/database/admin.php');
    include_once ('../assets/database/session.php');
    include_once ('../assets/database/function.php'); 
  if(!$session->is_logged_in()) redirect('logout.php');//create logout
    $article = new Article();
  if(isset($_GET['id'])){
    $article = Article::find($_GET['id']);
    $category = Category::find($article->cat_id);
  } else {
    redirect('dashboard.php');
  }

  if(isset($_POST['submit'])){
    $new_article = Article::instantiate($_POST);
    if($article->getArticleId()) {
      $new_article->setArticleId($article->getArticleId());
      // var_dump($new_article); exit();
      ($new_article->update()) ? $msg = 'Successful': $msg = 'Failed';//create update
    } 
    // var_dump($article);
  }
  include_once 'admin_header.php';
 ?>

<!-- Template for creating additional pages -->
<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Article</h1>
              <span class="subheading">Share your story</span>
            </div>
          </div>
        </div>
      </div>
    </header>

<div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
  <div class="container">
     <div class='row'>    
          <div class="col-lg-8 col-md-10 mx-auto">
             <form enctype = "multipart/form-data" class='form-horizontal' action='Edit_article.php?id=<?php echo $article->getArticleId(); ?>' method='post'>
              <div class="control-group">
                <div class='form-group floating-label-form-group controls'>
                  <label >Topic</label>
                    <input placeholder="Topic" class='form-control' name='topic' type='text' id="name" data-validation-required-message="Please enter the topic" value="<?php echo $article->topic?>" required>
                    <p class="help-block text-danger" ></p>
                </div>
              </div>
            
              <div class="control-group">
                <div class='form-group floating-label-form-group '>
                    <label class="control-label">category</label>
                      <?php echo Category::getDropDown(); ?>
                    <p class="help-block text-danger"></p>
                </div>
              </div>
              
              <div class="control-group">
                <div class='form-group floating-label-form-group control'>
                  <label>Headline</label>
                    <textarea class="tinymce form-control" row="5"     name='headline' placeholder="Please write your article here" value='<?php echo $article->headline?>'></textarea>
                </div>
              </div>

              <div class='col col-lg-6 col-lg-offset-4'>
                <button type='submit' name='submit' class ='btn btn-primary'>Edit article</button>
              </div>
            </form> 
          </div>
      </div>
    </div>            
    <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
 <?php 
 include_once('footer.php');
 ?>