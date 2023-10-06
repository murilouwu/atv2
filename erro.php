<?php
    require 'assets/php/html.php';
    if($_SESSION['user']['nivel'] != 1){
        echo '<h1>Você não é Adiministrador!!!</h1>';
    }
?>