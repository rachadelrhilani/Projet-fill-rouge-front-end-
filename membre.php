<?php
$host = 'localhost';
$dbname = 'etablissement';
$username = 'root';
$password = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupération des données du formulaire
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $crypte1 = md5($login);
    $crypte2 = md5($password);
    // Requête pour vérifier les informations de connexion
    $stmt = $conn->prepare("select * from stag where email = :login AND pass = :password");
    $stmt->bindParam(':login', $crypte1);
    $stmt->bindParam(':password', $crypte2);
    $stmt->execute();

    // Vérification du résultat de la requête
     // Vérification du résultat de la requête
     if ($stmt->rowCount() > 0) {
       header("location:projet1.php");}
      else{
        echo "<script>alert('veuillez entre un compte valider')</script>";
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
    <title>Identification des membres</title>
</head>
<body class="bg-light">
<header>
<nav class="navbar bg-light shadow">
      <div class="container-fluid">
        <div class="col-lg-1 col-sm-2 col-md-2 col-3"><a href="projet.php"><img class="mt-lg-1 w-100 h-75 img" src="ofppt.png"></a></div>
        <ul>
          <div class="d-lg-inline-flex d-md-block d-sm-inline-flex d-inline-flex mt-lg-3 div1">
          <li class="nav nav-item navi me-5"><a class="nav-link " href="projet.php">Acceuil</a></li>
          <li class="nav nav-item navi me-5"><a class="nav-link acceuil" href="membre.php">SeConnecter</a></li>
          <li class="nav nav-item navi me-5"><a class="nav-link " href="inscription.php">S'Inscrire</a></li>
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
    <div class="container  me-0">
    <img src="log in.png" class="w-25">
    <h1 class="mt-3">SeConnecter</h1>

    <form action="" method="POST">
      
      <div class="form-group">
        <input type="text" class="form-control w-50" name="login" required>
        <label for="login">Login</label>
      </div>

      <div class="form-group">
        <input type="password" class="form-control w-50" name="pass" required>
        <label for="password">Mot de passe</label>
      </div>
      <div class="mb-5"><a href="inscription.php" class="a">Créer un compte ?</a></div>
      <input type="submit" name="connecter" class="btn btn-primary in" value="se connecter">
    </form>
  </div>
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<style>
    .form-group {
      position: relative;
      margin-bottom: 6%;
      margin-left: 17%;
      margin-top: 4%;
    }
    .a{
      margin-left: 17%;
    }
    img{
      margin-left: 25%;
      margin-top: 7%;
    }
    input.in{
      margin-left: 17%;
    }
    h1{
      margin-left: 17%;
    }
    .form-group label {
      position: absolute;
      top: 0;
      left: 0;
      transform-origin: top left;
      transition: all 0.2s ease-in-out;
    }

    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label,
    .form-group input:valid + label {
      font-size: 18px;
      transform: translateY(-100%) scale(0.8);
      color: #666;
    }

    .form-group input {
      padding-top: 1.25rem;
    }

    .form-group input:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }

    .form-group button {
      margin-top: 1.5rem;
    }

  </style>
  <script>  document.addEventListener("DOMContentLoaded", function() {
      const inputs = document.querySelectorAll(".form-control");

      inputs.forEach(function(input) {
        input.addEventListener("focus", function() {
          this.parentNode.classList.add("active");
        });

        input.addEventListener("blur", function() {
          if (this.value === "") {
            this.parentNode.classList.remove("active");
          }
        });
      });
    });</script>
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