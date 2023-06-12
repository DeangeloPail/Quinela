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
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./partido.php">Partidos</a>
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
        <div class="card text-center ">
            <div class="card-header text-white bg-dark">
                    Crear Competición
            </div>  
            <div class="card-body">
                <form action="../sql/agre_equipo-competicion.php" method="POST" class="my-5 mx-5 row g-3" enctype="multipart/form-data">
                    <div class="col-md-5 my-5">
                        <label for="imagen" class="form-label">
                            <figure class="d-inline-block mr-4">
                                <img src="../assets/images/logos_equipos-competicion/sin_logo.png" alt="demo" 
                                class="img-rounded img-raised" width="150" height="150">
                                <figcaption class="text-center py-3 font-weight-medium text-black"><h5>Foto de Competición</h5></figcaption>
                            </figure>
                        </label>
                        <input type="file" class="sr-only" name="imagen" id="imagen" accept="image/png">
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-5 my-5">
                        <label for="nombreCompeticion" class="form-label">Nombre de la Competición</label>
                        <input type="text" class="form-control text-black" placeholder="Nombre de la Competición" 
                        id="nombreCompeticion" name="nomCompeticion">
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Agregar Competición</button>
                    </div>
                </form>
            </div>  
        </div>
    </section>
</div>

<?php
include("./template/pie.php");
?>