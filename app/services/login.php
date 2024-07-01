<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Hasher le mot de passe avec SHA1
    $hashed_password = sha1($password);

    // Connexion à la base de données (ajustez les paramètres selon votre configuration)
    $servername = "localhost";
    $username = "root";
    $dbname = "votre_base_de_donnees";
    $conn = new mysqli($servername, $username, "votre_mot_de_passe", $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO users (login, password) VALUES ('$login', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvel utilisateur inséré avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
