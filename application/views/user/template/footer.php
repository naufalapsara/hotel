<div class="sec bg-dark text-white mt-4 position-relative p-5" data-aos="fade-up">
	<div class="d-flex justify-content-between">

		<div class="w-25">
			<h4 class="pacifico">Company</h4>
			<p class="futura-content mt-5 sc pr-5">
				Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
				blind texts.
			</p>
			<br><br>
			<div class="mr-5" style="font-size:2rem">
				<i class="fab fa-twitter mr-4" aria-hidden="true"></i>
				<i class="fab fa-facebook-f mr-4" aria-hidden="true"></i>
				<i class="fab fa-instagram mr-4" aria-hidden="true"></i>
			</div>
		</div>

		<div class="w-25">
			<h4 class="futura-head">Information</h4>
			<p class="futura-content mt-3 sc">FAQs</p>
			<p class="futura-content mt-3 sc">Privacy</p>
			<p class="futura-content mt-3 sc">Terms Condition</p>
		</div>

		<div class="w-25">
			<h4 class="futura-head">Links</h4>
			<p class="futura-content mt-3 sc">Home</p>
			<p class="futura-content mt-3 sc">Servcices</p>
			<p class="futura-content mt-3 sc">Blog</p>
			<p class="futura-content mt-3 sc">About</p>
		</div>

		<div class="w-25">
			<h4 class="futura-head">Have a Question</h4>
			<div class="d-flex flex-row">
				<div class="d-flex flex-column">
					<i class="fa fa-map-marker mb-5 mt-3 is" aria-hidden="true"></i>
					<i class="fab fa-whatsapp mb-4 is" aria-hidden="true"></i>
					<i class="far fa-envelope mb-5 is" aria-hidden="true"></i>
				</div>
				<div class="ml-2" style="margin-top:-4px">
					<p class="futura-content mt-3 sc">
						203 Fake St. Mountain View, San Francisco, California, USA
					</p>
					<p class="futura-content sc mt-4">
						+62 392 3929 210
					</p>
					<p class="futura-contentsc" style="margin-top:18px;">
						info@yourdomain.com
					</p>
				</div>
			</div>

		</div>
	</div>
	<br>
	<p class="futura-head mt-5 mb-1 text-center">
		&copy;<script>
			document.write(new Date().getFullYear());

		</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
	</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

<script src="<?= base_url().'/assets/js/carousel.js' ?>"></script>
<script src="<?= base_url().'/assets/js/date.js' ?>"></script>
<script src="<?= base_url().'/assets/js/aos.js' ?>"></script>
<script src="<?= base_url().'/assets/js/video.js' ?>"></script>
<script src="<?= base_url().'/assets/js/fixnav.js' ?>"></script>

<script>
	$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    
    $("#roomName").change(function(){ 
      $("#roomNumber").hide();
      $("#loading").show();
    
		$.ajax({
			type: "POST",
			url: "<?php echo base_url().'user/order/listAvailable'; ?>", 
			data: {roomName : $("#roomName").val()},
			dataType: "json",
			beforeSend: function(e) {
			if(e && e.overrideMimeType) {
				e.overrideMimeType("application/json;charset=UTF-8");
			}
			},
			success: function(response){ // Ketika proses pengiriman berhasil
				setTimeout(() => {
					$("#loading").hide(); // Sembunyikan loadingnya
					// set isi dari combobox roomNumber
					// lalu munculkan kembali combobox roomNumbernya
					$("#roomNumber").html(response.list_status).show();
				}, 2000);
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
			}
		});
		});
	});
</script>


</body>

</html>
