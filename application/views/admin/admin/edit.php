<div class="cc">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data Admin</h2>

				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<?php echo form_open_multipart('admin/admin/edit/'.$admin['id']) ?>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $admin['id'] ;?>">
						
						<div class="form-group">
							<label for="username">USERNAME</label>
							<input type="text" class="form-control" id="username" name="username"
								value="<?= $admin['username'] ;?>">
						</div>
						<div class="form-group">
							<label for="password">PASSWORD</label>
							<input type="text" class="form-control" id="password" name="password"
								value="<?= $admin['password'] ;?>">
						</div>
						<div class="form-group">
							<label for="refCode">REFERENCE CODE</label>
							<input type="text" class="form-control" id="refCode" name="refCode"
								value="<?= $admin['refCode'] ;?>">
						</div>
						
						<button type="submit" name="submit" class="btn btn-success float-right"> <i class="fa fa-download" aria-hidden="true"></i> Submit</button>
					</form>
					<?php echo form_close() ?>
					<a href="<?= base_url().'admin/admin';?>"  class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i> Back</a>

				</div>
			</div>
		</div>
	</div>
</div>