<div class="cc">
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h2>Form Tambah Data Blog</h2>
					</div>
					<div class="card-body">
						<?php if(validation_errors()): ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors() ?>
						</div>
						<?php endif; ?>
						<?php echo form_open_multipart('admin/blog/tambah') ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">TITLE</label>
								<input type="text" name="title" class="form-control">
							</div>
							<label for="" class="mt-2">DESC</label>
							<div class="form-group mb-1">
								<textarea name="desc" id="" class="form-control" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group mt-1">
								<label for="">DATE</label>
								<input type="date" name="date" class="form-control">
							</div>
							<div class="form-group mt-1">
								<label for="">AUTHOR</label>
								<input type="text" name="author" class="form-control">
							</div>
							<div class="form-group mt-1">
								<label for="">VIEW</label>
								<input type="number" name="view" class="form-control">
							</div>
							<div class="form-group mt-1">
								<label for="">IMAGE</label>
								<input type="file" name="image" class="form-control pt-3 pb-5">
							</div>
							<div class="form-group mt-3">
								<button type="submit" class="btn btn-success float-right ">
									<i class="fas fa-plus"></i>
									<span>Submit</span>
								</button>
							</div>
						</form>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
