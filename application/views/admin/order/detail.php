<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data orders
				</div>
				<div class="card-body">
					<?php foreach($orders as $order):?>
						<p class="card-text">
							<label for=""><b>Name : </b></label>
							<?= $order->cn; ?>
						</p>
						<p class="card-text">
							<label for=""><b>Address : </b></label>
							<?= $order->address; ?>
						</p>
						<p class="card-text">
							<label for=""><b>Telephone : </b></label>
							<?= $order->telephone; ?>
						</p>
						<p class="card-text">
							<label for=""><b>Room Name : </b></label>
							<?= $order->rn; ?>
						</p>
						<p class="card-text">
							<label for=""><b>Room Number : </b></label>
							<?= $order->ri; ?>
						</p>
						<p class="card-text">
							<label for=""><b>Package : </b></label>
							<?= $order->service1; ?> &nbsp; <?= $order->service2; ?> &nbsp; 
							<?= $order->service3; ?> &nbsp; <?= $order->service4; ?> &nbsp;
						</p>
						<p class="card-text">
							<label for=""><b>Date : </b></label>
							<?= date("d-m-Y",strtotime($order->date)) ?>
						</p>
						<p class="card-text">
							<label for=""><b>Total : </b></label>
							<?= $order->total; ?>
						</p>
						
						<a href="<?= base_url() ;?>admin/order" class="btn btn-primary float-right">
							<i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
						</a>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>