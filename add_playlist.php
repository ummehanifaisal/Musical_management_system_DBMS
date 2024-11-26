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
    $name = $_POST['playlist-name'];
    $user_id = $_POST['user-id'];

    $sql = "INSERT INTO Playlists (Name, UserID) VALUES ('$name', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New playlist added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
