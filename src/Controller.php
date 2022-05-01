<?php
abstract class Controller {
  private $middelwares = [];

  public function setMiddelware($middleware) {
    if($middleware == null) throw new Exception('nope');
    array_push($this->middelwares, $middleware);
  }

  public abstract function getAll($request, $response);
  public abstract function get($request, $response);
  public abstract function add($request, $response);
  public abstract function uodate($request, $response);
  public abstract function remove($request, $response);
}
?>
