<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    if ($login == "admin" && $password == "admin123")
    {
        header("Location:GestionProduits.php");
    }
    else {
        echo '<script type="text/javascript">alert("Password incorect");window.location = "index.php";</script>';      
    }
?>