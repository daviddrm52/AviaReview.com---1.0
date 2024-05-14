<?php session_start(); ?>

<?php  ?>

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
                        <li><b>Nombre de usuario: </b> <span id="name-displayed"></span></li>
                        <li><b>Nombre y apellidos:</b> <span id="username-displayed"></span></li>
                        <li><b>Correo electronico:</b> <span id="email-displayed"></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="delete-selected-user-container">
            <div id="userInformation">
                <h3><span class="material-symbols-outlined">warning</span></h3>
                <h4>Are you sure that you want to delete your account?</h4>
                <ul>
                    <li><button id="deleteUser"> Delete account</button></li>
                    <li><button id="cancelDeleteUser">Cancel deletion</button></li>
                </ul>
            </div>
        </div>
        <div id="changePasswordContainer">
            <div id="userInformation">
                <h2>Change your account password</h2>
                <div class="labelInput">
                    <label for="password">Password: </label>
                    <p><input type="password" name="password" id="password" class="textInput" placeholder="Password..."></p>
                    <small id="passwordError"></small>
                    <small id="passwordEqualError"></small>
                </div>
                <div class="labelInput">
                    <label for="confirmPassword">Confirm password: </label>
                    <p><input type="password" name="confirmPassword" id="confirmPassword" class="textInput" placeholder="Confirm password..."></p>
                    <small id="confirmPasswordError"></small>
                    <small id="confirmPasswordEqualError"></small>
                </div>
                <div class="labelInput">
                    <div id="buttonForm">
                        <button id="changePassword">Change password</button>
                    </div>
                    <div id="buttonForm">
                        <button id="cancelChangePassword">Cancel operation</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="editPersonalDataContainer">
            <div id="userInformation">
                <h2>Change your personal data</h2>
                <div class="labelInput">
                    <label for="name">Name: </label>
                    <p><input type="text" name="name" id="name" class="textInput" placeholder="Name..."></p>
                    <small id="nameError"></small>
                </div>
                <div class="labelInput">
                    <label for="username">Username: </label>
                    <p><input type="text" name="username" id="username" class="textInput" placeholder="Username..."></p>
                    <small id="usernameError"></small>
                </div>
                <div class="labelInput">
                    <label for="email">Email: </label>
                    <p><input type="email" name="email" id="email" class="textInput" placeholder="Email..."></p>
                    <small id="emailError"></small>
                </div>
                <div class="labelInput">
                    <label for="avatar">Select an avatar: </label>
                    <div id="avatars">
                        <ul>
                            <li>
                                <input type="radio" name="avatar" id="avatarCheckbox1">
                                <label for="avatarCheckbox1" id="labelCheck"><img id="ahri" src="./img/form/ahri.png" alt="Ahri_avatar"></label>
                            </li>
                            <li>
                                <input type="radio" name="avatar" id="avatarCheckbox2">
                                <label for="avatarCheckbox2" id="labelCheck"><img id="kaisa" src="./img/form/kaisa.png" alt="Ahri_avatar"></label>
                            </li>
                            <li>
                                <input type="radio" name="avatar" id="avatarCheckbox3">
                                <label for="avatarCheckbox3" id="labelCheck"><img id="evelynn" src="./img/form/evelynn.png" alt="Ahri_avatar"></label>
                            </li>
                        </ul>
                    </div>
                    <small id="avatarError"></small>
                </div>
                <div class="labelInput">
                    <div id="buttonForm">
                        <button id="editPersonalData">Editar datos personales</button>
                    </div>
                    <div id="buttonForm">
                        <button id="cancelEditPersonalData">Cancelar operación</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="userOptions">
            <div id="userInformation">
                <h2>Opciones del usuario</h2>
                <div>
                    <ul>
                        <li><button id="showEditPersonalDataForm">Editar datos personales</button></li>
                        <li><button id="showChangePasswordForm">Cambiar contraseña</button></li>
                        <li><button disabled id="changeTheme">Cambiar tema de la pagina (no disponible)</button></li>
                    </ul>
                    <ul>
                        <li><button id="showDeleteUser">Eliminar cuenta</button></li>
                    </ul>
                    <ul>
                        <li><button id="logOutUser">Cerrar sesión</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include("./../../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>