<?php
declare(strict_types=1);
namespace lib\router;

/**
 * Router
 *
 * @package  router
 * @author   Kenzo Coenaerts
 */
class Router {
  private $routes = [];
  private $params = [];

  public function __construct() {
    $this->routes['/'] = 'IndexController';
  }

  /**
  * set default route
  *
  * @param string path
  **/
  public function default($path) {
    $class = ucfirst($path) . 'Controller';
    $this->routes['/'] = $class;
    //new $class()
  }

  /**
  * add route
  *
  * @param string path
  **/
  public function route($fullPath, $middelwares=[]) {
    if($fullPath == null && $fullPath == "")
      throw new RouterException('Path can not be nulll or empty');

    $parts = explode('/', $fullPath);
    $name = array_shift($parts);

    foreach ($parts as $value ) {
      array_push($this->params, $value);
    }

    if(!array_key_exists($name, $this->routes)) {
      $class = ucfirst($name) . 'Controller';
      //$controller = new $class();
      $this->routes[$name] = $class;
    }
  }

  public function getRouteParams(){
    return $this->params;
  }

  public function get($path = '') {
    if($path == '')
      return $this->routes['/'];
    else if(!array_key_exists($path, $this->routes))
      echo 'error path';

    return $this->routes[$path];
  }
}

?>
