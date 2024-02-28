<?php
include("../models/conexao.php");
include("../views/blades/header2.php");
?>
<div class="container p-5 mt-5 mb-5 rounded bg-white" id="login">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-10">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="fw-bold">Cadastrar Usuário</h3>
                </div>
                <div class="card-body">
                    <form action="../controllers/cadastrarUsuario.php" method="POST">
                        <div class="mb-3">
                            <label class="fw-semibold">Nome</label>
                            <input type="text" name="usuarioNome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="fw-semibold">Email</label>
                            <input type="text" name="usuarioEmail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="fw-semibold">Senha</label>
                            <input type="password" name="usuarioSenha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary fw-bold">Cadastrar</button></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../views/blades/footer2.php"); ?>