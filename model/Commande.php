<?php

class Order {

    private ?int $id;
    private ?int $user_id;
    private ?float $total_amount;
    private ?DateTime $created_at;
    private ?string $status;

    public function __construct(
        $id = null,
        $user_id = null,
        $total_amount = null,
        $created_at = null,
        $status = null,
    ) {
        $this->id = $id;
        $this->user_id = $user_id; 
        $this->total_amount = $total_amount;
        $this->created_at = $created_at;
        $this->status = $status;
    }

    // GETTERS
    public function getId(): ?int { return $this->id; }
    public function getUserId(): ?int { return $this->user_id; }
    public function getTotal() : ?float { return $this->total_amount; }
    public function getCreatedAt() : ?DateTime { return $this->created_at; }
    public function getStatus() : ?string { return $this->status; }

    // SETTERS
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }
    public function setTotal(float $total_amount): void { $this->total_amount = $total_amount; }
    public function setCreatedAt(DateTime $created_at): void { $this->created_at = $created_at; }
    public function setStatus(string $status): void { $this->status = $status; }
}

?>