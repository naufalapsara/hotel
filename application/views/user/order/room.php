<section class="sec newContent" >
	<div class="text-center" data-aos="zoom-in-up">
		<h1 class="text-center big tC" style="margin-top: -5rem;">Room</h1>
		<h2 class="roboto-head" style="margin-top: 4rem;">All Room Class In Our Hotel</h2>
		<p class="text-muted font-weight-bolder">Choose The Best Class of Us</p>
	</div>

	<div class=" d-flex flex-column justify-content-between mt-5" data-aos="fade-right">
		<?php foreach ($rooms as $room) : ?>
		<div class="roomC d-flex flex-row mb-5" data-aos="fade-right">
			<div class="iRoom">
				<img src="<?= base_url().'/uploads/rooms/'.$room->image?>" alt="lala">
			</div>
			<div class="texRoom d-flex flex-row">
				<div class="d-flex flex-column ml-3 mt-0">
					<p class="futura-head mb-3" style="font-size:2rem"><?= $room->name ?></p>
					<p class="roboto-head" style="font-size: 19px;"> <i class="fas fa-bread-slice"></i> &nbsp; <?= $room->service ?> </p>
					<p class="roboto-head" style="font-size: 19px;"> <i class="fas fa-bed"></i> &nbsp; <?= $room->type ?> </p>
					<p class="roboto-head" style="font-size: 19px;"> <i class="fas fa-child"></i> &nbsp; <?= $room->people ?> </p>
					<p class="roboto-head w-50" style="font-size: 19px;"> <?= $room->desc ?> </p>
				</div>
			<div class="price w-25 float-right text-right">
				<h4 class="roboto-head text-muted">Price/Day</h4>
                <h3 class="futura-head text-muted">Rp. <?= $room->price ?></h3>
                <a href="#order" class="btn btn-info font-weight-bolder w-100 mt-3 float-left">Choose</a>
			</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</section>
