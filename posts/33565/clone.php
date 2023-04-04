<?php
class BaseClass {
    public $name;
    public $sex;
    function __construct($name,$sex) {
        $this->name = $name;
        $this->sex = $sex;
    }
    function __clone()
    {
        echo "111";
    }
}

$a = new BaseClass("ZQJ","男");
$b = clone $a;