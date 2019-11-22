<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'events',
    'action' => 'index'
  ),
  'search' => array(
    'controller' => 'events',
    'action' => 'search'
  ),
  'add' => array(
    'controller' => 'events',
    'action' => 'add'
  ),
  'detail' => array(
    'controller' => 'events',
    'action' => 'detail'
  )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();