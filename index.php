<?php
include("models/conexao.php");
include("views/blades/header.php");
?>      
        <!-- HEADER -->
        <header class="header position-relative start-0 top-0 end-0 px-0">
            <div class="hero position-relative">
                <div class="h-100 row align-items-center position-relative" id="hero_content">
                    <div class="container-fluid align-items-center col-9 col-sm-7 col-md-5 position-relative">
                        <h3 class="fw-bold fs-1 mb-3" id="header-title"><b>ForGated</b><br>A segurança que o seu lar precisa!</h3>
                        <p class="text-secondary">ForGated pronto para proteger sua casa.</p>
                    </div>
                    <div class="container-fluid align-items-right col-10 col-sm-7 col-md-7">
                        <video class="hero-img img-fluid mb-1 position-relative" autoplay loop muted id="video1">
                            <source src="files/video.webm" type="video/webm">
                            Seu navegador não suporta o formato de vídeo WebM.
                        </video>
                    </div>
                </div>
            </div>     
        </header>

        <section>
        <!-- SOBRE NÓS -->
        <div class="container-fluid px-0 text-white position-relative" id="sobrenos">
            <div class="d-flex align-items-center justify-content-center mb-0">
                <div class="col-lg-10 col-md-10 col-sm-12 col-12 p-5 text-center" id="sobrenos-content">
                    <p style="color:#000">Sobre Nós</p>
                        <h1 class="reveal fw-bold mt-0 fs-1" id="blogo">DAMNS.</h1>
                        <div class="reveal container" id="sobrenos-text">
                            <p style="color: #000">Nós somos uma equipe de estudantes do ensino médio, apaixonados por tecnologia e segurança domiciliar. Matriculados no Ensino Médio integrado com Desenvolvimento de Sistemas, estamos focados em criar soluções acessíveis e eficazes para proteger residências contra incêndios, vazamentos de gás, supervisão de movimento e sobrecargas elétricas. Unindo nossos conhecimentos em programação e eletrônica, buscamos proporcionar tranquilidade às famílias, tornando a segurança residencial avançada uma realidade acessível a todos.</p>
                            <p style="color: #000">Nosso compromisso é criar sistemas inteligentes que operem 24/7 para manter as casas seguras e confiáveis, contribuindo para um futuro mais seguro e tecnologicamente avançado.</p>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- HOME -->
        <div class="container-fluid px-0 text-white position-relative" id="home">
            <div class="row align-items-center mb-0 flex-sm-row-reverse">
                <div class="col-lg-5 col-md-5 col-sm-6 col-12 p-5">
                    <h2 class="reveal fw-bold my-3 text-dark fs-1" id="title">Saiba mais sobre o nosso Projeto: <b>ForGated</b></h3>
                    <div id="botao"> 
                        <a href="#sobre" class="text-center"><button type="button" class="btn btn-primary btn-lg btn-block btn-dark fw-bold mb-3">Saiba Mais!</button></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-12 container-fluid">
                    <video autoplay muted loading="lazy" class="hero_video" width="100%" id="video2">
                        <source src="files/animacaologo.mp4" type="video/mp4" class="img-fluid">
                    </video>
                </div>
            </div>
        </div>

        <!-- SOBRE -->
        <div class="container-fluid px-0 text-white position-relative mb-4" id="sobre">
            <div class="col-12 p-4 text-dark">
                <div class="container pt-3 mb-5" id="secao1">
                    <h1 class='fw-bold mb-3'>Sobre</h1>
                    <p class="reveal">
                        Segundo dados divulgados pela Agência Brasil, mais de 50% dos incêndios ocorridos em casas ou apartamentos, resultaram de sobrecarga no sistema elétrico. Segundo a Associação Brasileira de Conscientização dos Perigos da Eletricidade (Abracopel), em 2020, foram registrados no país, 583 incêndios por sobrecarga, com 26 mortes. Desse total, 309 incêndios aconteceram em casas e apartamentos, resultado em 23 mortes.</p>
                    </p>
                    <p class="reveal">
                        Além disso, apenas em São Paulo, o Corpo de Bombeiros registrou 4.055 casos de acidentes por decorrência de vazamentos de gás GLP (popularmente conhecido como gás de cozinha).
                    </p>
                </div>
                
                <div class="container reveal" id="secao1">
                    <h1 class='fw-bold mb-3'>Objetivo do projeto</h1>
                    <p class="reveal">
                        O projeto tem como objetivo evitar que tragédias aconteçam em um espaço onde deve ter paz e tranquilidade. Para isso, nosso produto conta com sensores e outros dispositivos que estão conectados juntamente a um aplicativo mobile e também para desktop. 
                    </p>
                    <p class="reveal">
                        <b>Funções</b>: Monitoramento da rede elétrica em cômodos com maior concentração de produtos eletrônicos (eletrodomésticos, computador, televisão etc); Detectar vazamento de gás que pode resultar em um incêndio; Sistema com sensores de movimento para alertar quando sua casa é invadida quando você não está.
                    </p>
                </div>
            </div>
        </div>

        <!-- PROJETO -->
        <div class="container-fluid px-5 mb-5 text-white position-relative" id="projeto">
            <div class="container pt-5">
                <div class="row justify-content-center" id="projeto-container">
                    <div class="col-12 col-sm-6" id="projeto-coluna-esquerda">
                        <div class="reveal mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto1">
                            <div class="col-10 mt-1" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Proteção contra Incêndio</h2>
                            </div>
                            <img src="files/img/abajur2.png" class="img-fluid" id="card-imagem2">
                            <img src="files/img/cozinha.png" class="img-fluid" id="card-imagem1">
                        </div>
                        <div class="reveal mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto2">
                            <div class="col-6 mt-1" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Sobrecargas Elétricas</h2>
                            </div>
                            <img src="files/img/mao_fio2.png" class="img-fluid" id="card-imagem1">
                        </div>
                    </div>

                    <div class="col-12 col-sm-5 mb-4">
                        <div class="reveal mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto3">
                            <div class="col-6" id="card-texto">
                                <h2 class='fw-bold' style="color: #000;">Vazamento de Gás de Cozinha</h2>
                            </div>
                            <img src="files/img/gas2.png" class="img-fluid" id="card-imagem1">
                        </div>
                        <div class="reveal mb-4 position-relative rounded shadow p-3 mb-5" style="background-color: #EFEFEF;" id="card-projeto1">
                            <div class="col-6 mt-1" id="card-texto4">
                                <h2 class='fw-bold' style="color: #000;">Sensor de Movimento</h2>
                                <p>Seja avisado caso algum intruso invada sua casa enquanto você está fora!</p>
                            </div>
                            <img src="files/img/porta2.png" class="img-fluid" id="card-imagem4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <!-- NOTÍCIAS -->
        <div class="container-fluid p-5 position-relative bg-secondary" id="noticias">
            <div class="container border rounded mt-5 py-5 mb-5 bg-white col-12 h-100 d-flex flex-column justify-content-center align-items-center" id="home-noticias">
                <h1 class='fw-bold px-2 mb-3'>Últimas notícias</h1>
                <div class="container row justify-content-center">
                    <?php
                    $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo ORDER BY blog_codigo desc limit 1;");
                    while($exibe = mysqli_fetch_array($query)){
                    $Data = new DateTime($exibe[7]);
                    $stringDate = $Data -> format('d/m/Y, H:i:s');
                    ?>
                    <div class="col-md-7 col-sm-12 col-12 my-2">
                        <div class="reveal card-container border rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                            <div class="row align-items-center justify-content-center m-2">
                                <div class="card-image col-md-6 mb-2 d-flex flex-column justify-content-center">
                                    <a href="page.php?idb=<?php echo $exibe[0]?>"><img src="files/img/blog/<?php echo $exibe[10] ?>" class="img-fluid" alt="ImgBlog"></a>
                                </div>
                                <div class="card-corpo col-md-6 d-flex flex-column">
                                    <div class="card-title">
                                        <a class="text-dark text-decoration-none fw-bold" href="page.php?idb=<?php echo $exibe[0]?>"><?php echo $exibe[5] ?></a>
                                    </div>
                                    <div class="card-sobre mb-2">
                                        <a class="text-dark" href="page.php?idb=<?php echo $exibe[0]?>"><?php echo substr($exibe[6],0,50)."..." ?></a>
                                    </div>
                                    <div class="card-usuario">
                                        <p class="fst-italic fw-light mb-0"><?php echo "Criado por $exibe[13]"?></p>
                                        <p class="fst-italic fw-light mb-0"><?php echo "$stringDate"?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="col-md-5 col-sm-12 col-12 my-2">
                    <?php
                    $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN bloginfo ON blog_bloginfo_codigo = bloginfo_codigo INNER JOIN blogimg ON blog_blogimg_codigo = blogimg_codigo INNER JOIN usuario ON blog_usuario_codigo = usuario_codigo ORDER BY blog_codigo desc limit 1,2;");
                    while($exibe = mysqli_fetch_array($query)){
                    $Data = new DateTime($exibe[7]);
                    $stringDate = $Data -> format('d/m/Y, H:i:s');
                    ?>
                        <div class="reveal row align-items-center justify-content-center" id="noticia-direita">
                            <div class="card-container border rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                                <div class="row align-items-center justify-content-center m-2">
                                    <div class="card-image2 col-md-6 d-flex flex-column justify-content-center">
                                        <a href="page.php?idb=<?php echo $exibe[0]?>"><img src="files/img/blog/<?php echo $exibe[10] ?>" class="img-fluid" alt="ImgBlog"></a>
                                    </div>
                                    <div class="card-corpo col-md-6 d-flex flex-column">
                                        <div class="card-title">
                                            <a class="text-dark text-decoration-none fw-bold" href="page.php?idb=<?php echo $exibe[0]?>"><?php echo $exibe[5] ?></a>
                                        </div>
                                        <div class="card-sobre mb-2">
                                            <a class="text-dark" href="page.php?idb=<?php echo $exibe[0]?>"><?php echo substr($exibe[6],0,50)."..." ?></a>
                                        </div>
                                        <div class="card-usuario">
                                            <p class="fst-italic fw-light mb-0"><?php echo "Criado por $exibe[13]"?></p>
                                            <p class="fst-italic fw-light mb-0"><?php echo "$stringDate"?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <a href="noticias.php"><button type="button" class="btn btn-lg btn-block" id="btn-mais">Todas as notícias</button></a>
            </div>
        </div>


        <!-- EQUIPE -->
        <div class="container-fluid px-5 mt-5 text-dark position-relative mb-3" id="equipe">
            <h1 class='fw-bold mb-4'>Nossa Equipe</h1>
            <div class="reveal row px-2" id="equipe-conteudo">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/ferrari.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3" id="nome">Matheus Ferrari Abrahão</h5>
                            <p class="card-text fw-bold">Designer Digital</p>
                            <p class="card-text"><small class="text-muted">Responsável pelo design digital do website, aplicativo mobile e do software para desktop.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/mtzferrari/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.linkedin.com/in/matheus-ferrari-abrahão-893b17237/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/MatheusFAbr" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/yamamoto.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Matheus Yamamoto Dias</h5>
                            <p class="card-text fw-bold">Programador Mobile</p>
                            <p class="card-text"><small class="text-muted">Responsável por criar o aplicativo mobile do projeto.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/matheus_yamas/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.youtube.com/channel/UC8vWyKLaITcUV-2a4JeKlGg" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/yHiroshiz" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/leandro.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Leandro Takeo Oyadomari</h5>
                            <p class="card-text fw-bold">Programador Back-end</p>
                            <p class="card-text"><small class="text-muted">Responsável por criar o software do projeto.</small></p>
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                    <li><a href="https://www.instagram.com/le.takeo/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                    <li><a href="https://www.linkedin.com/in/leandro-oyadomari-856998231/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                    <li><a href="https://github.com/takeoya" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid" src="files/img/victor.png." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3">Victor Ryuki Tamezava</h5>
                            <p class="card-text fw-bold mb-0">Designer Digital</p>
                            <p class="card-text fw-bold">Programador WEB</p>
                            <p class="card-text"><small class="text-muted">Responsável pelo design digital do website, aplicativo mobile e do software para desktop.</small></p>
                            
                            <ul class="text-center d-flex justify-content-center position-relative" id="redes">
                                <li><a href="https://www.instagram.com/vicruk_edits/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
                                <li><a href="https://www.linkedin.com/in/victor-tamezava/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="https://github.com/VicRuk" target="_blank"><ion-icon name="logo-github"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
include("views/blades/footer.php");
?>