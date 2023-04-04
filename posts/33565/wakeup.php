<?php
class BaseClass {
    public $name;
    public $sex;
    function __construct($name,$sex) {
        $this->name = $name;
        $this->sex = $sex;
    }
    function __wakeup()
    {
        $this->sex = "女";
    }
}

$a = new BaseClass("ZQJ","男");
$a_ser = serialize($a);
echo $a_ser;

echo PHP_EOL;

$b = unserialize($a_ser);
$b_ser = serialize($b);
echo $b_ser;