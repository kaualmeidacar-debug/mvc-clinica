<?php

//A resposta será enviada em formato JSON
header("Content-Type: application/json; charset=utf-8");

//Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); //405 - método não permitido

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Método não permitido, esperava GET"
    ]);

    exit;
}

// Recebe os dados enviados pelo formulário
$crmMedico = trim($_POST['crmMedico']);
$cpfCliente = trim($_POST['cpfCliente']);
$data = trim($_POST['data']);
$horario = trim($_POST['horario']);

// Valida os campos obrigatórios 
if ($crmMedico === "" || $cpfCliente === "" || $data === "" || $horario === "") {
    http_response_code(400);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);

    exit;
}

// -------->>> TODO: Aqui seria o banco de dados 

//Simulando  retornar  sucesso 
http_response_code(200);

echo json_encode([
    "sucesso" => true,
    "mensagem" => "Médico cadastrado com sucesso!",
    "medico" => [
        "crmMedico" => $crmMedico,
        "cpfCliente" => $cpfCliente,
        "data" => $data,
        "horario" => $horario,
        
    ]
]);
?>