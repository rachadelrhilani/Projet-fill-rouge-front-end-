<?php
function connect_base(){
    $serveur = 'localhost';
    $dbname = 'etablissement';
    $user = 'root';
    $pw = '';
    $con = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pw);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}
    function liste_stagiaire(){
    $con=connect_base();  
    $requete = $con->prepare("SELECT * FROM stagiaire");
    $requete->execute();
    $stagiaires = $requete->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires;
    }
    
?>