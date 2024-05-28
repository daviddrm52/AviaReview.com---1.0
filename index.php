<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/index.css">
    <title>Bienvenido/a a AviaReview.com</title>
    <?php include("./template/header.php"); ?>
    <main class="my-3">
        <div class="container">
            <div class="row m-3">
                <div class="col-2"></div>
                <div class="col-8">
                    <h1 class="text-center">Bienvenido/a a AviaReview.com</h1>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Reseñas de aerolineas</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="figure-img img-fluid my-3 rounded-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/HL7725%40PEK_%2820191211164812%29.jpg/1024px-HL7725%40PEK_%2820191211164812%29.jpg" alt="Boeing 737-9B5 of Korean Air (HL7725)" width="500px">
                    <figcaption class="figure-caption">Boeing 737-9B5 de Korean Air (HL7725).</figcaption>
                </div>
                <div class="col-lg-6">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview disponemos de reseñas de mayoria de las aerolineas que hay en servicio actualmente, en diferentes rutas y en diferentes clases.</p>
                            <p class="fs-5">Desde aerolineas de gran calible como American Airlines (United States), hasta aerolineas domesticas como Star Rail Air (Republic of Chiquitín).</p>
                       </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <a href="./html/aerolineas/informacion-resena-aerolinea.php"><button type="button" class="btn btn-lg">Ver reseñas de aerolineas</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center my-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Reseñas de aeropuertos</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">Todas las aerolineas tienen aeropuertos que son sus bases, hubs, etc. En AviaReview tambien hay reseñas de esos aeropuertos.</p>
                            <p class="fs-5">Hay reseñas de aeropuertos grandes como Madrid Barajas (MAD), Londres Heatrow (LHR), de aeropuertos destinados a la temporada estival como Menorca (MAH), Tenerife Sur (TFS) y aeropuertos pequeños como Granada-Jaen (GRX) y  </p>
                       </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <a href="./html/aeropuertos/aeropuertos-lista.php"><button type="button" class="btn btn-lg">Ver reseñas de aeropuertos</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img class="figure-img img-fluid my-3 rounded-3" src="https://upload.wikimedia.org/wikipedia/commons/9/9d/LSZH_001.jpg" alt="Zurich Airport Overview" width="500px">
                    <figcaption class="figure-caption">Aeropuerto de Zurich, Suiza.</figcaption>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Incidencias aeréas</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="figure-img img-fluid my-3 rounded-3" src="https://aviaciondigital.com/wp-content/uploads/2023/07/Vueling-Bird-Strike.jpeg" alt="Airbus A320 of Vueling after suffering a bird strike" width="500px">
                    <figcaption class="figure-caption">Vueling Airbus A320-214 despues de un "bird-strike" (EC-JTR).</figcaption>
                </div>
                <div class="col-lg-6 ">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview tambien documentamos las incidencias aereas para que puedan ser visitadas justo cuando han ocurrido, ademas de una lista de que aerolineas han sufrido más incidentes en el ultimo año. La seguridad aerea es algo importante.</p>
                       </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <a href="./html/incidencias/incidencias-lista.php"><button type="button" class="btn btn-lg">Ver incidencias aereas</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("./template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

