<?php
session_start();
include "servicos.php";

$num1 = $_POST['valorA'];
$num2 = $_POST['valorB'];
$num3 = $_POST['valorC'];
$operador = $_POST['operador'];
$resultado = "";

if(is_numeric($num1) && is_numeric($num2) && (isset($operador))){
    if($operador == 'soma'){
        $resultado = "Soma de ".$num1."+".$num2." = ".soma($num1, $num2);
    }else if($operador == 'subtrair'){
        $resultado = "Substração de ".$num1."-".$num2." = ".subtracao($num1, $num2);
    }else if($operador == 'multiplicar'){
        $resultado = "Multiplicação de ".$num1."x".$num2." = ".multiplicar($num1, $num2);
    }else if($operador == 'dividir' && (($num2 > 0) || ($num2 == 0 && $num1 == 0))){
        $resultado = "Divisão de ".$num1."/".$num2." = ".dividir($num1, $num2);
    }else if($operador == 'resto' && (($num2 > 0) || ($num2 == 0 && $num1 == 0))){
        $resultado = "Resto de ".$num1."/".$num2." = ".resto($num1, $num2);
    }else if($operador == 'potencia'){
        $resultado = "Potência de ".$num1."^".$num2." = ".potencia($num1, $num2);
    }else{
        $resultado = "Não é possível dividir por 0!";
    }
    
}else if(is_numeric($num3)){
    for($i = 0; $i < 11; $i++){
        if($operador == 'dividir'){
            if($i == 0){
                $resultado.= 'DIV/0'."<br>";
            }else{
                $resultado.= "Divisão de ".$num3."/".$i." = ".dividir($num3, $i)."<br>";
            }
        }else if($operador == 'soma'){
            $resultado.= "Soma de ".$num3."+".$i." = ".soma($num3, $i)."<br>";
        }else if($operador == 'subtrair'){
            $resultado.= "Subtração de ".$num3."-".$i." = ".subtracao($num3, $i)."<br>";
        }else if($operador == 'multiplicar'){
            $resultado.= "Multiplicação de ".$num3."x".$i." = ".multiplicar($num3, $i)."<br>";
        }else if($operador == 'resto'){
            if($i == 0){
                $resultado.= 'DIV/0'."<br>";
            }else{
                $resultado.= "Resto de ".$num3."/".$i." = ".resto($num3, $i)."<br>";
            }
        }else{
            $resultado.= "Potência de ".$num3."^".$i." = ".potencia($num3, $i)."<br>";
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
    <script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/js/show_hide.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: black;">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand nav-link mr-5">
                <img src="./img/calculadora.png" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                    <span class="navbar-toggler-icon m-auto"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3"><a href="index.html" class="nav-link nav-link:hover ponteiro">Novo Calculo</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
    <div class="container text-center">
        <table class="table table-success mt-5">
            <tbody>
                <tr>
                    <td class="text-success"><?php echo $resultado; ?></td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>
</html>