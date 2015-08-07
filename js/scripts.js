
/*Scrolling control*/

 var $window= $(window),
                win_height_padded = $window.height() * 1.1,
                isTouch= Modernizr.touch;




/**-------------------------------------------------------------------**/


$('.navbar-default .navbar-nav> a').click(function(event){
    event.preventDefault();
});

$(".cart-icon a").click(function(event){
    event.preventDefault();
});

$(".times-icon").click(function(event){
    event.preventDefault();
});

$('#menu_a').click(function(event){
    event.preventDefault();
});

$('#menu_chevron').click(function(event){
    event.preventDefault();
});

$('.sidebar').click(function(event){
    event.preventDefault();
});

$('#s,#m,#l,#xl').click(function(event){
    event.preventDefault();
});

$('#add_to_cart_button').click(function(event){
    event.preventDefault();
});


/*LOADING STUFF
 $(function() {
    var paths = $('path:not(defs path)');
    var tlLoad  = new TimelineLite();
        tlLoad.add([
        //La tienda front letters
            TweenLite.to(paths.eq(0), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(1), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(2), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(3), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(4), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(5), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(6), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(7), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(8), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(9), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(10), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(11), 0.7, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(paths.eq(12), 0.7, {strokeDashoffset: 0, delay: 0.0}),    
        ]);
    });


/**---------------------------------------------------------------------------**/

var size = "none";

function setSize(id, shirt_size){
    $(".img-size").css({borderColor:"white"});
    $("#img-"+id).css({borderColor:"gray"});
    size = shirt_size;
}

//Show -  Hide Menu
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


//Show - hide cart

function display_cart(){
    $(".shopping-cart").animate({marginRight:"0px"});
}

function hide_cart(){
    var width = $(".shopping-cart").width();
    $(".shopping-cart").animate({marginRight:"-"+width+"px"});

}

//Show - hide cart

function display_login(){
    $(".login_sidebar").animate({marginRight:"0px"});
    console.log("hey");
}

function hide_login(){
    var width = $(".login_sidebar").width();
    $(".login_sidebar").animate({marginRight:"-"+width+"px"});

}




// hide product_info

function hide_info(){
    var width = $(".product_info").width();
    $(".product_info").animate({marginLeft:"-"+width+"px"});
}


//Show -hide WISHLIST

function display_wishlist(){
    $(".wishlist").animate({marginLeft:"0px"});
    console.log("in wishlist");
}

function hide_wishlist(){
     var width = $(".wishlist").width();
    $(".wishlist").animate({marginLeft:"-"+width+"px"});
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
    var password = $("input[name='regPassword']").val();
    var password2 = $("input[name='confPassword']").val();

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

    var mensaje = "";

function registerUser(){
    var email = $("input[name='email']").val();
    var password = $("input[name='regPassword']").val();

    var data = new FormData;
        data.append('operaciones',"ru");
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
            if(data.indexOf("true") != -1){
                mensaje = "¡Gracias por registrarte! "+ email;
                $("input[name='email']").val("");
                $("input[name='regPassword']").val("");
                $("input[name='confPassword']").val("");
            }
            if(data.indexOf("false") != -1){
                mensaje = "No te pudimos registrar, intentalo de nuevo.";
            }
            if(data.indexOf("registered") != -1){
                mensaje = "Este correo ya esta registrado, intenta con uno nuevo.";
            }

            $("#header-modal").html("Registro de Usuario");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });
}

function validateUserLogin(){
    var email = $("input[name='email-login']").val();
    var password = $("input[name='pass-login']").val();

    var camposLlenados = false;

    if(email != "" && password != ""){
        logIn();
    }
    else{
        if(email == ""){
            $("#p-email-login").css({borderColor:"red"});
        }
        else{
            $("#p-email-login").css({borderColor:"green"});
        }

        if(password == ""){
            $("#p-pass-login").css({borderColor:"red"});
        }
        else{
            $("#p-pass-login").css({borderColor:"green"});
        }

        $("#header-modal").html("Inicio de Sesión");
        $("#content-modal").html("Llena todos los campos para continuar.");
        $('#myModal').modal('toggle');
    }
}

function showMessage(message, header){
            $("#header-modal").html(header);
            $("#content-modal").html(message);
            $('#myModal').modal('toggle');
}

function logIn(){
    var email = $("input[name='email-login']").val();
    var password = $("input[name='pass-login']").val();

    var data = new FormData;
        data.append('operaciones',"is");
        data.append("em", email);
        data.append("pass", password);
    var resultado;
    var mensaje = "";

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
                mensaje = "¡Bienvenido "+ email+"!";
                $("input[name='email-login']").val("");
                $("input[name='pass-login']").val("");
                var newHtml = '<li><a href="#" class="sb-open-right" id="login-button">'+email+'</a></li>'+
                              '<li><a href="#" onclick="logOut()"> Cerrar Sesión</a></li>'+
                              '<li><a href="#" onclick="hide_menu()"><i class="fa fa-chevron-up"></i></a></li>';
                $(".navbar-right").html(newHtml);
                hide_login();
            }
            if(data.indexOf("false") != -1){
                mensaje = "Usuario o contraseña incorrectos, intentalo de nuevo.";
            }

            $("#header-modal").html("Inicio de Sesión");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });
}

function logOut(){
    var data = new FormData;
        data.append('operaciones',"cs");
    var resultado;
    var mensaje = "";

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("true") != -1){
                mensaje = "Se ha cerrado tu sesión con éxito.";
                var newHtml = '<li><a href="#" class="sb-open-right" id="login-button">INICIAR SESI&Oacute;N | REGISTRO</a></li>'+
                              '<li><a href="#" id="menu_chevron" onclick="hide_menu()"><i class="fa fa-chevron-up"></i></a></li>';
                $(".navbar-right").html(newHtml);
                $(".sb-close").click();
            }
            if(data.indexOf("false") != -1){
                mensaje = "No se pudo cerrar tu sesión, intentalo de nuevo.";
            }

            $("#header-modal").html("Cerrar Sesión");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });
}

var last_id_searched = 0;
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
            if(data != ""){
            	producto_existente = true;
            	resultado = JSON.parse(data);
                console.log(resultado);
            }
        }
    });

    if(producto_existente){
        var id_producto = resultado[0].id_producto;
        last_id_searched = id_producto;
    	var nombre_producto = resultado[0].titulo_esp;
    	var descripcion_producto = resultado[0].descripcion_esp;
    	var precio_producto = resultado[0].precio_mxn;
        var impuesto = resultado[0].impuesto;
    	var stock = resultado[0].stock_general;
    	var imagenes_secundarias = resultado[0].imagenes_secundarias;
        var stock_s = resultado[0].S;
        var stock_m = resultado[0].M;
        var stock_l = resultado[0].L;
        var stock_xl = resultado[0].XL;
    	var html_imagenes = "";
        var html_qty = "";
    	var html_colores = "";
    	var html_tamaños = "";
    	var html_cantidad = "";

    	for(var i = 0; i < $(imagenes_secundarias).size();i++){
    		html_imagenes+= "<div class=\"rsContent\">"+
				                "<img class=\"rsImg\" src=\"imgProductos/secundarias/"+imagenes_secundarias[i].ruta+"\" alt=\"\">"+
				              "</div>";
    	}

        for(var i = 0; i < stock; i++){
            html_qty += '<option value="'+(i + 1)+'">'+(i + 1)+'</option>';
        }   
    	$("#nombre_camisa").html("+ "+nombre_producto);
    	$("#full-width-slider_shirt").html(html_imagenes);
    	$("#descripcion").html(descripcion_producto);
        precio_producto = precio_producto * (1 + impuesto / 100);
        precio_producto = precio_producto.toFixed(2);
    	$("#precio").html("$ "+precio_producto+" MXN");
    	$('#full-width-slider_shirt').royalSlider('destroy');
        $("#qty2").html(html_qty);

        if(stock_s > 0){
            $("#s").show();
        }
        else{
            $("#s").hide();
        }
        if(stock_m > 0){
            $("#m").show();
        }
        else{
            $("#m").hide();
        }
        if(stock_l > 0){
             $("#l").show();
        }
        else{
            $("#l").hide();
        }
        if(stock_xl > 0){
             $("#xl").show();
        }
        else{
            $("#xl").hide();
        }

        $("#add_to_cart_button").attr("onclick", "addProductToCart("+id_producto+")");


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

            $(".product_info").animate({marginLeft:"0px"});
            console.log("Open");

}

function getStock(size){
    var producto_existente = false;
    var data = new FormData;
        data.append('operaciones',"gs");
        data.append("idp", last_id_searched);
        data.append("size", size);
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
            if(data != ""){
                producto_existente = true;
                resultado = JSON.parse(data);
                console.log(resultado);
            }
        }
    });

    if(resultado > 0){
        var i = 0;
        var html_options = "";
        while(i < resultado){
            html_options += "<option value="+( i + 1)+"> "+( i + 1)+" </option>" 
            i++;
        }

        $("#qty2").html(html_options);
    }
}


function addProductToCart(id_product){
    var producto_existente = false;
    var amount = $("#qty2").val();
    var data = new FormData;
        data.append('operaciones',"ac");
        data.append("idp", id_product);
        data.append("size", size);
        data.append("amount", amount);
    var resultado;

    if(size == "none"){
        mensaje = "Selecciona una talla para continuar.";
        $("#header-modal").html("Agregar Producto");
        $("#content-modal").html(mensaje);
        $('#myModal').modal('toggle');
        return;
    }

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("false") != -1){
                mensaje = "No se pudo agregar el producto al carrito. Inténtalo de nuevo.";
            }
            if(data.indexOf("true") != -1){
                mensaje = "Se agrego el producto a tu carrito.";
                size = "none";
                updateCart();
            }

            $("#header-modal").html("Agregar Producto");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });

}

updateCart();
function updateCart(){
    var data = new FormData;
        data.append('operaciones',"gc");
    var resultado;
    var carrito_vacio = true;

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("empty") != -1){

            }
            else{
                carrito_vacio = false;
                resultado = JSON.parse(data);
            }
        }
    });

    if(!carrito_vacio){
        var total_carrito = 0;
        var html_carrito = "";
        for (var i = 0; i < $(resultado).size(); i++){
            var unique_id = resultado[i].unique_id;
            var id_producto = resultado[i].id;
            var nombre = resultado[i].name;
            var precio = resultado[i].price;
            var img_principal = resultado[i].img;
            var cantidad = resultado[i].amount;
            var size = resultado[i].size;
            var stock  = resultado[i].stock;
            var html_size = "";
            var html_producto = "";
            total_carrito = parseInt(total_carrito) + parseInt(precio) * parseInt(cantidad);
            /*switch(size){
                case "S":
                    html_size = '<select class="size">'+
                                    '<option selected>S</option>'+
                                    '<option>M</option>'+
                                    '<option>L</option>'+
                                    '<option>XL</option>'+
                                '</select>';
                break;
                case "M":
                    html_size = '<select class="size">'+
                                    '<option>S</option>'+
                                    '<option selected>M</option>'+
                                    '<option>L</option>'+
                                    '<option>XL</option>'+
                                '</select>';
                break;
                case "L":
                    html_size = '<select class="size">'+
                                    '<option selected>S</option>'+
                                    '<option>M</option>'+
                                    '<option selected>L</option>'+
                                    '<option>XL</option>'+
                                '</select>';
                break;
                case "XL":
                    html_size = '<select class="size">'+
                                    '<option>S</option>'+
                                    '<option>M</option>'+
                                    '<option>L</option>'+
                                    '<option selected>XL</option>'+
                                '</select>';
                break;
            }*/

            /*var html_stock = "";
            for(var j = 0; j < stock; j++){
                if(j + 1 == cantidad){
                   html_stock += "<option selected value='"+(j + 1)+"'>"+(j + 1)+"</option>";
                }
                else{
                   html_stock += "<option value='"+(j + 1)+"'>"+(j + 1)+"</option>";

                }
            }*/

            html_producto = '<tr>'+
                                //'<td><div class="color-square-shirt-cart" style="background-color:#000;"></div></td>'+
                                '<td class="shirt-name"><img src="imgProductos/'+img_principal+'" class="cart_shirt"><p class="cart_name">+ '+nombre+'</p></td>'+
                                '<td class="shirt-num">'+
                                /*'<label class="select">'+
                                    '<select class="qty">'+
                                        html_stock +
                                    '</select>'+*/
                                    cantidad +
                                /*'</label>'+*/                 
                                '</td>'+
                                '<td class="shirt-size">'+
                                /*'<label class="select">'+
                                html_size*/ size +
                                /*'</label>'+*/
                                '</td>'+
                                '<td class="shirt-price">$'+parseInt(precio)+' MXN</td>'+
                                '<td class="delete-icon" onclick="deleteProductFromCart(\''+unique_id+'\')" style="cursor:pointer;"><i class="fa fa-times"></i></td>'+
                            '</tr>';
            html_carrito+= html_producto;
        }
        $("#cart-body").html(html_carrito);
        $("#button_pay").html("$"+total_carrito+" MXN");
        $("#button_pay").show();

    }
    else{
        $("#button_pay").hide();
    }
        
}

function deleteProductFromCart(unique_id){
    var data = new FormData;
        data.append('operaciones',"ep");
        data.append('idp', unique_id);

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("false") != -1){
                mensaje = "No se pudo eliminar el producto al carrito. Inténtalo de nuevo.";
            }
            if(data.indexOf("true") != -1){
                mensaje = "Se elimino el producto a tu carrito.";
                updateCart();
            }
            if(data.indexOf("notfound") != -1){
                 mensaje = "No se encontró el producto en tu carrito, o ya expiró.";
            }

            $("#header-modal").html("Eliminar Producto");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });
}

function resetCart(){
    var data = new FormData;
        data.append('operaciones',"rc");

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            updateCart();
        }
    });
}

function search_product(){
	var search_string = $(".search-icon input").val();
	window.location.href = "shirts.php?s="+search_string;
}

function addWishlist(id_product){
    var producto_existente = false;
    var data = new FormData;
        data.append('operaciones',"aw");
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
            if(data.indexOf("false") != -1){
                mensaje = "No se pudo agregar el producto al wishlist. Inténtalo de nuevo.";
            }
            if(data.indexOf("true") != -1){
                mensaje = "Se agrego el producto a tu wishlist.";
                updateWishlist();
            }
            if(data.indexOf("login") != -1){
                mensaje = "Inicia sesión para agregar productos a tu wishlist.";
                updateWishlist();
            }

            $("#header-modal").html("Agregar Wishlist");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });

}

updateWishlist();
function updateWishlist(){
    var data = new FormData;
        data.append('operaciones',"gw");
    var resultado;
    var wishlist_vacio = true;

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("empty") != -1){

            }
            else{
                wishlist_vacio = false;
                resultado = JSON.parse(data);
            }
        }
    });

    if(!wishlist_vacio){
        var total_wishlist = 0;
        var html_wishlist = "";
        for (var i = 0; i < $(resultado).size(); i++){
            console.log(resultado);
            var id_producto = resultado[i].id_producto;
            var nombre = resultado[i].titulo_esp;
            var precio = resultado[i].precio_mxn;
            var img_principal = resultado[i].img_principal;
            var html_producto = "";

            html_producto = '<tr>'+
                                //'<td><div class="color-square-shirt-cart" style="background-color:#000;"></div></td>'+
                                '<td class="shirt-name"><img src="imgProductos/'+img_principal+'" class="cart_shirt">+ '+nombre+'</td>'+
                                '<td class="shirt-price">$'+parseInt(precio)+' MXN</td>'+
                                '<td class="shop-icon center" onclick="showProductoInfo(\''+id_producto+'\'), hide_wishlist()" style="cursor:pointer;"><i class="fa fa-shopping-cart fa-lg"></td>'+
                                '<td class="delete-icon" onclick="deleteProductFromWishlist(\''+id_producto+'\')" style="cursor:pointer;"><i class="fa fa-times"></i></td>'+
                            '</tr>';
            html_wishlist+= html_producto;
        }
        $("#wishlist_body").html(html_wishlist);
    }
}

function deleteProductFromWishlist(id_producto){
    var data = new FormData;
        data.append('operaciones',"ew");
        data.append('idp', id_producto);

    $.ajax({ 
        url: mypath+"controller.php",
        type:'POST',
        contentType:false,
        data:data,
        processData:false,
        cache:false,
        async:false,
        success:function(data){
            if(data.indexOf("false") != -1){
                mensaje = "No se pudo eliminar el producto del wishlist. Inténtalo de nuevo.";
            }
            if(data.indexOf("true") != -1){
                mensaje = "Se eliminó el producto de tu wishlist.";
                updateWishlist();
            }
            if(data.indexOf("notfound") != -1){
                 mensaje = "No se encontró el producto en tu wishlist.";
            }

            $("#header-modal").html("Eliminar Wishlist");
            $("#content-modal").html(mensaje);
            $('#myModal').modal('toggle');
        }
    });
}

