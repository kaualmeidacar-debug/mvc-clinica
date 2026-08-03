<?php

$pagValidas = [

    "medico" => __DIR__ . "/views/medico.php",
    "cliente" => __DIR__ . "/views/cliente.php",
    "agenda" => __DIR__ . "/views/agenda.php",
];

$page = $_GET["page"] ?? "Medico";

if (array_key_exists($page, $pagValidas)) {
    require $pagValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}

?>