<?php
include("../config/db.php");
ob_start();

$sqlEquipo="SELECT `cod_equipo`,`nom_equipo`,`logo_equipo` FROM `equipo`";
$resultEquipoLocal=mysqli_query($conexion, $sqlEquipo);
$resultEquipoVisitante=mysqli_query($conexion, $sqlEquipo);


$sqlCompeticion="SELECT `cod_competicion`,`nom_competicion`,`logo_competici` FROM `competicion`";
$resultCompeticion=mysqli_query($conexion, $sqlCompeticion);
?>