<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $termo = htmlspecialchars($_GET['termo']);
    echo"<h1>Resultado da pesquisa:</h1>";
    echo"<p>$termo</p>";
}else{
    echo"<h1>Busca Invalida</h1>";
    echo"<p>Por favor, tente novamente.</p>";
}
?>