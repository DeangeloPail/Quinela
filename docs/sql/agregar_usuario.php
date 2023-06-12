<?php
include("../config/db.php");
ob_start();


if(isset($_POST['nom_usuario']) && isset($_POST['contrasena'])){

    $usuario=$_POST['nom_usuario'];
    $contrasena=$_POST['contrasena'];
    $correo=$_POST['correo_electronico'];
    $telefono=$_POST['telefono'];

    $sql="INSERT INTO `usuario` (`cod_usuario`, `nom_usuario`, 
    `contrasena`, `correo_elec`, `num_telefono`, `ref_tp_usurio`) 
    VALUES (NULL, '$usuario', '$contrasena', '$correo', '$telefono', 'usuario')";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ../login.html");
    }else{
        header("location: ../registrar.html");
    }

}
?>