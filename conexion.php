<?php

$conexion=pg_connect("host=localhost dbname=postgres user=postgres password=Civilwar24abril$");
$query="SELECT nombre,grupo,carrera,descrip,plantel,imagen,imagendos FROM formulariodos";
$consulta=pg_query($conexion,$query);

?>