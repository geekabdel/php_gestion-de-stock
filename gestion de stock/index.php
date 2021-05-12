<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Lato', sans-serif;
    }

    body {
        background-image: url(back2.png);
        background-size: cover;
    }

    form {
        width: 500px;
        height: 320px;
        background-color: #fff;
        margin: 100px auto;
        padding: 10px;
        box-sizing: border-box;
        text-align: center;
        border-top: 4px solid #1c48e8;
        border-bottom: 4px solid #1e2836;
        border-radius: 20px;
    }

    table {
        margin: auto;
        border-top: 4px solid #1c48e8;
        background-color: #d1cfcf;
        border-radius: 15px;
        padding: 5px;
    }

    input {
        width: 200px;
        height: 30px;
        font-size: 20px;
        color: blue;
    }

    .send input {
        background-color: #d1cfcf;
        height: 30px;
        width: 100px;
        font-size: 20px;
        margin-left: 5px;
        border-radius: 10px;
        color: black;
    }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <form action="login.php" method="POST">

        <h1>BACK OFFICE</h1><br>
        <h1>Page Protegée par mot de passe</h1><br>
        <h3>Vieller saisir votre Login et mot de passe</h3><br>

        <table>
            <tr>
                <td><label for="login">login : </td>
                <td><input type="login" name="login" value="" required></label></td>
            </tr>
            <tr>
                <td><label for="password">passe : </td>
                <td><input type="password" name="password" value="" required></label></td>
            </tr>

        </table>
        <br>
        <div class="send">
            <input type="submit" value="envoyer"><input type="reset" value="effacer">
        </div>

    </form>
</body>

</html>