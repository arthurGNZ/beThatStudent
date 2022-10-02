<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style-login.css" rel="stylesheet" />
    <title>Entrar</title>
</head>

<body>
    <div class="main-login">
        <div class="right-login">
            <form class="card-login" method="post" action="criarConta.php">
                <h1>Criar conta</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" autocomplete="off" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <button class="btn-login">Criar conta</button>
                <?php
                include "classes/bd.php";
                if (!empty($_POST['usuario'])) {
                    $nome = $_POST['usuario'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $dados = [$nome, $email, $senha];
                    $objBD = new BD();
                    $result = $objBD->select('usuario');
                    $emails = [];
                    foreach ($result as $item) {
                        array_push($emails, $item['email']);
                    }
                    if (in_array($email, $emails)) {
                        echo 'Esse email já está sendo utilizado';
                    } else {
                        $objBD->insert($dados, 'usuario', 'nome, email, senha');
                        $idUsuario = $objBD->selectWhere('usuario', 'email',$email);
                        header('Location:./paginaPrincipal.php?email='.$email);
                    }
                }
                ?>
            </form>
        </div>
        <div class="left-login">
            <h1>Crie sua conta<br>E venha estudar com a gente</h1>
            <img src="../images/work-time-animate.svg" class="left-login-image" alt="Astrounauta" />
        </div>
    </div>
</body>

</html>