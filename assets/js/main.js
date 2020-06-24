var accordion = function () {
	var data = $(".rules").attr("data-accordion");
	$(".content-title").on("click", function () {
		if (data === "close") {
			$(".rules-panel").slideUp();
			if ($(this).hasClass("active")) {
				$(this).toggleClass("active");
			} else {
				$(".content-title").removeClass("active");
				$(this).toggleClass("active");
			}
		} else {
			$(this).toggleClass("active");
		}
		$(this).next(".rules-panel").not(":animated").slideToggle();
	});
}
accordion();
$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			$(".navbar").addClass("margin_add");
		}
		if ($(this).scrollTop() < 100) {
			$(".navbar").removeClass("margin_add");
		}
	});
});

// (function(){
// 	let btn = document.querySelector('.more');
//
// 	btn.addEventListener('click', function () {
// 		let content = document.querySelector('.inventary-wrapper');
// 		if (window.getComputedStyle(content, '').maxHeight !== '300px') {
// 			content.style.maxHeight = '300px';
// 		} else {
// 			content.style.maxHeight = `${content.scrollHeight}px`;
// 		}
// 	});
// }());