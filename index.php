<?php
    require 'assets/php/html.php';
    $html = new HtmlBased();
    $html->HeaderEcho(
        'Login', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/style.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        ''
    );
    $_SESSION['user'] = array();
?>
    <body>
        <br><br><br><hr><br><br><br>
        <h1>Entre</h1>
        <br><br><br><hr><br><br><br>
        <form action="login.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome">
            <label>senha:</label>
            <input type="password" name="senha">
            <input type="submit" value="Entrar" name="Log">
        </form>
    </body>
<?php
    $html->foot();
?>