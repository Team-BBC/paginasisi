<?php
	
	//basically just makes a basic conexion with the database.

	class Conexion{
		public function conectar(){
			$conexion = new PDO("mysql:host=localhost;dbname=pdof","root","");
			return $conexion;
		}
	}

?>