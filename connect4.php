<?php
$Imie = $_POST['Imie'];
$Nazwisko = $_POST['Nazwisko'];
$Adres = $_POST['Adres'];

$conn = new mysqli('localhost','root','','formdb');
if($conn->connect_error){
    die('Connection failed '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into dane(Imie, Nazwisko, Adres)
        values(?,?,?)");
    $stmt->bind_param("sss",$Imie, $Nazwisko, $Adres);
    $stmt->execute();
    echo "Rejestracja przebiegła pomyślnie";
    $stmt->close();
    $conn->close();
}

