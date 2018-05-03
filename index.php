<?php
  include_once 'header.php';
  ?>
  <!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="/examples/images/avatar.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Member Login</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="Login.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">   
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="init">Login</button>
          </div>
          <a href="sign_up.php" class="modal-footer" style="text-decoration: none;"> Sign up here!</a>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#">Forgot Password?</a> 
      </div>
    </div>
  </div>
</div>     

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Simple Developer</h1>
              <span class="subheading">Learn the basics and much more</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               How to build an awesomely simple, mobile responsive website.
              </h2>
              <h3 class="post-subtitle">
               In simplified broken down steps
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                How to build a highly functional and dynamic website
              </h2>
               <h3 class="post-subtitle">
               Using html5, css3, mysql, php
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 18, 2017</p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Learn more about the grid system in bootstrap
              </h2>
              <h3 class="post-subtitle">
               Enhance your knowledge in mobile responsiveness
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2017</p>
          </div>
          <hr>
          
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                Web-development vs software development
              </h2>
              <h3 class="post-subtitle">
                Which career will you prefer
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2017</p>
          </div>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               How to use the various sorting algorithms
              </h2>
              <h3 class="post-subtitle">
                
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on July 8, 2017</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/clean-blog.min.js"></script>
    

  </body>

</html>
