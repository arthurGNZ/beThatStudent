<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="css/style-pgPrincipal.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
</head>
<?php include "classes/bd.php";
$objBD = new BD();
$idUsuario = $_GET['email'];
$result = $objBD->selectWhere('usuario', 'email', $idUsuario);
?>

<body>
    <header>
        <div class="secaoCabecalho">
            <img src="../images/logo.png" class='logo' />
            <p>Seja bem-vindo <?php echo $result->nome;?>!</p>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </header>
    <main>
        <article>
            <a href="#">
                <i class="fa-solid fa-user fa-xl"></i>
                <p>Minha conta</p>
            </a>
            <a href="#">
                <i class="fa-sharp fa-solid fa-question fa-xl"></i>
                <p>Como funciona</p>
            </a>
            <a href="#">
                <i class="fa-sharp fa-solid fa-chart-simple fa-xl"></i>
                <p>Minhas estatísticas</p>
            </a>
        </article>
        <article>
            <a href="./dicas.php">
                <i class="fa-solid fa-book fa-xl"></i>
                <p>Dicas para ansiedade</p>
            </a>
            <a href="./criarProjeto.php?id=<?php echo $result->id?>">
                <i class="fa-solid fa-plus fa-xl"></i>
                <p>Criar projeto</p>
            </a>
            <a href="#">
                <i class="fa-solid fa-plus fa-xl"></i>
                <p>Criar tarefa</p>
            </a>
        </article>
        <a href='#' class="botaoPrincipal">
            <p> <i class="fa-solid fa-play fa-xl"></i> Iniciar estudo</p>
        </a>
    </main>
</body>

</html>