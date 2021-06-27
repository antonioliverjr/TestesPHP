<?php

include "servicos.php";

$num1 = $_POST['valorA'];
$num2 = $_POST['valorB'];
$num3 = $_POST['valorC'];
$operador = $_POST['operador'];
$resultado = "";

if(is_numeric($num1) && is_numeric($num2) && (isset($operador))){
    if($operador == 'soma'){
        $resultado = soma($num1, $num2);
    }else if($operador == 'subtrair'){
        $resultado = subtracao($num1, $num2);
    }else if($operador == 'multiplicar'){
        $resultado = multiplicar($num1, $num2);
    }else if($operador == 'dividir' && (($num2 > 0) || ($num2 == 0 && $num1 == 0))){
        $resultado = dividir($num1, $num2);
    }else if($operador == 'resto' && (($num2 > 0) || ($num2 == 0 && $num1 == 0))){
        $resultado = resto($num1, $num2);
    }else if($operador == 'potencia'){
        $resultado = potencia($num1, $num2);
    }else{
        $resultado = "Não é possível dividir por 0!";
    }
    
}else if(is_numeric($num3)){
    for($i = 0; $i < 11; $i++){
        if($operador == 'dividir'){
            if($i == 0){
                $resultado.= 'DIV/0'."<br>";
            }else{
                $resultado.= dividir($num3, $i)."<br>";
            }
        }else if($operador == 'soma'){
            $resultado.= soma($num3, $i)."<br>";
        }else if($operador == 'subtrair'){
            $resultado.= subtracao($num3, $i)."<br>";
        }else if($operador == 'multiplicar'){
            $resultado.= multiplicar($num3, $i)."<br>";
        }else if($operador == 'resto'){
            if($i == 0){
                $resultado.= 'DIV/0'."<br>";
            }else{
                $resultado.= resto($num3, $i)."<br>";
            }
        }else{
            $resultado.= potencia($num3, $i)."<br>";
        }
    }
}else{
    $resultado = "Valor não é númerico!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h5>
        <?php 
        echo $resultado;
        ?>
    </h5>    
</body>
</html>