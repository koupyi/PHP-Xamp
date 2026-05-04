<?php
include_once 'models/Fornecedor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsalvar'])) {
    $fornecedor = new Fornecedor();
    $fornecedor->setNome($_POST['txtnome']);
    $fornecedor->setCidade($_POST['txtcidade']);
    
    if ($fornecedor->salvar()) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Fornecedor cadastrado com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Erro ao cadastrar fornecedor!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
}
?>

<h3 class="mt-3 text-primary">
    Fornecedor
</h3>

<div class="card shadow mt-3"><!-- acrescentei um card com sombra aqui tbm -->
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="txtnome" class="col-sm-2 col-form-label">
                Nome
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Nome do Fornecedor"
                    value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="txtcidade" class="col-sm-2 col-form-label">
                Cidade
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtcidade" name="txtcidade" placeholder="Cidade"
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
            <a href="?p=fornecedor" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>