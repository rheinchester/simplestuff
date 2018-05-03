<?php
include_once 'dashboardHeader.php';
  ?>
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="content all-icons">
                                <div class="row">


                                  <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-6">
                                      <a href="All-admin.php">
                                        <div class="font-icon-detail"><i class="pe-7s-display2"></i>
                                          <input type="text" value="View all Admin"> 
                                        </div>
                                      </a>
                                  </div>

                                  <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-6">
                                    <a href="">
                                        <div class="font-icon-detail"><i class="pe-7s-user"></i>
                                          <input type="text" value="Add Admin">
                                        </div>
                                      </a>
                                  </div>

                                  
                                      
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!--  -->
<?php
include_once 'dashboardFooter.php';
  ?>