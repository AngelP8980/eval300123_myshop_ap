<?php

use App\Model\AnnonceModel;

if (isset ($_POST['submit'])) {
    var_dump($_POST);
    // Si validateString renvoie une string : l'ajoute en annonce
    addFlash(validateString('title', 'title',0,255));
    addFlash(validateString('description', 'description',0,255));
    addFlash(validateString('price', 'price',0,255));
    addFlash(validatePhone('city', 'city',0,255));
    addFlash(validateString('postal_code', 'postal_code',0,100));



    if (!hasFlash()) {
        var_dump($_FILES);
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $price= trim($_POST['price']);
        $city = trim($_POST['city']);
        $postal_code = trim($_POST['postal_code']);


        $annonceModel = new AnnonceModel;
        $sqlProduit = $annonceModel->createAnnonce($title, $description, $price, $city, $postal_code);
        if (!$sqlProduit) {
            addFlash("Le produit n'a pas pu être ajouté.");
        } else {
            // Ajouter un message flash
            addFlash("Produit ajouté.");
        
            // Redirection 
            header('Location: /');
            exit;
        }
    }
}


// Flash messages
$flashMessage = fetchFlash();

// Affichage : inclusion du template
$template = 'annonces/annonce-add';
include '../templates/base.phtml';


?>

