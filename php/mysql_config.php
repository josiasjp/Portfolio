<?php
    // configuração do banco mysql;
    $DBusuario = "root";
    $DBlocal = "localhost";
    $DBsenha = "";
    $DBbanco = "php_connect";
    
    // conexão do banco mysql

    $DB_connect = mysqli_connect("$DBlocal", "$DBusuario", "$DBsenha", "$DBbanco");
    //var_dump($DB_connect);
    if($DB_connect){
        echo "<br>Mysql_connect: ok! <br>";
    } 
    else{
        echo "<br>Mysql_connect: off! <br>";
    } 
    // visualizar

    
