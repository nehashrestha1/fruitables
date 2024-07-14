<?php
require_once '../config/db.php';

class Fact {
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->connect();
    }

    // Create a new fact
    public function create($title, $description) {
        $sql = "INSERT INTO facts (title, description) VALUES (:title, :description)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    // Get all facts
    public function getAll() {
        $sql = "SELECT * FROM facts";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get a single fact by ID
    public function getById($id) {
        $sql = "SELECT * FROM facts WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update a fact
    public function update($id, $title, $description) {
        $sql = "UPDATE facts SET title = :title, description = :description WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    // Delete a fact
    public function delete($id) {
        $sql = "DELETE FROM facts WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
