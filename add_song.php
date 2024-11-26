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
    $title = $_POST['song-title'];
    $duration = $_POST['duration'];
    $album_id = $_POST['album-id'];
    $genre_id = $_POST['genre-id'];

    $sql = "INSERT INTO Songs (Title, Duration, AlbumID, GenreID) VALUES ('$title', '$duration', '$album_id', '$genre_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New song added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
