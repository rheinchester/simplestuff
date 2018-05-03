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
    } else{
      $article->preparedCreate();
    }
     // var_dump($article);
    
  }
  include_once 'admin_header.php';
 ?>

<!-- Template for creating additional pages -->




    <div class="container">
        <div class='row'>
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <h1 class="col-lg-offset-4 col-md-offset-6 col-sm-offset-4 text-center">Enter details</h1>
          <br>
            <form enctype = "multipart/form-data" class='form-horizontal' action='Add_article.php' method='post'>
            <div class="control-group">
              <div class='form-group'>
                <label >Topic</label>
                <input name='topic'  type="text" class="form-control" placeholder="Topic"  id="name" required data-validation-required-message="Please enter the topic.">
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
                    <textarea class="tinymce" row="5"   class='form-control ' name='headline' placeholder="Please write your article here"></textarea>
                </div>
              </div>
              <div class='form-group'>
                <label class='control-label '>Images</label>
                  <input class='form-control' name='image' type='file'>
              </div>


              <div class='col col-lg-6 col-lg-offset-4'>
                <button type='submit' name='submit' class ='btn btn-primary'>Create article</button>
              </div>
            </form>
          </section>       
        </article>
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
