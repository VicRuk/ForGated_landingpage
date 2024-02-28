<?php
include("models/conexao.php");
include("views/blades/header3.php");
$idb = $_GET["idb"];
?>
    <div class="container border rounded mt-5 mb-5 pt-3 ps-3 pb-3 pe-3 bg-white" id="blog">
        <?php
        $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo WHERE blog_codigo = $idb ORDER BY blog_codigo DESC");
        while($exibe = mysqli_fetch_array($query)){
        $Data = new DateTime($exibe[7]);
        $stringDate = $Data -> format('d/m/Y, H:i:s');
        ?>
        <div class="position-relative container-fluid col-12">
            <h1 class='fw-bold mb-3'><?php echo $exibe[5]?></h1>
            <p class="font-weight-light">Criado por <?php echo $exibe[13]?></p>
            <p class="text-muted"><?php echo $stringDate?></p>
            <hr class='my-4'>
            <div class='col-12'>
                <?php
                    $query2 = mysqli_query($conexao, "SELECT * FROM blogimg WHERE fk_codigo_img = $exibe[0] ORDER BY blogimg_codigo DESC");
                    while($exibe2 = mysqli_fetch_array($query2)) {
                ?>
                    <div class='d-flex justify-content-center align-items-center'>
                        <img src="files/img/blog/<?php echo $exibe2[2]?>" class="img-fluid col-10 col-sm-8 col-md-4 mb-4">
                    </div>
                <?php
                    }
                ?>
                <div class='col-12 mb-5'>
                    <p><?php echo $exibe[6]?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
<?php
    include("views/blades/footer3.php");
?>