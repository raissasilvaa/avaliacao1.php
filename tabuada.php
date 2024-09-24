<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    echo "<h1>Tabuada de $numero</h1>";
    echo "<table>";

    // Gera a tabuada do número fornecido
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
    }

    echo "</table>";
}
?>
<!-- Botão para voltar para a página principal -->
<a href="index.html" style="display: inline-block; margin-top: 20px; padding: 10px 15px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Voltar para a página principal</a>