<?php

require_once __DIR__ . '/../model/DetailCommande.php';

class DetailCommandeRepository {
    private PDO $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    // CREATE : ajouter un nouvel item
    public function add(OrderItems $item): bool {
        $sql = "INSERT INTO order_items (order_id, product_id, quantity, price)
                VALUES (:order_id, :product_id, :quantity, :price)";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([
            ':order_id' => $item->getOrderId(),
            ':product_id' => $item->getProductId(),
            ':quantity' => $item->getQuantity(),
            ':price' => $item->getPrice()
        ]);
    }

    // READ : récupérer un item par ID
    public function getById(int $id): ?OrderItems {
        $sql = "SELECT * FROM order_items WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new OrderItems(
                $data['id'],
                $data['order_id'],
                $data['product_id'],
                $data['quantity'],
                $data['price']
            );
        }
        return null;
    }

    // READ : récupérer tous les items d'une commande
    public function getByOrderId(int $order_id): array {
        $sql = "SELECT * FROM order_items WHERE order_id = :order_id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':order_id' => $order_id]);
        $items = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $items[] = new OrderItems(
                $data['id'],
                $data['order_id'],
                $data['product_id'],
                $data['quantity'],
                $data['price']
            );
        }
        return $items;
    }

    // UPDATE : modifier un item existant
    public function update(OrderItems $item): bool {
        $sql = "UPDATE order_items
                SET order_id = :order_id,
                    product_id = :product_id,
                    quantity = :quantity,
                    price = :price
                WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([
            ':id' => $item->getId(),
            ':order_id' => $item->getOrderId(),
            ':product_id' => $item->getProductId(),
            ':quantity' => $item->getQuantity(),
            ':price' => $item->getPrice()
        ]);
    }

    // DELETE : supprimer un item
    public function delete(int $id): bool {
        $sql = "DELETE FROM order_items WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
