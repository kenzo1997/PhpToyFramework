<?php namespace wrapper;

class cookieWrapper {
    public function __construct($name, $value, $time) {
        if($name == null || $value == null  || $time == null ) return null;
        setcookie($name, $value, time() + $time, "/");
    }

    public function __destruct($name) {
        if($name == null) return null;
        setcookie($name, "", time() - 3600);
    }

    public function get($name) {
        if($name == null ) return null;
        if(!isset($_COOKIE[$name])) return null;

        return $_COOKIE[$name];
    }

    public function  update($name, $value, $time) {
        if($name == null || $value == null  || $time == null ) return null;
        setcookie($name, $value, time() + $time, "/");
    }
}