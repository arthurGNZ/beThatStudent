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
        <h1>Como funciona?</h1>
        <p>Antes de tudo, é necessário criar um projeto.</p>
        <img src="img/criarProjeto.png" class="imgs">
        <img src="img/criarProjetoMobile.png" class="imgsMobile">
        <p>Após criar um projeto, crie uma tarefa com o projeto desejado.</p>
        <img src="img/criarTarefa.png" class="imgs">
        <img src="img/criarTarefaMobile.png" class="imgsMobile">
        <p>Com o projeto e tarefa criados, clique em iniciar estudo, lá será possível escolher a tarefa que você deseja estudar.</p>
        <img src="img/iniciarEstudo.png" class="imgs">
        <img src="img/iniciarEstudoMobile.png" class="imgsMobile">
        <p>A sessão de estudo consistem em um estudo de 25 minutos trabalho, 5 minutos de descanso, 25 minutos de trabalho, 5 minutos de descanso e após isso a sessão será finalizada.</p>
        <img src="img/estudo.png" class="imgs">
        <img src="img/estudoMobile.png" class="imgsMobile">
        <p>A sessão só será contabilizada caso todas as etapas sejam concluidas.</p>
        <p>Para ver seu tempo de estudo, abra a aba Minhas Estatisticas.</p>
        <img src="img/minhasEstatisticas.png" class="imgs">
        <img src="img/estatisticaMobile.png" class="imgsMobile">
    </main>

</body>

</html>