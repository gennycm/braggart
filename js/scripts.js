
function display_menu(){
	$("nav").animate({top:"0px"});
	$(".menu-toggle").fadeOut();
	$(".text_toggle").fadeOut();
	$(".right-floating-menu").animate({right:"15px"});
}

function hide_menu(){
	$("nav").animate({top:"-120px"});
	$(".menu-toggle").fadeIn();
	$(".text_toggle").fadeIn();
	$(".right-floating-menu").animate({right:"-175px"});

}

function search_click(){
	if($(".search-icon input").val() != ""){
		search_product();
	}

	if($(".search-icon input").hasClass("open")){
		$(".search-icon input").fadeOut().addClass("closed").removeClass("open");
	}
	else{
		$(".search-icon input").fadeIn().addClass("open").removeClass("closed");
	}
	
}

function search_product(){
	var search_string = $(".search-icon input").val();
	window.location.href = "shirts.php?s="+search_string;
}

function validateRegister(){
	return false;
}