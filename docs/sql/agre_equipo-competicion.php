<?php
include("../config/db.php");
ob_start();


if(isset($_POST['nomCompeticion']) && isset($_FILES['imagen'])){

    $competicion=$_POST['nomCompeticion'];
    $imagen = $_FILES['imagen']['name'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];
        $tamanio_archivo = $_FILES['imagen']['size'];
        
        if(!((strpos($tipo,'png') && $tamanio_archivo < 5000000) )){
          echo"error";
        }else{
          $sql= "INSERT INTO `competicion` (`cod_competicion`, `nom_competicion`, `logo_competici`) 
          VALUES (NULL, '$competicion', '$imagen')";
          $resultdo = mysqli_query($conexion,$sql);
          if($resultdo){
            move_uploaded_file($temp,'../assets/images/logos_equipos-competicion/'.$imagen);
            header("location: ../admin/partido.php");
          }else{
            echo"error";
        }
        }
      
    }

}
if(isset($_POST['nomEquipo']) && isset($_FILES['imagen'])){

    $equipo=$_POST['nomEquipo'];
    $imagen = $_FILES['imagen']['name'];
    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];
        $tamanio_archivo = $_FILES['imagen']['size'];
        
        if(!((strpos($tipo,'png') && $tamanio_archivo < 5000000) )){
          echo"error";
        }else{
          $sql= "INSERT INTO `equipo` (`cod_equipo`, `nom_equipo`, `logo_equipo`) 
          VALUES (NULL, '$equipo', '$imagen')";
          $resultdo = mysqli_query($conexion,$sql);
          if($resultdo){
            move_uploaded_file($temp,'../assets/images/logos_equipos-competicion/'.$imagen);
            header("location: ../admin/partido.php");
          }else{
            echo"error";
        }
        }
      
    }

}
?>