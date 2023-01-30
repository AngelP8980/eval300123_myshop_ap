<?php 

use App\Model\AnnonceModel;

$annonceModel = new AnnonceModel;

$id_produit=intVal($_GET["id_produit"]);
$produitData = $annonceModel->getOneAnnonceById($_GET["id_produit"]);

if (isset ($_POST['submit'])) {

    addFlash(validateString('reservation_text', 'reservation_text', 0,255));


    if (!hasFlash()) {
        $reservation_text = trim($_POST['reservation_text']);

        $sqlReserve = $annonceModel->Reserve($reservation_text, $id_produit);
        if (!$sqlReserve) {
            addFlash("La réservation n'a pas aboutie. Nous sommes désolés pour ce désagrément. Veuillez réesssayer ultérieurement.");
        } else {
            // Ajouter un message flash
            addFlash("Votre réservation est enregistrée. Nous vous contacterons dans les meilleurs délais");
        
            // Redirection 
            header('Location: /');
            exit;
        }
    }
}

// Flash messages
$flashMessage = fetchFlash();

// Affichage : inclusion du template
$template = 'annonces/annonce-consult';
include '../templates/base.phtml';
