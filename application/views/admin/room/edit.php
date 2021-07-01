<div class="cc">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data room</h2>

				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<?php echo form_open_multipart('admin/room/edit/'.$room['id']) ?>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $room['id'] ;?>">
						<h1>ID</h1>
						<h1><?= $room['id'] ?></h1>
						<div class="form-group">
							<label for="name">NAME</label>
							<input type="text" class="form-control" id="name" name="varName"
								value="<?= $room['name'] ;?>">
						</div>
						<div class="form-group">
							<label for="people">PEOPLE</label>
							<input type="text" class="form-control" id="people" name="people" value="<?= $room['people'] ;?>">
						</div>
						<div class="form-group">
							<label for="type">TYPE</label>
							<input type="text" class="form-control" id="type" name="type" value="<?= $room['type'] ;?>">
						</div>
						<div class="form-group">
							<label for="service">SERVICE</label>
							<input type="text" class="form-control" id="service" name="service"
								value="<?= $room['service'] ;?>">
						</div>
						<div class="form-group">
							<label for="price">PRICE</label>
							<input type="number" class="form-control" id="price" name="price"
								value="<?= $room['price'] ;?>">
						</div>
						<div class="form-group">
							<label for="price">STATUS</label>
							<input type="text" class="form-control" id="status" name="status"
								value="<?= $room['status'] ;?>">
						</div>
						<label for="desc">DESC</label>
						<div class="form-group">
							<textarea class="rounded form-control" name="desc" id="desc"
								style="width:62.3rem;height:10rem"><?= $room['desc'] ?></textarea>
						</div>
						<div class="form-group">
							<label for="">OLD IMAGE</label>
							<input type="text" name="tempImg" value="<?= $room['image'];?>" class="form-control mb-3"
								id="tempImg" readonly>
						</div>
						<div class="form-group">
							<label for="">NEW IMAGE</label>
							<input type="file" name="image" class="form-control pt-3 pb-5 mb-2" value="<?= $room['image'];?>">
							<small class="font-weight-bolder">&nbsp;Biarkan Kosong Jika Tidak Ingin Mengganti Gambar</small>
						</div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
					</form>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
