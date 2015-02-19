<?php
/*
 * @Author: Luis Josué Caamal Barbosa.
 * @Description: Este script controla todas las operaciones del sistema.
 * @Copyright: Locker Agencia Creativa.
*/
session_start();
function __autoload($nombre_clase) {
	//$nombre_clase = strtolower($nombre_clase);
    include 'clases/'.$nombre_clase .'.php';
}

$operaciones=$_REQUEST['operaciones'];
switch($operaciones){
	case 'ordenar':
		if($_REQUEST['desde'] == 'slide'){
			$val = ($_REQUEST['idorden']);
			$val2 = array_reverse($val);
			for($i=0; $i < count($val2); $i++)
			{
				$slide = new slide($val2[$i]);
				$slide -> ordenaSlide($i);
				
			}		
		}
		if($_REQUEST['desde'] == 'noticia'){
			$val = ($_REQUEST['idorden']);
			$val2 = array_reverse($val);
			for($i=0; $i < count($val2); $i++)
			{
				$noticia = new noticia($val2[$i]);
				$noticia -> ordenaNoticia($i);
				
			}
		}	
		if($_REQUEST['desde'] == 'imgproducto'){
			$val = ($_REQUEST['idorden']);
			$val2 = array_reverse($val);
			for($i=0; $i < count($val2); $i++)
			{
				$producto = new producto();
				$producto -> ordenar_img_secundarias_producto($i,$val2[$i]);
								
				
			}			
		}
		if($_REQUEST['desde'] == 'secundarias'){
			$val = ($_REQUEST['idorden']);
			$val2 = array_reverse($val);
			for($i=0; $i < count($val2); $i++)
			{
				$proyecto = new proyectos();
				$proyecto -> ordenarProyectoimg($val2[$i],$i);
				
			}			
		}
	break;
	case 'listaprueba':
		$dr = new userend();
		$l = $dr->listaTodos();
		print_r($l);
	break;
	case 'modificarcontacto':
		$contacto = new contacto($_REQUEST['idcontacto'],$_REQUEST['correo'],$_REQUEST['emisor']);
		$contacto->modificar_contacto();
		header('location: formcontacto.php?success=2');
	break;
	
	/*IMPUESTOS*/
	case 'agregarimpuesto':
		$impuesto = new impuesto($_REQUEST['id_impuesto'],$_REQUEST['nombre'],$_REQUEST['porcentaje']);
		$impuesto ->insertar_impuesto();
		header('location: listimpuesto.php?success=1');
	break;
	case 'modificarimpuesto':
		$impuesto = new impuesto($_REQUEST['id_impuesto'],$_REQUEST['nombre'],$_REQUEST['porcentaje']);
		$impuesto -> modificar_impuesto();
		header('location: listimpuesto.php?success=2');
	break;
	case 'operaimpuesto':
		if(isset($_REQUEST['id_impuesto'])){
			$select=$_REQUEST['operador'];
			$check=$_REQUEST['id_impuesto'];
			if($select == 'Eliminar'){
				foreach ($check as $elemento) {
					$impuesto = new impuesto();
					$impuesto -> id_impuesto = $elemento;
					$impuesto -> eliminar_impuesto();
				}
				header('location: listimpuesto.php?success=3');
			}
		}
		else{
			header('location: listimpuesto.php?success=0');
		}				
	break;
	/*IMPUESTOS*/
	/**********************FAQ***********************/
	case "modificar_faq":
			$contenido_esp = (isset($_REQUEST['contenido_esp']))? htmlspecialchars($_REQUEST['contenido_esp'], ENT_QUOTES) : "";
			$contenido_eng = (isset($_REQUEST['contenido_eng']))? htmlspecialchars($_REQUEST['contenido_eng'], ENT_QUOTES) : $contenido_esp;
			$id_faq = (isset($_REQUEST['id_faq']))? $_REQUEST['id_faq'] : 0;

			if($id_faq != 0){
				$faq = new faq($id_faq, $contenido_esp, $contenido_eng);
				$faq -> modificar_faq();
				header('location: formfaq.php?success=2');
			}
			header('location: formfaq.php?success=0');
	break;
	/**********************FAQ***********************/
	/***********REDES SOCIALES***************/
	case 'modificar_redes_sociales':
		$facebook = (isset($_REQUEST['facebook']))? $_REQUEST['facebook'] : "";
		$twitter = (isset($_REQUEST['twitter']))? $_REQUEST['twitter'] : "";
		$instagram = (isset($_REQUEST['instagram']))? $_REQUEST['instagram'] : "";
		$pinterest = (isset($_REQUEST['pinterest']))? $_REQUEST['pinterest'] : "";

		$redes_sociales = new redes_sociales(1, $facebook, $twitter, $instagram, $pinterest);
		$redes_sociales -> modificar_redes_sociales();
		header('location: formredsocial.php?success=2');
	break;
	/***********REDES SOCIALES***************/
	/*ATRIBUTOS Y VALORES*/
	case 'agregar_valor':
		$id_atributo = (isset($_REQUEST['id_atributo']))? $_REQUEST['id_atributo'] : "";
		$nombre_esp = (isset($_REQUEST['nombre_esp']))? $_REQUEST['nombre_esp'] : "";
		$nombre_eng = (isset($_REQUEST['nombre_eng']))? $_REQUEST['nombre_eng'] : "";
		$status = (isset($_REQUEST['status']))? $_REQUEST['status'] : "";

		$valor = new valor(0, $id_atributo, $nombre_esp, $nombre_eng, $status);
		$valor -> insertar_valor();
		echo "true";
	break;
	case 'modificar_valor':
		$id_valor = (isset($_REQUEST['id_valor']))? $_REQUEST['id_valor'] : "";
		$id_atributo = (isset($_REQUEST['id_atributo']))? $_REQUEST['id_atributo'] : "";
		$nombre_esp = (isset($_REQUEST['nombre_esp']))? $_REQUEST['nombre_esp'] : "";
		$nombre_eng = (isset($_REQUEST['nombre_eng']))? $_REQUEST['nombre_eng'] : "";
		$status = (isset($_REQUEST['status']))? $_REQUEST['status'] : "";

		$valor = new valor($id_valor, $id_atributo, $nombre_esp, $nombre_eng, $status);
		$valor -> modificar_valor();
		echo "true";
	break;
	case 'eliminar_valor':
		$id_valor = (isset($_REQUEST['id_valor']))? $_REQUEST['id_valor'] : 0;
		$id_atributo = (isset($_REQUEST['id_atributo']))? $_REQUEST['id_atributo'] : 0;
		if($id_valor != 0 && $id_atributo != 0){
			$valor = new valor($id_valor, $id_atributo);
			$valor -> eliminar_valor();
			echo "true";
		}
		else{
			echo "false";
		}
		
	break;
	case 'activar_valor':
		$id_valor = (isset($_REQUEST['id']))? $_REQUEST['id'] : "";
		$valor = new valor($id_valor);
		$valor -> activar_valor();
		echo "true";
	break;
	case 'desactivar_valor':
		$id_valor = (isset($_REQUEST['id']))? $_REQUEST['id'] : "";
		$valor = new valor($id_valor);
		$valor -> desactivar_valor();
		echo "true";
	break;
	case 'agregaratributo':
		$nombre_esp = (isset($_REQUEST['nombre_esp']))? $_REQUEST['nombre_esp'] : "";
		$nombre_eng = (isset($_REQUEST['nombre_eng']))? $_REQUEST['nombre_eng'] : "";
		$status = (isset($_REQUEST['status']))? $_REQUEST['status'] : "";

		$atributo = new atributo(0, $nombre_esp, $nombre_eng, $status);
		$atributo -> insertar_atributo();
		header('location: listatributo.php?success=1');
	break;
	case 'modificaratributo':
		$id_atributo = (isset($_REQUEST['id_atributo']))? $_REQUEST['id_atributo'] : "";
		$nombre_esp = (isset($_REQUEST['nombre_esp']))? $_REQUEST['nombre_esp'] : "";
		$nombre_eng = (isset($_REQUEST['nombre_eng']))? $_REQUEST['nombre_eng'] : "";
		$status = (isset($_REQUEST['status']))? $_REQUEST['status'] : "";

		$atributo = new atributo(0, $nombre_esp, $nombre_eng, $status);
		$atributo -> modificar_atributo();
		header('location: listatributo.php?success=2');
	break;
	case "activar_atributo":
		$atributo = new atributo();
		$atributo -> id_atributo = $_REQUEST["id"];
		$atributo -> activar_atributo();
	break;
	case "desactivar_atributo":
		$atributo = new atributo();
		$atributo -> id_atributo = $_REQUEST["id"];
		$atributo -> desactivar_atributo();
	break;
	case 'operaatributo':
		if(isset($_REQUEST['id_atributo'])){
			$select=$_REQUEST['operador'];
			$check=$_REQUEST['id_atributo'];
			if($select == 'Eliminar'){
				foreach ($check as $elemento) {
					$atributo = new atributo();
					$atributo -> id_atributo = $elemento;
					$atributo -> eliminar_atributo();
				}
				header('location: listatributo.php?success=3');
			}
			if($select == 'Mostrar'){
				foreach ($check as $elemento) {
					$atributo = new atributo();
					$atributo -> id_atributo = $elemento;
					$atributo -> activar_atributo();
				}
				header('location: listatributo.php?success=4');
			}
			if($select == 'No Mostrar'){
				foreach ($check as $elemento) {
					$atributo = new atributo();
					$atributo -> id_atributo = $elemento;
					$atributo -> desactivar_atributo();
				}
				header('location: listatributo.php?success=5');
			}
		}
		else{
			header('location: listatributo.php?success=0');
		}				
	break;
	/*ATRIBUTOS Y VALORES*/
	/*Transporte*/
	case 'agregar_rango':
		$rango_transporte = new rango_transporte(0, $_REQUEST['peso_maximo'],$_REQUEST['peso_minimo'], $_REQUEST['cargo_por_envio'], $_REQUEST["id_transporte"], 1);
		$rango_transporte ->insertar_rango_transporte();
		echo $rango_transporte -> id_rango_transporte;
	break;
	case 'modificar_rango':
		$rango_transporte = new rango_transporte($_REQUEST['id_rango_transporte'], $_REQUEST['peso_maximo'],$_REQUEST['peso_minimo'], $_REQUEST['cargo_por_envio'], $_REQUEST["id_transporte"], $_REQUEST['status']);
		$rango_transporte ->modificar_rango_transporte();
		echo $rango_transporte -> id_rango_transporte;
	break;
	case 'eliminar_rango':
		$rango_transporte = new rango_transporte($_REQUEST['id_rango_transporte']);
		$rango_transporte ->eliminar_rango_transporte();
		echo "true";
	break;
	case 'activar_rango':
		$rango_transporte = new rango_transporte($_REQUEST['id_rango_transporte']);
		$rango_transporte ->activar_rango_transporte();
		echo "true";
	break;
	case 'desactivar_rango':
		$rango_transporte = new rango_transporte($_REQUEST['id_rango_transporte']);
		$rango_transporte ->desactivar_rango_transporte();
		echo "true";
	break;
	case 'agregartransporte':
		if(isset($_FILES['archivo']['name']))
		{
			$nameP=$_FILES['archivo']['name'];
			$nameT=$_FILES["archivo"]["tmp_name"];
		}
		else
		{
			$nameP='';
			$nameT='';
		}
		// 	function transporte ($id_transporte = 0, $nombre = "", $tiempo_transito = "", $img_principal = "", $img_principal_temporal = '', $status = 0)
		$transporte = new transporte(0, $_REQUEST['nombre'],$_REQUEST['tiempo_transito'],htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES) ,$nameP, $nameT, $_REQUEST["status"]);
		$transporte ->insertar_transporte();
		header('location: listtransporte.php?success=1');
	break;
	case 'modificartransporte':
		if(isset($_FILES['archivo']['name']))
		{
			$nameP=$_FILES['archivo']['name'];
			$nameT=$_FILES["archivo"]["tmp_name"];
		}
		else
		{
			$nameP='';
			$nameT='';
		}
		// 	function transporte ($id_transporte = 0, $nombre = "", $tiempo_transito = "", $img_principal = "", $img_principal_temporal = '', $status = 0)
		$transporte = new transporte($_REQUEST["id_transporte"], $_REQUEST['nombre'],$_REQUEST['tiempo_transito'],htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES) ,$nameP, $nameT, $_REQUEST["status"]);
		$transporte -> modificar_transporte();
		header('location: listtransporte.php?success=2');
	break;
	case 'operatransporte':
		if(isset($_REQUEST['id_transporte'])){
			$select=$_REQUEST['operador'];
			$check=$_REQUEST['id_transporte'];
			if($select == 'Eliminar'){
				foreach ($check as $elemento) {
					$transporte = new transporte();
					$transporte -> id_transporte = $elemento;
					$transporte -> eliminar_transporte();
				}
				header('location: listtransporte.php?success=3');
			}
			if($select == 'Mostrar'){
				foreach ($check as $elemento) {
					$transporte = new transporte();
					$transporte -> id_transporte = $elemento;
					$transporte -> activar_transporte();
				}
				header('location: listtransporte.php?success=4');
			}
			if($select == 'No Mostrar'){
				foreach ($check as $elemento) {
					$transporte = new transporte();
					$transporte -> id_transporte = $elemento;
					$transporte -> desactivar_transporte();
				}
				header('location: listtransporte.php?success=5');
			}
		}
		else{
			header('location: listtransporte.php?success=0');
		}				
	break;
	case 'activartransporte':
		$transporte = new transporte($_REQUEST['id']);
		$transporte -> activar_transporte();
	break;
	case 'desactivartransporte':
		$transporte = new transporte($_REQUEST['id']);
		$transporte -> desactivar_transporte();
	break;
	case 'buscartransporte':
		$transporte = new transporte();
		$transporte -> buscar_transporte_por_ajax($_REQUEST['cadena']);
	break;
	case 'listacategoria':
		$transporte = new transporte();
		$transporte -> limit_transporte();
	break;
	/*Transporte*/
	/*MARCA*/
	case 'agregar_marca':
		if(isset($_FILES['archivo']['name']))
		{
			$nameP=$_FILES['archivo']['name'];
			$nameT=$_FILES["archivo"]["tmp_name"];
		}
		else
		{
			$nameP='';
			$nameT='';
		}
		$marca = new marca(0, $_REQUEST['nombre'],htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES) ,$nameP, $nameT);
		$marca ->insertar_marca();
		header('location: listmarca.php?success=1');
	break;
	case 'modificar_marca':
		if(isset($_FILES['archivo']['name']))
		{
			$nameP=$_FILES['archivo']['name'];
			$nameT=$_FILES["archivo"]["tmp_name"];
		}
		else
		{
			$nameP='';
			$nameT='';
		}
		//	function marca($id_marca = 0, $nombre = "", $descripcion = "",$img_principal = "", $ruta_temporal = '', $status = 0, $mostrar = 0)

		$marca = new marca($_REQUEST["id_marca"], $_REQUEST['nombre'],htmlspecialchars($_REQUEST["descripcion"], ENT_QUOTES) ,$nameP, $nameT);
		$marca -> modificar_marca();
		header('location: listmarca.php?success=2');
	break;
	case 'operamarca':
		if(isset($_REQUEST['id_marca'])){
			$select=$_REQUEST['operador'];
			$check=$_REQUEST['id_marca'];
			if($select == 'Eliminar'){
				foreach ($check as $elemento) {
					$marca = new marca();
					$marca -> id_marca = $elemento;
					$marca -> eliminar_marca();
				}
				header('location: listmarca.php?success=3');
			}
			if($select == 'Mostrar'){
				foreach ($check as $elemento) {
					$marca = new marca();
					$marca -> id_marca = $elemento;
					$marca -> activar_marca();
				}
				header('location: listmarca.php?success=4');
			}
			if($select == 'No Mostrar'){
				foreach ($check as $elemento) {
					$marca = new marca();
					$marca -> id_marca = $elemento;
					$marca -> desactivar_marca();
				}
				header('location: listmarca.php?success=5');
			}
		}
		else{
			header('location: listmarca.php?success=0');
		}				
	break;
	case 'activar_marca':
		$marca = new marca($_REQUEST['id']);
		$marca -> activar_marca();
	break;
	case 'desactivar_marca':
		$marca = new marca($_REQUEST['id']);
		$marca -> desactivar_marca();
	break;
	case 'buscar_marca':
		$marca = new marca();
		$marca -> buscar_marca_por_ajax($_REQUEST['cadena']);
	break;
	/*MARCA*/

	/*CATEGORIA*/
	case 'agregarcategoria':
		$categoria = new categoria($_REQUEST['idCategoria'],$_REQUEST['nomCategoria'],$_REQUEST['status']);
		$categoria ->insertarCategoria();
		header('location: listcategoria.php?success=1');
	break;
	case 'modificarcategoria':
		$categoria = new categoria($_REQUEST['idCategoria'],$_REQUEST['nomCategoria'],$_REQUEST['status']);
		$categoria -> modificaCategoria();
		header('location: listcategoria.php?success=2');
	break;
	case 'operacategoria':
		if(isset($_REQUEST['idCategoria'])){
			$select=$_REQUEST['operador'];
			$check=$_REQUEST['idCategoria'];
			if($select == 'Eliminar'){
				foreach ($check as $elemento) {
					$categoria = new categoria();
					$categoria -> idCategoria=$elemento;
					$proyectoxcategoria = new categoriaxproyecto(0,$categoria -> idCategoria);
					$proyectoxcategoria -> desasigna_categoria_proyecto();
					$categoria -> eliminaCategoria();
				}
				header('location: listcategoria.php?success=3');
			}
			if($select == 'Mostrar'){
				foreach ($check as $elemento) {
					$categoria = new categoria();
					$categoria -> idCategoria = $elemento;
					$categoria -> ActivaCategoria();
				}
				header('location: listcategoria.php?success=4');
			}
			if($select == 'No Mostrar'){
				foreach ($check as $elemento) {
					$categoria = new categoria();
					$categoria -> idCategoria = $elemento;
					$categoria -> DesactivaCategoria();
				}
				header('location: listcategoria.php?success=5');
			}
		}
		else{
			header('location: listcategoria.php?success=0');
		}				
	break;
	case 'activacategoria':
		$categoria = new categoria($_REQUEST['id']);
		$categoria -> ActivaCategoria();
	break;
	case 'desactivacategoria':
		$categoria = new categoria($_REQUEST['id']);
		$categoria -> DesactivaCategoria();
	break;
	case 'buscarcategoria':
		$categoria = new categoria();
		$categoria -> listaCategoriaBusqueda($_REQUEST['cadena']);
	break;
	case 'listacategoria':
		$categoria = new categoria();
		$categoria -> limitCategoria();
	break;
			
	
	
	/**********************************************************
	* Procesos de Usuarios
	**********************************************************/
	case 'agregarusuario':
			$usuario= new usuario($_REQUEST['idusuario'], $_REQUEST['nomuser'], $_REQUEST['pass'],$_REQUEST['status'],$_REQUEST['tipo']);
			$usuario->inserta_usuario();
			$usuario->insertar_datos_usuario($_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['telefono']);
			header('Location: listusuarios.php');
	break;
	case 'modificarusuario':
			if($_REQUEST['nameuser'] == 'nameuser'){
				$nameuser=$_REQUEST['nomuser'];
			}
			else{
				$nameuser='';
			}
			if($_REQUEST['contra'] == 'pass'){
				$pass = $_REQUEST['pass'];
			}
			else{
				$pass='';
			}
			$usuario= new usuario($_REQUEST['idusuario'], $nameuser, $pass, $_REQUEST['status'],$_REQUEST['tipo']);
			$usuario->modifica_usuario();
			$usuario->modificar_datos_usuario($_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['telefono']);
			header('Location: listusuarios.php');
	break;
	case 'operausuario':
			if(isset($_REQUEST['idusuario'])){
				$select=$_REQUEST['operador'];
				if ($select == 'Eliminar'){
					foreach ($_REQUEST['idusuario'] as $elementoUsuario) {
						$usuario = new usuario($elementoUsuario);
						$usuario ->eliminar_datos_usuario();
						$usuario->elimina_usuario();
					}
					header('location: listusuarios.php');
				}
				if ($select == 'Mostrar'){
					foreach ($_REQUEST['idusuario'] as $elementoUsuario) {
						$usuario = new usuario($elementoUsuario);
						$usuario -> ActivaUsuario();
					}
					header('location: listusuarios.php');
				}
				if ($select == 'No Mostrar'){
					foreach ($_REQUEST['idusuario'] as $elementoUsuario) {
						$usuario = new usuario($elementoUsuario);
						$usuario->DesactivaUsuario();
					}
					header('location: listusuarios.php');
				}					
			}
			else {
				header('location: listusuarios.php');
			}	
	break;
	case 'activausuario':
			$usuario= new usuario($_REQUEST['id']);
			$usuario->ActivaUsuario();
	break;
	case 'desactivausuario':
			$usuario= new usuario($_REQUEST['id']);
			$usuario->DesactivaUsuario();
	break;
	case 'buscarusuario':
			$usuario= new usuario();
			$usuario->listaUsuarioBusqueda($_REQUEST['cadena']);
	break;
	case 'listausuario':
			$usuario= new usuario();
			$usuario->lista_usuario_Ajax();
	break;
	case 'agregartipousuario':
			$tipousuario= new tipousuario($_REQUEST['idtipousuario'],$_REQUEST['titulo'],$_REQUEST['status']);
			$tipousuario->insertar_tipousuario();
			$idtipousuario=$tipousuario->idtipousuario;
			if(isset($_REQUEST['idpermiso']))
			{
				$tipousuarioxpermiso = new tiposusuarioxpermiso(0,0);
				$tipousuarioxpermiso->idtipousuario=$idtipousuario;
				$tipousuarioxpermiso->desasigna_permiso_rol();

				foreach($_REQUEST['idpermiso'] as $elementoPermiso)
				{
					$tipousuarioxpermiso->idpermiso=$elementoPermiso;
					$tipousuarioxpermiso->asigna_permiso_rol();
				}	
			}
		header('location:listtipousuario.php');
	break;
	case 'modificartipousuario':
		$tipousuario=new tipousuario($_REQUEST['idtipousuario'],$_REQUEST['titulo'],$_REQUEST['status']);
		$tipousuario->modificar_tipousuario();
		if(isset($_REQUEST['idpermiso']))
		{
			$tipousuarioxpermiso = new tiposusuarioxpermiso(0,0);
			$tipousuarioxpermiso->idtipousuario=$_REQUEST['idtipousuario'];
			$tipousuarioxpermiso->desasigna_permiso_rol();
		
			foreach($_REQUEST['idpermiso'] as $elementoPermiso)
			{
				$tipousuarioxpermiso->idpermiso=$elementoPermiso;
				$tipousuarioxpermiso->asigna_permiso_rol();
			}	
		}
		else
		{
			$tipousuarioxpermiso = new tiposusuarioxpermiso();
			$tipousuarioxpermiso->idtipousuario=$_REQUEST['idtipousuario'];
			$tipousuarioxpermiso->desasigna_permiso_rol();
		
			foreach($_REQUEST['idpermiso'] as $elementoPermiso)
			{
				$tipousuarioxpermiso->idpermiso=$elementoPermiso;
				$tipousuarioxpermiso->asigna_permiso_rol();
			}	
		}
		header('location:listtipousuario.php');
	break;
	case 'operatipousuario':
			if(isset($_REQUEST['idtipousuario'])){
				$select=$_REQUEST['operador'];
				if ($select == 'Eliminar'){
					foreach ($_REQUEST['idtipousuario'] as $elementoUsuario) {
						$tipousuario = new tipousuario($elementoUsuario);
						$tipousuarioxpermiso = new tiposusuarioxpermiso($elementoUsuario);
						$tipousuarioxpermiso->desasigna_permiso_rol();
						$tipousuario->elimina_Tipousuario();
					}
					header('location: listtipousuario.php');
				}
				
				if ($select == 'Mostrar'){
					foreach ($_REQUEST['idtipousuario'] as $elementoUsuario) {
						$tipousuario = new tipousuario($elementoUsuario);						
						$tipousuario->ActivaTipousuario();
					}
					header('location: listtipousuario.php');
				}
				if ($select == 'No Mostrar'){
					foreach ($_REQUEST['idtipousuario'] as $elementoUsuario) {
						$tipousuario = new tipousuario($elementoUsuario);						
						$tipousuario -> DesactivaTipousuario();
					}
					header('location: listtipousuario.php');
				}				
			}
			else {
				header('location: listtipousuario.php');
			}	
	break;
	case 'activatipoU':
			$tipousuario= new tipousuario($_REQUEST['id']);
			$tipousuario->ActivaTipousuario();
	break;
	case 'desactivatipoU':
			$tipousuario= new tipousuario($_REQUEST['id']);
			$tipousuario->DesactivaTipousuario();
	break;
	case 'buscartipousuario':
			$tipousuario= new tipousuario();
			$tipousuario->listaTipousuarioBusqueda($_REQUEST['cadena']);
	break;
	case 'listatipousuario':
			$tipousuario= new tipousuario();
			$tipousuario->listado_tipousuarioAjax();
	break;
 	case 'agregarpermiso':
			$permiso = new permiso($_REQUEST['idpermiso'],$_REQUEST['titulo'],$_REQUEST['clave'],$_REQUEST['status']);
			$permiso->insertar_permiso();
			header('Location: listpermisos.php');
	break;
	case 'modificarpermiso':
			$permiso = new permiso($_REQUEST['idpermiso'],$_REQUEST['titulo'],$_REQUEST['clave'],$_REQUEST['status']);
			$permiso->modificar_permiso();
			header('Location: listpermisos.php');
	break;  
	case 'verificarusuario':
			if($_REQUEST['username']!=''){
				$total=0;
				$username = $_REQUEST['username'];
				$usuario= new usuario(0,$username,'','','');
				$verificar=$usuario->VerficarDisponibilidadNomUsuario($username);
				$total=count($verificar);
		
				if($total != 0)
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Advertencia!</strong> Este usuario ya existe o es su actual nombre de usuario, para poder continuar intente con otro nombre.</div>';
				else
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Bien hecho!</strong> Nombre de usuario disponible.</div>';
			}
			else
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Advertencia!</strong> Se requiere de este campo para poder continuar.</div>';
	break;
	case 'ingresar':
			$user=new usuario(0,$_REQUEST['usuario'],$_REQUEST['pass'],0,0);
			$user->login();
			
			if($user->idusuario!=0){
				session_start();
				$_SESSION['idusuario']=$user->idusuario;
				header('Location:listslide.php');
			}
			
			else{
				session_start();
				if(isset($_SESSION['idusuario']));
				session_destroy();
				header('Location:index.php?success=0');
			}
	break;
	case 'recuperapass':
			if($_REQUEST['email']!='')
			{
				$usuario = new usuario();
				$usuario->datosusuario->email=$_REQUEST['email'];
				$lista = $usuario->datosusuario->buscaremail();
				$total = count($lista);
				if($total > 0)
				{
					foreach($lista as $elementoCliente)
					{
						$idusuario = $elementoCliente['idusuario']; 
						$correoRecu= new correoRecuperacion($idusuario);
						$correoRecu->enviar();
						echo 2;
					}
				}
				else
					echo 1;
			}
			else
				echo 0;
	break;
	case 'cerrarsesion':
			//session_start();
			if(isset($_SESSION['idusuario']));
			session_destroy();
			echo 1;
	break;
	/*------------------------------------------------------------------------
	SECCIÓN PARA LAS OPERACIONES DE PRODUCTOS
	-------------------------------------------------------------------------*/	
	case 'agregar_combinacion':
		$id_producto = (isset($_REQUEST['id_producto']))? $_REQUEST['id_producto'] : 0;
		$nombre_combinacion = (isset($_REQUEST['nombre_combinacion']))? $_REQUEST['nombre_combinacion'] : "";
		$stock_combinacion = (isset($_REQUEST['stock_combinacion']))? $_REQUEST['stock_combinacion'] : "";
		$ids_imagenes_asociadas = (isset($_REQUEST['ids_imagenes_asociadas']))? $_REQUEST['ids_imagenes_asociadas'] : array();
		$ids_atributos_valores = (isset($_REQUEST['ids_atributos_valores']))? $_REQUEST['ids_atributos_valores'] : array();

		if($id_producto != 0){
			$combinacion = new combinacion(0, $id_producto, $nombre_combinacion, $stock_combinacion, 0);
			$combinacion  -> insertar_combinacion();
			if($combinacion -> id_combinacion != 0){
				//Asociamos las imagenes con la combiancionq que se acaba de crear;
				foreach ($ids_imagenes_asociadas as $id_imagen) {
					$combinacion -> asociar_combinacion_con_imagen($id_imagen);
				}

				for($i = 0; $i < count($ids_atributos_valores); $i++) {
					 $id_atributo = $ids_atributos_valores[$i];
					 $id_valor = $ids_atributos_valores[$i + 1];
					 $combinacion -> asociar_combinacion_con_atributo_y_valor($id_atributo, $id_valor);
					 $i++;
				}

				echo $combinacion -> id_combinacion . "";
			}	
		}
		else{
			echo "0";
		}

	break;
	case 'modificar_combinacion' :
		$id_producto = (isset($_REQUEST['id_producto']))? $_REQUEST['id_producto'] : 0;
		$id_combinacion = (isset($_REQUEST['id_combinacion']))? $_REQUEST['id_combinacion'] : 0;
		$nombre_combinacion = (isset($_REQUEST['nombre_combinacion']))? $_REQUEST['nombre_combinacion'] : "";
		$stock_combinacion = (isset($_REQUEST['stock_combinacion']))? $_REQUEST['stock_combinacion'] : "";
		$ids_imagenes_asociadas = (isset($_REQUEST['ids_imagenes_asociadas']))? $_REQUEST['ids_imagenes_asociadas'] : array();
		$ids_atributos_valores = (isset($_REQUEST['ids_atributos_valores']))? $_REQUEST['ids_atributos_valores'] : array();
		$status = (isset($_REQUEST['status']))? $_REQUEST['status'] : 0;

		if($id_combinacion != 0){
			$combinacion = new combinacion($id_combinacion, $id_producto, $nombre_combinacion, $stock_combinacion, $status);
			$combinacion  -> modificar_combinacion();
			if($combinacion -> id_combinacion != 0){
				//Asociamos las imagenes con la combiancionq que se acaba de crear;
				$combinacion -> eliminar_asociaciones_combinacion_con_imagenes();
				foreach ($ids_imagenes_asociadas as $id_imagen) {
					$combinacion -> asociar_combinacion_con_imagen($id_imagen);
				}
				$combinacion -> eliminar_asociaciones_combinacion_con_atributo_y_valor();
				for($i = 0; $i < count($ids_atributos_valores); $i++) {
					 $id_atributo = $ids_atributos_valores[$i];
					 $id_valor = $ids_atributos_valores[$i + 1];
					 $combinacion -> asociar_combinacion_con_atributo_y_valor($id_atributo, $id_valor);
					 $i++;
				}

				echo $combinacion -> id_combinacion . "";
			}	
		}
		else{
			echo "0";
		}
	break;
	case 'eliminar_combinacion':
			$id_combinacion = (isset($_REQUEST['id_combinacion']))? $_REQUEST['id_combinacion'] : 0;
			if($id_combinacion != 0){
				$combinacion = new combinacion($id_combinacion);
				$combinacion -> eliminar_combinacion();
				echo "true";
			}
			else{
				echo "false";
			}
			
	break;
	case 'obtener_combinacion_por_ajax':
			$id_combinacion = (isset($_REQUEST['id_combinacion']))? $_REQUEST['id_combinacion'] : 0;
			if($id_combinacion != 0){
				$combinacion = new combinacion($id_combinacion);
				$combinacion -> obtener_combinacion_por_ajax();
			}
			else{
				echo "0";
			}
	break;
	case 'activar_combinacion':
			$id_combinacion = (isset($_REQUEST['id_combinacion']))? $_REQUEST['id_combinacion'] : 0;
			if($id_combinacion != 0){
				$combinacion = new combinacion($id_combinacion);
				$combinacion -> activar_combinacion();
			}
	break;
	case 'desactivar_combinacion':
			$id_combinacion = (isset($_REQUEST['id_combinacion']))? $_REQUEST['id_combinacion'] : 0;
			if($id_combinacion != 0){
				$combinacion = new combinacion($id_combinacion);
				$combinacion -> desactivar_combinacion();
			}
	break;
	case 'agregarproducto':
		$titulo_esp = (isset($_REQUEST['titulo_esp']))? $_REQUEST['titulo_esp'] : "";
		$titulo_eng = (isset($_REQUEST['titulo_eng']) && $_REQUEST['titulo_eng'] != "" )? $_REQUEST['titulo_eng'] : $titulo_esp;
		$clave = (isset($_REQUEST['clave']) && $_REQUEST['clave'] != "")? $_REQUEST['clave'] : uniqid("PRO-");

		$descripcion_esp = (isset($_REQUEST['descripcion_esp']))? htmlspecialchars($_REQUEST['descripcion_esp'], ENT_QUOTES) : "";
		$descripcion_eng = (isset($_REQUEST['descripcion_eng']) && strip_tags($_REQUEST['descripcion_eng']) != "")? htmlspecialchars($_REQUEST['descripcion_eng'], ENT_QUOTES) : $descripcion_esp;

		$precio_mxn = (isset($_REQUEST['precio_mxn']))? $_REQUEST['precio_mxn'] : "0";
		$precio_usd = (isset($_REQUEST['precio_usd']) && $_REQUEST['precio_usd'] != "")? $_REQUEST['precio_usd'] : $precio_mxn;
		$peso = (isset($_REQUEST['peso']))? $_REQUEST['peso'] : "0";

		$meta_titulo_esp = (isset($_REQUEST['meta_titulo_esp']) && $_REQUEST['meta_titulo_esp'] != "")? $_REQUEST['meta_titulo_esp'] : $titulo_esp;
		$meta_descripcion_esp = (isset($_REQUEST['meta_descripcion_esp']) && $_REQUEST['meta_descripcion_esp'] != "")? htmlspecialchars($_REQUEST['meta_descripcion_esp'], ENT_QUOTES) : $descripcion_esp;
		$tags_esp = (isset($_REQUEST['tags_esp']))? $_REQUEST['tags_esp'] : "";

		$meta_titulo_eng = (isset($_REQUEST['meta_titulo_eng']) && $_REQUEST['meta_titulo_eng'] != "")? $_REQUEST['meta_titulo_eng'] : $meta_titulo_esp;
		$meta_descripcion_eng = (isset($_REQUEST['meta_descripcion_eng']) && $_REQUEST['meta_descripcion_eng'] != "")? htmlspecialchars($_REQUEST['meta_descripcion_eng'], ENT_QUOTES) : $meta_descripcion_esp;
		$tags_eng = (isset($_REQUEST['tags_eng']) && $_REQUEST['tags_eng'] != "")? $_REQUEST['tags_eng'] : $tags_esp;

		$id_marca = (isset($_REQUEST['marca']) && $_REQUEST['marca'] != "")? $_REQUEST['marca'] : 0;

		$stock_general = (isset($_REQUEST['stock_general']))? $_REQUEST['stock_general'] : "0";
		$impuesto = (isset($_REQUEST['impuesto']))? $_REQUEST['impuesto'] : "0";

		$categorias_asociadas = (isset($_REQUEST['categorias']))? $_REQUEST['categorias'] : array();
		$transportes = (isset($_REQUEST['transportes']))? $_REQUEST['transportes'] : array();

		$pdf_adjunto_name = (isset($_FILES['adjunto']))? $_FILES['adjunto']["name"] : "";
		$pdf_adjunto_name_tmp = (isset($_FILES['adjunto']))? $_FILES['adjunto']["tmp_name"] : "";


		if(isset($_FILES['archivo']['name']))
		{
			$img_principal = $_FILES['archivo']['name'];
			$img_principal_temporal = $_FILES['archivo']['tmp_name'];
		}
		else
		{
			$img_principal = '';
			$img_principal_temporal = '';
		}
		
	 				    //producto($id_producto = 0, $img_principal = '', $ruta_temporal = '', $pdf_adjunto = "", $titulo_esp = '',$titulo_eng = '', $clave = "",$descripcion_esp = '', $descripcion_eng = '', $tags_esp = "", $tags_eng = "" ,$url_amigable_esp = '', $url_amigable_eng = '', $precio_mxn = "", $precio_usd = "", $stock_general = "", $meta_titulo_esp = "", $meta_titulo_eng = "" , $meta_descripcion_esp = "", $meta_descripcion_eng = "" ,$mostrar = 1, $status = 1) {

		$producto = new producto(0, $img_principal, $img_principal_temporal, $pdf_adjunto_name ,$titulo_esp, $titulo_eng, $clave, $descripcion_esp, $descripcion_eng, $tags_esp, $tags_eng, $titulo_esp, $titulo_eng, $precio_mxn, $precio_usd, $impuesto, $peso, $stock_general, $meta_titulo_esp, $meta_titulo_eng, $meta_descripcion_esp, $meta_descripcion_eng, $id_marca);
		$producto -> insertar_producto();
		if ($producto -> id_producto == 'error'){
			$success = 0;
		}
		else{
			$success = 1;
			if (isset($_FILES['archivo2']['name'][0])) {
				if ($_FILES['archivo2']['name'][0]!=''){
			 		$tot3 = count($_FILES["archivo2"]["size"]);
	         		for ($i = 0; $i < $tot3; $i++){
	         			$extension=$_FILES['archivo2']['name'][$i];
	         			$name = $producto -> obtenerExtensionArchivo($extension); 
	            		$tmp_name = $_FILES["archivo2"]["tmp_name"][$i]; 
	            		$producto -> insertar_img_secundaria_producto("",$name,$tmp_name);       
	            	} 
				}
			}
			foreach ($transportes as $id_transporte) {
				$producto -> asociar_transporte_con_producto($id_transporte);
			}
			foreach ($categorias_asociadas as $id_categoria) {
				$producto -> asociar_categoria_con_producto($id_categoria);
			}

			if($pdf_adjunto_name != ""){
				$producto -> modificar_pdf($pdf_adjunto_name, $pdf_adjunto_name_tmp);
			}
		}

		header('location: listproducto.php?success='.$success);
	break;
	case 'modificarproducto':
		$id_producto = (isset($_REQUEST['id_producto']))? $_REQUEST['id_producto'] : 0;
		$titulo_esp = (isset($_REQUEST['titulo_esp']))? $_REQUEST['titulo_esp'] : "";
		$titulo_eng = (isset($_REQUEST['titulo_eng']) && $_REQUEST['titulo_eng'] != "" )? $_REQUEST['titulo_eng'] : $titulo_esp;
		$clave = (isset($_REQUEST['clave']) && $_REQUEST['clave'] != "")? $_REQUEST['clave'] : uniqid("PRO-");

		$descripcion_esp = (isset($_REQUEST['descripcion_esp']))? htmlspecialchars($_REQUEST['descripcion_esp'], ENT_QUOTES) : "";
		$descripcion_eng = (isset($_REQUEST['descripcion_eng']) && strip_tags($_REQUEST['descripcion_eng']) != "")? htmlspecialchars($_REQUEST['descripcion_eng'], ENT_QUOTES) : $descripcion_esp;

		$precio_mxn = (isset($_REQUEST['precio_mxn']))? $_REQUEST['precio_mxn'] : "0";
		$precio_usd = (isset($_REQUEST['precio_usd']) && $_REQUEST['precio_usd'] != "")? $_REQUEST['precio_usd'] : $precio_mxn;
		$peso = (isset($_REQUEST['peso']))? $_REQUEST['peso'] : "0";

		$meta_titulo_esp = (isset($_REQUEST['meta_titulo_esp']) && $_REQUEST['meta_titulo_esp'] != "")? $_REQUEST['meta_titulo_esp'] : $titulo_esp;
		$meta_descripcion_esp = (isset($_REQUEST['meta_descripcion_esp']) && $_REQUEST['meta_descripcion_esp'] != "")? htmlspecialchars($_REQUEST['meta_descripcion_esp'], ENT_QUOTES) : $descripcion_esp;
		$tags_esp = (isset($_REQUEST['tags_esp']))? $_REQUEST['tags_esp'] : "";

		$meta_titulo_eng = (isset($_REQUEST['meta_titulo_eng']) && $_REQUEST['meta_titulo_eng'] != "")? $_REQUEST['meta_titulo_eng'] : $meta_titulo_esp;
		$meta_descripcion_eng = (isset($_REQUEST['meta_descripcion_eng']) && $_REQUEST['meta_descripcion_eng'] != "")? htmlspecialchars($_REQUEST['meta_descripcion_eng'], ENT_QUOTES) : $meta_descripcion_esp;
		$tags_eng = (isset($_REQUEST['tags_eng']) && $_REQUEST['tags_eng'] != "")? $_REQUEST['tags_eng'] : $tags_esp;

		$id_marca = (isset($_REQUEST['marca']) && $_REQUEST['marca'] != "")? $_REQUEST['marca'] : 0;

		$stock_general = (isset($_REQUEST['stock_general']))? $_REQUEST['stock_general'] : "0";
		$impuesto = (isset($_REQUEST['impuesto']))? $_REQUEST['impuesto'] : "0";

		$categorias_asociadas = (isset($_REQUEST['categorias']))? $_REQUEST['categorias'] : array();
		$transportes = (isset($_REQUEST['transportes']))? $_REQUEST['transportes'] : array();

		$pdf_adjunto_name = (isset($_FILES['adjunto']))? $_FILES['adjunto']["name"] : "";
		$pdf_adjunto_name_tmp = (isset($_FILES['adjunto']))? $_FILES['adjunto']["tmp_name"] : "";


		if(isset($_FILES['archivo']['name']))
		{
			$img_principal = $_FILES['archivo']['name'];
			$img_principal_temporal = $_FILES['archivo']['tmp_name'];
		}
		else
		{
			$img_principal = '';
			$img_principal_temporal = '';
		}
		
	 				    //producto($id_producto = 0, $img_principal = '', $ruta_temporal = '', $pdf_adjunto = "", $titulo_esp = '',$titulo_eng = '', $clave = "",$descripcion_esp = '', $descripcion_eng = '', $tags_esp = "", $tags_eng = "" ,$url_amigable_esp = '', $url_amigable_eng = '', $precio_mxn = "", $precio_usd = "", $stock_general = "", $meta_titulo_esp = "", $meta_titulo_eng = "" , $meta_descripcion_esp = "", $meta_descripcion_eng = "" ,$mostrar = 1, $status = 1) {

		$producto = new producto($id_producto, $img_principal, $img_principal_temporal, $pdf_adjunto_name ,$titulo_esp, $titulo_eng, $clave, $descripcion_esp, $descripcion_eng, $tags_esp, $tags_eng, $titulo_esp, $titulo_eng, $precio_mxn, $precio_usd, $impuesto,$peso, $stock_general, $meta_titulo_esp, $meta_titulo_eng, $meta_descripcion_esp, $meta_descripcion_eng, $id_marca);
		if($producto -> id_producto != 0){
			$producto -> modificar_producto();
		
			if (isset($_FILES['archivo2']['name'][0])) {
				if ($_FILES['archivo2']['name'][0]!=''){
			 		$tot3 = count($_FILES["archivo2"]["size"]);
	         		for ($i = 0; $i < $tot3; $i++){
	         			$extension=$_FILES['archivo2']['name'][$i];
	         			$name = $producto -> obtenerExtensionArchivo($extension); 
			 			$titulo=$_REQUEST['titulo'];
	            		$tmp_name = $_FILES["archivo2"]["tmp_name"][$i]; 
	            		$producto -> insertar_img_secundaria_producto("",$name,$tmp_name);       
	            	}
				}
			}

			if(isset($_FILES['archivo3']['name'])){
				$tot3 = count($_FILES['archivo3']['name']);
				for($i = 0; $i < $tot3; $i++){
					if ($_FILES['archivo3']['error'][$i] == 0 and $_FILES['archivo3']['name'][$i] != ''){
						$extension=$_FILES['archivo3']['name'][$i];
		         		$name = $producto->obtenerExtensionArchivo($extension); 
				 		$titulo = $_REQUEST['titulo'];
		            	$tmp_name = $_FILES["archivo3"]["tmp_name"][$i]; 
		            	$producto -> modificar_img_secundaria_producto($_REQUEST['id_img_producto'][$i], $titulo, $name, $tmp_name);  
					}			
				}	
			}

			$producto -> eliminar_asociaciones_con_transportes();
			foreach ($transportes as $id_transporte) {
				$producto -> asociar_transporte_con_producto($id_transporte);
			}
			$producto -> eliminar_asociaciones_con_categorias();
			foreach ($categorias_asociadas as $id_categoria) {
				$producto -> asociar_categoria_con_producto($id_categoria);
			}

			if($pdf_adjunto_name != ""){
				$producto -> modificar_pdf($pdf_adjunto_name, $pdf_adjunto_name_tmp);
			}

			header('location: listproducto.php?success=2');
		}
		else{
			header('location: listproducto.php?success=0');
		}
		
		break;
		case 'eliminarImgProducto':
			$id_imagen = (isset($_REQUEST['idImg2']))? $_REQUEST["idImg2"]: 0;
			if($id_imagen != 0){
				$producto = new producto();
				$producto->eliminar_img_secundaria_producto($id_imagen);
				echo "true";
			}
			else{
				echo "false";
			}
			
		break;
		case 'operaproducto':
			if(isset($_REQUEST['id_producto'])){
				$select=$_REQUEST['operador'];
				$imgp=0;
				if ($select == 'Eliminar'){
					foreach ($_REQUEST['id_producto'] as $elemento_producto) {
						$producto = new producto();
						$producto -> id_producto = $elemento_producto;
						$producto->listar_img_secundarias_producto();
						foreach ($producto -> lista_imagenes_secundarias as $elementoImgP) {
							$id_imagen = $elementoImgP['id_img_producto'];
							$producto -> eliminar_img_secundaria_producto($id_imagen);
							$imgp ++;
						}
						$producto->eliminar_producto();
					}
					header('location: listproducto.php?success=3&imgp='.$imgp);
				}
				if ($select == 'Mostrar'){
					foreach ($_REQUEST['id_producto'] as $elemento) {
						$producto = new producto();
						$producto -> id_producto = $elemento;						
						$producto -> activar_producto();
					}
					header('location: listproducto.php?success=4');
				}
				if ($select == 'No Mostrar'){
					foreach ($_REQUEST['id_producto'] as $elemento) {
						$producto = new producto();
						$producto -> id_producto = $elemento;						
						$producto -> desactivar_producto();
					}
					header('location: listproducto.php?success=5');
				}			
			}
			else {
				header('location: listproducto.php');
			}
		break;
		case 'activar_producto':
			 $producto = new producto();
			 $producto -> id_producto = $_REQUEST['id'];
			 $producto -> activar_producto();
		break;
		case 'desactivar_producto':
			 $producto = new producto();
			 $producto -> id_producto = $_REQUEST['id'];
			 $producto -> desactivar_producto();
		break;
		case 'buscar_producto':
			 $producto = new producto();
			 $producto -> buscar_producto($_REQUEST['cadena']);
		break;
		case 'listar_productos':
			 $producto = new producto();
			 $producto -> listar_productos();
		break;
		case 'listar_productos_por_pagina':
			$producto = new producto();
			$producto->listar_productos_por_ajax($_REQUEST['paginaactual']);
		break;
/**********TERMINAN LAS OPERACIONES DE PRODCUTOS***********/
/**********************************************************/

//COMIENZAN LAS OPERACIONES DE SLIDE
		case 'agregarslide':
			if(isset($_FILES['archivo']['name']))
				$nameP=$_FILES['archivo']['name'];
			else 
				$nameP='';
		
			$slide = new slide($_REQUEST['idslide'],$nameP,$_REQUEST['titulo'],$_REQUEST['link'],$_REQUEST['texto'],$_REQUEST['status'],$_FILES['archivo']['tmp_name']);
			$slide -> insertaslide();
			header('location: listslide.php?success=1');
		break;
		case 'modificarslide':
			if(isset($_FILES['archivo']['name'][0])){
				if ($_FILES['archivo']['name'][0]!=''){
					$nameP=$_FILES['archivo']['name'];
					$tmpnameP=$_FILES['archivo']['tmp_name'];
				}	
			}
			else{
				$nameP='';
				$tmpnameP='';
			}
	
			$slide = new slide($_REQUEST['idslide'],$nameP,$_REQUEST['titulo'],$_REQUEST['link'],$_REQUEST['texto'],$_REQUEST['status'],$_FILES['archivo']['tmp_name']);
			$slide->modificaslide();    
			header('location: listslide.php?success=2');
			break;
			case 'operaslide':
				if(isset($_REQUEST['idslide'])){
					$select=$_REQUEST['operador'];
					$imgp=0;
					if ($select == 'Eliminar'){
						foreach ($_REQUEST['idslide'] as $elementoSlide) {
							$slide = new slide();
							$slide -> idslide=$elementoSlide;
							$slide->eliminaslide();
						}
						header('location: listslide.php?success=3');
					}
					if ($select == 'Mostrar'){
						foreach ($_REQUEST['idslide'] as $elemento) {
							$slide = new slide();
							$slide -> idslide=$elemento;						
							$slide -> activaslide();
						}
						header('location: listslide.php?success=4');
					}
					if ($select == 'No Mostrar'){
						foreach ($_REQUEST['idslide'] as $elemento) {
							$slide = new slide();
							$slide -> idslide=$elemento;						
							$slide -> Desactivaslide();
						}
						header('location: listslide.php?success=5');
					}			
				}
				else {
					header('location: listslide.php?success=0');
				}
			break;
			case 'activaslide':
				 $slide = new slide();
				 $slide -> idslide = $_REQUEST['id'];
				 $slide -> activaslide();
			break;
			case 'desactivaslide':
				 $slide = new slide();
				 $slide -> idslide = $_REQUEST['id'];
				 $slide -> Desactivaslide();
			break;
			case 'buscarslide':
				 $slide = new slide();
				 $slide -> buscarslideAjax($_REQUEST['cadena']);
			break;
			case 'listaslide':
				 $slide = new slide();
				 $slide->listaslideAjax();
			break;

			/******Operaciones de Boletin******/
			case "agregarboletin":
				if(isset($_REQUEST["correo"]) && $_REQUEST["correo"] != ""){
					$correo = $_REQUEST["correo"];
					$boletin = new boletin();
					$boletin -> correo = $correo;
					$boletin -> insertarBoletin();
					header('location: listboletin.php?success=1');
				}
				else{
					header('location: listboletin.php?success=0');
				}
			break;
			case "modificarboletin":
				if(isset($_REQUEST["idboletin"]) && $_REQUEST["idboletin"] != "" && $_REQUEST["idboletin"] != 0 && isset($_REQUEST["correo"]) && $_REQUEST["correo"] != ""){
					$idBoletin = $_REQUEST["idboletin"];
					$correo = $_REQUEST["correo"];
					$status = $_REQUEST["status"];
					$boletin = new boletin($idBoletin);
					$boletin -> correo = $correo;
					$boletin -> status = $status;
					$boletin -> modificarBoletin();
					header('location: listboletin.php?success=2');
				}
				else{
					header('location: listboletin.php?success=0');
				}
			break;
			case "eliminarboletin":
				if(isset($_REQUEST["idboletin"]) && $_REQUEST["idboletin"] != "" && $_REQUEST["idboletin"] != 0){
					$idBoletin = $_REQUEST["idboletin"];
					$boletin = new boletin($idBoletin);
					$boletin -> eliminarBoletin();
					header('location: listboletin.php?success=3');
				}
				else{
					header('location: listboletin.php?success=0');
				}
			break;
			case "activarboletin":
				if(isset($_REQUEST["id"]) && $_REQUEST["id"] != "" && $_REQUEST["id"] != 0){
					$idBoletin = $_REQUEST["id"];
					$boletin = new boletin($idBoletin);
					$boletin -> activarBoletin();
				}
			break;
			case "desactivarboletin":
				if(isset($_REQUEST["id"]) && $_REQUEST["id"] != "" && $_REQUEST["id"] != 0){
					$idBoletin = $_REQUEST["id"];
					$boletin = new boletin($idBoletin);
					$boletin -> desactivarBoletin();
				}
			break;
			case 'operaboletin':
				if(isset($_REQUEST['idboletin'])){
					$select=$_REQUEST['operador'];
					$imgp=0;
					if ($select == 'Eliminar'){
						foreach ($_REQUEST['idboletin'] as $elementoSlide) {
							$boletin = new boletin();
							$boletin -> idBoletin = $elementoSlide;
							$boletin->eliminarBoletin();
						}
						header('location: listboletin.php?success=3');
					}
					if ($select == 'Activar'){
						foreach ($_REQUEST['idboletin'] as $elemento) {
							$boletin = new boletin();
							$boletin -> idBoletin = $elemento;						
							$boletin -> activarBoletin();
						}
						header('location: listboletin.php?success=4');
					}
					if ($select == 'Desactivar'){
						foreach ($_REQUEST['idslide'] as $elemento) {
							$boletin = new boletin();
							$boletin -> idBoletin = $elemento;						
							$boletin -> desactivarBoletin();
						}
						header('location: listboletin.php?success=5');
					}			
				}
				else {
					header('location: listboletin.php?success=0');
				}
			break;
			/******Operaciones de Boletin******/
			/******Mailing*********/
			case "obtenerprogresomailing":
				if(isset($_REQUEST["idmailing"]) && $_REQUEST["idmailing"] != 0 ){
					$progresoMailing = new ProgresoMailing($_REQUEST["idmailing"]);
					$progresoMailing -> obtenerProgresoMailing();
					$porcentaje = $progresoMailing -> enviados / $progresoMailing -> numCorreos * 100;
					echo "porcentaje,".$porcentaje;
				}		
			break;
			case "obtenerenviados":
				if(isset($_REQUEST["idmailing"]) && $_REQUEST["idmailing"] != 0 ){
					$progresoMailing = new ProgresoMailing($_REQUEST["idmailing"]);
					$progresoMailing -> obtenerProgresoMailing();
					$enviados = $progresoMailing -> enviados;
					echo "enviados,".$enviados;
					
				}	
			break;

			case "enviarPlantilla1":
					if(isset($_REQUEST["idcorreo1"])){
						$numBoletinesActivos = 0;
						$idCorreo = $_REQUEST["idcorreo1"];
						$correo = new correo1($idCorreo);
						$correo -> obtenerCorreo1();
						$boletin = new boletin();
						$numBoletinesActivos = $boletin  -> contarBoletinesActivos();	
						
						if($numBoletinesActivos > 0){
							$progresoMailing = new ProgresoMailing();
							
							$tipoCorreo = 1;//correo1, tmpcorreo1;
							$fechaYHoraInicio = date("Y-m-d h:i:sa");

							$progresoMailing -> idCorreo = $idCorreo;
							$progresoMailing -> tipoCorreo = $tipoCorreo;
							$progresoMailing -> fechaYHoraInicio = $fechaYHoraInicio;
							$progresoMailing -> numCorreos = $numBoletinesActivos;
							$progresoMailing -> plantilla = 1;

							$progresoMailing -> insertarProgresoMailing();
							
							echo "true";
						}
						else{
							echo "error";
						}
						
					}

					else{
						echo "false";
					}
				break;
			case 'enviar':

				if(isset($_FILES['archivo']['name'])){
					if ($_FILES['archivo']['name']!=''){
						$nameP=$_FILES['archivo']['name'];
						$tmpnameP=$_FILES['archivo']['tmp_name'];
					}	
				}
				else{
					$nameP='';
					$tmpnameP='';
				}


				if(isset($_FILES['archivo_logo']['name'])){
					if ($_FILES['archivo_logo']['name']!=''){
						$nameP_logo=$_FILES['archivo_logo']['name'];
						$tmpnameP_logo=$_FILES['archivo_logo']['tmp_name'];
					}	
				}
				else{
					$nameP_logo='';
					$tmpnameP_logo='';
				}

				$idcorreo = 0;

				if(isset($_REQUEST["idcorreo1"])){
					if($_REQUEST["idcorreo1"] != 0 && $_REQUEST["idcorreo1"] != ""){
						$idcorreo = $_REQUEST["idcorreo1"];
					}
				}

				
				$titulo = (isset($_REQUEST['titulo']) && $_REQUEST['titulo'] != "")? $_REQUEST['titulo']: "";
				$subtitulo = (isset($_REQUEST['subtitulo']) && $_REQUEST['subtitulo'] != "")? $_REQUEST['subtitulo']: "";
				$desc1 = (isset($_REQUEST['desc1']) && $_REQUEST['desc1'] != "")? $_REQUEST['desc1']: "";
				$desc2 = (isset($_REQUEST['desc2']) && $_REQUEST['desc2'] != "")? $_REQUEST['desc2']: "";
				$desc3 = (isset($_REQUEST['desc3']) && $_REQUEST['desc3'] != "")? $_REQUEST['desc3']: "";
				$linklogo = (isset($_REQUEST['linklogo']) && $_REQUEST['linklogo'] != "")? $_REQUEST['linklogo']: "";
				$nomemp = (isset($_REQUEST['nomemp']) && $_REQUEST['nomemp'] != "")? $_REQUEST['nomemp']: "";
				$color = (isset($_REQUEST['color']) && $_REQUEST['color'] != "")? $_REQUEST['color']: "";
				$from = (isset($_REQUEST['from']) && $_REQUEST['from'] != "")? $_REQUEST['from']: "";
				$fromname = (isset($_REQUEST['fromname']) && $_REQUEST['fromname'] != "")? $_REQUEST['fromname']: "";
				$facebook = (isset($_REQUEST['facebook']) && $_REQUEST['facebook'] != "")? $_REQUEST['facebook']: "";
				$twitter = (isset($_REQUEST['twitter']) && $_REQUEST['twitter'] != "")? $_REQUEST['twitter']: "";
				$youtube = (isset($_REQUEST['youtube']) && $_REQUEST['youtube'] != "")? $_REQUEST['youtube']: "";
				$instagram = (isset($_REQUEST['instagram']) && $_REQUEST['instagram'] != "")? $_REQUEST['instagram']: "";

				//	function correo1 ($idc1= 0,$rut = '',$tit = '',$subt = '',$desc1 = '',$desc2 = '',$desc3 = '',$temporal='',$logo = "", $logo_temporal = "", /*$footer = "", $footer_temporal = "",*/ $from = "", $fromname = "", $facebook = "", $twitter = "", $instagram = "", $youtube = "", $idlista = "")
				$correo1 = new correo1($idcorreo,$nameP,$titulo, $subtitulo,$desc1,$desc2, $desc3, $tmpnameP, $nameP_logo, $tmpnameP_logo, $linklogo, $nomemp, $color ,$from, $fromname, $facebook, $twitter, $instagram, $youtube);


				if($idcorreo != 0){
					$correo1 -> idcorreo1 = $_REQUEST["idcorreo1"];
					$correo1 -> modificaCorreo1();
				}
				else{
					$correo1->insertaCorreo1();
				}

				$idcorreo = $correo1->idcorreo1;
				
				if(isset($_FILES['archivo2']['name'])){
					$tot3 = count($_FILES['archivo2']['name']);
					for($i = 0; $i < $tot3; $i++){
						if ($_FILES['archivo2']['error'][$i] == 0 and $_FILES['archivo2']['name'][$i] != ''){
							$extension=$_FILES['archivo2']['name'][$i];
			         		$name = $correo1->obtenerExtensionArchivo($extension); 
					 		$titulo=$_REQUEST['titulo'];
			            	$tmp_name = $_FILES["archivo2"]["tmp_name"][$i]; 
			            	$correo1->insertarCorreo1img($titulo, $name, $tmp_name);  
						}			
					}
				}

				if(isset($_REQUEST["idcorreo1"])){
					if(isset($_FILES['archivo23']['name'])){
						$tot3 = count($_FILES['archivo23']['name']);
						for($i = 0; $i < $tot3; $i++){
							if ($_FILES['archivo23']['error'][$i] == 0 and $_FILES['archivo23']['name'][$i] != ''){
								$extension=$_FILES['archivo23']['name'][$i];
				         		$name = $correo1->obtenerExtensionArchivo($extension);
				         		$titulo=$_REQUEST['titulo'];
				            	$tmp_name = $_FILES["archivo23"]["tmp_name"][$i]; 
				            	$correo1->modificarCorreo1img($_REQUEST['correo1img'][$i],$titulo,$name, $tmp_name);
							}			
						}	
					}
				}


				if(isset($_FILES['archivo3']['name']) and $_FILES['archivo3']['name'][$i] != ''){
					$titulo3=$correo1->obtenerExtensionArchivo($_FILES['archivo3']['name']);
					$ruta3=$_FILES['archivo3']['name'];
					$temporal3=$_FILES['archivo3']['tmp_name'];
					if(isset($_REQUEST["idcorreo1img2"])){
						$correo1 -> modificarCorreo1img2($_REQUEST["idcorreo1img2"],$titulo3,$ruta3,$temporal3);
					}
					else{
						$correo1->insertarCorreo1img2($ruta3, $titulo3, $temporal3);
					}
					
				}

				
				$contador = 0;
				$success = 0;
				if(isset($_REQUEST["correo_prueba"])){
					$correosPrueba = $_REQUEST["correo_prueba"];
					$correoPrueba = "";
					foreach ($correosPrueba as $correo) {
						if($correo != ""){
							$correoPrueba = $correo;
							break;
						}
					}
					if($correoPrueba != ""){
						$tempcorreo1= new tempcorreo1($idcorreo,"","#",$correoPrueba);
						$tempcorreo1->enviar();
						header("Location:mailing.php?c=".$idcorreo."&p=1");
						break;
						exit();
					}

				}

				/*$listboletin = array();
				$boletin= new Boletin();
				$listboletin= $boletin->listarBoletinActivados();
				foreach($listboletin as $elementoboletin)
				{

					$tempcorreo1= new tempcorreo1($idcorreo,0,$elementoboletin -> idBoletin);
					$tempcorreo1->enviar();
					usleep(1000000);
					$contador++;
				}*/
				//header('Location: mailing.php?success=2&cont='.$contador);
				header("Location:mailing.php?c=".$idcorreo."&p=1&opr=ep1");
					
		break;

		case 'eliminarImagenSecundariaCorreo1':
				if(isset($_REQUEST["idcorreo1"]) && isset($_REQUEST["idcorreoimg1"]))
				{
					$correo1 = new correo1($_REQUEST["idcorreo1"]);
					$correo1 -> eliminarCorreo1img($_REQUEST["idcorreoimg1"]);
					echo "true";
				}
				else{
					echo "false";
				}
		break;

		case "modificarconfigmailing":
				if(isset($_REQUEST["idconfig"]) && $_REQUEST["idconfig"] != 0){
					$correo_noreply = $_REQUEST["correo_noreply"];
					$correo_standard = $_REQUEST["correo_standard"];
					$facebook = $_REQUEST["facebook"];
					$twitter = $_REQUEST["twitter"];
					$instagram = $_REQUEST["instagram"];
					$youtube = $_REQUEST["youtube"];
					$idconfig  = $_REQUEST["idconfig"];

					$config_mailing = new config_mailing($idconfig, $correo_noreply, $correo_standard, $facebook, $twitter, $instagram, $youtube);
					$config_mailing -> modificar_config();
					header("Location:configmailing.php?s=1");
				}
				else{
					header("Location:configmailing.php?s=2");
				}
		break;
		//––––––––––––––––––––MODIFICACIONES CAAMAL–––––––––––––––––––––––––
		case 'correoPedidoEnviado':
			$correoEnvioProductos = new correoEnvioProductos($_POST['idorden']);
			$send = $correoEnvioProductos->enviar();
			$orden = new orden($_POST['idorden']);
			$orden->estatus = 4;
			$orden->updateStatus();
			if($send){
				echo 1;
			}else{
				echo 0;
			}
		break;
}
?>