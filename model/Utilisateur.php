<?php

class Utilisateur {
    private ?int $id;
    private ?string $username;
    private ?string $email;
    private ?string $password; // stocker le mot de passe hashé
    private ?string $role;     // "admin" ou "user"

    public function __construct(
        $id = null,
        $username = null,
        $email = null,
        $password = null,
        $role = "user"
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    // GETTERS
    public function getId(): ?int { return $this->id; }
    public function getUsername(): ?string { return $this->username; }
    public function getEmail(): ?string { return $this->email; }
    public function getPassword(): ?string { return $this->password; }
    public function getRole(): ?string { return $this->role; }

    // SETTERS
    public function setId(int $id): void { $this->id = $id; }
    public function setUsername(string $username): void { $this->username = $username; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setPassword(string $password): void { $this->password = $password; }
    public function setRole(string $role): void { $this->role = $role; }
}
