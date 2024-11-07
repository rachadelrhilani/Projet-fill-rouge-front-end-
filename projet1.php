<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="projet.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <title>Bureau de stagiaire</title>
</head>
<body class="bg-light">
  <header>
    <nav class="navbar bg-light shadow">
      <div class="container-fluid">
        <div class="col-lg-1 col-sm-2 col-md-2 col-3"><a href="projet1.php"><img class="mt-lg-1 w-100 h-75 img" src="ofppt.png"></a></div>
        <ul>
          <div class="d-lg-inline-flex d-md-block d-sm-inline-flex d-inline-flex mt-lg-3">
          <li class="nav nav-item navi"><a class="nav-link acceuil" href="projet1.php">Acceuil</a></li>
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
              <input class="form-control me-2" type="search" id="in1" placeholder="Search">
              <button class="btn btn-outline-success" type="submit" id="sr">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    </div>
    </header>
    <main class="w-100">
        <div>
            <div class="text-center mt-4">
                <h1>Bienvenue sur OFPPT (bureau de stagiere)</h1>
                <p class="text text-success">Nous offrons des stages passionnants pour les étudiants de tous les horizons</p> 
                <a href="blog.php" class="btn btn-primary btn-lg">BLOGS</a>
              </div>
            </main>
            <section class="mt-2">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="banner-cmc--.jpg" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="Banner-ofppt-(1).png" class="d-block w-100" >
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
      </section>
    <section class="">
    </section>
  <!-- Contenu de la page d'accueil -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-8">
        <h1>l'Evenement digiweek</h1>
        <!-- Section des actualités mises en avant -->
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">DigiWeek OFPPT - Une semaine dédiée à la transformation digitale dans l'enseignement professionnel</h2>
            <p class="card-text">La DigiWeek OFPPT est un événement annuel organisé par l'Office de la Formation Professionnelle et de la Promotion du Travail (OFPPT) au Maroc. Cette semaine est entièrement dédiée à la transformation digitale dans l'enseignement professionnel. Elle rassemble des professionnels de l'industrie, des enseignants et des étudiants pour explorer les dernières tendances technologiques et discuter de leur intégration dans le milieu de l'éducation.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">L'événement propose une série de conférences, d'ateliers pratiques, de démonstrations et de sessions de partage d'expériences. Les participants auront l'opportunité de découvrir des technologies émergentes telles que l'intelligence artificielle, l'Internet des objets, la réalité virtuelle et augmentée, ainsi que l'analyse de données.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text">La DigiWeek OFPPT vise à sensibiliser les acteurs de l'enseignement professionnel aux enjeux de la transformation digitale et à les outiller pour former les futurs professionnels dans un contexte technologique en constante évolution. L'événement met également l'accent sur les partenariats entre l'OFPPT, les entreprises et les organismes de formation afin de favoriser l'adéquation des compétences avec les besoins du marché du travail.
Ne manquez pas cette opportunité unique d'explorer les avancées technologiques et d'acquérir de nouvelles compétences pour préparer l'avenir professionnel. La DigiWeek OFPPT est ouverte à tous les acteurs de l'éducation et se déroulera du [date] au [date] à [lieu]. Inscrivez-vous dès maintenant pour réserver votre place !
Pour plus d'informations et pour vous inscrire, veuillez consulter le site web officiel de l'OFPPT ou contacter l'équipe organisatrice de la DigiWeek.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- Section des partenaires -->
        <h3>Partenaires</h3>
        <div class="card mb-4">
          <div class="card-body">
            <img src="partener1.jpeg" alt="Partenaire 1" class="img-fluid">
            <a href="https://www.ofppt.ma/" class="btn btn-primary mt-2">Visiter le site officiel</a>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <img src="digiweek.png" alt="Partenaire 2" class="img-fluid">
            <a href="https://fr-fr.facebook.com/Ntic.Safi/" class="btn btn-primary mt-2">Vister la page facebook</a>
          </div>
        </div>
      </div>
    </div>
  </div>
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
    let btn = document.getElementById("sr");
    btn.addEventListener("click",(event)=>{
        let input = document.getElementById("in1");
        if(input.value == 'blog'){
            window.location.href='/blog.php';
        }
    })
</script>
</body>
</html>