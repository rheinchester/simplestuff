<?php 
    // include_once '../header.php';
    include_once ('../assets/database/Admin.php');
    include_once ('../assets/database/session.php');
    include_once ('../assets/database/function.php'); 
    $msg = "";
    // if(!$session->is_logged_in()) redirect('logout.php');
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
include 'Admin_header.php'; 
 ?>
    <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                  <h1>Admin</h1>
                  <span class="subheading">Edit admin</span>
                </div>
              </div>
            </div>
          </div>
        </header>

          <div class='container'>
            <div class='row'> 
              <div class="col-lg-8 col-md-10 mx-auto">
                <form  class='form-horizontal' action='Edit_admin.php' method='post'>
                  <div class="control-group">
                    <div class='form-group floating-label-form-group controls'>
                      <label>Admin Id</label>
                      <input name='admin_id' value='<?php echo $admin->admin_id; ?>' class='form-control'  type='text' placeholder="Admin ID" >
                    </div>       
                  </div>       
                  <div class="control-group">
                    <div class='form-group floating-label-form-group controls'>
                      <label>Username</label>
                      <input class='form-control' name='username' type='text' placeholder="User name" value='<?php echo $admin->username; ?>'">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class='form-group floating-label-form-group controls'>
                      <label>email</label>
                       <div class='col col-lg-9 col-md-9 col-sm-9 col-xs-9'>
                        <input class='form-control' name='email' type='email' placeholder="Email" value='<?php echo $admin->email; ?>'>
                      </div>
                    </div>
                  </div>

                  <div class="control-group">
                    <div class='form-group floating-label-form-group controls'>
                      <label>Phone</label>
                      <input class='form-control' name='phone' type='text' placeholder="Phone" value='<?php echo $admin->phone; ?>'>
                    </div>
                  </div>
                  <br>
                  
                   <div class='col col-lg-6 col-lg-offset-4'>
                    <button type='submit' name='submit' class ='btn btn-primary'>Edit Admin</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
 
 <?php 
 include_once('footer.php');
 ?>