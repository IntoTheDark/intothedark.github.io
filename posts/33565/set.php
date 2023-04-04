<?php
class BaseClass {
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    function __set($property, $value) {
        $this->$property = $value;
    }
    function show() {
        return $this->name;
    }
}

$a = new BaseClass("ZQJ");
$a->name = "aaa";
echo($a->show());