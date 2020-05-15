<?php


class fileUploader
{
    private $file;

    public function __construct($name, $mode) {
        if($name == null || $name == "") return null;
        if($mode == null || $mode == "") return null;
        if(!file_exists($name)) return null;

        $this->file = fopen($name, $mode) or die("Unable to open file");
    }

    public function __destruct() {
        fclose($this->file);
    }

    public function read() {
        return fread($this->file, filesize($this->file));
    }

    public function readLine() {
        return fgets($this->file);
    }

    public function readChar() {
        return fgetc($this->file);
    }

    public function write($txt) {
        fwrite($this->file, $txt);
    }


}