<?=
  form_open('register');
?>

<div class="container py-5">
	<div class="row">
		<div class="col-md 12">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="card rounded-6" style="margin-top:6rem">
						<div class="card-header">
							<h3 class="text-center">Reference Code Validation</h3>
						</div>
						<div class="card-body">
							<form action="" role="form" autocomplete="off" class="form" method="post">
								<div class="form-group">
									<label for="username" class="font-weight-bolder text-center d-block">Reference Code</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="varRef"
										id="username" required="">
										<small class="d-block text-center">You can get the references code from your HRD</small>
									<div class="invalid-feedback">Oops, you missed the one.</div>
								</div>
								<button type="submit" class="btn btn-success btn-block">
									<i class="fa fa-send" aria-hidden="true"></i>&nbsp; Send Reference Code
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