<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style-contas.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <title>Minha Conta</title>
</head>

<body>
    <?php
    include "classes/bd.php";
    $objBD = new BD();
    $id = $_GET['id'];
    $result = $objBD->selectWhere('usuario', 'id', $id);
    if (!empty($_GET['mudarNome'])) {
        $objBD->update('usuario', 'senha = '. $_GET['senha'], $id);
        $objBD->update('usuario', "nome = '". $_GET['nome']."'", $id);
        $objBD->update('usuario', "email = '". $_GET['email']."'", $id);
        $email = $_GET['email'];
        header('location:./paginaPrincipal.php?email='.$email);
    }
    ?>
    <header>
        <div class="secaoCabecalho">
            <a href='./paginaPrincipal.php?email=<?php echo $result->email; ?>' ; style="color:white;"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </header>
    <main>
        <form class="card-login" action="./minhaconta.php" method="GET">
            <input type="hidden" value="<?php echo $id?>" name="id"/>
            <label for="nome">Nome</label>
            <input type='text' name='nome' autocomplete="off" value="<?php echo $result->nome ?>" />
            <label for="nome">Email</label>
            <input type="email" name='email' value="<?php echo $result->email ?>" />
            <label for="nome">Senha</label>
            <input type="text" name='senha' value="<?php echo $result->senha ?>" />
            <input type="submit" name='mudarNome' value="Salvar mudanças" />
            <a href="../index.php">Sair</a>
        </form>
    </main>
</body>

</html>