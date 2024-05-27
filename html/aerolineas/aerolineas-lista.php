<?php session_start(); ?>

<?php

    //Hacemos la conexion
    include('./../../config/config_bd.php');

    //Query de la base de datos para recuperar los tipos de habitaci
    $sql = "SELECT * FROM `ar-resena-aerolinea`";

    //Lanzamos la query y capturamos los resultados
    $resultados = mysqli_query($conn, $sql);

    $resenas = mysqli_fetch_all($resultados, MYSQLI_ASSOC);

    //Liberar memoria
    mysqli_free_result($resultados);

    //Cerramos conexión
    mysqli_close($conn); 

?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" href="./../../css/aerolineas-lista.css">
    <title>Reseñas de aerolineas - AviaReview.com</title>
    <?php include("./../../template/header.php"); ?>
    <main class="my-3">
    <div class="container-lg text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Información sobre las reseñas a aerolineas</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">Ultimas reseñas publicadas en AviaReview.com</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Identificador reseña</th>
                                        <th scope="col">Numero de vuelo</th>
                                        <th scope="col">Aerolinea</th>
                                        <th scope="col">Fecha del vuelo</th>
                                        <th scope="col">Valoración</th>
                                        <th scope="col">Detalle de la reseña</th>
                                    </tr>
                                </thead>
                                <?php foreach($resenas as $rev): ?>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td><?php echo htmlspecialchars($rev['id'])?></td>
                                        <td><?php echo htmlspecialchars($rev['codigo_vuelo_IATA'])?></td>
                                        <td><?php echo htmlspecialchars($rev['id_aerolinea'])?></td>
                                        <td><?php echo htmlspecialchars($rev['fecha_vuelo'])?></td>
                                        <td><?php echo htmlspecialchars($rev['valoracion'])?></td>
                                        <td><button class="btn boton-resena"><a href="detalles_resena.php?id=<?php echo $rev['id'] ?>">Información de la reserva</a></button></td>
                                    </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
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