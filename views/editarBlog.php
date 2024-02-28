<?php
include("../models/conexao.php");
include("blades/header2.php");
$idb = $_GET["idb"];
$query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo WHERE blog_codigo = $idb ORDER BY blog_codigo DESC");
?>

<div class="container border rounded mt-5 mb-5 pt-3 ps-3 pb-3 pe-3 bg-white" id="blog">
    <?php
        while ($exibe = mysqli_fetch_array($query)) {
    ?>
    <form name="atualizar" enctype="multipart/form-data" action="../controllers/atualizarBlog.php" method="post">
        <input type="hidden" name="infoCodigo" value="<?php echo $exibe[1] ?>">
        <input type="hidden" name="fk_codigoImagem" value="<?php echo $exibe[11] ?>">

        <label class="form-label fw-semibold">Título</label><br>
        <input class="form-control" type="text" name="tituloBlog" value="<?php echo $exibe[5]?>" required><br>

        <label class="form-label fw-semibold">Sobre</label><br>
        <textarea class="form-control" rows="5" type="text" name="sobreBlog" required><?php echo $exibe[6]?></textarea><br>
        
        <label class="form-label fw-semibold">Imagens Atuais:</label><br>
        <div class='col-12'>
            <div class='d-flex'>
                <?php
                    $query2 = mysqli_query($conexao, "SELECT * FROM blogimg WHERE fk_codigo_img = $exibe[0] ORDER BY blogimg_codigo DESC");
                    while($exibe2 = mysqli_fetch_array($query2)) {
                ?>    
                    <img src="../files/img/blog/<?php echo $exibe2[2]?>" class="img-fluid col-2 mb-4 ms-2">      
                <?php
                }
                ?>
            </div>
        </div>
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <div class="row">
            <div class="col-sm-12">
                <input class="fw-bold form-control custom-file-input" type="file" name="arquivo[]" multiple="multiple" /><br><br>
            </div>
        </div>

        <input class="fw-bold btn btn-success" type="submit" value="Atualizar">
    </form>
    <?php } ?>
</div>

<?php
include("blades/footer2.php");
?>