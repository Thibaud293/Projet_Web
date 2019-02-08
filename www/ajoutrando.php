<html>
    <?php 
        session_start();
    ?>

    <head>
            <title> Ajouter une annonce </title>

            <link rel="stylesheet" href="ajoutrando.css" />

            <h2>
            <?php echo "Bonjour ".$_SESSION['userPseudo']." " ; ?>
            </h2>
    
    </head>

    <body>
        <form method=post action="traitement_ajoutrando.php" >
        <p>
            <label for="titreRando">Entrez un titre pour votre expérience à partager</label> : <input type="text" name="titreRando" id="titreRando" />
        </p>
        <p>
            <label for="departement">Entrez le département de votre randonnée</label> : <input type="text" name="departement" id="departement" />
        </p>
        <p>
            <label for="depart">Entrez l'adresse de départ de votre randonnée</label> : <input type="text" name="depart" id="depart" />
        </p>
        <p>
            <label for="arrive">Entrez l'adresse d'arrivée de votre randonnée</label> : <input type="text" name="arrive" id="arrive" />
        </p>
        <p>
            <label for="denivele">Entrez le denivelé de votre randonnée</label> : <input type="text" name="denivele" id="denivele" />
        </p>
        <p> 
            <label for="difficulte">Entrez un niveau de difficulté, où 5 est le plus dur et 1 le moins dur</label> :
        </p>
        
        <select name="difficulte" size="5">
            <option>1
            <option>2
            <option selected>3
            <option>4
            <option>5
        </select>

        <p> 
            <label for="paysage">Entrez une note pour le paysage, où 5 est le plus beau paysage à vos yeux et 1 le moins beau</label> :
        </p>

        <select name="paysage" size="5">
            <option>1
            <option>2
            <option selected>3
            <option>4
            <option>5
        </select>

        <p> 
            <label for="proprete">Entrez un niveau de propreté, où 5 est le plus propre et 1 le moins propre</label> :
        </p>
        
        <select name="proprete" size="5">
            <option>1
            <option>2
            <option selected>3
            <option>4
            <option>5
        </select>


        <p>
            <input type="submit" value="Envoyer le formulaire" />
        </p>

        


        </form>









    </body>
</html>