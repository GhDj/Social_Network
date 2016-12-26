<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 24/12/2016
 * Time: 10:37
 */
include 'Connect.php';
include 'User.php';

$user=new User();
$user->login($_POST['mail'],md5($_POST['password']));

?>