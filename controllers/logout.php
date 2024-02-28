<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["email"]);
unset($_SESSION['senha']);
unset($_SESSION['usuarioCodigo']);
session_destroy();
header("Location: ../cms/index.php")
?>