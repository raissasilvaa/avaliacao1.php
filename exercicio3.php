<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = intval($_POST['numero']);

    if ($numero < 0) {
        // Redireciona de volta com mensagem de erro se o número for negativo
        header("Location: fatorial.html?erro=O número deve ser positivo");
        exit();
    }

    // Função para calcular o fatorial
    function calcularFatorial($num) {
        if ($num === 0 || $num === 1) {
            return 1;
        }
        return $num * calcularFatorial($num - 1);
    }

    // Calcula o fatorial do número
    $resultado = calcularFatorial($numero);

    // Redireciona de volta para a página principal com o resultado via GET
    header("Location: fatorial.html?resultado=$resultado");
    exit();
}
?>

}
