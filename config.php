<?php 
$db_name = 'test';
$db_user = 'root';
$db_password = '';
$db_host = '127.0.0.1';

$pdo= new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);

?>