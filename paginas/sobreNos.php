<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style-funciona.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <title>Como funciona?</title>
</head>

<body>
    <?php
    include "classes/bd.php";
    $objBD = new BD();
    ?>
    <header>
        <div class="secaoCabecalho">
            <a href=<?php echo $_SERVER['HTTP_REFERER']; ?> style="color:white;"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </header>
    <main class="card-login">
        <h1>QUEM SOMOS?</h1>
        <p>Somos um grupo de estudantes do Instituto Federal de Santa Catarina, concluintes do ensino médio integrado ao técnico em informática, almejamos criar um software para reduzir a procrastinação e deste modo promover o uso consciente e aplicado das redes sociais. Com esse propósito o Be That Student foi criado, focado principalmente em acadêmicos, para ajudar em sua organização.</p>
    </main>

</body>

</html>