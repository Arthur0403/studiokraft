(function () {
	// $(".vertical").css("height", $(".horizontal").height()*2 + 9.5).css("margin-bottom", "10px");
	$(".rules-item.is-active .wp-block-group__inner-container").children(".rules-panel").slideDown();
	$(".rules-item .wp-block-group__inner-container").click(function () {
		$(this).siblings(".rules-item .wp-block-group__inner-container").removeClass("is-active").children(".rules-panel").slideUp();
		$(this).toggleClass("is-active").children(".rules-panel").slideToggle("ease-out");
	});
	// $("#menu-item-102").click(function (event) {
	//     event.preventDefault();
	//     $(".sub-menu").toggle()
	// })
}());
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
$(function () {
	$(window).scroll(function () {
		display = $(this).scrollTop() >= 150;
		if (display) {
			$(".navbar").addClass("margin_add");
		} else {
			$(".navbar").removeClass("margin_add");
		}
	});
});