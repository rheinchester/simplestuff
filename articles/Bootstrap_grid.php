 <!-- 
    1) Number images 
    2)How do they caption
    3)HOw do i insert code
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Bootstrap Grid system</h1>
              <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
              <span class="meta">Posted by
                <a href="#">Jacob Okoro</a>
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
          <div class="col-lg-8 col-md-10 mx-auto">
            <p>
            <h4>Bootstrap grid system</h4>
              Bootstrap comes with a 12 column grid system. It is a mobile first approach. This means it encourages one to think about small screen design first before scaling up to larger screen size. Columns, rows and containers are used. This creates a webpage that alters its size based on users screen size and users behaviour. Hence making the webpage more dynamic and flexible and centred
            </p>
            <p>
              There are 4 main grid classes.
              <ul>
                <li>xs- This is for phones and screens less than 768px</li>
                <li>sm-This is for tablets and screens equal to or greater than 768px</li>
                <li>md- this is for small laptops and screens greater than or equal to 992px</li>
                <li>lg- this is for small laptops and screens greater than or equal to 1200px</li>
              </ul>
            </p>
            <p>
              Here are some illustrations of the grid system
               <img class="img-fluid" src="img/Grid_article_images/grid_system.JPG" >
               Here’s the code 
               <code>
                <!-- <div class="container-fluid">
                  <div class="row">
                    <div class="col text-center " style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-12</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-4</div>
                    <div class="col-sm-6" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-4 <span></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-4</div>
                    <div class="col-sm-4" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-4</div>
                    <div class="col-sm-4" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-4</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-3</div>
                    <div class="col-sm-3" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-3</div>
                    <div class="col-sm-3" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-3</div>
                    <div class="col-sm-3" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-3</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                    <div class="col-sm-2" style="background-color:grey;border: 1px black solid; padding: 15px 15px">.col-sm-2</div>
                  </div>

                  <div class="row">
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                    <div class="col-sm-1" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-1</div>
                  </div>
                </div>

                </body>
 -->
               </code>
               </p>
               <p>
                 <h4>Our illustration follows grid system rules stating:</h4>
                  <ul>
                    <li>Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.</li>
                    <li>Use rows to create horizontal groups of columns.</li>
                    <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
                    <li>Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.</li>
                    <li>Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.</li>
                    <li>The negative margin is why the examples below are outdented. It's so that content within grid columns is lined up with non-grid content.</li>
                    <li>Grid columns are created by specifying the number of twelve available columns you wish to span. For example, three equal columns would use three .col-xs-4.</li>
                    <li>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</li>
                    <li>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, e.g. applying any .col-md-* class to an element will not only affect its styling on medium devices but also on large devices if a .col-lg-* class is not present.
                    As stated in  <a href="https://v4-alpha.getbootstrap.com" style="color: #007bff;"> getbootstrap.com.</a></li>
                  </ul>
                  <h5>The entire grid for a line must not exceed 12.</h5>
                  Judging by the code, we used col-sm. This means that the grid will maintain itself until it reaches a small screen size (less than 768px). Once it reaches a small screen size each of the columns stack above each other. If you change [sm] to [xs] the grid will remain intact beyond a very small screen size.
               </p>
               <p>
                 <h4>Moving from stacked to horizontal</h4>
                 <p>
                  <h6 class="capiton">For large screen size</h6>
                  <img class="img-fluid" src="img/Grid_article_images/sm-6.JPG" >
                 </p>
                 <p>
                   <h6 class="capiton">For smaller screen size</h6>
                  <img class="img-fluid" src="img/Grid_article_images/small-sm-6.JPG" >
                 </p>
                 <code>
                <!--    <div class="container">
                    <div class="row">
                      <div class="col-sm-6" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-6 </div>
                      <div class="col-sm-6" style=="background-color:lavender;border: 1px black solid; padding: 15px 15px">.col-sm-6 </div>
                    </div>
                  </div> -->
                 </code>
                 Now looking at this, .col-sm-6 means that the two columns are split evenly with each occupying 50% of the total page span. It will maintain this state until it reaches a screen size less than 768px. Once this happens they will form stacks.
               </p>
               <p>
                 <h4>Push and pull </h4>
                 <code>
                  <!--  <div class="row">
                    <div class="col-md-3 col-lg-push-2">col-lg-push-2</div>
                  </div>
                  -->
                 </code>
                From the above when the screen is at large size, the column is pushed by 2 columns. Once the screen becomes smaller (md to xs), the column reverts to its original position. The opposite effect works for pull. Try it.
               </p>
               <p>
                <h4>Offset</h4> 
                The main difference between pull and offset is,
                 Offset will force other columns to move while push (and pull) will overlap other columns.
                 <img class="img-fluid" src="img/Grid_article_images/offset_and_push.JPG" >
                 <code>              
                  <!-- <div class="row">
                    <div class="col-sm-3 col-lg-push-2">col-lg-push-2 </div>
                    <div class="col-sm-3">col-sm-3 </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3 col-lg-offset-4">col-lg-push-4 </div>
                    <div class="col-sm-3">col-sm-3 </div>
                  </div>
                   -->
                 </code>
                 From the above, in the first row, we pushed the first column by 2. It ended up overlapping with the next column. However, in the second row, the first column was offset by 4. It ended up pushing the second column along with it.
               </p>
               <p>
                 <h4>Nesting</h4>
                  Nesting Columns comes in very handy when you want to take advantage of the grid system from within a column. Below, we  see A1 and A2 are nested inside the grid system of Col A.  Col B on the other hand isn’t nested within Col A, hence it stands as a separate column. In practice, we use nesting to create a separate sub-grid in a particular section.
                  <p>
                    <h6>Nested grids</h6>
                    <img class="img-fluid" src="img/Grid_article_images/nested_stuff.JPG" >
                  </p>
                  <code>
                  <!--   <div class="container">
                     <div class="row">
                      <div class="col-sm-6" style="background-color:lavender;border: 1px black solid; padding: 15px 15px">
                        <h1>Col A</h1>
                        <div class="row">
                          <div class="col-sm-6" style="background-color:grey;border: 1px black solid; padding: 15px 15px">
                            <h2>A1</h2>
                          </div>
                          <div class="col-sm-6" style="background-color:silver;border: 1px black solid; padding: 15px 15px">
                            <h2>A2</h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6" style="background-color:violet;border: 1px black solid; padding: 15px 15px">
                        <h1>Col B</h1>
                      </div>
                    </div>
                  </div> -->
                  </code>
               </p>
          </div>
        </div>
      </div>
    </article>

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
