<?php
  //Loads the session and all application dependencies
  session_start();

  require __DIR__ . '/../../vendor/autoload.php';

  $app = new \Slim\App([

  'settings' => [

         'displayErrorDetails' => true,

  ]

  ]);

  //Defining container attributes
  require __DIR__ . '/../Controllers/Route.php';

  $container = $app->getContainer();

  $container['view'] = function ($container) {

     $view = new \Slim\Views\Twig(__DIR__ . '/../views', [

         'cache' => false,

     ]);

     $view->addExtension(new \Slim\Views\TwigExtension(

         $container->router,

         $container->request->getUri()

     ));

     return $view;

  };

  $container['HomeController'] = function ($container) {
    return new \Application\Controllers\HomeController($container);
  };
?>
