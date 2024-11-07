<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>CODE</label>
    <input type="number" name="code">
    <div>
        <label>marque</label>
        <input type="text" name="marque">
    </div>
    <div>
        <label>prix</label>
        <input type="number" name="prix">
    </div>
    <input type="submit" name="envoi" value="envoyer">
</form>
<?php
if(isset($_POST['envoi'])){
    $host = 'localhost';
    $dbname = 'ordinateur';
    $username = 'root';
    $password = '';
  try{
    $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $sql = 'insert into ord (`Code`,`Marque`,`PRIX`)
     values(\''.$_POST["code"].'\',\''.$_POST["marque"].'\','.$_POST["prix"].')';
    echo "<br>$sql<br>";
    $statement = $connect->exec($sql);
    echo"bien ajouter!";
   }catch(PDOException $e){
   die('error:'. $e->getMessage());
   }
}
?>
</body>
</html>
$CEF = $_POST["CEF"];
     $nom = $_POST["nom"];
     $prenom = $_POST["prenom"];
     $tel = $_POST["tel"];
     $emailsco = $_POST["emailsco"];
     $filiere = $_POST["filiere"];
     $email = $_POST["email"];
     $pass = $_POST["password"];
     $sql = "INSERT INTO stag (CEF,nom,prenom,tel,emailsco,filiére,email,pass) values(:CEF,:nom,:prenom,:tel,:emailsco,:filiére,:email,:pass)";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam(':CEF',$CEF);
     $stmt->bindParam(':nom',$nom);
     $stmt->bindParam(':prenom',$prenom);
     $stmt->bindParam(':tel',$tel);
     $stmt->bindParam(':emailsco',$emailsco);
     $stmt->bindParam(':filiére',$filiere);
     $stmt->bindParam(':email',$email);
     $stmt->bindParam(':pass',$pass);
     $stmt->execute();
     echo "sucess";