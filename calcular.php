<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = intval($_POST['numero']);
    $resultado = 1;

    if ($numero < 0) {
        header("Location: index.html?erro=Erro: Número deve ser não negativo.");
        exit();
    }

    // Cálculo do fatorial
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Fatorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .resultado {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .return-btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .return-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultado do Fatorial</h1>
    <div class="resultado">
        <?php
        echo "O fatorial de $numero é $resultado.";
        ?>
    </div>
    <a href="index.html" class="return-btn">Voltar à página principal</a>
</div>

</body>
</html>
