<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Calculo de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <div class="calculo">
        <form method="POST">
        <div class="item"> 
            Nome:
            <input class="cx" type="text" name="cxnome">
        </div>    
        <div class="item">
            Peso:
            <input class="cx" type="number" name="cxpeso">
        </div>
        <div class="item">
            Altura:
            <input class="cx" type="number" name="cxaltura">
        </div>
            <input class="btn" type="submit" value="Calcular">
        </form>
    </div>
    <?php
        $nome = $_POST["cxnome"];
        $peso = $_POST["cxpeso"];
        $altura = $_POST["cxaltura"];

        //converte para metros
        $altura = $altura / 100;

        $imc = $peso / ($altura * $altura);

    ?>
    <div class="resultado">
       <p><?php echo $nome . "\nsua Altura é de: " . $altura . "m" . 
            "\nseu peso: " . $peso . "kg" .
            "\ne seu IMC: " . number_format($imc, 2, '.', ' ');?>
        </p>
        <?php 
            if($imc < 18.5){
                echo "<span style='color:#FF6347'>Seu imc é menor que o normal!</span>";
            }elseif($imc > 18.5 && $imc <= 29.9){
                echo "<span style='color:#FFD700'>Parabéns você está no peso ideal!</span>";
            }elseif($imc > 25 && $imc <= 29.9){
                echo"<span style='color:#FFFF00'>Voce está levemente a cima do peso!";
            }elseif($imc > 30 && $imc <= 34.9){
                echo"<span style='color:#DAA520;'>Voce está com obesidade grau I";
            }elseif($imc > 35 && $imc <= 39.9){
                echo"<span style='color:#CD5C5C';>Voce esta com Obesidade Grau II";
            }elseif($imc > 40){
                echo"<span style='color:#DC143C';>Voce esta com Obesidade Grau III (Mórbida)";
            }
        ?>
    </div>
</body>
</html>