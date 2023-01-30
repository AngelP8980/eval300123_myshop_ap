<?php 


use App\Model\AnnonceModel;

$annonceModel = new AnnonceModel;

$produitData = $annonceModel->getAllAnnonces();


// Flash messages
$flashMessage = fetchFlash();

// Affichage : inclusion du template
$template = 'annonces/annonce-all';
include '../templates/base.phtml';
