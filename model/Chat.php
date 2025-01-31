<?php
require_once 'Database.php';

class Chat {
    public function getMessages() {
        $db = Database::getConnection();
        $stmt = $db->query('SELECT * FROM messages ORDER BY created_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addMessage($message) {
        $db = Database::getConnection();
        $stmt = $db->prepare('INSERT INTO messages (message, created_at) VALUES (:message, NOW())');
        $stmt->execute(['message' => $message]);
    }
}
?>
