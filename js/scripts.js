
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

function validateUserRegister(){
    var email = $("input[name='email']").val();
    var password = $("input[name='regPassword'").val();
    var password2 = $("input[name='confPassword'").val();

    var camposLlenados = false;

    if(email != "" && (password != "" && password2 != "" && password == password2)){
        registerUser();
    }
    else{
        if(email == ""){
            $("#p-email").css({borderColor:"red"});
        }
        else{
            $("#p-email").css({borderColor:"green"});
        }

        if(password == ""){
            $("#p-pass").css({borderColor:"red"});
        }
        else{
            $("#p-pass").css({borderColor:"green"});
        }

        if(password2 == ""){
            $("#p-pass2").css({borderColor:"red"});
        }
        else{
            $("#p-pass2").css({borderColor:"green"});
        }
        $("#header-modal").html("Registro de Usuario");
        $("#content-modal").html("Llena todos los campos para continuar.");
       

        if(password != password2){
            $("#content-modal").append(" Las contraseñas no coinciden.");
        }

        $('#myModal').modal('toggle');
    }
}

function registerUser(){
    var email = $("input[name='email']").val();
    var password = $("input[name='password'").val();

    var producto_existente = false;
    var data = new FormData;
        data.append('operaciones',"op");
        data.append("em", email);
        data.append("pass", password);
    var resultado;

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            console.log(data);
            if(data.indexOf("true") != -1){
                
            }
            if(data.indexOf("false") != -1){

            }
            if(data.indexOf("registered") != -1){
                
            }
        }
    });
}

function showProductoInfo(id_product){
	var producto_existente = false;
	var data = new FormData;
        data.append('operaciones',"op");
        data.append("idp", id_product);
    var resultado;

	$.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
        	console.log(data);
            if(data != ""){
            	producto_existente = true;
            	resultado = JSON.parse(data);
            }
        }
    });

    if(producto_existente){
    	var nombre_producto = resultado[0].titulo_esp;
    	var descripcion_producto = resultado[0].descripcion_esp;
    	var precio_producto = resultado[0].precio_mxn;
    	var stock = resultado[0].stock_general;
    	var imagenes_secundarias = resultado[0].imagenes_secundarias;
    	var html_imagenes = "";
    	var html_colores = "";
    	var html_tamaños = "";
    	var html_cantidad = "";

    	for(var i = 0; i < $(imagenes_secundarias).size();i++){
    		html_imagenes+= "<div class=\"rsContent\">"+
				                "<img class=\"rsImg\" src=\"imgProductos/secundarias/"+imagenes_secundarias[i].ruta+"\" alt=\"\">"+
				              "</div>";
    	}

    	$("#nombre_camisa").html("+ "+nombre_producto);
    	$("#full-width-slider_shirt").html(html_imagenes);
    	$("#descripcion").html(descripcion_producto);
    	$("#precio").html("$ "+precio_producto+" MXN");
    	$('#full-width-slider_shirt').royalSlider('destroy');

    	setTimeout(function(){
    		
    		$('#full-width-slider_shirt').royalSlider({
		        loop:true,
		        keyboardNavEnabled: true,
		        imageScaleMode: "fill",
		        controlNavigation: "none",
		        navigateByClick: true,
		        usePreloader: true,
		        sliderDrag: false
		    });

    	},100);
    }
}

function search_product(){
	var search_string = $(".search-icon input").val();
	window.location.href = "shirts.php?s="+search_string;
}

function validateRegister(){
	return false;
}