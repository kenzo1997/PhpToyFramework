<?php
declare(strict_types=1);
namespace lib\controller;

class Request {
  private $params = [];
  public $body;

  public function __construct() {
    $this->body = $_POST;
  }

  public function setParams($name, $value) {
    if($name==null or $name=="")
      throw new \Exception('param name can not be empty or null');

    $this->params[$name] = $value;
  }

  public function getParam($name) {
    if($name==null or $name=="")
      throw new \Exception('param name can not be empty or null');
    else if(!array_key_exists($name, $this->params))
      throw new \Exception('param key does not exsits: ' . $name);

    return $this->params[$name];
  }

  public function getParams() {
    return $this->params;
  }
}

?>
