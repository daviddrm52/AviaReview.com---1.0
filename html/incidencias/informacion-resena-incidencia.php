<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/informacion-resena-aerolineas.css">
    <title>Información de la documentación de incidencias aéreas - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
        <div class="container text-center p-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col-lg-6">
                    <p class="fs-2 mt-3">Ver los ultimos incidentes aéreos</p>
                    <a href="#"><button type="button" class="btn">Ver incidencias aéreas</button></a>
                </div>
                <div class="col-lg-6">
                    <p class="fs-2 mt-3">Documenta una incidencia aérea</p>
                    <a href="#"><button type="button" class="btn">Documentar incidencia aérea</button></a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre la documentación de incidencias aéreas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2">
                    <p class="fs-2 mt-3">Fotos realizadas por los usuarios</p>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://cloudfront-us-east-2.images.arcpublishing.com/reuters/GQBVKRBJFNJSZN6GQH2QB5UL2A.jpg" alt="Interior de un Boeing 777-312ER de Singapore Airlines" width="500px">
                        <figcaption class="figure-caption"><strong>Interior de un Boeing 777-300ER de Singapore Airlines despues de la turbulencia extrema ocurrida el 21 de mayo (9V-SWM).</strong></figcaption>
                    </div>
                    <div>
                        <img class="figure-img img-fluid my-3 rounded-3" src="https://airlive.net/wp-content/uploads/2024/04/IMG_6652.png" alt="Boeing 767-332ER de Delta Air Lines (N176DN)" width="500px">
                        <figcaption class="figure-caption bold"><strong>Boeing 767-332ER de Delta Air Lines despues de perder la rampa de evacuación (N176DN).</strong></figcaption>
                    </div>
                </div>
                <div class="col-lg-6 order-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview.com se se pueden documnetar los ultimos incidentes aéreos como la turbulencia extrema que ocurrío en un vuelo de Singapore Airlines.</p>
                            <p class="fs-5">Todas las incidencias aéreas mantienen esta estructura:</p>
                            <ul class="list-group">
                                <li class="list-group-item">Numero de vuelo</li>
                                <li class="list-group-item">Modelo de avión</li>
                                <li class="list-group-item">Aeropuerto de origen</li>
                                <li class="list-group-item">Aeropuerto de destino</li>
                                <li class="list-group-item">Aerolinea que ha sido afectada</li>
                                <li class="list-group-item">Usuario que ha documentado la incidencia</li>
                                <li class="list-group-item">Descripción de la incidencia</li>
                                <li class="list-group-item">Imagenes del incidente</li>
                            </ul>
                            <p class="fs-5">Todos los puntos son obligatorios, asi los usuarios pueden ver que aeropuertos o aerolineas son más suceptibles a incidentes aéreos.</p>
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