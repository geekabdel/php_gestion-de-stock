<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chercher</title>
    <style>
    body {
        background-image: url(back2.png);
        background-size: cover;
    }

    header {
        margin: 100px auto;
        height: 550px;
        width: 620px;
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
        border-top: 3px solid #1e2836;
        border-radius: 20px;
        width: 600px;
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
        margin: 10px;
    }

    table {
        border-bottom: 4px solid blue;
        text-align: center;
        margin: auto;
        border-radius: 10px;
    }

    table th {
        border-bottom: 4px solid blue;
        border-radius: 10px;
    }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <h1>Choisir une action</h1>
        <nav>
            <ul>
                <a href="ajouter.php">Ajouter Produit</a>
                <a href="chercher.php">Chercher Produit</a>
                <a href="lister.php">Lister les produits</a>
            </ul>
        </nav>
        <br>
        <form method="POST" method="GET">
            <h1>Rechercher un Produit</h1>
            <tr>
                <td><label>Mot Clée :</label></td>
                <td><input type="text" name="search"></td>
            </tr>
            <div class="send">
                <input type="submit" value="chercher"><input type="reset" value="annuler">
            </div>


            <?php 
            include "connect.php";

            $reponse = $mysqli->query('select * from produit');
            echo ("<table border >");

            $sr = isset($_POST['search']) ? $_POST['search'] : '';
            
            if (isset($_POST['search'])) {
                
                echo 
                "<tr>
                <th>Catégorie</th>
                <th>Réf</th>
                <th>Nom</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Modifier / Suprimer</th>
                </tr>";

            }
            $i = 0;
            
            while ($donnees = $reponse->fetch_row())
            {
                if ($sr == $donnees[0] || $sr == $donnees[1] || $sr == $donnees[2] || $sr == $donnees[3] || $sr == $donnees[4]) {
                echo 
                "<tr><td>".$donnees[0]."</td>"
                ."<td>".$donnees[1]."</td>"
                ."<td>".$donnees[2]."</td>"
                ."<td>".$donnees[3]."</td> "
                ."<td>".$donnees[4]."</td>"
                ."<td><a href='modifier.php?ref=$donnees[1]'>modifier</a>
                 |<a href='supprimer.php?ref=$donnees[1]'>suprimer</a></td></tr>"
                
                ;$i++;}
            }
            echo "Le resultat contient :  ".$i." produit(s)";
            echo ("</table>");
            $mysqli->close();
            ?>

        </form>
    </header>
</body>

</html>