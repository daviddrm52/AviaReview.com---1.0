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
                    <a href="./ayuda-usuario.php" class="text-dark"><button class="btn ms-1"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">help</span>Ayuda</button></a>
                    <a href="./html/usuarios/log-in-usuario.php" class="text-dark"><button class="btn ms-1"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">account_circle</span>Iniciar sesión</button></a>
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
                            <a class="nav-link active text-light" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./html/aerolineas/aerolineas-lista.php">Aerolineas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./html/aeropuertos/aeropuertos-lista.php">Aeropuertos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./html/incidencias/incidencias-lista.php">Incidencias</a>
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
        <div class="container-lg text-center mt-3 rounded-3" style="background-color: #EBEBEB;">
            <div class="row">
                <div class="col">
                    <p class="fs-2 mt-3">Sobre nosotros</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg">
                    <img class="figure-img img-fluid my-3 rounded-3" src="./img/logo/base_logo.png" alt="AviaReview.com logo" width="500px">
                    <figcaption class="figure-caption">Imagen corporativa de AviaReview.com</figcaption>
                    <div class="row m-3">
                        <div class="col">
                            <p class="fs-5">AviaReview.com es la nueva pagina de reseñas de aviación, especializada en reseñas de aerolineas y aeropuertos.</p>
                            <p class="fs-5">Actualmente, estan en activo las reseñas de aerolineas, proximamente se añadiran las reseñas de aeropuertos e incidentes aereos.</p>
                            <img class="figure-img img-fluid my-3 rounded-3" src="./img/about-us/20231229_215748.jpg" alt="AviaReview.com logo" width="500px">
                            <figcaption class="figure-caption">Un ejemplo es un vuelo de Madrid a Menorca (IB8966)</figcaption>
                            <p class="fs-5">La plataforma web AviaReview.com se mantiene gracias a las donaciones y las suscripciones que tenemos en activo, nuestro objetivo es mantenernos independientes e imparciales, para tener reseñas de todas las aerolineas sin parcialidad alguna.</p>
                            <p class="fs-5">Aún asi, se aceptan donaciones de las aerolineas, y se muestran en la siguiente tabla:</p>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Aerolinea</th>
                                        <th scope="col">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Air Chiquin</th>
                                        <td>20.000€</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Star Rail Air</th>
                                        <td>200€</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Japan Airlines</th>
                                        <td>500€</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="fs-5">AviaReview.com es filial de AviaTalk.com</p>
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