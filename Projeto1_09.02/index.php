<?php

    setlocale(LC_TIME,"pt-BR", "pt_BR.utf-8", "pt_BR.utf-8", 'portuguese');
    date_default_timezone_set('AMERICA/Sao_Paulo');

?>

<html lang="pt-br">

<head>
    <?php include_once 'cabecalho.php' ?>
</head>

<body>
    <?php include_once 'navbar.php' ?>
    

    <div class="container mt-3">
        <?php
        $var = 10;
        if ($var == 10) {
            $mgs = 'igual a 10';
        }else if ($var > 10) {
            $mgs = 'maior que 10';
        }else{
            $msg = 'menor que 10';
        }

        $mgs.= 'teste';

        echo $mgs;
        ?>

        <div class="alert alert-info" role="alert">
            <?php
                echo"seja bem vindo";
            ?>
        </div>
    </div>


    <?php include_once 'script.php' ?>

</body>
</html>