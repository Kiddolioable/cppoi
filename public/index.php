<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

//Registering Twig as service on Slim container
// Create app
$app = new \Slim\App();

/*
// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig( __DIR__ . '/templates/', [
        'cache' => __DIR__ . 'tmp/views'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};
*/

// Add route callbacks
$app->get('/', function ($request, $response, $args) {
    include('navbar.php');
});

$app->run();

?>
