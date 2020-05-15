<?php namespace sql;

class SQLBuilder {
    private $sql = "";

    public function __construct() {

    }

    public function __destruct() {

    }

    private function sanitizeData($data) {

    }

    public function SELECT($values) {
        if($values == null ) {
            $this->sql = "SELECT * ";
            return $this;
        }

        $this->sql = "SELECT ";

        foreach($values as $val) {
            $this->sql .= ($val . ', ');
        }

        return $this;
    }

    public function FROM($tableName) {
        $this->sql .= ('FROM ' . $tableName);
        return $this;
    }

    public function INNER_JOIN($tableName){
        $this->sql .= " INNER JOIN " . $tableName;
    }

    public function LEFT_OUTER_JOIN($tableName){

    }

    public function RIGHT_OUTER_JOIN($tableName){

    }

    public function USING($joinVar) {

    }

    public function ON($joinVar1, $joinVar2) {

    }

    public function WHERE() {
        return $this;
    }

    public function GROUP_BY() {
        return $this;
    }

    public function HAVING() {
        return $this;
    }

    public function ORDER_BY($field) {
        $this->sql .= ("ORDER BY " . $field);
        return $this;
    }

    public function LIMIT() {
        return $this;
    }
}