<div class="container mb-3">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Data service</h1>
				</div>
				<div class="card-body">
					<label for=""></label>
					<h3>ID</h3>
					<h3 class="card-title mb-5"><?= $service['id']; ?></h3>
					<p class="card-text">
						<label for=""><b>NAME <span style="margin-left:4rem">:</span> </b></label>
						<?= $service['name']; ?>
					</p>
					<div class="card-text d-flex flex-row">
						<div>
							<label for=""><b>DESCRIPTION : </b></label>
						</div>
						<div>
							<p style="width:800px;margin-left:5px">
								<?= $service['desc']; ?>
							</p>
						</div>
					</div>
					
					<p class="card-text">
						<label for=""><b>IMAGE <span style="margin-left:3.7rem">:</span> </b></label>
					</p>
					<img src="<?= base_url().'/uploads/services/'.$service['image']?>" alt=""
						style="margin-left:9rem;width:350px;heigth:300px">
					<div>
						<a href="<?= base_url() ;?>admin/service" class="btn btn-primary float-right">
							<i class="far fa-arrow-alt-circle-left" aria-hidden="true">&nbsp;Keluar</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
