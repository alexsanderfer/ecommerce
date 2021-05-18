<?php
use Hcode\Page;

// Rotas
$app->get('/', function () {
    $page = new Page();
    $page->setTpl("index");
});
