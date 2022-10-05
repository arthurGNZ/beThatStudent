<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style-criar.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <title>Criar Projeto</title>
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
    <main>
        <form class="card-login" action="criarProjeto.php">
            <input type='text' name='nome' placeholder='Nome do projeto' required autocomplete="off"/>
            <input type="hidden" name='idUsuario' value="<?php echo $_GET['id']?>"/>
            <input type="submit" name='Criar Projeto'/>
            <?php
                if(!empty($_GET['nome'])){
                    $nome = $_GET['nome'];
                    $id = $_GET['idUsuario'];
                    $dados = [$nome, 0, $id];
                    $objBD->insert($dados, 'projeto', 'nome, tempoEstudo, idUsuario');
                    $usuario = $objBD->selectWhere('usuario', 'id', $id);
                    $email = $usuario->email;
                    header('Location:./paginaPrincipal.php?email='.$email);
                }
            ?>
        </form>
    </main>

</body>

</html>