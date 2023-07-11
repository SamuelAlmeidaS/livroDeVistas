<?php 
require('./config.php');
$lista = [];

$sql= $pdo->query("SELECT * FROM livro_banco");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Deixe aqui sua menssagem</h1>
<form action="index_action.php" method="POST">
    <label>
        Nome:<br/>
        <input type="text" name="name">
    </label><br><br>
    <textarea name="text" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
 foreach($lista as $item){
    echo "<strong>".$item['name']."</strong><br>";
    echo "<em>".$item['text']."</em><br>";
 }

?>
