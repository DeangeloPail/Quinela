<?php
    include_once 'db.php';
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	session_start();
	$_SESSION['usuario'] = $usuario;

	$sql="SELECT * from usuario WHERE nom_usuario='$usuario' and contrasena='$contrasena'";
	$result=mysqli_query($conexion,$sql);

	$filas=mysqli_fetch_array($result);

    if($filas == true){
        $codUsuario=$filas['cod_usuario'];
        $tipoUsuario=$filas['ref_tp_usurio'];
        // validar rol
        if($filas['ref_tp_usurio']=='admin') {
            $_SESSION['userAdministrador']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            $_SESSION['IDUsuario']=$codUsuario;
            $_SESSION['tpUsuario']=$tipoUsuario;
            header("location: ../admin/index.php");
        }
        if($filas['ref_tp_usurio']=='usuario'){
            $_SESSION['userUsuario']="ok";
            $_SESSION['nombreUsuario']=$usuario;
            $_SESSION['IDUsuario']=$codUsuario;
            $_SESSION['tpUsuario']=$tipoUsuario;
            header("location: ../user/index.php");
        }
    }else{
        header("location: ../login.html");
    }

    mysqli_free_result($result);
    mysqli_close($conexion);

?>