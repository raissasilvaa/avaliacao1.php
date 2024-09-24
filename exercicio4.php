<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);
    $operacao = $_POST['operacao'];
    $resultado = '';
    
    // Verifica qual operação realizar
    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            $mensagem = "O resultado da soma de $numero1 + $numero2 é $resultado.";
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            $mensagem = "O resultado da subtração de $numero1 - $numero2 é $resultado.";
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            $mensagem = "O resultado da multiplicação de $numero1 * $numero2 é $resultado.";
            break;
        case 'divisao':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $mensagem = "O resultado da divisão de $numero1 ÷ $numero2 é $resultado.";
            } else {
                $mensagem = "Erro: Divisão por zero não é permitida.";
            }
            break;
        default:
            $mensagem = "Operação inválida.";
            break;
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
    <title>Resultado da Calculadora</title>
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
    <h1>Resultado da Calculadora</h1>
    <div class="resultado">
        <?php
        echo $mensagem;
        ?>
    </div>
    <a href="index.html" class="return-btn">Voltar à página principal</a>
</div>

</body>
</html>
