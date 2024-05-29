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
                    <a href="/aviareview/ayuda-usuario.php" class="text-dark"><button class="btn ms-1">Ayuda</button></a>
                    <a href="
                        <?php 
                            if(empty($_SESSION["id"])){
                                echo "/aviareview/html/usuarios/log-in-usuario.php";
                            } else {
                                echo "/aviareview/html/usuarios/ajustes-usuario.php";
                            }
                        ?>" class="text-dark"><button class="btn ms-1">
                    <?php
                        if(empty($_SESSION["id"])) {
                            echo "Iniciar sesión";
                        } else {
                            //echo $_SESSION["id"]; 
                
                            //Conexion a la base de datos
                            $conn = mysqli_connect('localhost', 'david', '1234', 'avia-review-bd');

                            //En caso de conexión desde la expansion de dominio
                            // $conn = mysqli_connect('c96709.sgvps.net', 'u8pvbkfgz9mai', 'david-IME-2024', 'dbtqrttqlrfpkp');;

                            //Query de la base de datos para recuperar los tipos de habitaci
                            $sql = "SELECT * FROM `ar-usuario` WHERE id = '".$_SESSION["id"]."'";

                            //Lanzamos la query y capturamos los resultados
                            $resultados = mysqli_query($conn, $sql);

                            $usuario = mysqli_fetch_all($resultados, MYSQLI_ASSOC);

                            //Liberar memoria
                            mysqli_free_result($resultados);

                            //Cerramos conexión
                            mysqli_close($conn);

                            foreach ($usuario as $user){
                            echo $user["nombre_usuario"];
                            }
                        }
                    ?>
                </button></a>
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
                            <a class="nav-link text-light" href="/aviareview/html/aerolineas/informacion-resena-aerolinea.php">Aerolineas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/aviareview/html/aeropuertos/informacion-resena-aeropuerto.php">Aeropuertos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/aviareview/html/incidencias/informacion-resena-incidencia.php">Incidencias</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input disabled type="text" class="form-control" placeholder="Busca en AviaReview.com" aria-label="Search" aria-describedby="button-addon2">
                            <button disabled class="btn" type="button" id="button-addon2"><span class="material-symbols-outlined md-18 m-1" style="vertical-align: middle;">search</span>Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>