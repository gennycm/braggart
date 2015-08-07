<?php
include_once('conexion.php');
include_once('datosuserend.php');
include_once('userenddireccion.php');

class wishlist
{
	var $id_wishlist;
	var $id_producto;
	var $id_userend;
	var $status;

	function wishlist($id_wishlist = 0, $id_producto = 0, $id_userend = 0, $status = 1)
	{
		$this -> id_wishlist = $id_wishlist;
		$this -> id_producto = $id_producto;
		$this -> id_userend = $id_userend;
		$this -> status = $status;
	}
	
	function insertar_wishlist()
	{
		$conexion = new conexion();
		$sql = "insert into wishlist (id_producto, id_userend, status) values('".$this->id_producto."','".$this->id_userend."','".$this->status."')";
		$this -> id_wishlist = $conexion -> ejecutar_sentencia($sql);
	}
	
	function modificar_wishlist()
	{
		$conexion = new conexion();
		$sql = "update wishlist set id_producto = '".$this->id_producto."', id_userend = '".$this->id_userend."' where id_wishlist = ".$this -> id_wishlist.";";
		$conexion -> ejecutar_sentencia($sql);
	}
	function eliminar_wishlist()
	{
		$conexion=new conexion();
		$sql="delete from wishlist where id_producto =".$this->id_producto." AND id_userend =".$this -> id_userend;
		return $conexion->ejecutar_sentencia($sql);
	}
	
	function listar_wishlist_ajax()
	{
		$conexion=new conexion();
		$sql="select * from wishlist where id_userend = ".$this -> id_userend;
		$result=$conexion->ejecutar_sentencia($sql);
		$resultados=array();
		while ($row=mysqli_fetch_array($result))
		{
			$registro=array();
			$registro['id_userend']=$row['id_userend'];
			$registro['id_producto']=$row['id_producto'];
			$registro['id_wishlist']=$row['id_wishlist'];
			$registro['status']=$row['status'];
			array_push($resultados,$registro);
		}
		echo json_encode($resultados);
	}
	function listar_wishlist()
	{
		$conexion=new conexion();
		$sql="select * from wishlist where id_userend = ".$this -> id_userend;
		$result=$conexion->ejecutar_sentencia($sql);
		$resultados=array();
		while ($row=mysqli_fetch_array($result))
		{
			$registro=array();
			$registro['id_userend']=$row['id_userend'];
			$registro['id_producto']=$row['id_producto'];
			$registro['id_wishlist']=$row['id_wishlist'];
			$registro['status']=$row['status'];
			array_push($resultados,$registro);
		}
		mysqli_free_result($result);
		return $resultados;
	}

	function producto_en_wishlist($id_producto, $id_userend){
		$conexion=new conexion();
		$sql="SELECT * FROM wishlist WHERE id_userend = ".$id_userend. " AND id_producto =".$id_producto;
		$result=$conexion->ejecutar_sentencia($sql);
		$resultados=array();
		while ($row=mysqli_fetch_array($result))
		{
			$registro=array();
			$registro['id_userend']=$row['id_userend'];
			$registro['id_producto']=$row['id_producto'];
			$registro['id_wishlist']=$row['id_wishlist'];
			$registro['status']=$row['status'];
			array_push($resultados,$registro);
		}
		mysqli_free_result($result);
		return (count($resultados) > 0)? true:false;
	}
	
	function obtener_wishlist()
	{
		$conexion=new conexion();
		$sql="select * from wishlist where id_wishlist = '".$this->id_wishlist."'";
		$result=$conexion->ejecutar_sentencia($sql);
		while($row=mysqli_fetch_array($result))
		{
			$this->id_wishlist=$row['id_wishlist'];
			$this->id_producto=$row['id_producto'];
			$this->id_userend=$row['id_userend'];
			$this->status=$row['status'];
		}
		mysqli_free_result($result);
	}

}
?>