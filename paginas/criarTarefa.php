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
        <form class="card-login" action="criarTarefa.php">
            <input type='text' name='nome' placeholder='Nome da tarfea' required autocomplete="off" />
            <input type='text' name='descricao' placeholder='Descrição da tarfea' autocomplete="off" />
            <input type="hidden" name='idUsuario' value="<?php echo $_GET['id'] ?>" />
            <select name="projeto" required>
                <option disabled selected value> -- Escolha um projeto -- </option>
                <?php
                $projetos = $objBD->selectWhere2('projeto', 'idUsuario', $_GET['id']);
                foreach ($projetos as $proj) {
                    echo "<option value='" . $proj['id'] . "'>" . $proj['nome'];
                }
                ?>
            </select>
            <input type="submit" name='Criar Projeto' />
            <?php
            if (!empty($_GET['nome'])) {
                if (empty($idProjeto = $_GET['projeto'])) {
                    echo 'Escolha um projeto para continuar!';
                }
                $nome = $_GET['nome'];
                $descricao = $_GET['descricao'];
                $id = $_GET['idUsuario'];
                $idProjeto = $_GET['projeto'];
                $dados = [$nome, $descricao, 0, $idProjeto, $id];
                $objBD->insert($dados, 'tarefa', 'nome, descricao, tempoEstudo, idProjeto, idUser');
                $usuario = $objBD->selectWhere('usuario', 'id', $id);
                $email = $usuario->email;
                header('Location:./paginaPrincipal.php?email=' . $email);
            }
            ?>
        </form>
    </main>

</body>

</html>