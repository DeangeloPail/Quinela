<?php
include("./template/cabecera.php");
include("../sql/vista-partidos-usuarios.php");
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
        <h4>Hola, un gusto volver a verte <?php echo $nombreUsuario; ?></h4>
        <p><span class="badge-pill badge-success"><?php echo $tpUsurio; ?></span></p>
    </section>
</div>
<section class="miri-ui-kit-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre del Usuario</th>
                            <th>Correo</th>
                            <th>Numero de telefono</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($usuarios=mysqli_fetch_assoc($resultUsuarios)) {?>
                            <tr>
                                <td><?php echo $usuarios['nom_usuario']; ?></td>
                                <td><?php echo $usuarios['correo_elec']; ?></td>
                                <td><?php echo $usuarios['num_telefono']; ?></td>
                                <th><?php echo "<a type='submit' class='btn btn-outline-dark'
                                                href='../sql/eliminar_usuario.php?id=".$usuarios['cod_usuario']."'>
                                                <i class='bi bi-trash3'></i>
                                                </a>";?> 
                                </th>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!--<div class="col-md-6 text-right">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>-->
        </div>
    </div>
</section>
<?php
include("./template/pie.php");
?>