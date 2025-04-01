<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa - PHP</title>
</head>
<body>
    
    <h1>Sistema de Processamento</h1>

    <form action="cadastro.php" method="post">
    
        <p>
            <label for="aparelho">Nome do aparelho: </label>
            <input type="text" name="aparelho" required>
        </p>

        <p>
            <label for="watts">Consumo em Watts: </label>
            <input type="number" name="watts" step="any" required>
        </p>

        <p>
            <label for="numdias">Numero de dias que o aparelho e ligado por dia: </label>
            <input type="number" name="numdias" step="any" required>
        </p>

        <p>
            <label for="numhoras">Numero de horas que o aparelho ficara ligado por dia: </label>
            <input type="number" name="numhoras" step="any" required>
        </p>

        <p>
            <label for="kilowatt">Valor do kilowatt-hora: </label>
            <input type="number" name="kilowatt" step="any" required>
        </p>

        <p>
            <button type="submit">Verificar</button>
        </p>

    </form>
    
</body>
</html>
