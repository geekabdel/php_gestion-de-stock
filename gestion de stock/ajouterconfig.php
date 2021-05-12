<?php 

include "connect.php";

extract($_POST);
$sql = "INSERT INTO produit VALUES ('".$cat."','".$ref."','".$nom."','".$marque."',$prix)";
$result = $mysqli->query($sql);

if(!$result){
    echo '<script type="text/javascript">alert("Duplicate data");history.go(-1);</script>';
    die("le produit existe déjà : ".$mysqli->error);
}

if($result){
    echo '<script type="text/javascript">alert("Data added");window.location = "ajouter.php";</script>';
}

$mysqli->close();
?>