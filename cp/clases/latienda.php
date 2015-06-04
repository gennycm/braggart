<?php
include_once('conexion.php');

class latienda

{
	var $id_latienda;
	var $historia;
	var $descripcion1;
	var $descripcion2;
	var $descripcion3;
	
	function latienda($id_latienda = 1, $historia = "", $descripcion1 = "", $descripcion2 = "", $descripcion3 = "")
	{
		$this -> id_latienda = $id_latienda;
		$this -> historia = $historia;
		$this -> descripcion1 = $descripcion1;
		$this -> descripcion2 = $descripcion2;
		$this -> descripcion3 = $descripcion3;
	}
	
	
	function modificar_latienda()
	{	
		$sql="UPDATE latienda SET historia = '".htmlspecialchars($this -> historia)."', descripcion1 = '".htmlspecialchars($this -> descripcion1)."', descripcion2 = '".htmlspecialchars($this -> descripcion2)."'  ,descripcion3 = '".htmlspecialchars($this -> descripcion3)."' WHERE id_latienda = ".$this -> id_latienda.";";
		$con= new conexion();
		$con->ejecutar_sentencia($sql);
	}
	
	function obtener_latienda()
	{
		$sql="SELECT * FROM latienda WHERE id_latienda = ".$this->id_latienda.";";
		$con= new conexion();
		$resultados= $con->ejecutar_sentencia($sql);
		
		while ($fila=mysqli_fetch_array($resultados))
		{
			$this -> id_latienda = $fila['id_latienda'];
			$this -> historia = htmlspecialchars_decode($fila['historia']);
			$this -> descripcion1 = htmlspecialchars_decode($fila['descripcion1']);
			$this -> descripcion2 = htmlspecialchars_decode($fila['descripcion2']);
			$this -> descripcion3 = htmlspecialchars_decode($fila["descripcion3"]);
		}
	}
	
}
?>