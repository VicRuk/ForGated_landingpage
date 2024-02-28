<?php
include("../models/conexao.php");
session_start();
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$query = mysqli_query($conexao, "SELECT * FROM usuario where usuario_email = '$email' and usuario_senha = '" . md5($senha) . "';");

if($exibe = mysqli_fetch_array($query)){
    $_SESSION['usuarioCodigo']= $exibe['usuario_codigo'];
    $_SESSION['usuario']= $exibe['usuario_nome'];
    $_SESSION['usuarioEmail']= $exibe['usuario_email'];
    header("location: ../views/painel.php");

}else{
    echo "Usuário não encontrado ou senha incorreta.";
}
?>