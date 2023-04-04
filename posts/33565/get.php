<?php
class BaseClass {
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    function __get($name) {
        return "aaa";
    }
}

$a = new BaseClass("ZQJ");
echo($a->name);