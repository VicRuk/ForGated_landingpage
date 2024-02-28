<?php
session_start();
if(empty($_SESSION))
{
print "<script>location.href='../cms/index.php';</script>";
}
$usuariocodigo = $_SESSION["usuarioCodigo"];
include("../models/conexao.php");
include("blades/header2.php");
?>

<div class="container border rounded mt-5 mb-5 pt-3 ps-3 pb-3 pe-3 bg-white" id="painel">
    <h1 class="fw-bold">Bem Vindo <?php echo $_SESSION["usuario"]?>!</h1>
    <a class="fw-bold" href="../controllers/logout.php">Deslogar</a>
    <hr class="border border-dark border-2 opacity-75">

    <form name="upload" enctype="multipart/form-data" action="../controllers/adicionarBlog.php" method="post">
        <input type="hidden" name="usuarioCodigo" value="<?php echo $_SESSION["usuarioCodigo"]?>">

        <label class="form-label fw-semibold">Título</label><br>
        <input class="form-control" type="text" name="tituloBlog" required><br>

        <label class="form-label fw-semibold">Sobre</label><br>
        <textarea class="form-control" rows="5" type="text" name="sobreBlog" required></textarea><br>
        
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <div class="row">
            <div class="col-sm-12">
                <input class="fw-bold form-control custom-file-input" type="file" name="arquivo[]" multiple="multiple" /><br>
            </div>
        </div>

        <input class="btn btn-success fw-bold" type="submit" value="Criar Blog">
    </form>
</div>

<div class="container border rounded mb-5 mt-5 pt-3 ps-3 pb-3 pe-3 bg-white" id="blog">
    <h1 class="fw-bold">Suas Notícias</h1>
    <hr class="border border-dark border-2 opacity-75">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover justify-content-center">
            <tr>
                <td class="text-center"><b>Imagem</b></td>
                <td class="text-center"><b>Título</b></td>
                <td class="text-center"><b>Sobre</b></td>
                <td class="text-center"><b>Editar</b></td>
                <td class="text-center"><b>Excluir</b></td>
            </tr>

            <?php
                $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo WHERE blog_usuario_codigo = $usuariocodigo ORDER BY blog_codigo desc");
                while($exibe = mysqli_fetch_array($query)){
                ?>
            <tr>
                <td class="d-flex justify-content-center"><img class="img-fluid" src="../files/img/blog/<?php echo $exibe[10] ?>" width="200"></td>
                <td><b><?php echo substr($exibe[5],0,30)?></b></p></td>
                <td><a class="fw-semibold text-dark text-justify" href="../page.php?idb=<?php echo $exibe[0]?>"><?php echo substr($exibe[6],0,30)."..." ?></a></td>
                <td><a class="btn btn-primary d-flex justify-content-center" href="editarBlog.php?idb=<?php echo $exibe[0]?>">Editar</a></td>
                <td><a class="btn btn-danger d-flex justify-content-center" href="../controllers/deletarBlog.php?idb=<?php echo $exibe[0]?>&amp;imagemNome=<?php echo $exibe[10] ?>&amp;noticiaInfoCodigo=<?php echo $exibe[1] ?>">Excluir</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
include("blades/footer2.php");
?>