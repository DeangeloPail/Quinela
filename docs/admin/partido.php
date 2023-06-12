<?php
include("./template/cabecera.php");
include("../sql/vistas_equipo-competicion.php");
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
                    Crear partido
            </div>  
            <div class="card-body">
                <form action="../sql/agre_partido.php" method="POST" class="my-5 mx-5 row g-3" enctype="multipart/form-data">
                    <div class="col-md-12 mb-3">
                        <label for="Competicion" class="form-label">Competición</label>
                        <select class="form-select" id="Competicion" name="competicion" required>
                        <option selected disabled value="">Seleccione una opción...</option>
                        <?php while($competicion=mysqli_fetch_assoc($resultCompeticion)) {?>
                            <option value="<?php echo $competicion['cod_competicion'];?>"><?php echo $competicion['nom_competicion'];?></option>
                        <?php }?>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                        <a href="./competicion.php">Agregar competición</a>
                    </div>
                    <div class="col-md-5">
                        <label for="EquipoLocal" class="form-label">Equipo Local</label>
                        <select class="form-select" id="EquipoLocal" name="equipoLocal" required>
                        <option selected disabled value="">Seleccione una opción...</option>
                        <?php while($equipoLocal=mysqli_fetch_assoc($resultEquipoLocal)) {?>
                            <option value="<?php echo $equipoLocal['cod_equipo'];?>"><?php echo $equipoLocal['nom_equipo'];?></option>
                        <?php }?>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                        <a href="./equipo.php">Agregar equipo</a>
                    </div>
                    <div class="col-md-2 mt-5">
                        <p>Vs</p>
                    </div>
                    <div class="col-md-5">
                        <label for="EquipoVisitante" class="form-label">Equipo Visitante</label>
                        <select class="form-select" id="EquipoVisitante" name="equipoVisitante" required>
                        <option selected disabled value="">Seleccione una opción...</option>
                        <?php while($equipoVisitante=mysqli_fetch_assoc($resultEquipoVisitante)) {?>
                            <option value="<?php echo $equipoVisitante['cod_equipo'];?>"><?php echo $equipoVisitante['nom_equipo'];?></option>
                        <?php }?>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                        <a href="./equipo.php">Agregar equipo</a>
                    </div>
                    <div class="col-md-12 my-5">
                        <label for="FechaPartido" class="form-label">Fecha de Partido</label>
                        <input type="date" class="form-control text-black" id="FechaPartido" name="fechaPartido" >
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Crear Partido</button>
                    </div>
                </form>
            </div>  
        </div>
    </section>
</div>

<?php
include("./template/pie.php");
?>