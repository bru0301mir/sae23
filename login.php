<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=sae23;charset=utf8;','enzo','rtlebg');
if(isset($_POST['envoi'])){ //si utilisateur appuie sur le bouton d'envoi
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){ //si les champs ne sont pas vides
        $pseudo = htmlspecialchars($_POST['pseudo']); //défini la variable pseudo en se protégant des injections grâce au htmlspecialchars
        $mdp = sha1($_POST['mdp']); //défini la variable mdp en la chiffrant avec du sha1
        $recupUser = $bdd->prepare('SELECT * FROM aministration WHERE pseudo = ? AND mdp = ?'); //récupère l'utilisateur dans la table administration auquel correspond les champs donnés
        $recupUser->execute(array($pseudo, $mdp)); //renvoie un tableau avec nos champs

        if($recupUser->rowCount() > 0 ){ // si on a au moins un des deux champs de notre tableau qui est rempli, ce qui prouve que l'utilisateur est dans notre table, alors on le connecte
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: administration.php');
        }else{
            echo "Vos informations sont incorrectes";
        }
    }else{//si les champs sont vides on demande a l'utilisateur de les remplir
        echo "Veuillez compléter tous les champs";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset='utf-8'>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="mdp" autocomplete="off">
        <br><br>
        <input type="submit" name="envoie">
    </form>
</body>
</html>