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
    $name = $_POST['instrument-name'];
    $type = $_POST['instrument-type'];
    $artist_id = !empty($_POST['artist-id']) ? $_POST['artist-id'] : 'NULL';
    $song_id = !empty($_POST['song-id']) ? $_POST['song-id'] : 'NULL';

    $sql = "INSERT INTO Instruments (Name, Type, ArtistID, SongID) VALUES ('$name', '$type', $artist_id, $song_id)";

    if ($conn->query($sql) === TRUE) {
        echo "New instrument added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
