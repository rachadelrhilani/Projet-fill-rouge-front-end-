<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="projet.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Vote</title>
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
        <section>
        <div class="container mt-5">
    <h2>Intitulé du vote</h2>

    <!-- Affichage des choix -->
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choix" id="choix1" value="option1">
      <label class="form-check-label" for="choix1">Digiweek</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="choix" id="choix2" value="option2">
      <label class="form-check-label" for="choix2">Conférence en ligne</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="choix" id="choix3" value="option3">
      <label class="form-check-label" for="choix3">Webinaire</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="choix" id="choix4" value="option4">
      <label class="form-check-label" for="choix4">Hackathon</label>
    </div>

    <!-- Bouton de vote -->
    <button class="btn btn-primary mt-3" id="voteBtn">Vote</button>

    <!-- Messages de notification -->
    <div class="mt-3">
      <div id="alreadyVotedMsg" class="alert alert-danger" style="display: none;">Vous avez déjà voté.</div>
      <div id="voteSuccessMsg" class="alert alert-success" style="display: none;">Votre vote a été pris en considération.</div>
    </div>

    <!-- Affichage des résultats en temps réel -->
    <div class="mt-3">
      <h3>Résultats en temps réel</h3>
      <div id="results"></div>
    </div>
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
<script>
 var alreadyVoted = false; // Remplacer par la logique de vérification appropriée

// Cacher ou afficher les messages de notification en fonction de l'état du vote
if (alreadyVoted) {
  document.getElementById('alreadyVotedMsg').style.display = 'block';
  document.getElementById('voteBtn').disabled = true;
} else {
  document.getElementById('alreadyVotedMsg').style.display = 'none';
  document.getElementById('voteBtn').disabled = false;
}

    // Écouter l'événement de clic sur le bouton de vote
    document.getElementById('voteBtn').addEventListener('click', function() {
      // Logique de traitement du vote

      // Afficher le message de succès
      document.getElementById('voteSuccessMsg').style.display = 'block';
    });

    // Afficher les résultats en temps réel
    var results = { // Résultats des votes (à remplacer par la logique de récupération des résultats)
      Hackathon: 30,
      Digiweek: 45,
      Conférenceenligne: 12,
      Webinaire: 23
    };

    // Générer le HTML pour afficher les résultats
    var resultsHTML = '';
    for (var choix in results) {
      resultsHTML += '<p>' + choix + ': ' + results[choix] + '</p>';
    }

    // Afficher les résultats dans la page
    document.getElementById('results').innerHTML = resultsHTML;
</script>
</body>