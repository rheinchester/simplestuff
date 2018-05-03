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
<!-- what is mx-auto? -->
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

            <!-- How to view all articles -->
            <!-- <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div> -->
            
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