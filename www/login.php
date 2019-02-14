<!-- Cette page sert de page d'accueil à mon site -->

<html>
    <head>
        <title> Accueil </title>
        <h2> Bonjour et bienvenue sur cette plateforme de partage d'expérience </h2>
        <h3> Se connecter permet d'accéder à toutes les annonces des utilisateurs </h3>

        <link rel="stylesheet" href="accueil.css" /> <!-- Lien vers la page css -->

            
    </head>

    <body>
        <div id="bloc_body">
            <form method="post" action="traitement_login.php"> <!-- Se dirige vers la page php pour la gestion php/sql -->
        
            <p>
                <label for="pseudo">votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" />
            </p>

            <p>
                <label for="pass">votre mot de passe</label> : <input type="password" name="pass" id="pass" />
            </p>

            <p>
                    <input type="submit" value="Se connecter" />
            </p>

            </form>

            <a href="formulaire.php"> Pas encore inscrit? <!-- Lien vers le formulaire d'inscription -->
        </div>

           
    
    </body>
</html>