<?php    
    //Hacemos la conexion
    include('./../../config/config_bd.php');

    if(empty($_SESSION["id"])){
        header('Location: /aviareview/config/acceso_restringido.php');
    } else {
        //Query de la base de datos para recuperar los tipos de habitaci
        $sql = "SELECT * FROM `ar-usuario` WHERE id = '".$_SESSION["id"]."'";

        //Lanzamos la query y capturamos los resultados
        $resultados = mysqli_query($conn, $sql);

        $informacionCliente = mysqli_fetch_array($resultados);

        $tipoID = $informacionCliente['tipo_usuario'];

        if($tipoID==1){ //Administrador
            //echo "Acceso autorizado...";
        } else if($tipoID==2){ //Usuario estandar
            //echo "Acceso autorizado...";
        } else if($tipoID==3){ //Usuario premium
            //echo "Acceso autorizado...";
        } else {
            header('Location: /aviareview/config/acceso_restringido.php');
        }
    }
    //Cerramos conexión
    mysqli_close($conn);
?>