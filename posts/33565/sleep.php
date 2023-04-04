<?php
class BaseClass1 {
    public $name;
    public $sex;
    function __construct($name,$sex) {
        $this->name = $name;
        $this->sex = $sex;
    }
}
class BaseClass2 {
    public $name;
    public $sex;
    function __construct($name,$sex) {
        $this->name = $name;
        $this->sex = $sex;
    }
    function __sleep() {
        return array('name');
    }
}

$a = new BaseClass1("ZQJ","男");
$b = new BaseClass2("ZQJ","男");
echo(serialize($a));
echo PHP_EOL;
echo(serialize($b));