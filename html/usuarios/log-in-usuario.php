<?php session_start();

$mensajeError="";

if(count($_POST)>0){
    include_once('./../../config/config_bd.php');    
    $inicioSesion = mysqli_query($conn, "SELECT * FROM `ar-usuario` WHERE nombre_usuario = '".$_POST["username"]."' AND contrasena = '".$_POST["password"]."'");
    $row = mysqli_fetch_array($inicioSesion);
    if(is_array($row)){
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    } else {
        $mensajeError="¡Usuario o contraseña incorrectos! Vuelva a intentarlo.";
    }
    if(isset($_SESSION["id"])){
        header("Location: ./../../index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <title>Iniciar sesión - AviaReview.com</title>
    <link rel="stylesheet" href="/aviareview/css/log-in-usuario.css">
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
        <div class="container text-center my-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-1">
                    <form id="formRegister" action="log-in-usuario.php" method="POST">
                        <div>
                            <h2 id="formTitle">Iniciar sesión</h2>
                            <div id="labelInput" class="animation">
                                <label for="username">Nombre de usuario: </label>
                                <p><input type="text" name="username" id="usernameSignIn" class="textInput" placeholder="Nombre de usuario..."></p>
                                <label for="password">Contraseña: </label>
                                <p><input type="password" name="password" id="passwordSignIn" class="textInput" placeholder="Contraseña..."></p>
                                <div id="buttonForm">
                                    <button id="signInForm" type="submit" value="submit" name="submit"><span class="material-symbols-outlined">app_registration</span>Sign In</button>
                                </div>
                                <small id="passwordSignInError"><?php echo htmlspecialchars($mensajeError) ?></small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-2 order-lg-2">
                    <div id="formRegister">
                        <div>
                            <h2 id="formTitle">¿No tienes ninguna cuenta de AviaReview.com?</h2>
                            <div id="labelInput">
                                <div id="buttonForm">
                                    <a href="/aviareview/html/usuarios/registro-usuario.php"><button id="registrationAccess"><span class="material-symbols-outlined">account_circle</span>Registrarse en AviaReview.com</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center my-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre cuentas de AviaReview.com</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">Una cuenta AviaReview.com es muy facil de hacer, en 2 minutos esta creada, y podrá disfrutar de todos los servicios de AviaReview.com.</p>
                       </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <p class="fs-5">¿Te has olvidado de la contraseña?</p>
                            <!-- <a href="/aviareview/html/clientes/recuperar-contrasena.php">--><button disabled type="button" class="btn btn-lg">Recuperar contraseña</button><!--</a>--> 
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./../../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>