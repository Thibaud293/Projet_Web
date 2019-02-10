<?php
    session_start();

    try
    {
      //On se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8','root','');
    }

    catch(Exception $e)
    {
      //En cas d'erreur
      die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM annonces ');

    if (isset($_POST['titreRando']) AND isset($_POST['departement']) AND isset($_POST['depart']) AND isset($_POST['arrive']) AND isset($_POST['denivele']) )
    {
        $titreR = $_POST['titreRando'];
        $departement = $_POST['departement'];
        $depart = $_POST['depart'];
        $arrive = $_POST['arrive'];
        $denivele = $_POST['denivele'];
        $difficulte = $_POST['difficulte'];
        $paysage = $_POST['paysage'];
        $proprete = $_POST['proprete'];
        $IDuser = $_SESSION['userID'];

        $rep = $bdd->prepare('SELECT titre_annonce FROM annonces WHERE titre_annonce = :titreR  ');

        $rep->execute(array(
            'titreR' => $titreR,
        ));


        if($rep->rowCount()==0)
        {
            $req = $bdd->prepare('INSERT INTO annonces(ID_users, titre_annonce, departement, adresse_depart, adresse_arrive, denivele, difficulte, paysage, proprete) VALUES(:IDuser, :titreR ,:departement, :depart, :arrive, :denivele, :difficulte, :paysage, :proprete ) ');
        
            $req->execute(array(
                'IDuser' => $IDuser,
                'titreR' => $titreR,
                'departement' => $departement,
                'depart' => $depart,
                'arrive' => $arrive,
                'denivele' => $denivele,
                'difficulte' => $difficulte,
                'paysage' => $paysage,
                'proprete' => $proprete,

            ));

            header('Location: ./listerandos.php');
        }

        else 
        {
            echo "titre de l'annonce déjà utilisé";
        }


    }
    $reponse->closeCursor();



    






?>