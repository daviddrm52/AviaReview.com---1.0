<?php session_start(); ?>

<?php include_once('./../../config/verificacion_registrado.php'); ?>

<?php 
    //Hacemos la conexion
    include('./../../config/config_bd.php');

    $sql = "SELECT * FROM `ar-usuario` WHERE id = '".$_SESSION["id"]."'";

    $resultados = mysqli_query($conn, $sql);

    $informacionUsuario = mysqli_fetch_array($resultados);
?>

<!DOCTYPE html>
<html lang="es">
    <title>Ajuste del usuario - AviaReview.com</title>
    <link rel="stylesheet" href="/aviareview/css/clientes/ajustes-usuario.css">
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
    <div id="userBasicDisplay">
            <div id="userInformation">
                <h2>Información sobre tu usuario</h2>
                <div>
                    <ul>
                        <li><img id="avatar-displayed" src="" class="user_avatar"></li>
                        <li><b>Nombre de usuario: </b> <span id="name-displayed"> <?php echo htmlspecialchars($informacionUsuario['nombre_usuario']) ?> </span></li>
                        <li><b>Nombre y apellidos:</b> <span id="username-displayed"> <?php echo htmlspecialchars($informacionUsuario['nombre_apellido']) ?> </span></li>
                        <li><b>Correo electronico:</b> <span id="email-displayed"></span> <?php echo htmlspecialchars($informacionUsuario['email']) ?> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="userOptions">
            <div id="userInformation">
                <h2>Opciones del usuario</h2>
                <div>
                    <ul>
                        <li><button>Ver tus reseñas</button></li>
                    </ul>
                    <ul>
                        <li><button>Editar datos personales</button></li>
                        <li><button>Cambiar contraseña</button></li>
                    </ul>
                    <ul>
                        <li><button id="showDeleteUser">Eliminar cuenta</button></li>
                    </ul>
                    <ul>
                        <li><a href="./../../config/logout.php"><button id="logOutUser">Cerrar sesión</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include("./../../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>