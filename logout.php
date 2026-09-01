<?php
//iniciar a sessão
session_start();
//destruir a sessão
session_destroy();
//redirecionar para a pagina de login
header("Location: index.php");
exit();
?>