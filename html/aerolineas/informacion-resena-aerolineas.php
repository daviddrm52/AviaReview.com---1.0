<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/informacion-resena-aerolineas.css">
    <title>Información de las reseñas de aerolineas - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
        <div class="text-center" style="width: 100%;">
            <div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Ver las reseñas de aerolineas</p>
                    <a href="/aviareview/html/aerolineas/aerolineas-lista.php"><button type="button" class="btn">Ver reseñas de aerolineas</button></a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre las reseñas a aerolineas</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="figure-img img-fluid my-3 rounded-3" src="https://upload.wikimedia.org/wikipedia/commons/6/64/N845MH_%2826210714856%29.jpg" alt="Boeing 767-432ER of Delta Air Lines (N845MH)" width="500px">
                    <figcaption class="figure-caption">Boeing 767-432ER de Delta Air Lines (N845MH).</figcaption>
                </div>
                <div class="col-lg-6 ">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview.com se pueden hacer reseñas de las aerolineas en las rutas que realizan, un ejemplo es un vuelo de Vueling desde Barcelona a Menorca.</p>
                            <p class="fs-5">Todas las reseñas de vuelos mantienen esta estructura:</p>
                            <ul class="list-group">
                                <li class="list-group-item">Nombre de la aerolinea</li>
                                <li class="list-group-item">Aeropuerto de origen</li>
                                <li class="list-group-item">Aeropuerto de destino</li>
                                <li class="list-group-item">Usuario que ha realizado la reseña</li>
                                <li class="list-group-item">Codigo del vuelo</li>
                                <li class="list-group-item">Fecha del vuelo</li>
                                <li class="list-group-item">Asiento del vuelo</li>
                                <li class="list-group-item">Descripción breve</li>
                                <li class="list-group-item">Experiencia en embarque</li>
                                <li class="list-group-item">Modelo de aeronave</li>
                                <li class="list-group-item">Interior del avión</li>
                                <li class="list-group-item">Experiencia en el despegue</li>
                                <li class="list-group-item">Servicios a bordo (Catering)</li>
                                <li class="list-group-item">Experiencia lavabos</li>
                                <li class="list-group-item">Experiencia aterrizaje</li>
                                <li class="list-group-item">Experiencia desembarque</li>
                                <li class="list-group-item">Experiencia en caso de incidencia</li>
                                <li class="list-group-item">Valoración, puntos positivos y negativos</li>
                            </ul>
                            <p class="fs-5">No todos los puntos son obligatorios al realizar una reseña, con esto se consigue mantener una estructura homogenea en todas las reseñas, asi los usuarios pueden comparar como es el servicio de catering de la aerolinea por ejemplo con multiples aerolineas.</p>
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