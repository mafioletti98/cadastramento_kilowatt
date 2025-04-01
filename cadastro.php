<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
</head>
<body>

    <p>
        <a href="index.php">Voltar para Home</a>
    </p>

    <h2>Dados cadastrados!</h2>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $dados = $_POST;
            $calc = $dados['watts'] / 1000;
            $calcday = $calc * $dados['numhoras'];
            $calcmonth = $calcday * $dados['numdias'];
            $calcmoney = $calcmonth * $dados['kilowatt'];


            if (!empty($dados['aparelho'] &&
                !empty($dados['watts'] &&
                !empty($dados['numdias'] && 
                !empty($dados['numhoras'] && 
                !empty($dados['kilowatt'])))))) {

                    echo "Aparelho: " . $dados['aparelho'] . "<br>";
                    echo "Watts: " . $dados['watts'] . "<br>";
                    echo "Numero de dias ligado: ". $dados["numdias"] . "<br>";
                    echo "Numero de horas ligado: ". $dados["numhoras"] . "<br>";
                    echo "KiloWatt por hora: " . $dados['kilowatt'] . "<br>";
                    
                    echo "Consumo diario do aparelho: " . number_format($calcday, 2, ',', '.') . " kWh<br>";
                    echo "Consumo mensal do aparelho: " . number_format($calcmonth, 2, ',', '.') . " kWh<br>";
                    echo "Consumo do aparelho em R$: R$ " . number_format($calcmoney, 2, ',', '.') . "<br>";

            } else {
                echo "<h3>Preencha todos os dados do formulario!</h3>";
            } 

            if ($calcmoney <= 5) {
                echo "<strong>Consumo Baixo!</strong>";
            } else if ($calcmoney >= 6 && $calcmoney <= 10) {
                echo "<strong>Consumo Moderado!</strong>";
            } else if ($calcmoney > 10) {
                echo "<strong>Consumo Alto!</strong>";
            }

        }
    ?>
    
</body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
</head>
<body>

    <p>
        <a href="index.php">Voltar para Home</a>
    </p>

    <h2>Dados cadastrados!</h2>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $dados = $_POST;
            $calc = $dados['watts'] / 1000;
            $calcday = $calc * $dados['numhoras'];
            $calcmonth = $calcday * $dados['numdias'];
            $calcmoney = $calcmonth * $dados['kilowatt'];


            if (!empty($dados['aparelho'] &&
                !empty($dados['watts'] &&
                !empty($dados['numdias'] && 
                !empty($dados['numhoras'] && 
                !empty($dados['kilowatt'])))))) {

                    echo "Aparelho: " . $dados['aparelho'] . "<br>";
                    echo "Watts: " . $dados['watts'] . "<br>";
                    echo "Numero de dias ligado: ". $dados["numdias"] . "<br>";
                    echo "Numero de horas ligado: ". $dados["numhoras"] . "<br>";
                    echo "KiloWatt por hora: " . $dados['kilowatt'] . "<br>";
                    
                    echo "Consumo diario do aparelho: " . number_format($calcday, 2, ',', '.') . " kWh<br>";
                    echo "Consumo mensal do aparelho: " . number_format($calcmonth, 2, ',', '.') . " kWh<br>";
                    echo "Consumo do aparelho em R$: R$ " . number_format($calcmoney, 2, ',', '.') . "<br>";

            } else {
                echo "<h3>Preencha todos os dados do formulario!</h3>";
            }
        }
    ?>
    
</body>
>>>>>>> 6854c8873bef0757b5777a3f48ee0acd08a42e5d
</html>