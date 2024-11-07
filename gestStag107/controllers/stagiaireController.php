<?php
require_once './models/stagiaireModel.php';
function liste_stagiaireAction(){
    $stagiaires=liste_stagiaire();
    require_once './views/liste_stagiaires.php';
}
?>