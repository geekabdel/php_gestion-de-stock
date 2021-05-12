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
        border-top: 3px solid #1e2836;
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
        margin: 20px;
    }

    table {
        color: #fff;
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
        <form action="ajouterconfig.php" method="POST">
            <table>
                <tr>
                    <td><label>Categories :</label></td>
                    <td>
                        <select name="cat" id="Categories">
                            <option value="PC">Ordinateur</option>
                            <option value="SR">serveur</option>
                            <option value="CL">cloud</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Ref :</label></td>
                    <td><input type="text" name="ref" required></td>
                </tr>
                <tr>
                    <td><label>Nom :</label></td>
                    <td><input type="text" name="nom" required></td>
                </tr>
                <tr>
                    <td><label>Marque :</label></td>
                    <td><input type="text" name="marque" required></td>
                </tr>
                <tr>
                    <td><label>Prix :</label></td>
                    <td><input type="number" name="prix" required></td>
                </tr>
            </table>
            <div class="send">
                <input type="submit" value="envoyer"><input type="reset" value="effacer">
            </div>
        </form>
    </header>
</body>

</html>