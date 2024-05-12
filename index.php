<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido/a a AviaReview.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="./img/logo/base_logo_mobile.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    <img src="./img/logo/base_logo.png" alt="AviaReview.com" width="130px">
                </a>
                <i class="d-flex">
                    <a href="/aviareview/ayuda-usuario.php" class="text-dark"><button class="btn ms-1"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">help</span>Ayuda</button></a>
                    <a href="/aviareview/html/usuarios/log-in-usuario.php" class="text-dark"><button class="btn ms-1"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">account_circle</span>Iniciar sesión</button></a>
                </i>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/aviareview/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/aviareview/html/aerolineas/aerolineas-lista.php">Aerolineas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/aviareview/html/aeropuertos/aeropuertos-lista.php">Aeropuertos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/aviareview/html/incidencias/incidencias-lista.php">Incidencias</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Busca en AviaReview.com" aria-label="Search" aria-describedby="button-addon2">
                            <button class="btn" type="button" id="button-addon2"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">search</span>Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
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
        <div class="container-lg text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
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
                <div class="col-lg-6 ">
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">En AviaReview disponemos de reseñas de mayoria de las aerolineas que hay en servicio actualmente, en diferentes rutas y en diferentes clases.</p>
                            <p class="fs-5">Desde aerolineas de gran calible como American Airlines (United States), hasta aerolineas domesticas como Star Rail Air (Republic of Chiquitín).</p>
                       </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-7">

                        </div>
                        <div class="col-5">
                            <a href="./html/aerolineas/aerolineas-lista.php"><button type="button" class="btn btn-lg">Ver reseñas de aerolineas</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg text-center my-3 rounded-3" style="background-color: #EBEBEB;">
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
                        <div class="col-7">

                        </div>
                        <div class="col-5">
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
        <div class="container-lg text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
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
                        <div class="col-7">

                        </div>
                        <div class="col-5">
                            <a href="./html/incidencias/incidencias-lista.php"><button type="button" class="btn btn-lg">Ver incidencias aereas</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <p class="col-md-4 mb-0 text-light">© 2024 AviaReview.com</p>
                <a href="./index.php" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="./img/logo/base_logo.png" alt="AviaReview.com" width="130px">
                </a>
                <ul class="nav col-md-4 justify-content-end">
                  <li class="nav-item"><a href="./sobre-nosotros.php" class="nav-link px-2 text-light">Sobre nosotros</a></li>
                </ul>
              </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>