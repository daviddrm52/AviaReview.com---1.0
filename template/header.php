<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="shortcut icon" href="/aviareview/img/logo/base_logo_mobile.png" type="image/x-icon">
    <link rel="stylesheet" href="/aviareview/css/base.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="/aviareview/index.php">
                    <img src="/aviareview/img/logo/base_logo.png" alt="AviaReview.com" width="130px">
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
                            <a class="nav-link text-light" href="/aviareview/index.php">Inicio</a>
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