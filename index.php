<?php
$dsn = "mysql:dbname=blog1;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

//Conectando ao Banco
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "<h1>Conexão estabelecida com sucesso!</h1>";
    
    $sql = "SELECT * FROM idposts";
    $dado = $pdo->query($sql);
    
    if($dado->rowCount() > 0)
    {
        echo "<h3>Há posts cadastrados</h3>";
        foreach($dado->fetchAll() as $post)
        {
            echo "<p><b>Título</b>: ".$post['titulo']."<br>";
            echo "<b>Autor</b>: <i>".$post['autor']."</i>";
            echo " - <b>Data de criação</b>: ".$post['data_criado']."</p>";
            echo "<p><b>Conteúdo: </b><br>".$post['conteudo']."</p><br>";
            echo "<hr>";
        }
        
    }
    else
    {
        echo "<h3>Não há posts cadastrados</h3>";
    }
}
catch(PDOException $e)
{
   echo "<h2>Falhou: ".$e->getMenssage()."</h2>"; 
}