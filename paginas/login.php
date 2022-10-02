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
        <div class="left-login">
            <h1>Faça login<br>E venha estudar com a gente</h1>
            <img src="../images/work-time-animate.svg" class="left-login-image" alt="Astrounauta" />
        </div>
        <div class="right-login">
            <form class="card-login" method="post" action="login.php">
                <h1>Entrar</h1>
                <div class="textfield">
                    <label for="E-mail">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" autocomplete="off" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <a href="criarConta.php" class="criar-conta">Ainda não tem conta? Clique aqui</a>
                <a href='paginaPrincipal.php?email=arthur@gmail.com'>logar direto</a>
                <button class="btn-login">Fazer login</button>
                <?php
                include "classes/bd.php";
                if (!empty($_POST['email'])) {
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $objBD = new BD();
                    $result = $objBD->select('usuario');
                    $emails = [];
                    foreach ($result as $item) {
                        array_push($emails, $item['email']);
                    }
                    if (in_array($email, $emails)) {
                        $logar = $objBD->find($email);
                        if ($logar->senha == $senha) {
                            $idUsuario = $objBD->selectWhere('usuario', 'email',$email);
                            header('Location:./paginaPrincipal.php?email='.$email);
                        } else {
                            echo 'E-mail ou Senha incorretos!';
                        }
                    } else {
                        echo 'E-mail ou Senha incorretos!';
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>