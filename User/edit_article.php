<?php 
    // include_once '../header.php';
    include_once ('../assets/database/Article.php');
    include_once ('../assets/database/Category.php'); 
    include_once ('session.php');
    include_once ('../assets/database/function.php'); 
    $msg = "";
    // if(!$session->is_logged_in()) redirect('logout.php');
    $article = new Article();
  if(isset($_GET['id'])){
    $article = Article::find($_GET['id']);
  }
  if (isset($_GET['id'])) {
   $category = Category::find($article->cat_id);
  }
  if(isset($_POST['submit'])){
    $article = Article::instantiate($_POST);
    if(Article::find($article->getArticleId())) {
      ($article->update()) ? $msg = 'Successful': $msg = 'Failed';
    } 
  }
      // var_dump($article);
 include_once 'user_header.php';
 ?>
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

<script src = "../assets/plugin/plugin/tinymce/tinymce.min.js"></script>
<script src = "../assets/plugin/plugin/tinymce/init-tinymce.js"></script>
  <div class="container">
    <div class = "row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <!--  <?php echo $msg; ?>-->
        <!-- put content here. -->
        <form enctype = "multipart/form-data"  action='edit_article.php' method='post'>
            <div class="control-group">
              <div class='form-group floating-label-form-group controls'>
                <label >Topic</label>
                  <input name='topic' value="<?php echo $article->topic;?>" placeholder="Topic" class='form-control'  type='text' id="name" data-validation-required-message="Please enter the topic"  required>
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
                    <textarea class="tinymce form-control" row="5"     name='headline' placeholder="Please write your article here" value='<?php echo $article->headline;?>'></textarea>
                </div>
              </div>

              <div class='form-group'>
                <label class='control-label '>Images</label>
                  <input class='form-control' name='image' type='file'  value='<?php echo $article->image; ?>'>
              </div>

              <div id="success"> </div>
              <!-- <div class='form-group'> -->
              <div class='col col-lg-6 col-lg-offset-4'>
                <button type='submit' name='submit' class ='btn btn-primary'>Create article</button>
              </div>
            </form>
        </div>
    </div>
  </div>  
      
<?php
  include_once 'user_footer.php';
  ?>