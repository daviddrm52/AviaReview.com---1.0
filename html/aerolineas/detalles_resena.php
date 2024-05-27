<?php session_start(); ?>

<?php
    //Hacemos la conexion
    include('./../../config/config_bd.php');

    //Comrpobar si llega la información
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //Query de selección
        $sqlResena = "SELECT * FROM `ar-resena-aerolinea` WHERE id = $id";

        //Recuperamos los resultados
        $resultado = mysqli_query($conn, $sqlResena);

        //Volcar los resultados en un array
        $resena = mysqli_fetch_assoc($resultado);

        //Liberar memoria
        mysqli_free_result($resultado);

        //Cerrar conexión con bd
        //mysqli_close($conn);
    }

    //Variables para las querys
    $idAerolinea = $resena['id_aerolinea'];
    $idAeropuertoOrigen = $resena['id_aeropuerto_origen'];
    $idAeropuertoDestino = $resena['id_aeropuerto_destino'];
    $idUsuario = $resena['id_usuario'];

    //Querys para cambiar los id de los textos, a su valor que interesa, aerolineas, aeropuertos, etc.
    $sqlSelectAerolinea = "SELECT * FROM `ar-aerolinea` WHERE id = $idAerolinea";
    $sqlAeropuertoOrigen = "SELECT * FROM `ar-aeropuerto` WHERE id = $idAeropuertoOrigen";
    $sqlAeropuertoDestino = "SELECT * FROM `ar-aeropuerto` WHERE id = $idAeropuertoDestino";
    $sqlSelectUsuario = "SELECT * FROM `ar-usuario` WHERE id = $idUsuario";

    //Lanzamos la query y capturamos los resultados
    $resultadoSelectAerolinea = mysqli_query($conn, $sqlSelectAerolinea);
    $resultadoSelectAeropuertoOrigen = mysqli_query($conn, $sqlAeropuertoOrigen);
    $resultadoSelectAeropuertoDestino = mysqli_query($conn, $sqlAeropuertoDestino);
    $resultadoSelectUsuario = mysqli_query($conn, $sqlSelectUsuario);

    //Volcar los resultados en un array
    $nombreAerolinea = mysqli_fetch_assoc($resultadoSelectAerolinea);    
    $aeropuertoOrigen = mysqli_fetch_assoc($resultadoSelectAeropuertoOrigen);
    $aeropuertoDestino = mysqli_fetch_assoc($resultadoSelectAeropuertoDestino);
    $nombreUsuario = mysqli_fetch_assoc($resultadoSelectUsuario);
?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="/aviareview/css/detalles_resena.css">
    <title>Detalles de la reseña - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
    <div class="container text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col-lg-6 order-2">
                    <div class="row m-3">
                        <p class="fs-2 mt-3">Imagenes de la reseñas</p>
                        <img class="figure-img img-fluid my-3 rounded-3" src="/aviareview/img/review/20240524_132203.jpg" alt="Boeing 767-432ER of Delta Air Lines (N845MH)" width="500px">
                        <img class="figure-img img-fluid my-3 rounded-3" src="/aviareview/img/review/20240524_132936.jpg" alt="Boeing 767-432ER of Delta Air Lines (N845MH)" width="500px">
                        <img class="figure-img img-fluid my-3 rounded-3" src="/aviareview/img/review/20240524_140016.jpg" alt="Boeing 767-432ER of Delta Air Lines (N845MH)" width="500px">
                    </div>
                </div>
                <div class="col-lg-6 order-1">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-2 mt-3">Reseña de <?php echo htmlspecialchars($nombreAerolinea['nombre_aerolinea']) ?> a <?php echo htmlspecialchars($aeropuertoDestino['nombre_aeropuerto']) ?></p>
                            <ul>
                                <li> <b>Identificador de la reseña de la aerolinea</b> </li>
                                <li> <?php echo htmlspecialchars($resena['id']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Nombre de la aerolinea</b> </li>
                                <li> <?php echo htmlspecialchars($nombreAerolinea['nombre_aerolinea']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Aeropuerto de origen</b> </li>
                                <li> <?php echo htmlspecialchars($aeropuertoOrigen['nombre_aeropuerto']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Aeropuerto de destino</b> </li>
                                <li> <?php echo htmlspecialchars($aeropuertoDestino['nombre_aeropuerto']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Reseña realizada por: </b> </li>
                                <li> <?php echo htmlspecialchars($nombreUsuario['nombre_usuario']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Numero de vuelo con codigo IATA</b> </li>
                                <li> <?php echo htmlspecialchars($resena['codigo_vuelo_IATA']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Fecha del vuelo</b> </li>
                                <li> <?php echo htmlspecialchars($resena['fecha_vuelo']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Asiento en el vuelo</b> </li>
                                <li> <?php echo htmlspecialchars($resena['asiento_vuelo']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Breve descripción del vuelo</b> </li>
                                <li> <?php echo htmlspecialchars($resena['breve_descripcion']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia en el embarque</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_embarque']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Modelo de aeronave y metodo de embarque</b> </li>
                                <li> <?php echo htmlspecialchars($resena['modelo_aeronave_metodo_embarque']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Interior de la aeronave</b> </li>
                                <li> <?php echo htmlspecialchars($resena['interior_cabina']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia en el despegue</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_despegue']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Servicios a bordo del avión</b> </li>
                                <li> <?php echo htmlspecialchars($resena['servicios_a_bordo']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia en los lavabos</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_lavabos']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia del aterrizaje</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_aterrizaje']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia en el desembarque de la aeronave</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_desembarque']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Experiencia en el caso de una incidencia en el vuelo</b> </li>
                                <li> <?php echo htmlspecialchars($resena['experiencia_incidencia']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Valoración del vuelo</b> </li>
                                <li> <?php echo htmlspecialchars($resena['valoracion']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Puntos positivos</b> </li>
                                <li> <?php echo htmlspecialchars($resena['puntos_positivos']) ?> </li>
                            </ul>
                            <ul>
                                <li> <b>Puntos negativos</b> </li>
                                <li> <?php echo htmlspecialchars($resena['puntos_negativos']) ?> </li>
                            </ul>
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