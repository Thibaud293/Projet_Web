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

            //On récupère le contenu de la table
            $reponse = $bdd->query('SELECT * FROM users');

                if( (isset($_POST['pseudo'])) AND (isset($_POST['pass'])) )
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

                    if($id_pseudo == $id_pass)
                    {
                       
                        foreach($req as $row)
                        {
                            $_SESSION['userID'] = $row['id'];
                            $_SESSION['userPseudo'] = $pseudo;
                            header('Location: ./listerandos.php'); //Mettre ici un lien vers la liste des annonces
                        }

                    }
                    else
                    {
                        echo "mauvais pseudo ou mot de passe" ;
                    }

                }
            
            
            $reponse->closeCursor();
?>