<?php session_start();

$mensajeError="";

if(count($_POST)>0){
    include_once('./../config/config_bd.php');    
    $inicioSesion = mysqli_query($conn, "SELECT * FROM `ar-usuario` WHERE usuario = '".$_POST["username"]."' AND contrasena = '".$_POST["password"]."'");
    $row = mysqli_fetch_array($inicioSesion);
    if(is_array($row)){
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    } else {
        $mensajeError="¡Usuario o contraseña incorrectos! Vuelva a intentarlo.";
    }
    if(isset($_SESSION["id"])){
        header("Location: ./../index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <title>Iniciar sesión - AviaReview.com</title>
    <link rel="stylesheet" href="/aviareview/css/clientes/log-in-usuario.css">
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
        <div id="formRegister">
            <div>
                <h2 id="formTitle"><b>Iniciar sesión</b></h2>
                <input type="text" name="hiddenId" id="hiddenId" value="0">
                <div id="labelInput" class="animation">
                    <label for="username">Nombre de usuario: </label>
                    <p><input type="text" name="username" id="usernameSignIn" class="textInput" placeholder="Nombre de usuario..."></p>
                    <label for="password">Contraseña: </label>
                    <p><input type="password" name="password" id="passwordSignIn" class="textInput" placeholder="Contraseña..."></p>
                    <div id="buttonForm">
                        <button id="signInForm"><span class="material-symbols-outlined">app_registration</span>Sign In</button>
                    </div>
                    <small id="passwordSignInError"><?php echo htmlspecialchars($mensajeError) ?></small>
                </div>
            </div>
        </div>
        <div id="formRegister">
            <div>
                <h2 id="formTitle"><b>¿No tienes ninguna cuenta de AviaReview.com?</b></h2>
                <div id="labelInput">
                    <div id="buttonForm">
                        <a href="/aviareview/html/usuarios/registro-usuario.php"><button id="registrationAccess"><span class="material-symbols-outlined">account_circle</span>Registrarse en AviaTalk.com</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./../../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>