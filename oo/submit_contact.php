<?php
$servername = "localhost";
$username = "root";
$password = "tima"; // Ajoutez votre mot de passe ici
$dbname = "eforlad_travel";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insérer les données dans la base de données
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your message has been sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
