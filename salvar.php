<?php

//Recebe dados do form e salvar no database

$db = new SQLite3 (__DIR__ . "/banco/livros.db");

$tabela = "CREATE TABLE IF NOT EXISTS livros(titulo TEXT, autor TEXT)";

try {
    $db->exec ($tabela);
} catch (Exception $e) {
    echo $e->getMessage();
}

$db->close();