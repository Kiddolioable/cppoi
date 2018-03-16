<?php

  $app->get('/home', function ($request, $response) {

     return $this->view->render($response, 'home.twig');

  });

  $app->get('/test', function ($request, $response) {
    return $this->view->render($response, '/templates/navbar.php');
  });

  $app->get('/new', 'HomeController:index');

?>
