<?php
  $app->GET('/api/navbar', function(Request $request, Response $response) {
    include '../public/navbar.php';
  });
?>
