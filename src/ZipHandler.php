<?php

class ZipHandler
{
    private $zip;

    public function __construct($file) {
        if($file == null || $file == "") return null;
        $this->zip = zip_open($file);
    }

    public function __destruct() {
        zip_close($this->zip);
    }

    public function read() {
        return zip_read($this->zip);
    }
}