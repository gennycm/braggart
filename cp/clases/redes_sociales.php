<?php
include_once('conexion.php');

class redes_sociales
{
var $id_redes_sociales;
var $facebook;
var $twitter;
var $instagram;
var $pinterest;


	function redes_sociales($id_redes_sociales = 0, $facebook='', $twitter = '', $instagram = "", $pinterest = "")
	{
		$this -> id_redes_sociales=$id_redes_sociales;
		$this -> facebook = $facebook;
		$this -> twitter = $twitter;
		$this -> instagram = $instagram;
		$this -> pinterest = $pinterest;
	}
	
	function modificar_redes_sociales()
	{
		$conexion = new conexion();
		$sql = "UPDATE redes_sociales SET facebook = '".htmlspecialchars($this -> facebook, ENT_QUOTES)."', twitter = '".htmlspecialchars($this -> twitter, ENT_QUOTES)."', instagram = '".htmlspecialchars($this -> instagram, ENT_QUOTES)."', pinterest = '".htmlspecialchars($this -> pinterest, ENT_QUOTES)."'  WHERE id_redes_sociales = ". $this -> id_redes_sociales;
		return $conexion -> ejecutar_sentencia($sql);
	}
	
	function obtener_redes_sociales()
	{
		$conexion=new conexion();
		$sql="SELECT * FROM redes_sociales WHERE id_redes_sociales=".$this->id_redes_sociales;
		$result=$conexion->ejecutar_sentencia($sql);
			
			while($row=mysqli_fetch_array($result))
			{
				$this -> id_redes_sociales = $row['id_redes_sociales'];
				$this -> facebook =$row['facebook'];
				$this -> twitter =$row['twitter'];
				$this -> instagram =$row['instagram'];
				$this -> pinterest =$row['pinterest'];
			}
		mysqli_free_result($result);
	}
}
?>