<?php


class Core {
    private $uriArray;

    public function __construct() {
        $this->uriArray = explode('/', $_SERVER['REQUEST_URI']);
    }

    public function __destruct() {

    }

    public function t() {

    }

}
