<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['E-mail']);

    echo"<h1>Cadastro Realizado com sucesso</h1>";
    echo"<p>Nome: $nome<p>";
    echo"<p>Email: $email<p>";   
} else{
    echo"<h1>Cadastro Inválido</h1>";
    echo"<p>Envie o Formulario corretamente.<p>";
}

?>