<?php
$dsn = "mysql:dbname=blog1;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//Conectando ao Banco
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $título = "Tudo sobre CMS";
    $autor = "Gabi";
    $data_criado = "2019-08-16 00:00:00";
    $conteudo = "bla bla bla";
    
    $sql = "INSERT INTO idposts SET título = '$titulo', autor = '$autor', data_criado = '$data_criado', conteudo = '$conteudo'";
    
    $pdo->query($sql);
    
    echo "Título inserido com sucesso: ".$pdo->lastInsertId();
    
}
catch(PDOException $e)
{
   echo "<h2>Falhou: ".$e->getMenssage()."</h2>"; 
}