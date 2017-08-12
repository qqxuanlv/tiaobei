$(function(){
	$(".subNav").click(function(){
		$(this).toggleClass("currentDd").siblings(".subNav").removeClass("currentDd")
		$(this).toggleClass("currentDt").siblings(".subNav").removeClass("currentDt")
		$(this).next(".navContent").slideToggle(500).siblings(".navContent").slideUp(500);
	});
	$(".navContent").find("li").click(function(){
		$(this).click(function(e) {
            $(this).addClass("bs");
			$(this).siblings('li').removeClass("bs");
        });
	});
})