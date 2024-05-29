<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/informacion-resena-aerolineas.css">
    <title>Información de las reseñas de aeropuertos - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
        <div class="container text-center mt-3 p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-1 mt-3">Aeropuertos de origen</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Ver las reseñas de aeropuertos de origen</p>
                    <a href="#"><button type="button" class="btn">Ver reseñas de aeropuertos de origen</button></a>
                </div>
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Sube tu reseña de un aeropuerto de origen</p>
                    <a href="#"><button type="button" class="btn">Crear reseña de un aeropuerto de origen</button></a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre las reseñas a aeropuertos de origen</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2">
                    <p class="fs-2 mt-3">Fotos realizadas por los usuarios</p>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://menorcaaldia.com/wp-content/uploads/2017/10/Terminal-de-salidas-del-Aeropuerto-de-Menorca..jpg" alt="Aeropuerto de Menorca" width="500px">
                        <figcaption class="figure-caption"><strong>Zona de facturación del Aeropuerto de Menorca (LEMH).</strong></figcaption>
                    </div>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://granadaporelmundo.com/wp-content/uploads/2019/03/Terminales-de-facturacion-del-Aeropuerto-de-Granada.jpg" alt="Aeropuerto de Granada" width="500px">
                        <figcaption class="figure-caption bold"><strong>Zona de facturación del Aeropuerto Federico García Lorca Granada-Jaén</strong></figcaption>
                    </div>
                </div>
                <div class="col-lg-6 order-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview.com se pueden hacer reseñas de los aeropuertos que visita la gente para sus vuelos, un ejemplo es el aeropuerto de Barcelona El Prat, el cual es el hub de Vueling Airlines.</p>
                            <p class="fs-5">Todas las reseñas de <b>aeropuertos de origen</b> mantienen esta estructura:</p>
                            <ul class="list-group">
                                <li class="list-group-item">Aeropuerto de origen</li>
                                <li class="list-group-item">Usuario que ha realizado la reseña</li>
                                <li class="list-group-item">Facilidad de acceso al aeropuerto</li>
                                <li class="list-group-item">Experiencia en la facturación</li>
                                <li class="list-group-item">Experiencia en el control de seguridad</li>
                                <li class="list-group-item">Ofertas en el lado aire</li>
                                <li class="list-group-item">Experiencia en la sala VIP si hay</li>
                                <li class="list-group-item">Experiencia en control de fronteras si procede</li>
                                <li class="list-group-item">Experiencia de incidencias en caso de que ocurran</li>
                                <li class="list-group-item">Experiencias con el personal del aeropuerto</li>
                                <li class="list-group-item">Imagenes del aeropuerto de origen</li>
                                <li class="list-group-item">Valoración, puntos positivos y negativos</li>
                            </ul>
                            <p class="fs-5">No todos los puntos son obligatorios al realizar una reseña, con esto se consigue mantener una estructura homogenea en todas las reseñas, asi los usuarios pueden comparar que servicios ofrece cada aeropuerto como salas VIP o terrazas al exterior para ver los aviones.</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-1 mt-3">Aeropuertos de transito</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Ver las reseñas de aeropuertos de transito</p>
                    <a href="#"><button type="button" class="btn">Ver reseñas de aeropuertos de transito</button></a>
                </div>
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Sube tu reseña de un aeropuerto de origen</p>
                    <a href="#"><button type="button" class="btn">Crear reseña de un aeropuerto de transito</button></a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre las reseñas a aeropuertos de transito</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2">
                    <p class="fs-2 mt-3">Fotos realizadas por los usuarios</p>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://s1.elespanol.com/2022/12/21/invertia/empresas/turismo/727687818_229677368_1706x960.jpg" alt="Puente Aereo de Madrid-Barcelona" width="500px">
                        <figcaption class="figure-caption"><strong>Puente aereo del Aeropuerto Adolfo Suárez Madrid-Barajas (LEMD).</strong></figcaption>
                    </div>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://ricardobofill.com/wp-content/uploads/2016/04/ricardo_bofill_taller_arquitectura_new_barcelona_airport_terminal_1_spain_02-1440x960.jpg" alt="T1 del Aeropuerto de Barcelona El Prat" width="500px">
                        <figcaption class="figure-caption bold"><strong>Zona comercial de la T1 del Aeropuerto Josep Tarradellas Barcelona-El Prat (LEBL).</strong></figcaption>
                    </div>
                </div>
                <div class="col-lg-6 order-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview.com se pueden hacer reseñas de los aeropuertos que visita la gente para sus vuelos, un ejemplo es el aeropuerto de Barcelona El Prat, el cual es el hub de Vueling Airlines.</p>
                            <p class="fs-5">Todas las reseñas de <b>aeropuertos de transito</b> mantienen esta estructura:</p>
                            <ul class="list-group">
                                <li class="list-group-item">Aeropuerto de transito</li>
                                <li class="list-group-item">Usuario que ha realizado la reseña</li>
                                <li class="list-group-item">Experiencia en la conexión de vuelos</li>
                                <li class="list-group-item">Ofertas en el lado aire</li>
                                <li class="list-group-item">Experiencia en el control de fronteras si procede</li>
                                <li class="list-group-item">Requerimientos de visado si procede</li>
                                <li class="list-group-item">Experiencia con el personal del aeropuerto</li>
                                <li class="list-group-item">Experiencia personal en el aeropuerto</li>
                                <li class="list-group-item">Experiencia de incidencias si han ocurrido</li>
                                <li class="list-group-item">Imagenes del aeropuerto de transito</li>
                                <li class="list-group-item">Valoración, puntos positivos y negativos</li>
                            </ul>
                            <p class="fs-5">No todos los puntos son obligatorios al realizar una reseña, con esto se consigue mantener una estructura homogenea en todas las reseñas, asi los usuarios pueden comparar que servicios ofrece cada aeropuerto como salas VIP o terrazas al exterior para ver los aviones.</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-1 mt-3">Aeropuertos de destino</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Ver las reseñas de aeropuertos de destino</p>
                    <a href="#"><button type="button" class="btn">Ver reseñas de aeropuertos de destino</button></a>
                </div>
                <div class="col-lg-6">
                    <p class="fs-3 mt-3">Sube tu reseña de un aeropuerto de destino</p>
                    <a href="#"><button type="button" class="btn">Crear reseña de un aeropuerto de destino</button></a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre las reseñas a aeropuertos de destino</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2">
                    <p class="fs-2 mt-3">Fotos realizadas por los usuarios</p>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://www.eib.org/photos/rs/b3b62e99-a561-4e9b-8b45-f29f13b5fcf8/largeprvw/image.jpg" alt="Aeropuerto de Palma de Mallorca" width="500px">
                        <figcaption class="figure-caption"><strong>Puertas B en el Aeropuerto de Palma de Mallorca (LEPA).</strong></figcaption>
                    </div>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://spanish.korea.net/upload/content/editImage/20210329105916617_DEUKO9CB.jpg" alt="Aeropuerto de Seoul Incheon" width="500px">
                        <figcaption class="figure-caption bold"><strong>Zona de facturación del Aeropuerto de Incheon (RKSI)</strong></figcaption>
                    </div>
                </div>
                <div class="col-lg-6 order-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview.com se pueden hacer reseñas de los aeropuertos que visita la gente para sus vuelos, un ejemplo es el aeropuerto de Barcelona El Prat, el cual es el hub de Vueling Airlines.</p>
                            <p class="fs-5">Todas las reseñas de <b>aeropuertos de destino</b> mantienen esta estructura:</p>
                            <ul class="list-group">
                                <li class="list-group-item">Aeropuerto de origen</li>
                                <li class="list-group-item">Usuario que ha realizado la reseña</li>
                                <li class="list-group-item">Experiencia en control de fronteras si procede</li>
                                <li class="list-group-item">Experiencia desde la llegada hasta la cinta de equipajes</li>
                                <li class="list-group-item">Tiempo de desembarque del avión</li>
                                <li class="list-group-item">Tiempo en las cintas de equipajes</li>
                                <li class="list-group-item">Experiencias de incidencias con el equipaje si procede</li>
                                <li class="list-group-item">Facilidad para salir del aeropuerto</li>
                                <li class="list-group-item">Imagenes del aeropuerto de origen</li>
                                <li class="list-group-item">Valoración, puntos positivos y negativos</li>
                            </ul>
                            <p class="fs-5">No todos los puntos son obligatorios al realizar una reseña, con esto se consigue mantener una estructura homogenea en todas las reseñas, asi los usuarios pueden comparar que servicios ofrece cada aeropuerto como salas VIP o terrazas al exterior para ver los aviones.</p>
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