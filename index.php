<?php
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//Conectando ao Banco
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexão estabelecida com sucesso!";
    
    $sql = "SELECT * FROM idposts";
    $dado = $pdo->query($sql);
    
    if($dado->roeCount() > 0)
    {
        echo "Há posts cadastrados";
        
    }
    else
    {
        echo "Não há opsts cadastrados";
    }
}
catch(PDOException $e)
{
   echo"Falhou: ".$e->getMenssage(); 
}