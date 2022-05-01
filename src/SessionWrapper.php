<?php
declare(strict_types=1);

/**
 * SessionWrapper
 *
 * @package
 * @author   Kenzo Coenaerts
 * @link
 */
class SessionWrapper
{
    public $sessions = $_SESSION;

    public function __construct()
    {
        if(session_status() == PHP_SESSION_NONE)  session_start();
    }

    /**
    * Attempt to create a session
    *
    * @param string key
    * @param any value
    * @return void
    * @throws SessionException
    */
    //public function create($key, $value) {
    public function __set($key, $value) {
        if($key == null) throw new Exception("Trying to create session with an invalid session key, key: " . $key, 1);

        if(session_status() == PHP_SESSION_ACTIVE)
            $this->sessions[$key] = $value;
    }

    public function __isset($key) {
      return isset($this->sessions[$key]);
    }

    /**
    * Attempt to get session value
    *
    * @param string key
    * @return any value
    * @throws SessionException
    */
    //public function get($key)
    public function __get($key) {
        if (!isset($_SESSION[$key])) return null;
        if(!session_status() == PHP_SESSION_ACTIVE) return null;

        return $this->sessions[$key];
    }

    public function __destruct()
    {
        if(session_status() == PHP_SESSION_ACTIVE) session_destroy();
    }
}
