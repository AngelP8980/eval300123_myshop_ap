<?php 

/**
 * On définit dans le tableau associatif $routes la liste de nos routes.
 * Pour chaque route, on définit : 
 * - son nom 
 * - path (qui apparaît dans l'URL)
 * - controller : fichier à appeler 
 */

$routes = [

    // Page d'accueil
    'home' => [
        'path' => '/',
        'controller' => 'home.php'
    ],

    // Ajout annonce
    'addAnnonce' => [
        'path' => '/annonces/add',
        'controller' => 'annonces/annonce-add.php'
    ],

    // Toutes les Annonces
    'allAnnonce' => [
        'path' => '/annonces/all',
        'controller' => 'annonces/annonce-all.php'
        ],

    // Consultation d'une annonce
    'consultAnnonce' => [
        'path' => '/annonce/consult',
        'controller' => 'annonces/annonce-consult.php'
        ],

    
];

return $routes;