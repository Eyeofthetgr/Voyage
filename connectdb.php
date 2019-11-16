<!-- <?php
$con = mysql_connect("localhost","baza_do_strony","");
if (!$con)
  {
  die('Nie mozna polaczyc: ' . mysql_error());
  }
  
mysql_select_db("baza_do_strony", $con);
  
$sql="INSERT INTO dane (Imie, Nazwisko, Adres)
VALUES
('$_POST[Imie]','$_POST[Nazwisko]'),'$_POST[Adres]')";
  
if (!mysql_query($sql,$con))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano wpis!";
  
mysql_close($con)
?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO dane (Imie, Nazwisko, Adres)
VALUES ('John', 'Doe', '')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>