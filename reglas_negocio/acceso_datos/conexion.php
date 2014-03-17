<?php

class conexion {
	
	public function conectar(){
		$cadena_de_conexion = "host=localhost port=5432 dbname=iglesia_db user=iglesia_db password=password connect_timeout=5";
		$conexion = $dbconn4 = pg_connect($cadena_de_conexion) or die ('No se ha podido conectar a la Base de Datos');
		return $conexion;	
	}
	
	public function desconectar($conexion){
		pg_close($conexion);
	}
	
	public function consulta($sql_consulta){
		$respuesta = pg_query(conectar(), $sql_consulta) or die("No se pudo ejecutar la consulta:".$sql_consulta."\n"); 
		$array = pg_fetch_array($respuesta);
		desconectar();
		return $array;
	}
	
	
	
}

?>