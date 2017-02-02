<?php

session_start();
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Respect\Validation\Validator as v;

require "bootstrap.php";

$app = new \Slim\App([
    'settings'=>[
        'displayErrorDetails' => true
    ]
]);

$app->get('/', function (Request $req, Response $resp){
    return $resp->getBody()->write("hi");
});