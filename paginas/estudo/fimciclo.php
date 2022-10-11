<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css//style-contador.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <title>Descanço</title>
</head>
<?php
include "../classes/bd.php";
$objBD = new BD();
$idUsuario = $_GET['id'];
$user = $objBD->selectWhere('usuario', 'id', $idUsuario);
$email = $user->email;
?>
<body>
</body>
<header>
    <i class="fa-solid fa-user avatar"></i>
</header>
<section class="card-login">
    <h1>Parabéns, você acabou sua tarefa</h1>
    <p>O que deseja fazer agora?</p>
    <div>
        <a href="./entrada.php?id<?php echo $idUsuario?>" class="btn">Começar mais um ciclo</a>
        <a href="../paginaPrincipal.php?email=<?php echo $email?>" class="btn">Voltar para página principal</a>
    </div>
</section>

</html>
<?php
$tarefa = $_GET['tarefa'];
$buscaTarefa = $objBD->selectWhere('tarefa', 'id', $tarefa);
$buscaProjeto = $objBD->selectWhere('projeto', 'id', $buscaTarefa->idProjeto);
$tempoTarefa = $buscaTarefa->tempoEstudo;
$tempoTarefa = $tempoTarefa + 75;
$tempoProjeto = $buscaProjeto->tempoEstudo;
$tempoProjeto = $tempoProjeto + 75;

$objBD->update('tarefa', 'tempoEstudo = ' . $tempoTarefa, $tarefa);
$objBD->update('projeto', 'tempoEstudo = ' . $tempoProjeto, $buscaTarefa->idProjeto);

?>