<?php 
  //include_once 'includes/Category.php';
  include_once '../database/category.php';
  include_once ('../database/session.php');
  include_once ('../database/function.php');
  if(!$session->is_logged_in()) redirect('logout.php');
  $msg = "";
  if(isset($_POST['submit'])){
    $category = Category::instantiate($_POST);
    ($category->create()) ? $msg ='successful' : $msg = 'Failed';
    // $category->attach_file($_FILES['image']);
    // if ($category->save_with_file()) {
    //   $msg = "Successful";
    // }else{
    //   $msg = "Failed";
    // }
  }
  include_once('Admin_header.php');
 ?>
     <div class='row'>
        <article class='col col-lg-9 col-md-8 col-sm-9'>
          <div class='row'>
            <?php echo $msg; ?>
          </div>
          <div class='row'>
            <h3>Customer Form</h3>d
          </div>          
          <section class='row'>
            <form class='form-horizontal' action='add_category.php' method='post' enctype="multipart/form-data">           
              <div class='form-group'>
                <label class='control-label col col-lg-4'>Name</label>
                <div class='col col-lg-6'>
                  <input class='form-control' name='name' type='text'>
                </div>
              </div>
              
              <div class='form-group'>
                <label class='control-label col col-lg-4'>Description</label>
                <div class='col col-lg-6'>
                  <textarea class='form-control ' name='description'></textarea>
                </div>
              </div>
              
              <div class='col col-lg-6 col-lg-offset-4'>
                <button type='submit' name='submit' class ='btn btn-primary'>Submit Form</button>
              </div>
            </form>
          </section>       
        </article>
      </div>
            </form>
          </div>
          </section>
