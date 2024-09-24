<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Par ou Ímpar</title>
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

        .resultado p {
            font-size: 16px;
            color: #555;
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
    <h1>Resultado</h1>
    <div class="resultado">
        <?php
        // Verifica se o formulário foi enviado via POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtém o número enviado pelo formulário
            $numero = intval($_POST['numero']);

            // Verifica se o número é par ou ímpar e exibe o resultado
            if ($numero % 2 == 0) {
                echo "<p>O número $numero é Par.</p>";
            } else {
                echo "<p>O número $numero é Ímpar.</p>";
            }
        } else {
            // Se não houve envio de formulário, redireciona para a página principal
            header('Location: index.php');
            exit();
        }
        ?>
    </div>

    <!-- Botão para voltar à página inicial -->
    <a href="index.html" class="return-btn">Voltar à página principal</a>
</div>

</body>
</html>
