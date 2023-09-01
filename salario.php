<!DOCTYPE html>
<html>
<head>
    <title>Média de Salários</title>
    <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
</head>
<body class="body-salario">
    <h1>Média de Salários dos Últimos 6 Meses</h1>
    
    <form method="post">
        <?php
        $salarios = [];
        for ($i = 1; $i <= 6; $i++) {
            echo "
                <h2>Mês $i</h2> \n 
                <label>Nome do Funcionário:</label> \n
                <input type='text' name='nome_$i'><br> \n
                <label>Cargo:</label> \n
                <input type='text' name='cargo_$i'><br> \n
                <label>Salário:</label> \n
                <input type='number' name='salario_$i'><br> \n
                <br>
            ";
        }
        ?>
        <button type="submit">Calcular Media</button>
    </form>

    <?php
    if ($_POST) {
        for ($i = 1; $i <= 6; $i++) {
            $salario = $_POST["salario_$i"];    
            $salarios[] = $salario;
        }

        $media = array_sum($salarios) / count($salarios);

        echo "<h2>Média Aritmética dos Salários:</h2>";
        echo "R$ " . number_format($media, 2, ',', '.');
    }
    ?>
</body>
</html>
