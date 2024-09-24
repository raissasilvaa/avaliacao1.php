<?php
// Conexão com o banco de dados MySQL
$conn = new mysqli("localhost", "root", "", "sistema_alunos");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o campo "nome" está presente para identificar que é um cadastro de aluno
if (isset($_POST['nome'])) {
    // Receber os dados do formulário de cadastro
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $curso_horas = $_POST['curso_horas'];
    $carga_horaria = $_POST['carga_horaria'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
            VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', '$carga_horaria')";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar aluno: " . $conn->error;
    }
} 
// Verificar se o campo "nova_carga" está presente para identificar que é uma atualização de carga horária
elseif (isset($_POST['nova_carga'])) {
    // Receber os dados do formulário de atualização de carga horária
    $matricula = $_POST['matricula'];
    $nova_carga = $_POST['nova_carga'];

    // Consultar a carga horária atual do aluno
    $sql = "SELECT carga_horaria FROM alunos WHERE matricula = '$matricula'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
