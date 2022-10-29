<?php

use App\Controller\DefaultController;
use App\Controller\ProductController;

$request = $_SERVER["REQUEST_URI"];

$controllers = [
    "product" => new ProductController(),
    "default" => new DefaultController()
];

$parts = explode("/", $request);
$controllerAlias = $parts[1] ?? null;
$controllerMethod = $parts[2] ?? null;

$controller = $controllers[$controllerAlias] ?? $controllers["default"];

if (isset($controllers[$controllerAlias])) {

    if ($controllerMethod) {
        $controller->$controllerMethod();
        exit();
    }
}

$controller->{"index"}();