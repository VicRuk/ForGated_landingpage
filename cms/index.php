<?php
include("../models/conexao.php");
include("../views/blades/header2.php");
?>
<div class="container p-5 mt-5 mb-5 rounded bg-white" id="login">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="fw-bold">Login</h3>
                </div>
                <div class="card-body">
                    <form action="../controllers/login.php" method="POST">
                        <div class="mb-3">
                            <label class="fw-bold">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="fw-bold">Senha</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary fw-bold" >Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <a class="fw-bold" href="novoUsuario.php">Novo Usuário</a>
            </div>
        </div>
    </div>
</div>
<?php include("../views/blades/footer2.php"); ?>