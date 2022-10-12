<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css//style-criar.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include "../classes/bd.php";
    $objBD = new BD();
    $id = $_GET['id'];
    $result = $objBD->selectWhere('usuario', 'id', $id);
    ?>
    <header>
        <div class="secaoCabecalho">
        <a href='../paginaPrincipal.php?email=<?php echo $result->email; ?>' ; style="color:white;"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </header>
    <form method="GET" action="./trabalho.php" class="card-login">
        <h1>Selecione a tarefa que deseja estudar</h1>
        <select name="tarefa" required>
            <option disabled selected value> -- Escolha uma tarefa-- </option>
            <?php
            $tarefas = $objBD->selectWhere2('tarefa', 'idUser', $_GET['id']);
            foreach ($tarefas as $proj) {
                echo "<option value='" . $proj['id'] . "'>" . $proj['nome'];
            }
            ?>
        </select>
        <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
        <input type="submit">
    </form>
</body>