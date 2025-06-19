<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
    case '/home':
        require __DIR__ . '/views/home.php';
        break;

    case '/about':
        require __DIR__ . '/controller/about.php'; // Chama o controller antes da view
        require __DIR__ . '/views/about.php'; // Chama a view :)
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}