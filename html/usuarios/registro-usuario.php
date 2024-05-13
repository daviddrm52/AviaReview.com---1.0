<!DOCTYPE html>
<html lang="es">
<title>Ayuda al usuario - AviaReview.com</title>
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
                <form>
                    <fieldset>
                        <legend>Registro de usuario</legend>
                        <div class="mb-3">
                            <label for="nombre-usuario" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="nombre-usuario" aria-describedby="emailHelp">
                            <div id="ayuda-nombre-usuario" class="form-text">Tu nombre de usuario, maximo 20 caracteres.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre-apellido" class="form-label">Nombre y apellidos</label>
                            <input type="tet" class="form-control" id="nombre-apellidos" aria-describedby="emailHelp">
                            <div id="ayuda-nombre-apellido" class="form-text">Tu nombre y apellidos.</div>
                        </div>
                        <div class="mb-3">
                            <label for="correo-electronico" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="correo-electronico" aria-describedby="emailHelp">
                            <div id="ayuda-correo-electronico" class="form-text">No es compartido con nadie.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="emailHelp" class="form-text">Minimo de 8 caracteres.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear cuenta de usuario</button>
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