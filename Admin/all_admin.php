<?php
	
	
	include_once ('../database/Admin.php');
  include_once ('../database/session.php');
  include_once ('../database/function.php'); 
	if(!$session->is_logged_in()) redirect('logout.php');
	$msg = "";
include_once 'Admin_header.php';
?>

					
		<div class="container">
			<div class='row'>
				<article class='col col-lg-9 col-md-8 col-sm-9'>
					<div class='row'>
						<?php echo $msg; ?>
					</div>
					<div class='row'>
						<h3>Admin List</h3>
					</div>					
					<section class='row'>
<?php
	$admins = Admin::all();
	$table = "<table class='table table-hover table-bordered table-striped'>
				<thead>
					<tr>
						<th>S/No.</th>
						<th>Admin ID</th>
						<th>Admin Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>";
				$i = 1;
	foreach ($admins as $admin) {
		// $service = Service::find($admin->service_id);
		$table .="<tr>
					<td>$i</td>
					<td>{$admin->admin_id}</td>
					<td>{$admin->username}</td>
					<td>{$admin->email}</td>
					<td>{$admin->phone}</td>
					<td><a class='btn btn-info' href='Edit_admin.php?id={$admin->admin_id}'>Edit</a></td>
					<td><a class='btn btn-danger' href='customer_delete.php?id={$admin->email}'>Delete</a></td>
				</tr>";
				$i++;
	}
	$table.="</tbody></table>";
	echo $table;
?>
					</section>	
				</article>
			</div>
		</div>

		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>
</html>
