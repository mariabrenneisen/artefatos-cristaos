<?php
    date_default_timezone_set('America/Sao_Paulo');
    
    try{
        $pdo = new PDO("mysql:dbname=artefatos_cristaos_2;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }
?>
