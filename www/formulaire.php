<html>
    <head>
            <title> Formulaire d'inscription</title>

            <link rel="stylesheet" href="formulaire.css" /> <!-- Lien vers la page css -->
        
        
    </head>

    
    <body>
        <div id="bloc_body">
        <form method="post" action="traitement_formulaire.php">
            <h2>
                Formulaire d'inscription au site
            </h2>

            <p>
                <label for="pseudo">Entrez votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" />
            </p>
                <!-- Il faudra vérifier que le pseudo n'est pas déja utilisé pour le site -->
            <p>
                <label for="born">Entrez votre date de naissance</label> : <input type="date" name="born" id="born"/>
            </p>

            <p>
                <label for="pass">Entrez votre mot de passe</label> : <input type="password" name="pass" id="pass"/> 
            </p>
	    
            <p>
                <label for="pass2">Confirmez votre mot de passe</label> : <input type="password" name="pass2" id="pass2"/> 
            </p>
            <p>
                <label for="mail">Entrez votre adresse e-mail</label> : <input type="email" name="mail" id="mail" />
            </p>
                <!-- Il faudra vérifier que l'email n'est pas déja utilisé pour le site -->
	        <p>
                <label for="mail2">Confirmez votre adresse e-mail</label> : <input type="email" name="mail2" id="mail2" />
            </p>
            
            
            <p>
                <input type="submit" value="Envoyer le formulaire" />
            </p>

            <h4> Votre e-mail sera uniquement utilisé par les utilisateurs pour demander plus d'informations sur vos annonces </h4>
            


        </form>
        </div>
        
        

		
		

    </body>

</html>