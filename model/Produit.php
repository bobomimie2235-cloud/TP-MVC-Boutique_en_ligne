<?php

class Product
{
    private ?int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $stock;
    private ?string $image = null;

    public function __construct(string $name, string $description,float $price, int $stock) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    // GETTERS
    public function getId(): ?int { return $this->id; }
    public function getName(): ?string { return strtoupper($this->name); }
    public function getDescription(): ?string { return $this->description; }
    public function getPrice(): ?float { return $this->price; }
    public function getPriceTTC(): ?float { return $this->price * 1.20; }
    public function getImage(): ?string { return $this->image; }
    public function getStock(): ?int { return $this->stock; }

    // SETTERS
    public function setName(string $name): void { $this->name = $name; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function setImage(string $image): void { $this->image = $image; }
    public function setStock(int $stock): void { $this->stock = $stock; }
}


