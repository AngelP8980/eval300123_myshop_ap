<?php

namespace App\Entity;

class Annonce {

    // Propriétés
    private ?int $id_produit;
    private string $title;
    private string $description;
    private string $price;
    private string $city;
    private string $postal_code;
    private string $reservation_text;

    /**
     * Constructeur
     */
    public function __construct(?int $id_produit, string $title, string $description, string $price, string $city, string $postal_code, string $reservation_text="")
    {
        $this->id_produit = $id_produit;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->city = $city;
        $this->postal_code = $postal_code;
        $this->reservation_text = $reservation_text;
    }

    /**
     * Get the value of id_produit
     */ 
    public function getIdProduit(): ?int
    {
        return $this->id_produit;
    }

    /**
     * Set the value of id_produit
     *
     * @return  self
     */ 
    public function setIdProduit(?int $id_produit): self
    {
        $this->id_produit = $id_produit;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

     /**
     * Get the value of price
     */ 
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of postal_code
     */ 
    public function getCP(): ?int
    {
        return $this->postal_code;
    }

    /**
     * Set the value of postal_code
     *
     * @return  self
     */ 
    public function setCP(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get the value of reservation_text
     */ 
    public function getReserv(): string
    {
        return $this->reservation_text;
    }

    /**
     * Set the value of reservation_text
     *
     * @return  self
     */ 
    public function setReserv(string $reservation_text): self
    {
        $this->reservation_text = $reservation_text;

        return $this;
    }

}