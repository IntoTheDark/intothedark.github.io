<?php
class BaseClass {
    public $name;
    public $sex;
    function __construct($name,$sex) {
        $this->name = $name;
        $this->sex = $sex;
    }
    function __invoke()
    {
        echo "111";
    }
}

$a = new BaseClass("ZQJ","男");
$a();