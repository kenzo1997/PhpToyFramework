<?php

class Request {
  private $params = [];
  public $body;

  public function __construct() {
    $this->body = $_POST;
  }

  public function setParams($name, $value) {
    $this->params[$name] = $value;
  }

  public function getParam($name) {
    return $this->params[$name];
  }

  public function getParams() {
    return $this->params;
  }
}

?>
