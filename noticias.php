<?php
include("models/conexao.php");
include("views/blades/header3.php");
?>

<div class="container border rounded mb-5 mt-5 pt-3 ps-3 pb-3 pe-3 bg-white" id="blog">
    <h1 class="fw-bold mb-4">Todas as notícias</h1>

    <form action="noticias.php" method="post">
        <input class="form-control" type="text" name="buscar" placeholder="Digite a busca">
    </form>
    <hr>
    <?php
    if (isset($_POST["buscar"])) {
        $varBuscar = $_POST["buscar"];
        $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo WHERE bloginfo_titulo LIKE '%$varBuscar%' ORDER BY blog_codigo DESC");
    } else {
        $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo ORDER BY blog_codigo DESC");
    }

    if (mysqli_num_rows($query) === 0) {
        echo "Nenhum resultado";
    } else {
    ?>
        <hr>
        
        <table class="table table-bordered table-striped table-hover justify-content-center">
            <tr>
                <td class="text-center"><b>Imagem</b></td>
                <td class="text-center"><b>Título</b></td>
                <td class="text-center"><b>Sobre</b></td>
            </tr>

            <?php
            while ($exibe = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td class="d-flex justify-content-center"><img class="img-fluid" src="files/img/blog/<?php echo $exibe[10] ?>" width="200" id="imagem-tabela"></td>
                    <td><b><?php echo $exibe[5] ?></b></td>
                    <td><a class="fw-semibold text-dark text-justify" href="page.php?idb=<?php echo $exibe[0] ?>"><?php echo substr($exibe[6], 0, 50) . "..." ?></a></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</div>

<?php
include("views/blades/footer3.php");
?>