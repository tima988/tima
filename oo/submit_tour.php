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
$keywords = $_POST['keywords'];
$category = $_POST['category'];
$min_price = $_POST['min_price'];
$duration = $_POST['duration'];
$tour_date = $_POST['tour_date'];
$max_price = $_POST['max_price'];

// Insérer les données dans la base de données
$sql = "INSERT INTO tours (keywords, category, min_price, duration, tour_date, max_price) VALUES ('$keywords', '$category', '$min_price', '$duration', '$tour_date', '$max_price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
