<?php
    include_once '../assets/database/Article.php';
    include_once '../assets/database/Category.php';  
    include_once ('../assets/database/Admin.php');
    include_once ('../assets/database/session.php');
    include_once ('../assets/database/function.php'); 
    include_once 'admin_header.php';

    if (isset($_GET['id'])) {
      $article = Article::find($_GET['id']);

    }
  ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Man must explore, and this is exploration at its greatest</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
              <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
        <?php
          $view = "
          <div class='col-lg-8 col-md-10 mx-auto'>
               $article->headline  
          </div>
          ";
          echo $view;
          ?>
          
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
<?php
  include_once 'footer.php';
  ?>