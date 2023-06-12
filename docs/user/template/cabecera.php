<?php 
session_start();
if(!isset($_SESSION['userUsuario'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['userUsuario']="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
      $tpUsurio=$_SESSION['tpUsuario'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <title>Miri UI Kit - Profile</title>

    <!-- Vendor css -->
    <link rel="stylesheet" href="../src/vendors/@mdi/font/css/materialdesignicons.min.css">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="../src/css/miri-ui-kit-free.css">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>