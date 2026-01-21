<?php

class OrderItems {
    private ?int $id;
    private ?int $order_id;
    private ?int $product_id;
    private ?float $quantity;
    private ?float $price;

    public function __construct(
        $id = null,
        $order_id = null,
        $product_id = null,
        $quantity = null,
        $price = null
    ) {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // GETTERS
    public function getId(): ?int { return $this->id; }
    public function getOrderId(): ?int { return $this->order_id; }
    public function getProductId(): ?int { return $this->product_id; }
    public function getQuantity(): ?float { return $this->quantity; }
    public function getPrice(): ?float { return $this->price; }

    // SETTERS
    public function setOrderId(int $order_id): void { $this->order_id = $order_id; }
    public function setProductId(int $product_id): void { $this->product_id = $product_id; }
    public function setQuantity(float $quantity): void { $this->quantity = $quantity; }
    public function setPrice(float $price): void { $this->price = $price; }
}
