<?php
include("../config/db.php");
ob_start();


if(isset($_POST['competicion']) &&  isset($_POST['equipoLocal']) &&  
isset($_POST['equipoVisitante']) &&  isset($_POST['fechaPartido'])){
    
    $competicion=$_POST['competicion'];
    $eqip_local=$_POST['equipoLocal'];
    $eqip_visitante=$_POST['equipoVisitante'];
    $fecha=$_POST['fechaPartido'];

    $sql="INSERT INTO `partidos` (`cod_partido`, `ref_competicion`, 
    `ref_equi_loc`, `ref_equi_visi`, `fecha_prtido`, `resultado_prtido`) 
    VALUES (NULL, '$competicion', '$eqip_local', '$eqip_visitante', '$fecha', NULL)";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ../admin/index.php");
    }else{
        header("location: ../admin/partido.php");
    }

}
?>