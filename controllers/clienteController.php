<?php 

header("Content-Type: application/json; charset=utf-8");

if($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Método não permitido, esperava GET"
    ]);

    exit;
}

$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);

if ($nome === "" || $cpf === "" || $email === "" || $telefone === "") {
    http_response_code(400);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);

    exit;
}


    http_response_code(200);

    echo json_encode([

        "sucesso" => true,
        
    "mensagem" => "Médico cadastrado com sucesso!",
    "medico" => [

        "nome" => $nome,
        "cpf" => $cpf,
        "email" => $email,
        "telefone" => $telefone,

    ]
]);

?>