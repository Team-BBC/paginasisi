<?php
require_once "Conexion.php";
	class Crud extends Conexion{
	
		public function mostrarDatos()
		{
			$sql = "SELECT id,
							sustancia,
							url
							from document";

			$query = Conexion::Conectar() -> prepare($sql); 		//Ejecuta sql pero primero invoca al metodo conecar en la clase conexion.php
			$query->execute();
			return $query -> fetchAll();
			$query ->close();
		}
	}
?>