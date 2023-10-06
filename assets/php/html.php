<?php
    session_start();
    require 'Connect.php';

    final class HtmlBased
    {
        function HeaderEcho($Title, $assets, $itemPlus) {
            $res = '
                <!DOCTYPE html>          
                <html lang="pt-br">
                <head>
            ';
        
            if (is_array($assets)) {
                foreach ($assets as $asset) {
                    $type = $asset[0];
                    $link = $asset[1];
                    $extra = isset($asset[2]) ? $asset[2] : null;
        
                    if ($type == 0) {
                        $res .= '<meta ' . $link . '>';
                    } elseif ($type == 1) {
                        $res .= '<link rel="stylesheet" type="text/css" href="' . $link . '"';
                        if ($extra !== null) {
                            $res .= ' ' . $extra;
                        }
                        $res .= '>';
                    } elseif ($type == 2) {
                        $res .= '<script src="' . $link . '"';
                        if ($extra !== null) {
                            $res .= ' ' . $extra;
                        }
                        $res .= '></script>';
                    }
                }
            }
        
            $res .= '
                    <link rel="shortcut icon" href="'.$itemPlus.'">
                    <title>'.$Title.'</title>
                </head>
            ';
        
            echo $res;
        }
        
        function foot(){
            $res = '
                </html>
            ';
            echo($res);
        }
        
        function mensage($txt){
            echo '<script>alert("'.$txt.'");</script>';
        }

        function Atalho($pag) {
            header("Location: $pag");
            exit();
        }              
    }

    final class BankUse
    {
        public $NameTable;
        public $Dates;

        function InsertUser($pdo, $Vls, $Vers, $Configs)
        {
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                mensage("Email já cadastrado, >:(");
            } else {
                try {
                    $sql = "INSERT INTO users (nome, email, pass) VALUES (:name, :email, :password)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $password);
                    if ($stmt->execute()) {
                        mensage('Usuário cadastrado com sucesso :)');
                    } else {
                        throw new Exception('Erro ao cadastrar usuário ;-;');
                    }
                } catch (PDOException $e) {
                    mensage('Error: ' . $e->getMessage());
                }
            }
        }
        function GetUser($pdo){

        }
    }
?>