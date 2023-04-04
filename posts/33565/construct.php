<?php
class BaseClass {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
}

$a = new BaseClass("ZQJ");
print_r($a->name);