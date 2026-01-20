<?php

class Product {
    // ? devant les types pour indiquer que les propriétés peuvent être null
    private ?int $id;
    private ?string $name;
    private ?string $description;
    private ?float $price;
    private ?string $image;
    private ?int $stock;

    public function __construct(
        $id = null,
        $name = null,
        $description = null,
        $price = null,
        $image = null,
        $stock = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->stock = $stock;
    }

    // GETTERS
    public function getId(): ?int { return $this->id; }
    // srtoupper : renvoi string en MAJUSCULE
    public function getName(): ?string { return strtoupper($this->name); }
    public function getDescription(): ?string { return $this->description; }
    public function getPrice(): ?float { return $this->price; }
    public function getPriceTTC(): ?float { return $this->price * 1.20; }
    public function getImage(): ?string { return $this->image; }
    public function getStock(): ?int { return $this->stock; }

    // SETTERS
    // Méthode setter, void est le type de retour de la méthode (la méthode n erenvoi rien)
    public function setId(int $id): void { $this->id = $id; }
    public function setName(string $name): void { $this->name = $name; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function setImage(string $image): void { $this->image = $image; }
    public function setStock(int $stock): void { $this->stock = $stock; }
}


