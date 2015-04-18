<?php 
//include("includes/path.php");
function __autoload($nombre_clase) {
	$nombre_clase = strtolower($nombre_clase);
    include 'cp/clases/'.$nombre_clase .'.php';
}

$operaciones = $_REQUEST['operaciones'];
session_start();

switch ($operaciones) {
	case "op":
		$id_producto = $_REQUEST["idp"];
		$producto = new producto($id_producto);
		$producto -> obtener_producto_ajax();
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
	case "ac":
		$id_producto = $_REQUEST["idp"];
		$size = $_REQUEST["size"];
		$amount = $_REQUEST["amount"];
		$producto = new producto($id_producto);
		$producto -> obtener_producto();
		if(isset($_SESSION["braggart_cart"])){
			$cart = $_SESSION["braggart_cart"];
			if($id_producto != 0){
				$unique_id = uniqid();
				$array_producto = array("unique_id" => $unique_id, "id" => $producto -> id_producto, "amount" => $amount, "price" => $producto -> precio_mxn, "name" => $producto -> titulo_esp, "img" => $producto -> img_principal, "size" => $size, "stock" => $producto -> stock_general);
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
				$array_producto = array("unique_id" => $unique_id, "id" => $producto -> id_producto, "amount" => $amount, "price" => $producto -> precio_mxn, "name" => $producto -> titulo_esp, "img" => $producto -> img_principal, "size" => $size, "stock" => $producto -> stock_general);
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
	case "gc":
		if(isset($_SESSION["braggart_cart"])){
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
