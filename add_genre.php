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
    $name = $_POST['genre-name'];

    $sql = "INSERT INTO Genres (Name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New genre added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
