<?php

use Hcode\DB\Sql;

require_once("vendor/autoload.php");

$app = new \Slim\Slim();
$app->config('debug', true);
$app->get('/', function () {
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    echo "Tudo funcionando: Ok";
    var_dump($results);
});

$app->run();
