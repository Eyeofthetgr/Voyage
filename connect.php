<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, Name, CountryCode, District FROM city";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name " . $row["Name"]. " - CountryCode: " . $row["CountryCode"]. " - District " . $row["District"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

// połączenie z serwerem i bazą danych
// $mysqli = new mysqli('localhost', 'Kamil', 'haslo', 'world');
// if ($mysqli->connect_error) {
//     // w przypadku błędu (od wersji PHP 5.3), wyświetli się odpowiedni komunikat
//     die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
//     // w przypadku błędu (do wersji PHP 5.3), wyświetli się odpowiedni komunikat
//     if (mysqli_connect_error()) {
//        die('Connect Error (' . mysqli_connect_errno() . ') '
//        . mysqli_connect_error());
//     }
// }
?>