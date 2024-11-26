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
    $name = $_POST['artist-name'];
    $bio = $_POST['artist-bio'];
    $country = $_POST['artist-country'];

    $sql = "INSERT INTO Artists (Name, Bio, Country) VALUES ('$name', '$bio', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "New artist added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
