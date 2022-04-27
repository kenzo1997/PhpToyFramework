<?php
declare(strict_types=1);

/**
 * Core
 *
 * @package
 * @author   Kenzo Coenaerts
 */
class Core {
  private $router;

  public function __construct($router) {
    $this->router = $router;
  }

  /**
  * staring point of the project
  **/
  public function start() {
    $uri = explode('/', $_SERVER['REQUEST_URI']);
    $path = $uri[1];
  }
}
?>
