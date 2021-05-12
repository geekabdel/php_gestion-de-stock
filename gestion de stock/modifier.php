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
    }

    form {
        border-top: 3px solid blue;
        border-radius: 20px;
        width: 300px;
        background-color: #3d61b2;
        text-align: left;
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
        margin: 15px;
    }

    table {
        margin: auto;
        border-radius: 10px;
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
    
    
            echo ("<table border>");
    
            while ($donnees = $reponse->fetch_row())
            {
    
                echo
            "<tr><th>Catégorie</th>"
            ."<td><input type='text' name='cat' value='$donnees[0]'></td></tr>"
            ."<tr><th>Nom</th>"
            ."<td><input type='text' name='nom' value='$donnees[2]'></td></tr>"
            ."<tr><th>Marque</th>"
            ."<td><input type='text' name='marque' value='$donnees[3]'></td></tr>"
            ."<tr><th>Prix</th>"
            ."<td><input type='text' name='prix' value='$donnees[4]'></td></tr>";
            }
            echo ("</table>");

            if (isset($_POST['modifier'])) {
            
            $cat = $_POST['cat'];
            $nom = $_POST['nom'];
            $marque = $_POST['marque'];
            $prix = $_POST['prix'];
            $reponse = $mysqli->query("UPDATE produit SET cat='$cat',nom='$nom',marque='$marque',prix=$prix WHERE ref='$ref'");
            
            if ($reponse) echo "Le Produit ". $nom.$marque.$ref." est modifié avec succé" ; else echo "error";
               
            }
            $mysqli->close();
            ?>
            <div class=" send">
                <input type="submit" name="modifier" value="modifier"><input type="reset" value="Annuler">
            </div>
        </form>
    </header>
</body>

</html>