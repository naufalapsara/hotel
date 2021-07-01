<div class="cc">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data order</h2>

				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<?php echo form_open_multipart('admin/order/edit/'.$order['id']) ?>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $order['id'] ;?>">
						
						<div class="form-group">
							<label for="date">DATE</label>
							<input type="date" class="form-control" id="date" name="date"
								value="<?= $order['date'] ;?>">
						</div>
						
						<button type="submit" name="submit" class="btn btn-success float-right"> <i class="fa fa-download" aria-hidden="true"></i> Submit</button>
					</form>
					<?php echo form_close() ?>
					<a href="<?= base_url().'admin/order';?>"  class="btn btn-primary"> <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i> Back</a>

				</div>
			</div>
		</div>
	</div>
</div>