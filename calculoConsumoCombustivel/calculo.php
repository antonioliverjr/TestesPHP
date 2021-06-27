<?php
if($_POST) {

    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    $valoralcool = $_POST['combustivel'];

    $mensagem = "";

    if (is_numeric($distancia) && is_numeric($autonomia) && is_numeric($valoralcool)) {
        if (($distancia > 0) && ($autonomia > 0) && ($valoralcool > 0)) {

            $consumoalcool = ($distancia / $autonomia) * $valoralcool;
            $consumoalcool = number_format($consumoalcool,2,',','.');

            $mensagem.= "<div class='text-success'>";
            $mensagem.= "O valor total gasto será de:";
            $mensagem.= "<ul>";
            $mensagem.= "<li><b>Álcool:</b> R$ ".$consumoalcool."</li>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";
            } else {
                $mensagem.= "<div class='text-danger'>";
                $mensagem.= "<b>O valor da distância, autonomia e do alcool devem ser maior que zero</b>";
                $mensagem.= "</div>";
            }
    } else {
        $mensagem.= "<div class='text-danger'>";
        $mensagem.= "<b>O valor recebido não é numérico</b>";
        $mensagem.= "</div>";
    }

} else {
    $mensagem.= "<div class='text-danger'>";
    $mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
    $mensagem.= "</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="witch=device-witch, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<title>Cálculo</title>
</head>
<body>
    <main>
        <div class="container text-center">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="card-header">
                <?php
                echo $mensagem;
                ?>
            </div>
            <div class="text-center p-2">
                <a href="index.php">
                <button class="btn btn-danger">Voltar</button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>