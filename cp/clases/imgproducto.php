<?php
/*
 * @author: Luis Josué Caamal Barbosa
 * @description: Clase donde se hacen las altas, bajas y cambios de las imagenes secundarias.
 * Copyright: Locker Agencia Creativa.
 */
include_once('conexion.php');
require_once('archivo.php');
require_once('producto.php');

class imgproducto extends Archivo
{
	var $id_img_producto;
	var $titulo;
	var $ruta;
	var $id_producto;
	var $directorio = '../imgProductos/secundarias/';
	var $orden;
	
	function imgproducto ($id_img_producto =0 , $id_producto = 0, $ruta = '', $tit = '', $temporal = '')
	{
		$this -> id_img_producto = $id_img_producto;
		$this -> id_producto = $id_producto;
		$this -> ruta = $ruta;
		$this -> titulo = $tit;
		
		$this -> ruta_final = $this -> directorio.$ruta;
		$this -> ruta_temporal = $temporal;
	}
	
	
	
	function insertar_img_secundaria_producto()
	{
		$sql="INSERT INTO img_producto(id_producto, ruta, titulo) values (".$this -> id_producto.", '".$this -> ruta."', '".$this -> titulo."');";
		$con = new conexion();
		$this -> id_img_producto = $con -> ejecutar_sentencia($sql);
		$this -> subir_archivo();
		$s = "UPDATE img_producto SET orden = ".$this->id_img_producto." WHERE id_img_producto = ".$this->id_img_producto."";
		$con -> ejecutar_sentencia($s);
	}
	
	
	function modificar_img_secundaria_producto()
	{
	
		if ($this -> ruta != '')
		{
		
			$titulo_temporal = $this -> titulo;
			$ruta_temporal = $this -> ruta;
			
			$this -> recupera_img_producto();
			$this -> borrar_archivo();
			
			$this -> titulo = $titulo_temporal;
			$this -> ruta = $ruta_temporal;
			
			$this -> ruta_final = $this -> directorio.$ruta_temporal;
			$sql = ' ,ruta=\''.$this -> ruta.'\'';
		}
		else
		{
			$sql = '';
		}
			
		$sql = "UPDATE img_producto SET id_producto = ".$this -> id_producto." ".$sql." , titulo = '".$this -> titulo."' WHERE id_img_producto = ".$this -> id_img_producto.";";
		$con = new conexion();
		$con -> ejecutar_sentencia($sql);
		$this -> subir_archivo();
	}
	
	function ordenar_img_secundarias_producto($orden)
	{
		$con = new conexion();
		$sql= "UPDATE img_producto SET orden ='".$orden."' WHERE  id_img_producto=".$this -> id_img_producto." order by orden ASC;";
		$con -> ejecutar_sentencia($sql);
	}

	function eliminar_img_producto()
	{
	
		$this -> recupera_img_producto();
		$this -> borrar_archivo();
		
		$sql = "DELETE FROM img_producto WHERE id_img_producto =".$this -> id_img_producto.";";
		$con = new conexion();
		$con -> ejecutar_sentencia($sql);
	}
	
	function obtener_img_producto()
	{
		$sql = "SELECT * FROM img_producto WHERE id_img_producto =".$this -> id_img_producto;
		$con = new conexion();
		$resultados = $con -> ejecutar_sentencia($sql);
		
		while ($fila = mysqli_fetch_array($resultados))
		{
			$this -> id_img_producto = $fila['id_img_producto'];
			$this -> id_producto = $fila['id_producto'];
			$this -> ruta = $fila['ruta'];
			$this -> titulo = $fila['titulo'];
			$this -> ruta_final = $this -> directorio.$fila['ruta'];
		}
	}
	
	function obtener_img_producto_final()
	{
		$sql = "SELECT ruta FROM img_producto WHERE id_producto =".$this -> id_producto;
		$con = new conexion();
		$resultados = $con -> ejecutar_sentencia($sql);
		
		while ($fila = mysqli_fetch_array($resultados))
		{
			$this -> ruta = $fila['ruta'];
			$this -> ruta_final = $this -> directorio.$fila['ruta'];
		}
	}
	
	function recupera_img_producto()
	{
		$sql = "SELECT * FROM img_producto WHERE id_img_producto=".$this->id_img_producto;
		$con = new conexion();
		$resultados = $con -> ejecutar_sentencia($sql);
		
		while ($fila = mysqli_fetch_array($resultados))
		{
			$this -> id_img_producto= $fila['id_img_producto'];
			$this -> id_producto = $fila['id_producto'];
			$this -> ruta = $fila['ruta'];
			$this -> titulo = $fila['titulo'];
			$this -> ruta_final = $this -> directorio.$fila['ruta'];
		
		}
	}
	
	function listar_img_secundarias_producto()
	{
		$resultados = array();
		$sql = "SELECT * FROM img_producto WHERE id_producto =".$this -> id_producto." order by orden desc";
		$con = new conexion();
		$temporal = $con -> ejecutar_sentencia($sql);
		while ($fila = mysqli_fetch_array($temporal))
		{
			$registro = array();
			$registro['id_img_producto'] = $fila['id_img_producto'];
			$registro['id_producto'] = $fila['id_producto'];
			$registro['ruta'] = $fila['ruta'];
			$registro['titulo'] = $fila['titulo'];
			array_push($resultados, $registro);
		}
		mysqli_free_result($temporal);
		return $resultados;
	}
}
?>