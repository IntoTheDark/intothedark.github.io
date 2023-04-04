<?php
class BaseClass {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
    function __call($funName,$args) {
        echo("该方法不存在：".$funName);
    }
}

$a = new BaseClass("ZQJ");
$a->getFlag();