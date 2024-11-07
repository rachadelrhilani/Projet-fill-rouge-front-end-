<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $host = 'localhost';
  $dbname = 'etablissement';
  $username = 'root';
  $password = '';
  $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
   try{
     $CEF = $_POST["CEF"];
     $nom = $_POST["nom"];
     $prenom = $_POST["prenom"];
     $tel = $_POST["tel"];
     $emailsco = $_POST["emailsco"];
     $filiere = $_POST["filiere"];
     $email = $_POST["email"];
     $pass = $_POST["password"];
     $crypt1 = md5($emailsco);
     $crypt2 = md5($email);
     $crypt3 = md5($pass);
     $sql = "insert into stag (CEF,nom,prenom,tel,emailsco,filiére,email,pass) values(:CEF,:nom,:prenom,:tel,:emailsco,:filiere,:email,:pass)";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam(':CEF',$CEF);
     $stmt->bindParam(':nom',$nom);
     $stmt->bindParam(':prenom',$prenom);
     $stmt->bindParam(':tel',$tel);
     $stmt->bindParam(':emailsco',$crypt1);
     $stmt->bindParam(':filiere',$filiere);
     $stmt->bindParam(':email',$crypt2);
     $stmt->bindParam(':pass',$crypt3);
     $stmt->execute();
     if ($stmt->rowCount() > 0) {
      header("location:projet1.php");
  } else {
      echo "Une erreur s'est produite lors de l'insertion des données.";
  }
   }catch(PDOException $e){
    echo "error:". $e -> getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="projet.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Espaces inscription de nouveaux membres</title>
</head>
<body class="bg-light">
<header>
<nav class="navbar bg-light shadow">
      <div class="container-fluid">
        <div class="col-lg-1 col-sm-2 col-md-2 col-3"><a href="projet.php"><img class="mt-lg-1 w-100 h-75 img" src="ofppt.png"></a></div>
        <ul>
          <div class="d-lg-inline-flex d-md-block d-sm-inline-flex d-inline-flex mt-lg-3 div1">
          <li class="nav nav-item navi me-5"><a class="nav-link " href="projet.php">Acceuil</a></li>
          <li class="nav nav-item navi me-5"><a class="nav-link " href="membre.php">SeConnecter</a></li>
          <li class="nav nav-item navi me-5"><a class="nav-link acceuil" href="inscription.php">S'Inscrire</a></li>
      </ul>
        <button class="navbar-toggler ms-4 border-primary d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="mn">MENU</span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title MENU" id="offcanvasNavbarLabel">MENU PRINCIPALE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item op">
                <a class="nav-link text-primary" aria-current="page" href="mission.php">Missions et politique</a>
              </li>
              <li class="nav-item op">
                <a class="nav-link text-primary" href="sommes-nous.php">Qui sommes-nous ?</a>
              </li>
              <li class="nav-item op">
                <a class="nav-link text-primary" href="vote.php">Votez</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Plus
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                  <li><a class="dropdown-item" href="page.php">Page d'administrateur</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    </div>
    </header>
    <section>
        <div class="ms-5 mt-4">
        <h1 class="text-white bg-primary p-3 w-50 container t1">Inscription des nouveaux membres</h1>
	<form class="mt-5 shadow container p-4 w-75" method="POST" action="">
    <div><img src="sign up.png" class="w-50"></div>
		<label for="CEF">CEF:</label>
		<input type="text" name="CEF" required><br><br>
		
		<label for="nom">nom :</label>
		<input type="text" name="nom" required><br><br>
		
		<label for="prenom">prenom :</label>
		<input type="text" name="prenom"><br><br>
		
		<label for="tel">telephone:</label>
		<input type="text" name="tel" required><br><br>
		
		<label for="emailsco">emailsco :</label>
		<input type="email" name="emailsco" required><br><br>
		
		<label for="email">email:</label>
		<input type="email" name="email"><br><br>
		
		<label for="password">password:</label>
		<input type="password" name="password"><br><br>
		<label for="filiere">filiere:</label>
		<select name="filiere">
      <option value="developement digital">developement digital</option>
      <option value="infrastructure digital">infrastructure digital</option>
    </select><br><br>
		<input type="submit" name="inscrire" value="S'inscrire">
    <p class="mt-3">En vous inscrivant, vous acceptez de recevoir des e-mails occasionnels pour vous informer des dernières nouvelles et des événements de la communauté. Vous pouvez vous désabonner de ces e-mails à tout moment en nous contactant à [adresse e-mail de contact].</p>
	</form>
	
</div>
    </section>
    <footer class="position-relative mt-5 bg-dark text-white">
      <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3>À propos de nous</h3>
              <p>Nous sommes un bureau de stagiaire qui offre des opportunités de stage dans une variété de domaines.</p>
            </div>
            <div class="col-sm-4">
              <h3>Offres de stages</h3>
              <p>Nous proposons une variété de stages dans des domaines tels que le marketing, la finance, la technologie, etc.</p>
            </div>
            <div class="col-sm-4">
              <h3>Contactez-nous</h3>        
              <p>N'hésitez pas à nous contacter pour toute question ou demande de renseignements.</p>
            </div>
          </div>
        </div>
  </footer>
</body>
</html>