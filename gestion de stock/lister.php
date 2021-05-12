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
        border-top: 5px solid #1e2836;
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
        <form method="POST">
            <h1>Lister De Tout les produit:</h1>
            <tr>
                <td>
                    <input type="radio" name="keyword" value="cat">
                    <label>Catégorie</label>
                </td>
                <td>
                    <input type="radio" name="keyword" value="ref">
                    <label>Réf</label>
                </td>
                <td>
                    <input type="radio" name="keyword" value="nom">
                    <label>Nom</label>
                </td>
                <td>
                    <input type="radio" name="keyword" value="marque">
                    <label>Marque</label>
                </td>
                <td>
                    <input type="radio" name="keyword" value="prix">
                    <label>Prix</label>
                </td>
            </tr>
            <div class="send">
                <input type="submit" value="Trier">
            </div>

            <table>

                <?php 
        include "connect.php";
        
        
        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        echo "Trier Par :  ".$keyword;
        
        
        $reponse = $mysqli->query("SELECT * from produit");

        if ($keyword == 'cat') {
            $reponse = $mysqli->query('SELECT * from produit ORDER BY cat');
        } else if ($keyword == 'ref')
            $reponse = $mysqli->query('SELECT * from produit ORDER BY ref');
          else if ($keyword == 'nom')
            $reponse = $mysqli->query('SELECT * from produit ORDER BY nom');
        else if ($keyword == 'marque')
            $reponse = $mysqli->query('SELECT * from produit ORDER BY marque');
        else if ($keyword == 'prix')
            $reponse = $mysqli->query('SELECT * from produit ORDER BY prix');

        echo ("<table border width=100%>");
        echo 
        "<tr>
        <th>Catégorie</th>
        <th>Réf</th>
        <th>Nom</th>
        <th>Marque</th>
        <th>Prix</th>
        </tr>";

        while ($donnees = $reponse->fetch_row())
        {

            echo 
            "<tr><td>".$donnees[0]."</td>"
            ."<td>".$donnees[1]."</td>"
            ."<td>".$donnees[2]."</td>"
            ."<td>".$donnees[3]."</td> "
            ."<td>".$donnees[4]."</td>"
            //."<td><a href='modifier.php'>modifier</a> |<a href='#'>suprimer</a></td></tr>"
            ;
        }
        echo ("</table>");
        $mysqli->close();
        ?>
            </table>
        </form>
    </header>
</body>

</html>