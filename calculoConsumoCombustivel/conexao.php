<?php

$host = "localhost";
$port = "5432";
$dbname = "db_project";
$user = "postgres";
$password = "gaproject";
$pg_options = "--client_encoding=UTF8";
$mensagem = "";

    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
    $dbconn = pg_connect($connection_string);
        
    if($dbconn){
        $mensagem.= "<div class='text-success'>";
        $mensagem.= "<b>Conectado</b>";
        $mensagem.= "</div>";
    } else {
        $mensagem.= "<div class='text-danger'>";
        $mensagem.="<b>Erro ao conectar ao database</b>";
        $mensagem.= "</div>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="witch=device-witch, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<title>Status de Conexão</title>
</head>
<body>
    <main>
        <div class="container text-center">
            <h2>Banco de Dados PostgreSQL</h2>
            <div class="card-header">
                <?php
                echo $mensagem;
                ?>
            </div>
        </div>
        <div class="text-center p-2">
            <a href="index.php">
            <button class="btn btn-danger">Voltar</button>
            </a>
        </div>
    </main>
</body>
</html>