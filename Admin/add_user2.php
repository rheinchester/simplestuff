<?php 
  // include_once('header_template.php');
// 'admin_id','username','phone','email','address','status','password'
      include_once "../assets/database/User.php";
      include_once ('../assets/database/session.php');
      include_once ('../assets/database/function.php'); 
      // if(!$session->is_logged_in()) redirect('logout.php');
      $msg = '';
      if(isset($_POST['submit'])){
        $user= User::instantiate($_POST);
       
        if($user){
          if($user->insertUser()){
            $msg = 'Admin Created Successfully.';
          }else{
            $msg = 'Failed to create new admin.';
          }
        }else{
          $msg = 'Failed to create Admin.';
        }
      }
 include_once 'Admin_header.php'; 
 ?>   <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            

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
                    <a class="navbar-brand" href="#">Admin</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- <i class="fa fa-dashboard"></i> -->
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="logout.php">
                               Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">
                        <h2>Add Users</h2>
                      <form  action='add_user.php' method='post'>
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="username" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required data-validation-required-message="Please enter your Password">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Confirm Password" id="password" required data-validation-required-message="Please enter your Password">
                            <p class="help-block text-danger"></p>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once 'dashboardFooter.php';
  ?>
