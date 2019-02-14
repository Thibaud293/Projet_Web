<?php
    //page permettant de vérifier les pseudo et mdp de l'utilisateur qui essaye de se connecter
session_start(); //Cette ligne permet d'utiliser des variables $_SESSION dans la page
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

            //On récupère le contenu de la table
            $reponse = $bdd->query('SELECT * FROM users');

                if( (isset($_POST['pseudo'])) AND (isset($_POST['pass'])) ) //Si le pseudo et le mdp ont bien été entrés
                {
                    
                    $pseudo = $_POST['pseudo'];
                    $pass = $_POST['pass'];
                    
                    $req_psd = $bdd->prepare('SELECT id FROM users WHERE pseudo = :pseudo');
                    $req_pass = $bdd->prepare('SELECT id FROM users WHERE mdp = :pass AND pseudo = :pseudo ');
                    $req = $bdd->prepare('SELECT pseudo, mdp, id FROM users WHERE mdp = :pass AND pseudo = :pseudo');
                    
                    $req_psd->execute(array(
                        'pseudo' => $pseudo,

                    ));

                    $req_pass->execute(array(
                        'pass' => $pass,
                        'pseudo' => $pseudo,

                    ));

                    $req->execute(array(
                        'pass' => $pass,
                        'pseudo' => $pseudo,
                    ));

                    $id_pseudo = $req_psd->fetch();
                    $id_pass = $req_pass->fetch();

                    if($id_pseudo == $id_pass) //Condition pour vérifier que le pseudo et le mdp correspondent bien à la même ligne de la base de donnée
                    {
                       
                        foreach($req as $row)
                        {
                            $_SESSION['userID'] = $row['id'];
                            $_SESSION['userPseudo'] = $pseudo;
                            header('Location: ./listerandos.php'); //Si les logs sont validées, renvoi vers la liste des randos
                        }

                    }
                    else
                    {
                        echo "mauvais pseudo ou mot de passe" ;
                    }

                }
            
            
            $reponse->closeCursor();
?>