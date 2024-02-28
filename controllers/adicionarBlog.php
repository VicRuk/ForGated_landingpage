<?php
echo "<html lang='pt-br'>";
include("../models/conexao.php");

$varBlogTitulo = mysqli_real_escape_string($conexao, $_POST["tituloBlog"]);
$varBlogCorpo = mysqli_real_escape_string($conexao, $_POST["sobreBlog"]);
$PostagemUsuarioCodigo = $_POST["usuarioCodigo"];
$diretorio = "../files/img/blog";

$arquivos = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

mysqli_query($conexao, "INSERT INTO bloginfo (bloginfo_titulo, bloginfo_corpo) VALUES ('$varBlogTitulo', '$varBlogCorpo')");
$id_noticiaInfo_last = mysqli_insert_id($conexao);

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
            mysqli_query($conexao, "INSERT INTO blogimg(blogimg_nome, blogimg_nomerandom, fk_codigo_img) VALUES ('$varBlogImg', '$varBlogImgRandom', '$id_noticiaInfo_last')");
            $id_imgTable_last = mysqli_insert_id($conexao);
        }
    }
	else{
		die("<script> alert('Insira apenas arquivos PNG.'); window.location='../views/painel.php'; </script>");
	}
}
if(mysqli_query($conexao, "INSERT INTO blog (blog_bloginfo_codigo, blog_blogimg_codigo, blog_usuario_codigo) VALUES ('$id_noticiaInfo_last', '$id_imgTable_last', '$PostagemUsuarioCodigo')")){
	die("<script> alert('Blog criado com sucesso!'); window.location='../views/painel.php'; </script>");
}
else{
	die("<script> alert('Falha ao criar o blog.'); window.location='../views/painel.php'; </script>");
}
mysqli_close($conexao);
header("location:../views/painel.php");
?>