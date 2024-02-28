<?php
include("../models/conexao.php");

$usuarioNome = $_POST["usuarioNome"];
$usuarioEmail = $_POST["usuarioEmail"];
$usuarioSenha = $_POST["usuarioSenha"];
$senhamd5 = md5($usuarioSenha);
if(mysqli_query($conexao, "INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha) VALUES ('$usuarioNome', '$usuarioEmail', '$senhamd5');")){
    die("<script> alert('Usuário cadastrado com sucesso!'); window.location='../cms/index.php'; </script>");
}
else{
    die("<script> alert('Erro ao cadastrar o Usuário.'); window.location='../cms/index.php'; </script>");
}

header("location:../cms/index.php");
?>