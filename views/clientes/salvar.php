<?php
include_once 'models/Cliente.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsalvar'])) {
    $cliente = new Cliente();
    $cliente->setNome($_POST['txtnome']);
    $cliente->setEmail($_POST['txtemail']);
    
    if ($cliente->salvar()) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Cliente cadastrado com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Erro ao cadastrar cliente!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
}
?>

<h3 class="mt-3 text-primary">
    Clientes
</h3>

<div class="card shadow mt-3"><!-- acrescentei um card com sombra aqui tbm -->
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="txtnome" class="col-sm-2 col-form-label">
                Nome
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Nome do Cliente"
                    value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="txtemail" class="col-sm-2 col-form-label">
                Email
            </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email"
                    value="" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit"
                    class="btn btn-primary"
                    name="btnsalvar"
                    value="Cadastrar">
            </div>
            <a href="?p=clientes" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>