<?php 
    include_once '../header.php';
    include_once ('../database/Admin.php');
    include_once ('../database/session.php');
    include_once ('../database/function.php'); 
    $msg = "";
    if(!$session->is_logged_in()) redirect('logout.php');
    $admin = new Admin();
  if(isset($_GET['id'])){
    $admin = Admin::find($_GET['id']);
  }
  if(isset($_POST['submit'])){
    $admin = Admin::instantiate($_POST);
    if(Admin::find($admin->admin_id)) {
      ($admin->update()) ? $msg = 'Successful': $msg = 'Failed';
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
        <div>
          <?php echo $msg;  ?>
        </div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<!-- what is mx-auto? -->
          <h2>Edit admin details</h2>
          <form  action='Edit_admin.php' method='post'>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                 <input class='form-control' name='username' type='text' placeholder="User name" value='<?php echo $admin->username; ?>'">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $admin->email; ?>" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone" value="<?php echo $admin->phone; ?>" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
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