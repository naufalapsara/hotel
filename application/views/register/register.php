<?=
  form_open('register/register');
?>

<div class="container py-5">
	<div class="row">
		<div class="col-md 12">
			<div class="row">
				<div class="col-md-6 mx-auto">

					<div class="card rounded-6">
						<div class="card-header">
							<h3>Register</h3>
						</div>
						<div class="card-body">
							<form action="" role="form" autocomplete="off" id="fromLogin" class="form" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="username"
										id="username" required="">
									<div class="invalid-feedback">Oops, you missed the one.</div>
								</div>
								<div class="form-group">
                  <label for="password">Password</label>
									<input type="password" class="form-control form-control-lg rounded-0"
                  name="password" id="password" required="" autocomplete="new-password">
									<div class="invalid-feedback">Enter your password too!.</div>
								</div>
                <div class="form-group">
                  <label for="refCode">Reference Code</label>
                  <input type="text" class="form-control form-control-lg rounded-0" name="refCode"
                    id="refCode" required="">
                    <small>Save Your Reference Code For The New Employee</small>
                  <div class="invalid-feedback">Oops, you missed the one.</div>
                </div>
								<?php
									if(!empty($this->session->flashdata('user'))) 
									redirect('login/logout','refresh');
								?>
								<button type="submit" class="btn btn-success btn-block">
									<i class="fa fa-download" aria-hidden="true"></i>&nbsp; Register
								</button>
								<a href="<?= base_url().'login' ?>" class="btn btn-info btn-block ">
									<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></i> &nbsp; Back To Log In
								</a>

						</div>
				</div>
        </form>
        
			</div>

		</div>

	</div>
</div>



<?=
  form_close();
?>