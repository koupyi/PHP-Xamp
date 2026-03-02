<?php
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "pt_BR.utf-8", 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once 'cabecalho.php'; ?>
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <div class="container mt-3">
        <div class="alert alert-primary" role="alert">
            <?php
            $pagina = filter_input(INPUT_GET, 'p');
            echo $pagina;

            ?>
            </div>   
        <?php
            if (empty($pagina)) {
                include_once 'home.php';
            } else {
            include_once $pagina . '.php';
            }
        ?>
    </div>

    <?php include_once "script.php"; ?>
</body>

</html>
