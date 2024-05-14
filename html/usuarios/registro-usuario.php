<?php session_start(); ?>

<?php 
    //Hacemos la conexion
    include('./../../config/config_bd.php');

    $errores = array('nombre_usuario' => '', 'nombre_apellido' => '', 'email' => '', 'contrasena' => '');

    $nombreUsuario = '';
    $nombreApellido = '';
    $email = ''; 
    $contrasena = '';
    $tipoUsuario = '2';

    if (isset($_POST['submit'])) {
        $nombreUsuario = $_POST['nombre_usuario'];
        $nombreApellido = $_POST['nombre_apellido'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];        
    }
    if (isset($_POST['submit'])) {
        if(empty($_POST['nombre_usuario'])) {
            $errores['nombre_usuario'] = 'El nombre de usuario es obligatorio';
        } else {
            $nombreUsuario = $_POST['nombre_usuario'];
            if(!preg_match('/^[a-zA-Z0-9]+$/', $nombreUsuario)) {
                $errores['nombre_usuario'] = '¡El nombre solo puede estar compuesto de letras y numeros sin espacios!';
            }
            //Verificar si este usuario esta registrado
            $queryUsuario="SELECT nombre_usuario FROM `ar-usuario`";
            //Lanzamos la query para ver los resultados
            $resultadosUsuario = mysqli_query($conn, $queryUsuario);
            //Volcamos el resultado en un array
            $verificarUsuario = mysqli_fetch_assoc($resultadosUsuario);
            //Miramos si existe el usuario en la base de datos
            $usuarioBaseDatos = $verificarUsuario['nombre_usuario'];
            //Comparamos los dos nombres introducidos, en caso de coincidir, no dejamos que continue
            if($usuarioBaseDatos==$nombreUsuario){
                $errores['nombre_usuario'] = '¡El usuario debe de ser unico!';
            }
        }
        if(empty($_POST['nombre_apellido'])) {
            $errores['nombre_apellido'] = 'El nombre y los apellidos son obligatiorios';
        }
        if(empty($_POST['email'])) {
            $errores['email'] = '¡El correo electronico es obligatorio!';
        } else {
            $email = $_POST['email'];
            if(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
                $errores['email'] = '¡El correo electronico no es correcto!';
            }
        }
        if(empty($_POST['contrasena'])) {
            $errores['contrasena'] = '¡La contraseña es obligatoria!';
        } else {
            $contrasena = $_POST['contrasena'];
            if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/', $contrasena)) {
                $errores['contrasena'] = '¡La contraseña no cumple los requisitos minimos!';
            }
        }
        if(!array_filter($errores)) {    
            $nombreUsuario = mysqli_real_escape_string($conn, $_POST['nombre_usuario']);
            $nombreApellido = mysqli_real_escape_string($conn, $_POST['nombre_apellido']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $contrasena = mysqli_real_escape_string($conn, $_POST['contrasena']);

            $sql = "INSERT INTO `ar-usuario` (nombre_usuario,nombre_apellido,email,contrasena,tipo_usuario) VALUES('$nombreUsuario','$nombreApellido', '$email', '$contrasena', '$tipoUsuario')";
            if(mysqli_query($conn, $sql)){ 
                header('Location: ./../../index.php');
            } else { 
                echo 'Error en la query: ' . mysqli_error($conn);
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="es">
<title>Crear cuenta de AviaReview - AviaReview.com</title>
<?php include("./../../template/header.php"); ?>
<main class="my-3">
    <div class="container">
        <div class="row m-3">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="text-center">Crear tu cuenta de AviaReview.com</h1>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container text-center my-3 rounded-3" style="background-color: #EBEBEB;">
        <div class="row align-items-center">
            <div class="col-lg-6 order-1 order-lg-1">
                <form action="registro-usuario.php" method="POST">
                    <fieldset>
                        <legend>Registro de usuario</legend>
                        <div class="mb-3">
                            <label for="nombre-usuario" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" name="nombre_usuario" value="<?php echo htmlspecialchars($nombreUsuario) ?>">
                            <div id="ayuda-nombre-usuario" class="form-text">Tu nombre de usuario, maximo 20 caracteres.</div>
                            <div class="text-danger"><?php echo htmlspecialchars($errores['nombre_usuario'])?></div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre-apellido" class="form-label">Nombre y apellidos</label>
                            <input type="tet" class="form-control" name="nombre_apellido" value="<?php echo htmlspecialchars($nombreApellido) ?>">
                            <div id="ayuda-nombre-apellido" class="form-text">Tu nombre y apellidos.</div>
                            <div class="text-danger"><?php echo htmlspecialchars($errores['nombre_apellido'])?></div>
                        </div>
                        <div class="mb-3">
                            <label for="correo-electronico" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email) ?>">
                            <div id="ayuda-correo-electronico" class="form-text">No es compartido con nadie.</div>
                            <div class="text-danger"><?php echo htmlspecialchars($errores['email'])?></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" value="<?php echo htmlspecialchars($contrasena) ?>">
                            <div id="emailHelp" class="form-text">Minimo de 8 caracteres.</div>
                            <div class="text-danger"><?php echo htmlspecialchars($errores['contrasena'])?></div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Crear cuenta de usuario</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-lg-6 order-2 order-lg-2">
                <div class="row m-3">
                    <div class="col">
                        <p class="fs-5"><h3>Beneficios de tener una cuenta en AviaReview.com</h3></p>
                    </div>
                </div>
                <img class="figure-img img-fluid my-3 rounded-3" src="/aviareview/img/usuarios/Vueling_line_up_at_LEBL.png" alt="Benefits of creating an AviaReview.com account" width="500px">
                <div class="row m-3">
                    <div class="col">
                        <p class="fs-5"> - Creación de reseñas de nueva rutas y aerolineas.</p>
                        <p class="fs-5"> - Reseñas de aeropuertos nuevos, y nuevas secciones.</p>
                        <p class="fs-5"> - Registro de incidencias aereas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include("./../../template/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>