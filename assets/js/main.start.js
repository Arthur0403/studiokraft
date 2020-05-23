$(function () {
	$(window).scroll(function () {
		display = $(this).scrollTop() >= 50;
		if (display) {
			$(".header_top").addClass("mmove");
		} else {
			$(".header_top").removeClass("mmove");
		}
	});
});