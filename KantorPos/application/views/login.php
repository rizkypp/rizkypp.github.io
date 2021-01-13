<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html>
	<?php include 'auth/auth_head.php';?>

<body class="bg-gradient-primary">
	<div class="container">
		
		<!-- Outer Row -->

		<div class="row justify-content-center">

			<div class="col-lg-7">

				<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
					<div class="card-body p-0">
						<!-- nested row within card body -->
						<div class="row">
<!--							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">-->
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">LOGIN !</h1>
										</div>
									</div>
									<?= $this->session->flashdata('message');?>
									<form class="user" method="post" action="<?= site_url('login');?>">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="username"  name="username" placeholder="Username">
											<?= form_error('username','<small class="text-danger pl-3">','</small>');?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
											<?= form_error('password','<small class="text-danger pl-3">','</small>');?>
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
									<hr>
						              <div class="text-center">
						                <a class="small" href="forgot-password.html">Forgot Password?</a>
						              </div>
						              <div class="text-center">
						                <a class="small" href="<?= base_url();?>index.php/Login/registeration">Registeration</a>
						              </div>
								</div>
							</div>
						</div>
					</div>	
				</div>			
			</div>
		</div>

	</div>
	<?php include 'auth/auth_footer.php';?>
</body>
</html>