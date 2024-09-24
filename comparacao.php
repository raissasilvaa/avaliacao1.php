<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroA = $_POST['numeroA'];
    $numeroB = $_POST['numeroB'];

    // Comparação dos números
    if ($numeroA > $numeroB) {
        $resultado = "O número A ($numeroA) é maior que o número B ($numeroB).";
    } elseif ($numeroA < $numeroB) {
        $resultado = "O número A ($numeroA) é menor que o número B ($numeroB).";
    } else {
        $resultado = "O número A ($numeroA) é igual ao número B ($numeroB).";
    }
} else {
    $resultado = "Nenhum número foi fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de A e B</title>
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
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }

        .return-btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .return-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Resultado da Comparação</h1>
    <div class="resultado">
        <p><?php echo htmlspecialchars($resultado); ?></p>
    </div>

    <a href="index.html" class="return-btn">Voltar à página principal</a>
</div>

</body>
</html>
