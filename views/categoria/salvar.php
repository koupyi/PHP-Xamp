<?php
include_once 'models/Categoria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnsalvar'])) {
    $categoria = new Categoria();
    $categoria->setNome($_POST['txtnome']);
    $categoria->setInformacoes($_POST['txtinformacoes']);
    
    if ($categoria->salvar()) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Categoria cadastrada com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Erro ao cadastrar categoria!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
}
?>

<h3 class="mt-3 text-primary">
    Categoria
</h3>

<div class="card shadow mt-3"><!-- acrescentei um card com sombra aqui tbm -->
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="txtnome" class="col-sm-2 col-form-label">
                Nome
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Categoria"
                    value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="txtinformacoes" class="col-sm-2 col-form-label">
                Informações
            </label>
            <div class="col-sm-10">
                <textarea name="txtinformacoes" id="txtinformacoes" rows="3" placeholder="Informações aqui" class="form-control" required></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit"
                    class="btn btn-primary"
                    name="btnsalvar"
                    value="Cadastrar">
            </div>
            <a href="?p=categorias" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>