<html>
    <head>
            <title> Formulaire d'inscription</title>
            

		<!-- Penser à rajouter les accents -->
		<!-- Rajouter un message de bienvenue après inscription en faisant un rapide débrif de pourquoi insérer la date de naissance et le mail-->
        
        
        <style>
        label {
            width : 15% ;
            display: block;
            float : left;
            
        }
        </style>
    </head>

    
    <body>
        <form method="post" action="traitement_formulaire.php">
            <p>
                Formulaire d'inscription au site
            </p>
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

            


        </form>
        
        

		
		

    </body>

</html>