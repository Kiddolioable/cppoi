<?php

  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  require '../../vendor/autoload.php';
  require __DIR__ . '../../views/app.php';

  $app->run();

?>
