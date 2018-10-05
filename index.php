<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost:3227/servidor/css/style.css">
</head>
<body>
	<fieldset><legend>Inserir No Banco de Dados</legend>
        <form action="index.php" method="GET">
            <p><label for="in_nome">Nome:<input name="nome" id="in_nome" placeholder="nome"></p>
            <p><label for="in_idade">Idade:<input type="number" name="idade" id="in_idade" placeholder="idade"></p>
            <p><label for="in_cpf">CPF:<input type="number" name="cpf" id="in_cpf" placeholder="cpf"></p>
            <button type="submit">Salvar</button>
        </form>    
    </fieldset>
    <fieldset><legend>PHP<br></legend>
    <?php
        include("php/server.php");
    ?>
    </fieldset>
</body>
</html>
