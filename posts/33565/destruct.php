<?php
class BaseClass {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
    function __destruct() {
        echo("该对象被销毁");
    }
}

$a = new BaseClass("ZQJ ");
echo($a->name);