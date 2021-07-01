<div class="sec newContent" data-aos="zoom-in-up">

	<div class="text-center mb-4">
		<h1 class="big" style="margin-top:-8rem;font-size:8rem">Service</h1>
		<h2 class="futura-head" style="font-size:2rem;margin-top:5rem">
			YOU CAN SPLOIT YOUR SELF WITH OUR SERVICES
		</h2>
		<p class="futura-content mt-4 text-muted" style="font-size:1rem">WE HAVE MUCH SERVICE TO MAKE YOU SATISFIED</p>
	</div>

	<div class="d-flex flex-row flex-lg-wrap mt-5 mb-5 justify-content-center" data-aos="zoom-in-down">
		<?php foreach ($services as $service): ?>
		<div class="serviceContent rounded mb-3 ml-4 mr-4">
			<img src="<?= base_url().'uploads/services/'.$service->image ?>" alt="">
			<div class="d-flex">
				<p class="futura-content font-weight-normal textboard"><?= $service->name ?></p>
				<p class="textExplore font-italic text-middle">Description ></p>
			</div>
			<span><?= $service->desc ?></span>
		</div>
		<?php endforeach; ?>
	</div>
	
</div>

<div class="sec" data-aos="zoom-in-up">
	<div class="text-center mb-4">
		<h1 class="big" style="margin-top:-8rem;font-size:8rem;">Pricing</h1>
		<h2 class="futura-head" style="font-size:2rem;margin-top:5rem">
			THE PRICE OF OUR SERVICE
		</h2>
		<p class="futura-content mt-4 text-muted" style="font-size:1rem">GET THE GOOD EXPERIENCE WITH CHAEP PRICE</p>
	</div>

	<div class="boxDataService d-flex flex-row justify-content-between mt-5" data-aos="zoom-in-up">
		<?php foreach ($packages as $package):?>
		<div class="bordereds text-center pb-0 mb-0">
			<div class="futura-head mb-2 p-3 text-white" style="background:#47313F;font-size:30px">
				<p class="headBox">
					<?= $package->packageName ?></div>
				</p>
			<div class="font-weight-bolder mt-5"> <p style="font-size:30px"> RP. <?= $package->price ?>/Session</p>
			<table class="futura-content tableDataService text-center w-100 mt-5">
				<tr class="w-100">
					<td class="w-100" style="font-size:1.2rem"><?= $package->service1 ?></td>
				</tr>
				<tr class="w-100">
					<td class="w-100" style="font-size:1.2rem"><?= $package->service2 ?></td>
				</tr>
				<tr class="w-100">
					<td class="w-100" style="font-size:1.2rem"><?= $package->service3 ?></td>
				</tr>
				<tr class="w-100">
					<td class="w-100" style="font-size:1.2rem"><?= $package->service4 ?></td>
				</tr>
			</table>
			</div>
		</div>
		<?php endforeach ;?>
	</div>

</div>
