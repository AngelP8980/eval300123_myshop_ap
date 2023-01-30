<?php 

// Définition du namespace
namespace App\Model;

//Import des classes
use App\Entity\Annonce;
use App\Core\AbstractModel;

class AnnonceModel extends AbstractModel {

    /**
     * Sélectionne l'ensemble des annonces de la table produit
     * @return array Le tableau contenant les annonces
     */
    function getAllAnnonces(): array
    {
        
        // Préparation de l'annonce
        $sql = 'SELECT * FROM produit ORDER BY createdAt DESC;';
        $pdoStatement = self::$pdo->prepare($sql);
        
        // Exécution de l'annonce
        $pdoStatement->execute();

        // On retourne tous les résultats de l'annonce
        $results = $pdoStatement->fetchAll();

        // PHP < 8.0.0 : si on récupère la valeur false de la méthode fetchAll(), on retourne un tableau vide
        if (!$results) {
            return [];
        }

        ///////////////////////////////////////////////////////////
        // Création des objets Produit à partir du tableau de résultats

        // Création d'un tableau pour stocker les objets
        $annonces = [];

       
        // On parcourt les résultats, pour chaque annonce (tableau associatif)...
        foreach ($results as $result) {


            
            // Instanciation de l'objet Annonce
            $annonce = new Annonce(
                $result['id_produit'],
                $result['title'],
                $result['description'],
                $result['price'],
                $result['city'],
                $result['postal_code'],
            );



            // On ajoute l'objet Annonce dans le tableau d'annonces
            $annonces[] = $annonce;
        }

        // On retourne Le tableau d'annonces
        return $annonces;

    }

    /**
     * Crée une anonnce dans la table produit
     */
    function createAnnonce($title, $description, $price, $city, $postal_code): bool
    {
        // Préparation de la table produit
        $sql = 'INSERT INTO produit (title, description, price, city, postal_code) VALUES (?,?,?,?,?)';
        $pdoStatement = self::$pdo->prepare($sql);
        
        // Exécution de la table produit
        $sqlProduit = $pdoStatement->execute([$title, $description, $price, $city, $postal_code]);
        
        return $sqlProduit;

    }

    /**
     * Supprime une annonce dans la table produit
     */
    function deleteAnnonce($id_produit) {
        $sql = 'DELETE FROM produit WHERE id_produit = ?';
        $pdoStatement = self::$pdo->prepare($sql);

        $sqlProduit = $pdoStatement->execute([$id_produit]);

        return $sqlProduit;
    }

    /**
     * Sélectionne une annonce par son id dans la table produit
     */
    function getOneAnnonceById(?int $id_produit): Annonce 
    {
        // Préparation de l'annonce
        $sql = 'SELECT * FROM produit WHERE id_produit = ?';
        $pdoStatement = self::$pdo->prepare($sql);

        // Exécution de l'annonce
        $pdoStatement->execute([$id_produit]);

        // Récupération du résultat 
        $annonceData = $pdoStatement->fetch();
        if (!$annonceData) {
            return [];
        }
        
                
        // Instanciation de l'objet produit
        $annonce = new Annonce(
            $annonceData['id_produit'],
            $annonceData['title'],
            $annonceData['description'],
            $annonceData['price'],
            $annonceData['city'],
            $annonceData['postal_code'],        
        );

        return $annonce;
    }


    /**
     * Réserve une annonce 
     */
    function Reserve($reservation_text, $id_produit): bool
    {
        // Préparation de la réservation
        $sql = 'UPDATE produit SET reservation_text=? WHERE id_produit = ?';
        $pdoStatement = self::$pdo->prepare($sql);

        // Exécution de la réservation
        $sqlReserve = $pdoStatement->execute([$reservation_text, $id_produit]);


        return $sqlReserve;
    }

}