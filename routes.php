<?php

$pagValidas = [

    "Medico" => __DIR__ . "/views/medico.php",
    "Cliente" => __DIR__ . "/views/cliente.php",
    "Agenda" => __DIR__ . "/views/agenda.php",
];

$page = $_GET["page"] ?? "Medico";

if (array_key_exists($page, $pagValidas)) {
    require $pagValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}

?>