<!DOCTYPE html>
<html lang="es">

<?php 

//Conexion a la base de datos (rellenar con los datos del hosting)
$conn = mysqli_connect('c96709.sgvps.net', 'u8pvbkfgz9mai', 'david-IME-2024', 'dbtqrttqlrfpkp');

//Comprobación la conexión
if(!$conn) {
    echo 'Error de conexión: '. mysqli_connect_error();
}
else {
    //echo 'Conexión con la base de datos correcta.';
}

?>

</html>