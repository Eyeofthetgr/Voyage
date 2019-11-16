<html>
<body>
 
<?php
$con = mysql_connect("localhost","root","Baza_do_strony","");
if (!$con)
  {
  die('Nie mozna polaczyc: ' . mysql_error());
  }
  
mysql_select_db("baza1", $con);
  
$sql="INSERT INTO dane (Imie, Nazwisko, Adres)
VALUES
('$_POST[Imie]','$_POST[Nazwisko]'),'$_POST[Adres]')";
  
if (!mysql_query($sql,$con))
  {
  die('Blad: ' . mysql_error());
  }
echo "Dodano wpis!";
  
mysql_close($con)
?>
 
</body>
</html>