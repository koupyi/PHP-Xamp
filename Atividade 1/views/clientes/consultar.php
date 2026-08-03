<?php
include_once '../../models/Cliente.php';
$cliente = new Cliente();
$clientes = $cliente->listar();
?>

<div class="col-sm-12 mb-4">

    <div class="card shadow mb-4">
        <!-- striped é para zebrar as linhas, cada uma com uma cor-->
        <div class="table-responsive-sm mt-4">
            <h3 class="ml-3">
                Listar Clientes
                <a class="btn btn-success float-right mb-3 mr-3" href="?p=add/clientes"><i class="bi bi-database-fill-add"></i></a>
            </h3>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $c): ?>
                        <tr>
                            <td><?php echo $c['id']; ?></td>
                            <td><?php echo $c['nome']; ?></td>
                            <td><?php echo $c['email']; ?></td>
                            <td>
                                <a href="?p=edit/clientes&id=<?php echo $c['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="?p=delete/clientes&id=<?php echo $c['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>