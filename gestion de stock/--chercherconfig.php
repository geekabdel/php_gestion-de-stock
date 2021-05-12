<?php 
            include "connect.php";

            $reponse = $mysqli->query('select * from produit');
            echo ("<table border>");

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
                ."<td><a href='modifier.php'>modifier</a>/<a href='#'>suprimer</a></td></tr>"
                
                ;$i++;}
            }
            echo "Le resultat contient :  ".$i." produit(s)";
            echo ("</table>");
            $mysqli->close();
?>