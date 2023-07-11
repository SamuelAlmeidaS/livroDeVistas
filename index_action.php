<?php
require('config.php');

$name = filter_input(INPUT_POST, 'name');
$txt = filter_input(INPUT_POST, 'text');

if($name && $txt){
    $sql = $pdo->prepare("INSERT INTO livro_banco (name, text) VALUES (:name,:txt)");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":txt", $txt);
    $sql->execute();
    
} else {
    header('location: index.php');
    exit;
}

header('location: index.php');
exit;

?>

