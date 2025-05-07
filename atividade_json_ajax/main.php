<?php
$dados = [
  'Nome' => $_POST['nome'] ?? '',
  'Sobrenome' => $_POST['sobrenome'] ?? '',
  'E-mail' => $_POST['email'] ?? '',
  'Período' => $_POST['periodo'] ?? '',
  'Semestre' => $_POST['semestre'] ?? '',
  'Curso' => $_POST['curso'] ?? [],
  'Experiencia' => $_POST['experiencia'] ?? ''
];

echo json_encode($dados);









/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Função para limpar e validar os dados recebidos
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Coleta e processa os dados do formulário
    $nome = test_input($_POST["nome"]);
    $sobrenome = test_input($_POST["sobrenome"]);
    $email = test_input($_POST["email"]);
    $periodo = test_input($_POST["periodo"]);
    $semestre = test_input($_POST["semestre"]);
    $experiencia = test_input($_POST["experiencia"]);

    // Para o campo de cursos (checkboxes), verifica se algo foi selecionado
    if (isset($_POST['curso']) && is_array($_POST['curso'])) {
        $cursos = array_map('test_input', $_POST['curso']); // Limpa cada valor do array
        $cursos_str = implode(", ", $cursos); // Converte o array em string para exibição
    } else {
        $cursos_str = "Nenhum curso selecionado";
    }

    // Monta a resposta (pode ser HTML ou JSON)
    $resposta = "<h2>Dados do Aluno:</h2>
                    <p>Nome: $nome</p>
                    <p>Sobrenome: $sobrenome</p>
                    <p>Email: $email</p>
                    <p>Período: $periodo</p>
                    <p>Semestre: $semestre</p>
                    <p>Cursos: $cursos_str</p>
                    <p>Experiência: $experiencia</p>";

    echo $resposta; // Envia a resposta para o script JavaScript que fez a requisição
  *-}*/


