<?php

class Response {
    private $date;

    public function __construct() {
      $this->date = new DateTime();
    }

    public function sendStatus($value) {
      $data = [
        'success' => true,
        'method' => $_SERVER['REQUEST_METHOD'],
        'status' => $status,
        'timestamp' => $this->date->getTimestamp(),
        'status' => $value
      ];

      echo json_encode($data);
    }

    public function send($value, $status=200) {
      $data = [
        'success' => true,
        'method' => $_SERVER['REQUEST_METHOD'],
        'status' => $status,
        'timestamp' => $this->date->getTimestamp(),
        'data' => $value
      ];

      echo json_encode($data);
    }

    public function redirect() {
      //TODO
    }

    public function error($msg, $status=502) {
      $data = [
        'success' => false,
        'method' => $_SERVER['REQUEST_METHOD'],
        'status' => $status,
        'timestamp' => $this->date->getTimestamp(),
        'message' => $msg
      ];

      echo json_encode($data);
    }
}

?>
