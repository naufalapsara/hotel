$(document).ready(function () {
	$(window).scroll(function () {
		if (scrollY > 100) {
			$(".navbar").addClass("navDown");
		} else {
			$(".navbar").removeClass("navDown");
		}
	});

});
