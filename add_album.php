<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musical_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['album-title'];
    $release_date = $_POST['release-date'];
    $artist_id = $_POST['artist-id'];

    $sql = "INSERT INTO Albums (Title, ReleaseDate, ArtistID) VALUES ('$title', '$release_date', '$artist_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New album added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
