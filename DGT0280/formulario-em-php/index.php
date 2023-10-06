<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>index</title>
</head>
<body>
    <?php
    if(!isset($_SESSION['login'])){
        include ('login.php');
        if(isset($_POST['enviar'])){
            $login = 'a';
            $senha = '123';
            $verificaLogin = $_POST['login'];
            $verificaSenha = $_POST['senha'];
            if($login == $verificaLogin && $senha == $verificaSenha){
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else{
                echo 'usuario ou senha invalidos';
            }
        } 
    } else{
        include('logou.php');
    }
    ?>
</body>
</html>