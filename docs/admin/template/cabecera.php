<?php 
session_start();
if(!isset($_SESSION['userAdministrador'])){
  session_start();
  session_destroy();
  header("location: ../login.html");
}else{
  if($_SESSION['userAdministrador']="ok"){
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

    <!-- iconos -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Vendor css -->
    <link rel="stylesheet" href="../src/vendors/@mdi/font/css/materialdesignicons.min.css">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="../src/css/miri-ui-kit-free.css">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>