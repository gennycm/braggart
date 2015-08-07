<?php 
include("cp/lib/Conekta.php");
function __autoload($nombre_clase) {
	$nombre_clase = strtolower($nombre_clase);
    include 'cp/clases/'.$nombre_clase .'.php';
}

$operaciones = $_POST['operaciones'];
session_start();

switch ($operaciones) {
	case "op":
		$id_producto = $_REQUEST["idp"];
		$producto = new producto($id_producto);
		$producto -> obtener_producto_ajax();
	break;
	case "rp":
		$_SESSION["braggart_pay_token"] = $_POST['conektaTokenId'];
		
		$payment_data = array("nombre" => $_POST["nombre"],
							  "calle" => $_POST["numCalle"],
							  "numExt" => $_POST["numExt"],
							  "numInt" => $_POST["numInt"],
							  "codP" => $_POST["codP"],
							  "colFracc" => $_POST["colFracc"],
							  "municipio" => $_POST["municipio"],
							  "ciudad" => $_POST["ciudad"],
							  "estado" => $_POST["estado"]
							  );
		$user = new userend($_SESSION["braggart_id_user"]);
		$user -> modificar_direccion($payment_data);


		$_SESSION["braggar_payment_data"] = $payment_data;                        
		header("Location: payment2.php");

	break;
	case 'ccc':
		$orden = new orden(0);
		$fecha = date("yy-mm-dd");
		$iduserend = $_SESSION["braggart_id_user"];
		$cart = $_SESSION["braggart_cart"];
		$num_productos = 0;
		$peso_productos = 0;
		foreach ($cart as $product) {
			$num_productos+= $product["amount"];
			$peso_productos+= ($product["amount"] * $product["weight"]);
		}

		$transporte_token = explode("/", $_SESSION["braggart_transport_token"]);
		$id_transporte = $transporte_token[1];
		$id_rango_transporte = $transporte_token[0];

		$payment_data = $_SESSION["braggar_payment_data"];
		$direccion =  $payment_data["calle"]." ".$payment_data["numExt"]." ". $payment_data["numInt"].",\n".$payment_data["colFracc"]." ".$payment_data["ciudad"]." \n ".$payment_data["municipio"]." ".$payment_data["estado"]." ".$payment_data["codP"];
		
		$total_productos = $_SESSION["braggart_total_shop"];
		$estatus = "Por cobrar";

		$peso = $peso_productos;

		$orden -> fecha=$fecha;
		$orden -> iduserend=$iduserend;
		$orden -> num_productos=$num_productos;
		$orden -> total_productos=$total_productos;
		$orden -> estatus=$estatus;
		$orden -> direccion = $direccion;
		$orden -> id_transporte = $id_transporte;
		$orden -> id_rango_transporte = $id_rango_transporte;
		$orden -> peso = $peso;	
		$orden -> order_cart = $cart;
		if($orden -> insertar_orden()){
			Conekta::setApiKey("key_nxPDYXpi5rbSSLQvLLN58Q");
			try{
			  $charge = Conekta_Charge::create(array(
			    "amount"=> intval($_SESSION["braggart_total_shop"])*100,
			    "currency"=> "MXN",
			    "description"=> "Compra de Camisas",
			    "reference_id"=> $orden -> idorden,
			    "card"=> $_SESSION["braggart_pay_token"],
			    "details"=> array(
			      "email"=> $_SESSION["braggart_email_user"]
			      )
			  ));
			}catch (Conekta_Error $e){
			  $orden -> eliminar_orden();
			  header("Location: payment.php?msg=".$e->getMessage()."orden=".$orden -> idorden);			  
			}
			$orden -> modificar_estatus("Pagado");
			header("Location: finished_order.php");
		}

		else{
			header("Location payment3.php?msg=2");
		}
		
		//echo $charge->status;
		break;
	case "ru":
		$email = $_REQUEST["em"];
		$password = $_REQUEST["pass"];
		$user = new userend(0, $email, $password);
		if($user -> disponibilidadCorreo($email)){
			$user -> inserta_userend();
			echo json_encode("true");
		}
		else{
			echo json_encode("registered");
		}
		
	break;
	case "is":
		$email = $_REQUEST["em"];
		$password = $_REQUEST["pass"];
		$user = new userend(0, $email, $password);
		$user -> obtener_usuario_por_login();

		if($user -> iduserend != 0){
			$_SESSION["braggart_id_user"] = $user -> iduserend;
			$_SESSION["braggart_email_user"] = $user -> correo;
			$_SESSION["braggart_user_token"] = $user -> token;
			echo json_encode("true");
		}
		else{
			echo json_encode("false");
		}
		
	break;
	case "cs":
		unset($_SESSION["braggart_id_user"]);
		unset($_SESSION["braggart_email_user"]);
		unset($_SESSION["braggart_user_token"]);
		unset($_SESSION["braggart_cart"]);
		unset($_SESSION["braggart_pay_token"]);
		echo "true";
	break;
	case "aw":
		$id_producto = $_REQUEST["idp"];
		$id_userend = (isset($_SESSION["braggart_id_user"]) && $_SESSION["braggart_id_user"] != 0)? $_SESSION["braggart_id_user"]: 0;
		$wishlist = new wishlist(0, $id_producto , $id_userend, 1);
		if($id_userend != 0){
			if(!$wishlist -> producto_en_wishlist($id_producto, $id_userend)){
				$wishlist -> insertar_wishlist();
				if($wishlist -> id_wishlist != 0){
					echo "true";
				}
				else{
					echo "false";
				}
			}
			else{
				echo "already";
			}
			
		}
		else{
			echo "login";
		}
	break;
	case "ew":
		$id_producto = $_REQUEST["idp"];
		$id_userend = (isset($_SESSION["braggart_id_user"]) && $_SESSION["braggart_id_user"] != 0)? $_SESSION["braggart_id_user"]: 0;
		if($id_userend != 0){
			$wishlist = new wishlist(0, $id_producto , $id_userend, 1);
			if($wishlist -> eliminar_wishlist()){
				echo "true";
			}
			else{
				echo "false";
			}
		}
		else{
			echo "login";
		}
	break;
	case "gw":
		$id_userend = (isset($_SESSION["braggart_id_user"]) && $_SESSION["braggart_id_user"] != 0)? $_SESSION["braggart_id_user"]: 0;
		if($id_userend != 0){
			$wishlist = new wishlist();
			$wishlist -> id_userend = $id_userend;
			$wishlists = $wishlist -> listar_wishlist();
			$productos = array();
			foreach ($wishlists as $wishlist) {
				$id_producto = $wishlist["id_producto"];
				$producto = new producto($id_producto);
				$producto -> obtener_producto();
				array_push($productos,$producto);
			}
			echo json_encode($productos);
		}
		else{
			echo "empty";
		}
		
	break;
	case "gs":
		$id_producto = $_POST["idp"];
		$size = $_POST["size"];
		$nombre_combinacion = "";
		switch ($size) {
				case 'S':
					$nombre_combinacion = "Chica";
					break;
				case 'M':
					$nombre_combinacion = "Mediana";
					break;
				case 'L':
					$nombre_combinacion = "Grande";
					break;
				case 'XL':
					$nombre_combinacion = "X Grande";
					break;	
				default:
					break;
		}

		$combinacion = new combinacion( 0, $id_producto);
		$combinaciones = $combinacion -> listar_combinaciones_por_producto();
		foreach ($combinaciones as $combinacion_tmp){
			if($combinacion_tmp["nombre"] == $nombre_combinacion){
				echo json_encode($combinacion_tmp["stock"]);
				break;
			}
		}
	break;
	case "ac":
		$id_producto = $_REQUEST["idp"];
		$size = $_REQUEST["size"];
		$amount = $_REQUEST["amount"];
		$producto = new producto($id_producto);
		$producto -> obtener_producto();
		$id_combinacion = 0;

		$nombre_combinacion = "";
		switch ($size) {
				case 'S':
					$nombre_combinacion = "Chica";
					break;
				case 'M':
					$nombre_combinacion = "Mediana";
					break;
				case 'L':
					$nombre_combinacion = "Grande";
					break;
				case 'XL':
					$nombre_combinacion = "X Grande";
					break;	
				default:
					break;
		}

		$combinacion = new combinacion( 0, $id_producto);
		$combinaciones = $combinacion -> listar_combinaciones_por_producto();
		foreach ($combinaciones as $combinacion_tmp){
			if($combinacion_tmp["nombre"] == $nombre_combinacion){
				$id_combinacion = $combinacion_tmp["id_combinacion"];
				break;
			}
		}


		if(isset($_SESSION["braggart_cart"])){
			$cart = $_SESSION["braggart_cart"];
			if($id_producto != 0){
				$unique_id = uniqid();
				$precio_real = $producto -> precio_mxn * (1 + ($producto -> impuesto / 100));
				$array_producto = array("unique_id" => $unique_id, "id" => $producto -> id_producto, "amount" => $amount, "price" => $precio_real , "name" => $producto -> titulo_esp, "img" => $producto -> img_principal, "size" => $size, "stock" => $producto -> stock_general, "weight" => $producto -> peso, "id_combinacion" => $id_combinacion);
				array_push($cart, $array_producto);
				$_SESSION["braggart_cart"] = $cart;
				echo json_encode("true");
			}
			else{
				echo json_encode("false");
			}
		}
		else{
			$cart = array();
			if($id_producto != 0){
				$unique_id = uniqid();
				$precio_real = $producto -> precio_mxn * (1 + ($producto -> impuesto / 100));
				$array_producto = array("unique_id" => $unique_id, "id" => $producto -> id_producto, "amount" => $amount, "price" => $precio_real, "name" => $producto -> titulo_esp, "img" => $producto -> img_principal, "size" => $size, "stock" => $producto -> stock_general, "weight" => $producto -> peso, "id_combinacion" => $id_combinacion);
				array_push($cart, $array_producto);
				$_SESSION["braggart_cart"] = $cart;
				echo json_encode("true");
			}
			else{
				echo json_encode("false");
			}
		}
	break;
	case "ep":
		$unique_id = $_REQUEST["idp"];
		if(isset($_SESSION["braggart_cart"])){
			$found = false;
			$newCart = array();
			$cart = $_SESSION["braggart_cart"];
			foreach ($cart as $array_producto){
				if($array_producto["unique_id"] != $unique_id){
					array_push($newCart, $array_producto);
				}
				else{
					$found = true;
				}
			}
			$_SESSION["braggart_cart"] = $newCart;
			if($found){
				echo json_encode("true");
			}
			else{
				echo json_encode("notfound");
			}
			
		}
		else{
			echo json_encode("false");
		}
	break;
	case "cht":
		if(isset($_POST["transporte"])){
			$_SESSION["braggart_transport_token"] = $_POST["transporte"];
			header("Location: payment3.php");
		}
		else{
			header("Location: payment2.php");
		}

	break;
	case "gc":
		if(isset($_SESSION["braggart_cart"]) && count($_SESSION["braggart_cart"]) > 0){
			$cart = $_SESSION["braggart_cart"];
			$cart2 = array();
			foreach ($cart as $key => $product) {
				$id = $product["id"];
				$producto = new producto($id);
				$producto -> obtener_producto();
				$product["stock"] = $producto -> stock_general;
				array_push($cart2, $product);
			}
			$cart = $cart2;
			echo json_encode($cart);
		}
		else{
			echo json_encode("empty");
		}
	break;
	case "rc":
		if(isset($_SESSION["braggart_cart"])){
			$_SESSION["braggart_cart"] = array();
		}
	break;
	/*case "listar_proyecto_categoria":
		$id_categoria = $_REQUEST["id_categoria"];
		$proyecto = new proyecto();
		$proyecto -> listar_proyecto_categoria_ajax($id_categoria);
	break;*/
	/*case "obtener_proyecto_siguiente":
		$id_proyecto = $_REQUEST["id_proyecto"];
		$proyecto = new proyecto($id_proyecto);
		$proyecto -> obtener_proyecto();
		$proyecto -> obtener_id_proyecto_siguiente();
	break;
	case "obtener_proyecto_anterior":
		$id_proyecto = $_REQUEST["id_proyecto"];
		$proyecto = new proyecto($id_proyecto);
		$proyecto -> obtener_proyecto();
		$proyecto -> obtener_id_proyecto_anterior();
	break;
	case "obtener_proyecto_por_urlamigable":
		$url_amigable = $_REQUEST["url_amigable"];
		$proyecto = new proyecto();
		$proyecto -> url_amigable = $url_amigable;
		echo $proyecto -> obtener_id_proyecto_por_urlamigable();
	break;
	case "cambiar_idioma":
			$lang = $_REQUEST["lang"];
            session_start();
            $_SESSION['lang'] = $lang;
    break;*/
	default:
	break;
}
