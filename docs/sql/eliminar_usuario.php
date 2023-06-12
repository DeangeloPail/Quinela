<?php
include("../config/db.php");
ob_start();


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="DELETE FROM usuario WHERE `usuario`.`cod_usuario` = '".$id."'";
    $result=mysqli_query($conexion, $sql);

    if($result){
        header("location: ../admin/index.php");
    }else{
        header("location: ../admin/index.php");
    }

}else{
    header("location: ../admin/index.php");
}
?>