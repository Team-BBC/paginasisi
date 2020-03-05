<?php
require_once "Conexion.php";
	class Crud extends Conexion{
	
		public function mostrarDatos()
		{
			$sql = "SELECT id,
							nombre,
							sueldo,
							edad,
							fRegistro
							from t_crud";
			$query = Conexion::Conectar() -> prepare($sql);
			$query->execute();
			return $query -> fetchAll();
			$query ->close();
		}
	}
?>