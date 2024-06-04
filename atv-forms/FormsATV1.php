<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro Simples</title>
</head>



<Body>
<form name="Cadastro" action="Forms2ATV1.php" method="POST">
        <h1>Realizar Cadastro</h1>
        <br>
        <br>
        <label for="Nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required minlength="3" maxlength="50" placeholder="Digite seu Nome "> <br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="E-mail" name="E-mail" placeholder="Digite seu e-mail"> <br>

        <label for="Senha">Senha:</label><br>
        <input type="password" id="Senha" name="Senha"  size="8"> <br>

        <label for="confirmar_senha">Confirmar Senha:</label><br>
        <input type="password" id="confirmar_senha" name="confirmar_senha"  size="8"> <br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br>

        <label for="Gênero">Gênero: </label><br>
        <select id="Gênero" name="Gênero" required>
            <option value="">Selecione...</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
        <br>   
        <br>
        <input type="submit" value="Enviar">
</form>
</Body>        
</html>