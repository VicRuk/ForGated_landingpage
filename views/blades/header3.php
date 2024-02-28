<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="files/img/logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,200;1,400;1,700&family=Source+Sans+3:wght@900&display=swap" rel="stylesheet">
    
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="js/funcoes.js" type="text/javascript"></script>
    <title>ForGated</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid px-0">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid" id="nav-content">
                <a class="navbar-brand" href="index.php"><h5 class="fw-bold text-dark" id="logo">DAMNS.</h5></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="htitle offcanvas-title fw-bold text-black" id="offcanvasNavbarLabel">DAMNS.</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-5 overflow-hidden justify-content-end" data-bs-dismiss="offcanvas" aria-label="Close">
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="index.php#sobre">Sobre</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="index.php#projeto">Projeto</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="index.php#equipe">Equipe</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="#">Notícias</a>
                            </li>
                            <li class="nav-item px-1">
                                <a class="fw-semibold nav-link active text-dark" aria-current="page" href="index.php#footer">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>