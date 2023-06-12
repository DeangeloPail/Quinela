<?php
include("./template/cabecera.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <a class="navbar-brand" href="./index.php"><img src="../assets/images/favicon.ico" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
                              
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../config/cerrar_sesion.php">Cerrar Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-linkedin-box"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-facebook-box"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-twitter-box"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-instagram"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container"><!--class="img-rounded mb-3"-->
    <section class="Profile-header text-center">
        <h4>Hola, un gusto volver a verte <?php echo $nombreUsuario; ?></h4>
        <p><span class="badge-pill badge-success"><?php echo $tpUsurio; ?></span></p>
    </section>
</div>

<?php
include("./template/pie.php");
?>