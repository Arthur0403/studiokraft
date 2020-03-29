(function(){
	// $(".vertical").css("height", $(".horizontal").height()*2 + 9.5).css("margin-bottom", "10px");
	// (Optional) Active an item if it has the class "is-active"
	$(".rules-item.is-active .wp-block-group__inner-container").children(".rules-panel").slideDown();
	$(".rules-item .wp-block-group__inner-container").click(function() {
		$(this).siblings(".rules-item .wp-block-group__inner-container").removeClass("is-active").children(".rules-panel").slideUp();
		$(this).toggleClass("is-active").children(".rules-panel").slideToggle("ease-out");
	});
}());