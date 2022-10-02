<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be that Student</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="images/logo.png" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="paginas/criarConta.php">Criar Conta</a></li>
                <li><a href="paginas/login.php">Entrar</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Be that <br><span>Student</span></h2>
                <p>O Be That Student é uma ferramenta que tem como propósito auxiliar estudantes procrastinadores, gerando melhor gerenciamento do seu tempo a partir do método Pomodoro. A aplicação tem como foco estudantes pelo fato de que são os que mais são prejudicados pelo uso excessivo das redes sociais, ocasionando a procrastinação.</p>
                <a href="paginas/criarConta.php">Criar Conta</a>
            </div>
            <div class="imgBox">
                <img src="images/time-management-animate.svg">
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function toggleMenu() {
            var menuToggle = document.querySelector('.toggle');
            var navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>