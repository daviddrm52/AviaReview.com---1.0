<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/anadir-resena.css">
    <title>Añadir reseña de aerolinea - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
    <div class="container">
        <div class="row m-3">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="text-center">Añadir una reseña</h1>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="container text-center my-3 p-3 rounded-3" style="background-color: #EBEBEB;">
        <div class="row">
            <div class="col">
                <form action="aerolineas-lista.php" method="POST">
                    <fieldset>
                        <legend>Reseña de aerolinea</legend>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Aerolínea</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Aerolinea que va a realizar la reseña.</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Aeropuerto de origen</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Aeropuerto de origen del vuelo</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Aeropuerto de destino</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Aeropuerto de destino del vuelo</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Codigo del vuelo</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Codigo del vuelo (formato IATA, por ejemplo: VY3718)</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Asiento del avión</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Asiento en el que ha ido en el vuelo (por ejemplo 22A)</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Breve descripción</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Breve descripción del vuelo</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia en el embarque</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como ha sido el embarque en el aeropuerto hacia el avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Modelo de avión y metodo de embarque</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Modelo de avión usado por la aerolinea y su metodo de embarque</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Interior de la cabina</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como es el interior de la cabina del avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia en el despegue</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como ha sido el despegue del avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Servicios a bordo</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Que servicios a borde se ofrecen durante el vuelo</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia de los lavabos</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como estaban los lavabos del avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia en el aterrizaje</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como ha sido el aterrizaje del avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia en el desembarque</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Como ha sido el desembarque del avión</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Experiencia en caso de incidencias</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">En caso de incidencia, como lo ha resuelto la aerolinea</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Valoración</label>
                            <input type="number" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Valoración general que le da al vuelo (0-10)</div>
                        </div>
                        <div class="mb-3">
                            <label for="n/a" class="form-label">Imagen del vuelo</label>
                            <input type="text" class="form-control" name="n/a" value="<?php //echo htmlspecialchars($) ?>">
                            <div id="ayuda-n/a" class="form-text">Una imagen destacada del vuelo, puede ser del avión, <em>se aplican restricciones</em></div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Puntos positivos</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Las experiencias positivas de este viaje</div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Puntos negativos</label>
                            </div>
                            <div id="ayuda-n/a" class="form-text">Las experiencias negativas de este viaje</div>
                        </div>
                        <button type="submit" name="submit" class="btn">Subir reseña de esta aerolinea</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </main>
    <?php include("./../../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>