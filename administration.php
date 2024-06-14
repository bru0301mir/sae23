<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administration</title>
        <link href="styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
                <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
                <a class="right" href="consultation.php"> Consultation</a> 
                <a class="right" href="form.php"> Gestion</a> 
                <a class="right" href="form.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
            <?php echo "Bienvenue ";
                echo $_SESSION['pseudo'];?>
                <br><br><br><br>
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Valeurs</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur">Sélectionnez un type de  :</label><br>
                        <select id="capteur" name="capteur">
                            <option value="temperature">Température</option>
                            <option value="humidite">Humidité</option>
                            <option value="pression">Pression</option>
                            <option value="luminosite">Luminosité</option>
                        </select><br>
                        <input type="text" id="unit" name="unit" size="70" placeholder="pressure, temperature, humidity, co2, illumination"/><br>
                        <input type="text" id="val" name="val" size="70" placeholder="valeur à ajouter/modifier"/><br>
                        <input type="text" id="date" name="date" size="70" placeholder="date AAAA-MM-JJ"/><br>
                        <input type="text" id="time" name="time" size="70" placeholder="heure HH:MM:SS"/><br>
                        <input type="radio" name="web" value="suppr" id="suppr" /><label for="suppr">supprimer</label>
                        <input type="radio" name="web" value="mod" id="mod" /><label for="mod">modifier</label>
                        <input type="radio" name="web" value="add" id="add" /><label for="add">ajouter</label>
                    </p>
                    <p>
                        Avant de continuer, vous devez vérifier ces informations ! <br />
                        <input type="checkbox" id="validation" name="validation" required />
                        <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label>
                    </p>  
                    <p>
                        <input type="submit" value="Envoyer" align="center"/>
                        &nbsp;<input type="reset" value="Cancel" align="center"/>
                    </p>
            </form>
        
            </section>
        </section>            
            <footer>
                <ul>
                    <li>Département Réseaux et Télécommunications</li>
                    <li>Cazettes, Le Deunff, Muller, Lalue</li>
                    <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>  
          </footer>
    </body>
</html>
