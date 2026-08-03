<?php
include_once '../../models/Fornecedor.php';
$fornecedor = new Fornecedor();
$fornecedores = $fornecedor->listar();
?>

<div class="col-sm-12 mb-4">

    <div class="card shadow mb-4">
        <!-- striped é para zebrar as linhas, cada uma com uma cor-->
        <div class="table-responsive-sm mt-4">
            <h3 class="ml-3">
                Listar Fornecedores
                <a class="btn btn-success float-right mb-3 mr-3" href="?p=add/fornecedor"><i class="bi bi-database-fill-add"></i></a>
            </h3>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fornecedores as $f): ?>
                        <tr>
                            <td><?php echo $f['id']; ?></td>
                            <td><?php echo $f['nome']; ?></td>
                            <td><?php echo $f['cidade']; ?></td>
                            <td>
                                <a href="?p=edit/fornecedor&id=<?php echo $f['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="?p=delete/fornecedor&id=<?php echo $f['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>