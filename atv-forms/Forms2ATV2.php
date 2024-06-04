<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = htmlspecialchars($_POST['user']);
    $senha = htmlspecialchars($_POST['senha']);
    if( $user == "admin" && $senha == '1234'){
         echo"<h1>Login Realizado com sucesso.</h1>";
    }
    else{
        echo"<h1>Usuario ou senha invalidos.</h1>";
    }
}else{
    echo"Acesso negado.";
}
?>