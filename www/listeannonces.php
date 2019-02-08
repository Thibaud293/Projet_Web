<html>
    <?php
        session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8','root','');
        $req = $bdd->query(
        'SELECT annonces.id_annonces as id_a, annonces.titre_annonce as titre, annonces.departement as departement,
        users.pseudo as pseudo
        FROM annonces INNER JOIN users
        ON annonces.id_users = users.id
        ORDER BY id_a ASC
        LIMIT 0, 15'
        );
    ?>

        <head>
                <title> Annonces </title>

               <!-- <link rel="stylesheet" href="listeannonces.css" /> -->

        </head>

        <body>







        </body>


</html>