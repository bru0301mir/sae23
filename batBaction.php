<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Liste des choix valides
    $validSalles = ["salle1", "salle2"];
    $validCapteurs = ["temperature", "humidité", "pression", "luminosité"];
    $validPlages = ["30min", "1h", "3h"];
    
    // Récupération des valeurs soumises
    $salle = $_POST["salle Info"];
    $capteur = $_POST["capteur"];
    $plage = $_POST["plage"];


    
    
    if (in_array($salle, $validSalles) && in_array($capteur, $validCapteurs) && in_array($plage, $validPlages)) {
        header('Location: Infogest.php');
        exit();
    } else {
        // Redirection vers le formulaire avec un message d'erreur
        header("Location: gestion.php?error=invalid_choice");
        exit();
    }
} else {
    // Redirection vers le formulaire si l'accès n'est pas via POST
    header("Location: Infogest.php");
    exit();
}

?>