<?php
$host = 'localhost';
$dbname = 'etablissement';
$username = 'root';
$password = '';
try{
  $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}catch(PDOException $e){
  echo "erreur:". $e -> getMessage();
}
?>
echo"<table border = '1'><tr><th>CEF</th><th>nom</th><th>prenom</th><th>tel</th><th>emailsco</th><th>filiere</th><th>email</th><th>pass</th> </tr>";  
echo"<tr><td>.$row['CEF'].</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td></tr>";  echo"<tr><td>.$row['CEF'].</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td></tr>";