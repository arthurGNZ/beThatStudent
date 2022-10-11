<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css//style-contador.css" rel='stylesheet' />
  <script src="https://kit.fontawesome.com/8fd4fa4b09.js" crossorigin="anonymous"></script>
  <title>Trabalho</title>
</head>

<body>
  <header>
    <i class="fa-solid fa-user avatar"></i>
  </header>
  <div class="contador">
    <p id='demo'></p>
  </div>
  <?php
  if (empty($_GET['time'])) {
    $time = 0;
  } else {
    $time = $_GET['time'];
  }
  echo
  "<script>
  let now = new Date().getTime();
  var countDownDate = now+1500000;
  var counter =" . $time . ";
  var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById('demo').innerHTML = minutes + 'm ' + seconds + 's ';

  if(counter == 6){
    window.location.href='./fimciclo.php?tarefa=" . $_GET['tarefa'] . "&id=" . $_GET['id'] . "';
  }
  if (distance < 0) {
    clearInterval(x);
    counter++;
    window.location.href='./descanco.php?time='+counter+'&tarefa=" . $_GET['tarefa'] . "&id=" . $_GET['id'] . "';
    }
  }, 1000);

</script>"; ?>

</body>