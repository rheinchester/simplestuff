<?php 
  // include_once('header.php');
  //include_once 'includes/Category.php';
  include_once '../database/Article.php';
  include_once '../database/Category.php';
  include_once ('../database/session.php');
  include_once ('../database/function.php');  
  if(!$session->is_logged_in()) redirect('logout.php');
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

<!-- Template for creating additional pages -->
 <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
   </div><!-- #wrapper -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <h2>Add people who would help run the site</h2>
          <form enctype = "multipart/form-data" action='add_article.php' method='post'>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Topic</label>
                <input type="text" class="form-control" placeholder="Add Topic" name="topic" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

           <!--  <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Category</label>
                <div class='col col-lg-6'>
                  <?php echo Category::getDropDown(); ?>
                </div>
                <p class="help-block text-danger"></p>
              </div>
            </div> -->
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Headline</label>
                <textarea rows="5" class="form-control" placeholder="Headline" id="headline" required data-validation-required-message="Please enter a Headline."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Images</label>
                <input type="file" class="form-control" name="image" placeholder="Image" id="password" required data-validation-required-message="Image needed">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
            
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" name='submit' class="btn btn-primary" >Send</button>
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
        </article>




    <div id="wrapper">
    
    <div id="header">
    </div><!-- #header -->
    
    <div id="content">
    </div><!-- #content -->
    
    <div id="footer">
    </div><!-- #footer -->
    
  </div><!-- #wrapper -->
<!--  <?php 
 // include_once('../footer.php');
 ?> -->