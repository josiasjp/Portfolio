<?php
    // manipulação de banco de dados mysql
    include('mysql_config.php');
    $usuario_nome;
    $usuario_cpf;
    $usuario_idade;
    
//----------verificação de integridade de dados------------------
    if(is_string($_GET['nome'])){
        $usuario_nome = strtoupper($_GET['nome']);
        echo "<br>nome: $usuario_nome";
    }

    if(is_numeric($_GET['idade'])){
        $usuario_idade = (int)$_GET['idade'];
        echo "<br>idade: $usuario_idade";
    }
    
    if(is_numeric($_GET['cpf'])){
        $usuario_cpf = (int)$_GET['cpf'];
        echo "<br>idade: $usuario_cpf";
    }
//-----------------função----------------------------
    $sqlSelecionar = "select * from pessoa";
    $sqlInserir = "insert into pessoa(cpf, nome, idade) values ($usuario_cpf, '$usuario_nome', $usuario_idade);";
    $query2 = mysqli_query($DB_connect ,$sqlInserir);
    mysqli_close($DB_connect);
?>
