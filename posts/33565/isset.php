<?php
class BaseClass {
    public $id;
    private $name;
    function __construct($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }
    function __isset($value) {
        echo("no");
    }
}

$a = new BaseClass(1,"ZQJ");
echo(isset($a->id));
echo(isset($a->name));