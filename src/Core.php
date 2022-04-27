<?php
include "Router.php";
include 'Request.php';
include 'Response.php';

/**
 * Core
 *
 * @package
 * @author   Kenzo Coenaerts
 */
class Core {
  public function __construct() {

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
