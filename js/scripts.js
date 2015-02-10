
function display_menu(){
	$("nav").animate({top:"0px"});
	$(".menu-toggle").fadeOut();
	$(".text_toggle").fadeOut();
}

function hide_menu(){
	$("nav").animate({top:"-90px"});
	$(".menu-toggle").fadeIn();
	$(".text_toggle").fadeIn();
}