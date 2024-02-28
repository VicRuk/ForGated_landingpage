<?php
echo "<html lang='pt-br'>";
include("../models/conexao.php");

$BlogInfoCodigo = $_POST["infoCodigo"];
$BlogTitulo = mysqli_real_escape_string($conexao, $_POST["tituloBlog"]);
$BlogCorpo = mysqli_real_escape_string($conexao, $_POST["sobreBlog"]);
$fk_codigo_img = $_POST["fk_codigoImagem"];
$diretorio = "../files/img/blog";

$arquivos = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

mysqli_query($conexao, "UPDATE bloginfo SET bloginfo_titulo = '$BlogTitulo', bloginfo_corpo = '$BlogCorpo' WHERE bloginfo_codigo = '$BlogInfoCodigo'");
$query = mysqli_query($conexao, "SELECT * FROM blogimg WHERE fk_codigo_img = $fk_codigo_img");
$codigosImg = array();
while ($exibe = mysqli_fetch_array($query)) {
    $nomeArquivoAntigo = $exibe[2];
    $codigosImg[] = $exibe[0];
}

if ($arquivos !== FALSE && !empty($arquivos['name'][0])) {
    foreach ($codigosImg as $codigoImg) {
        $queryImgAntiga = mysqli_query($conexao, "SELECT * FROM blogimg WHERE blogimg_codigo = $codigoImg");
        $exibeImgAntiga = mysqli_fetch_array($queryImgAntiga);
        $nomeArquivoAntigo = $exibeImgAntiga['blogimg_nomerandom'];

        if (!empty($nomeArquivoAntigo) && file_exists($diretorio . "/" . $nomeArquivoAntigo)) {
            unlink($diretorio . "/" . $nomeArquivoAntigo);
        }
    }

    for ($i = 0; $i < count($arquivos['name']); $i++) {
        $varBlogImg = $arquivos['name'][$i];
        $temp = $arquivos['tmp_name'][$i];
        $tipo = $arquivos['type'][$i];
        $erro = $arquivos['error'][$i];
        $extensao = pathinfo($varBlogImg, PATHINFO_EXTENSION);

        if ($extensao == 'png') {
            $varBlogImgRandom = md5(uniqid()) . "." . $extensao;
            $destino = $diretorio . "/" . $varBlogImgRandom;

            if (move_uploaded_file($temp, $destino)) {
                $codigoImg = $codigosImg[$i];
                mysqli_query($conexao, "UPDATE blogimg SET blogimg_nome = '$varBlogImg', blogimg_nomerandom = '$varBlogImgRandom' WHERE blogimg_codigo = '$codigoImg'");
            }
        } else {
            die("<script> alert('Blog criado com sucesso!'); window.location='../views/painel.php'; </script>");
        }
    }
}

header("location:../views/painel.php");
?>