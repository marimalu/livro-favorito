<?php

$uri = $_SERVER['REQUEST_URI'];

$rotas = require __DIR__ . "/rotas.php";

//$database = require __DIR__ . "/banco/livros.db";

foreach ($rotas as $rota => $arquivo) {
    if ($uri === $rota){
        include __DIR__ . $arquivo;
        exit();
    }
}

include __DIR__ . "/paginas/404.php";