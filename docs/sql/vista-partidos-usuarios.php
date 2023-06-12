<?php
include("../config/db.php");
ob_start();

$sqlUsuarios="SELECT * FROM `usuario`";
$resultUsuarios=mysqli_query($conexion, $sqlUsuarios);

?>