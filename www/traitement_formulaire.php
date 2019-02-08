<?php

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

      $reponse = $bdd->query('SELECT * FROM users ');
      

      if (isset($_POST['pseudo']) AND isset($_POST['pass']) AND isset($_POST['pass2']) AND isset($_POST['mail']) AND isset($_POST['mail2']) AND isset($_POST['born']) )
      {
        
        if( ($_POST['pass']==$_POST['pass2']) AND ($_POST['mail']==$_POST['mail2']) )
        {

            $pseudo = $_POST['pseudo'];
            $pass = $_POST['pass'];
            $mail = $_POST['mail'];
            $born = $_POST['born'];
            
            //prépare des requètes pour retrouver l'id de pseudo et du mail si ils sont déjâ utilisés
            $rep = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = :pseudo  '); 
            $rem = $bdd->prepare('SELECT mail FROM users WHERE mail = :mail ');
            $rep->execute(array(
                'pseudo' => $pseudo,
            ));
            $rem->execute(array(
                'mail' => $mail,
            ));
            
            if ( ($rep->rowCount()==0) AND ($rem->rowCount()==0) ) //Le pseudo et l'adresse mail ne sont pas présents dans la base de données
            {
                $req = $bdd->prepare('INSERT INTO users(pseudo, mdp, mail, born) VALUES(:pseudo , :pass, :mail, :born) ');
                $req->execute(array(

                'pseudo' => $pseudo,
                'pass' => $pass,
                'mail' => $mail,
                'born' => $born,

                ));

                header('Location: ./login.php');
            }
            else if ($rep->rowCount() > 0)
            {
                echo "pseudo est deja utilisé";
            }
            else if ($rem->rowCount() > 0)
            {
                echo "le mail est deja utilisé";
            }
            

            

        }
        else if ( ($_POST['pass']==$_POST['pass2']) AND ($_POST['mail']!=$_POST['mail2']) )
        {

            echo "e-mails non similaires" ;
            echo "Retournez vers le formulaire d'incription avec le bouton précédent" ;
        }
        else if ( ($_POST['pass']!=$_POST['pass2']) AND ($_POST['mail']==$_POST['mail2']) )
        {
            echo "mots de passe non similaires" ;
            echo "Retournez vers le formulaire d'incription avec le bouton précédent" ;
        }
        else if ( ($_POST['pass']!=$_POST['pass2']) AND ($_POST['mail']!=$_POST['mail2']) )
        {
                echo "emails et mots de passe non similaires" ;
                echo "Retournez vers le formulaire d'incription avec le bouton précédent" ;
        }

      }
      $reponse->closeCursor();


?>