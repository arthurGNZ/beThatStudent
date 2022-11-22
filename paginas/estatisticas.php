<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="css/style-estatisticas.css" rel='stylesheet' />
    <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php
    include "classes/bd.php";
    $objBD = new BD();
    $id = $_GET['id'];
    $result = $objBD->selectWhere('usuario', 'id', $id);
    if(!empty($_GET['deleteProjeto'])){
        $tarefas2 =$objBD->selectWhere2('tarefa', 'idProjeto', $_GET['deleteProjeto']);
        foreach($tarefas2 as $objeto){
            $objBD->removeTarefa($objeto['id']);
        }
        $objBD->removeProjeto($_GET['deleteProjeto']);        
    }   
    
    if(!empty($_GET['delete'])){
        $objBD->removeTarefa($_GET['delete']);    
    }   
  
    ?>
    <div class="cabecalho">
        <div class="secaoCabecalho">
            <a href='./paginaPrincipal.php?email=<?php echo $result->email; ?>' ; style="color:white;"><i class="fa-solid fa-arrow-left fa-2xl"></i></a>
        </div>
        <i class="fa-solid fa-user avatar"></i>
    </div>
    <main class="card-login">
        <h1>Seus Projetos</h1>
        <?php 
        $result = $objBD->selectWhere2('projeto', 'idUsuario', $id);
        foreach($result as $projeto){
            $tarefas = $objBD->selectWhere2('tarefa', 'idProjeto', $projeto['id']);
            $result = $objBD->selectWhere('usuario', 'id', $id);
            echo "
            <table class='table table-hover'>
            <thead>
                <tr><h1 class='titulo'>".$projeto['nome']."</h1></tr>
                <tr>
                    <th scope='col'>Tarefas do projeto</th>
                    <th scope='col'>Tempo estudo</th>
                    <th scope='col'><a class='lixeira' href='./estatisticas.php?id=$result->id&deleteProjeto=".$projeto['id']."'><i class='fa-solid fa-trash'></i></a></th>
                </tr>
                </thead>
                ";
                foreach($tarefas as $objeto){
                    $result = $objBD->selectWhere('usuario', 'id', $id);
                    echo"
                    <tbody>
                        <tr>
                            <td >".$objeto['nome']."</th>
                            <td colspan='1'>".$objeto['tempoEstudo']." min</td>
                            <td colspan='1'><a class='lixeira' href='./estatisticas.php?id=$result->id&delete=".$objeto['id']."'><i class='fa-solid fa-trash'></i></a></td>
                        </tr>";
                }
        echo "
                        <tr>
                            <th colspan='1'>Tempo total do projeto</th>
                            <td colspan='1'>".$projeto['tempoEstudo']." min</td>
                            <td colspan='1'></td>
                        </tr>
        </tbody>
        </table>
        ";
        }
        
        ?>
        <!--<table class='table table-hover'>
            <thead>
                <tr><h1>Projeto</h1></tr>
                <tr>
                    <th scope='col'>Nome Tarefa</th>
                    <th scope='col'>Tempo estudo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>Tarefa 1</th>
                    <td colspan='1'>234 min</td>

                </tr>
                <tr>
                    <th colspan='1'>Tempo total do projeto</th>
                    <td colspan='1'>234 min</td>
                </tr>
            </tbody>
        </table>-->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>