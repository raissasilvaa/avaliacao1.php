<?php
// Conexão com o banco de dados MySQL
$conn = new mysqli("localhost", "root", "", "sistema_alunos");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber os dados do formulário
$matricula = $_POST['matricula'];
$nova_carga = $_POST['nova_carga'];

// Consultar a carga horária atual do aluno
$sql = "SELECT carga_horaria FROM alunos WHERE matricula = '$matricula'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Aluno encontrado, somar nova carga horária
    $row = $result->fetch_assoc();
    $carga_atual = $row['carga_horaria'];
    $nova_carga_total = $carga_atual + $nova_carga;

    // Atualizar a carga horária no banco de dados
    $sql_update = "UPDATE alunos SET carga_horaria = $nova_carga_total WHERE matricula = '$matricula'";
    
    if ($conn->query($sql_update) === TRUE) {
        echo "Carga horária atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar carga horária: " . $conn->error;
    }
} else {
    echo "Aluno não encontrado!";
}

// Fechar conexão
$conn->close();
?>
