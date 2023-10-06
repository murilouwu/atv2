<?php
    require 'assets/php/html.php';
    $html = new HtmlBased();

    if(isset($_POST['Log'])){
        $userLog = array($_POST['nome'], $_POST['senha']);
        if(!empty($userLog[0]) && !empty($userLog[0])){
            $date = array('nome', 'pass', 'nivel');

            $UserAction = new BankUse();
            $UserAction->NameTable = 'user';
            $UserAction->Dates = $date;
            
            //$UserAction->InsertUser($pdo, );
        }else{
            $html->mensage("Há campos vazios!");
        }

    }else if(isset($_POST['Cad'])){
        $userCad = array($_POST['nome'], $_POST['senha']);
        if(!empty($userCad[0]) && !empty($userCad[0])){
            $date = array('nome', 'pass', 'nivel');
            

            $UserAction = new BankUse();
            $UserAction->NameTable = 'user';
            $UserAction->Dates = $date;
            
            $UserAction->InsertUser($pdo, $userCad, $Verifcs);
        }else{
            $html->mensage("Há campos vazios!");
        }

    }else{
        $html->Atalho('index.php');
    }
?>