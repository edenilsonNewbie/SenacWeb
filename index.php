<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    $inteiro1 = 42;
    $inteiro2 = 79;
    $texto = "Oĺá, ";
    $fracao = 2.3;
    
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $inteiro2;
    $multi =  $inteiro1 * $inteiro2;
    $sub =  $inteiro1 - $inteiro2;
    $olaMundo = $texto . $name;
    
    echo "<p>Soma: " . $soma . "</p>";
    echo "<p>Divisão: " . $divisao . "</p>";
    echo "<p>Multiplica: " . $multi . "</p>";
    echo "<p>Subtração: " . $sub . "</p>";
    echo "<p>" . $olaMundo . "</p>";
    
    header('Content-Type: text/html; charset=UTF-8');
    echo '<html>';
    
});

$app->run();