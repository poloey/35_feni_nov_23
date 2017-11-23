<?php
require 'routes.php';
$purl =  parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($purl, '/');

if (array_key_exists($path, $routes))  {
  require $routes[$path];
}else {
  require 'views/notfound.view.php';
}
