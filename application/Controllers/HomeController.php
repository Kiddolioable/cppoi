<?php

  namespace Application\Controllers;

  class HomeController extends BaseController {

    public function index($request, $response) {
      return $this->container->view->render($response, 'home.html');
    }

  }

?>
