<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="projet.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Aide</title>
</head>
<body class="bg-light">
<header>
<nav class="navbar bg-light shadow">
      <div class="container-fluid">
        <div class="col-lg-1 col-sm-2 col-md-2 col-3"><a href="projet1.php"><img class="mt-lg-1 w-100 h-75 img" src="ofppt.png"></a></div>
        <ul>
          <div class="d-lg-inline-flex d-md-block d-sm-inline-flex d-inline-flex mt-lg-3">
          <li class="nav nav-item navi"><a class="nav-link" href="projet1.php">Acceuil</a></li>
          <li class="nav nav-item navi"><a class="nav-link " href="projet.php">Sedeconnecter</a></li>
      </ul>
        <button class="navbar-toggler ms-4 border-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
        <h1>Aide</h1>
        <h2>Comment utiliser ce site</h2>
        <p>Bienvenue sur notre site ! Voici quelques conseils pour vous aider à naviguer :</p>
        <ul>
          <li><strong>Créer un compte :</strong> Si vous n'avez pas encore de compte, vous pouvez vous inscrire en cliquant sur "Inscription" en haut de la page d'accueil.</li>
          <li><strong>Se connecter :</strong> Une fois que vous avez créé un compte, vous pouvez vous connecter en cliquant sur "Connexion" en haut de la page d'accueil.</li>
          <li><strong>Naviguer sur le site :</strong> Utilisez la barre de navigation en haut de la page pour accéder aux différentes sections du site.</li>
          <li><strong>Effectuer une recherche :</strong> Si vous cherchez quelque chose en particulier, vous pouvez utiliser la fonction de recherche en haut de la page.</li>
          <li><strong>Contactez-nous :</strong> Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter en utilisant le formulaire de contact en bas de la page.</li>
        </ul>
        <h2>FAQ</h2>
        <p>Voici les questions les plus fréquemment posées :</p>
        <ul>
          <li><strong>Comment modifier mon profil ?</strong> Pour modifier votre profil, connectez-vous et cliquez sur "Modifier le profil" dans le menu de navigation.</li>
          <li><strong>Comment réinitialiser mon mot de passe ?</strong> Pour réinitialiser votre mot de passe, cliquez sur "Mot de passe oublié" sur la page de connexion.</li>
          <li><strong>Comment ajouter un nouvel article ?</strong> Pour ajouter un nouvel article, connectez-vous et cliquez sur "Ajouter un article" dans le menu de navigation.</li>
        </ul>
        <h3>Avez-vous des questions?</h3>
        <textarea rows="9" cols="40" placeholder="Questions?*"></textarea>
        <div>
            <input class="btn-success" type="submit" value="Envoyer">
        </div>
    </section>
    <footer class="position-relative mt-5 bg-dark text-white">
      <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3>À propos de nous</h3>
              <p>Nous sommes un bureau de stagiaire qui offre des opportunités de stage dans une variété de domaines.</p>
              <button class="btn-success mb-2"><a href="aide.php" class="text-light nav-link">Aide</a></button>
            </div>
            <div class="col-sm-4">
              <h3>Offres de stages</h3>
              <p>Nous proposons une variété de stages dans des domaines tels que le marketing, la finance, la technologie, etc.</p>
            </div>
            <div class="col-sm-4">
              <h3>Contactez-nous</h3>        
              <p>N'hésitez pas à nous contacter pour toute question ou demande de renseignements.</p>
              <button class="btn-primary mb-2"><a href="contact.php" class="text-light nav-link">Contactez</a></button>
            </div>
          </div>
        </div>
  </footer>
      </body>
    </html>
    