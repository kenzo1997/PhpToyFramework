<?php namespace wrapper;

class SessionWrapper
{
    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE)  session_start();
    }

    public function create($key, $value) {
        if($key == null) return null;

        if(session_status() == PHP_SESSION_ACTIVE)
            $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        if (!isset($_SESSION[$key])) return null;

        if(!session_status() == PHP_SESSION_ACTIVE) return null;
        return $_SESSION[$key];
    }

    public function __destruct()
    {
        if(session_status() == PHP_SESSION_ACTIVE) session_destroy();
    }
}

