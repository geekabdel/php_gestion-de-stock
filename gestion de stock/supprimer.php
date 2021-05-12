<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter une produit</title>
    <style>
    body {
        background-image: url(back2.png);
        background-size: cover;
    }

    header {
        margin: 100px auto;
        height: 400px;
        width: 520px;
        text-align: center;
        background-color: #fff;
        padding: 10px;
        border-top: 5px solid #1c48e8;
        border-radius: 20px;
        font-family: 'Raleway', sans-serif;
    }

    a {
        font-size: 20px;
        font-weight: bold;
        padding-left: 5px;
        margin: auto;
    }

    form {
        border-top: 3px solid #1e2836;
        border-radius: 20px;
        width: 150px;
        background-color: #3d61b2;
        text-align: center;
        margin: auto;
        font-weight: bold;
        padding: 5px;
    }

    .send input {
        background-color: chartreuse;
        height: 30px;
        width: 100px;
        font-size: 20px;
        border-radius: 20px;
        text-align: center;
        margin: 15px auto;
    }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Bienvenue administrator</h1>
        <h1>Choisir une action</h1>
        <nav>
            <ul>
                <a href="ajouter.php">Ajouter Produit</a>
                <a href="chercher.php">Chercher Produit</a>
                <a href="lister.php">Lister les produits</a>
            </ul>
        </nav>
        <br>
        <form method="POST">
            <?php 
            
            include "connect.php";
            $ref = $_GET['ref'];
            
            $reponse = $mysqli->query("SELECT cat,ref,nom,marque,prix FROM produit WHERE ref = '$ref'");

            if (isset($_POST['supprimer'])) {
            
            $reponse = $mysqli->query("DELETE FROM produit WHERE produit.ref='$ref'");
            
            
            if ($reponse) echo '<script type="text/javascript">alert("Le Produit est Supprimer");window.location = "chercher.php";</script>';
            else echo '<script type="text/javascript">alert("Error Suppresion");window.location = "chercher.php";</script>';
            }
            $mysqli->close();
            ?>
            <div class=" send">
                <input type="submit" name="supprimer" value="supprimer">
            </div>
        </form>
    </header>
</body>

</html>