<?php 
	if (isset($_SESSION['cust_user'])) {
		header("Location: myaccount.php");
	}
	include("includes/dbinfo.inc.php");
 ?>

<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" class="form-horizontal" method="post">
					<div class="modal-header">
						<h4 style="margin-left: 10px;">Login to M&M Pet Supplies</h4>
					</div>
					
					<div class="modal-body">
					<div class="alert alert-info">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>Don't have an account? Register <a href="registration.php">here</a>
					</div>
						<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1">@</span>
			  			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="cust_user" required>
					</div><br/>			
					<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
			  			<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="cust_pass" required>
					</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="submit">Login</button>
						<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		
		<?php 
			if(!isset($_POST['cust_user']) || !isset($_POST['cust_pass'])) {
					//No codes to run
				} else {
					$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
					$s = oci_parse($c, 'SELECT cust_user FROM customer WHERE cust_user = :cust_user_bv AND cust_pass = :cust_pass_bv');
					oci_bind_by_name($s, ":cust_user_bv", $_POST['cust_user']);
					oci_bind_by_name($s, ":cust_pass_bv", $_POST['cust_pass']);
					oci_execute($s);
					$r = oci_fetch_array($s, OCI_ASSOC);

					if ($r) {
						$_SESSION['cust_user'] = $_POST['cust_user'];
							echo "<script>window.open('index.php','_self')</script>";
					}
					 else {
					 	echo "<script>alert('Invalid Username or Password!')</script>";
					 	oci_close($c);

					 } 

				}
		?>

