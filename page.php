<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="projet.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Page d'administration</title>
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
          <li class="nav nav-item navi me-5"><a class="nav-link " href="inscription.php">S'Inscrire</a></li>
      </ul>
      <li class="nav nav-item navi me-5"><a class="nav-link acceuil" href="page.php">Page d'administrateur</a></li>
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
    <section class="container mt-5">
      <h1 class="ms-4 table-bordered">liste des utilisateur Inscrivez dans le site</h1>
<?php
try{  $host = 'localhost';
      $dbname = 'etablissement';
      $username = 'root';
      $password = '';
      $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
      $sql = "select * from stag";
      $stmt = $conn -> prepare($sql);
      $stmt ->execute();
      $results=$stmt ->fetchAll();
      echo '<table border = 2>';
      echo '<tr><th>CEF</th><pre>
      <th>nom</th>
      <th>prenom</th>
      <th>Telephone</th>
      <th>emailsco</th>
      <th>Filiere</th>
      <th>email</th>
      <th>pass</th>
      <th>supprimer</th></tr>';
      
      foreach ($results as $row) {
          echo '<tr>';
          echo '<td>' . $row['CEF'] . '</td>';
          echo '<td>' . $row['nom'] . '</td>';
          echo '<td>' . $row['prenom'] . '</td>';
          echo '<td>' . $row['tel'] . '</td>';
          echo '<td>' . $row['emailsco'] . '</td>';
          echo '<td>' . $row['filiére'] . '</td>';
          echo '<td>' . $row['email'] . '</td>';
          echo '<td>' . $row['pass'] . '</td>';
          echo '<td>';
          echo '<form method="POST" action="">';
          echo '<input type="hidden" name="id" value="' . $row['CEF'] . '">';
          echo '<button type="submit" class="btn-primary" name="supp">Supprimer</button>';
          echo '</form>';
          echo '</td>';
          echo '</tr>';
      }
      echo '</table>';
      if(isset($_POST['supp'])){
        echo "<div class ='alert alert-success mt-3'>l'utilisateur a été supprimer avec sucess</div>";
        $sql1="DELETE from stag WHERE CEF = :CEF";
        $stmt1 = $conn ->prepare($sql1);
        $stmt1 -> bindParam(":CEF",$_POST['id']);
        $stmt1 -> execute();
      }
}catch(PDOException $e){
      echo "Error:".$e -> getMessage();
}
?>
</section>
  </body>
</html>