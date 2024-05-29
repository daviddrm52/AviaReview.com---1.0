<?php
   session_start();
   unset($_SESSION["id"]);
   unset($_SESSION["username"]);
   
   echo 'Cerrando sesión...';
   header('Location: /aviareview/index.php', true);
   echo "<script>window.location.href='/aviareview/index.php'</script>";
?>