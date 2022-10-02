<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style-dicas.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <title>Dicas para ansiedade</title>
</head>

<body>
    <?php
    include "classes/bd.php";
    $num = rand(1, 20);
    $objBD = new BD();
    $result = $objBD->selectWhere('dicas', 'id', $num);
    ?>
    <header>
        <div class="secaoCabecalho">
            <a href=<?php echo $_SERVER['HTTP_REFERER'];?> style="color:white;"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </header>
    <main class="card-login">
        <?php
        echo '<h1>'.$result->titulo.'</h1>';
        echo '<p>'.$result->conteudo.'</p>';
        ?>
    </main>

</body>

</html>