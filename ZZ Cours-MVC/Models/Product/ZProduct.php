<?php
class Product
{
    private int $id;
    private string $nom;
    private float $prix;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return strtoupper($this->nom);
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getPrixTTC(): float
    {
        return $this->prix * 1.20;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }
}
