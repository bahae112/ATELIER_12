<?php
require_once 'Database.php';

class User {
    public function authenticate($email, $password) {
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user && password_verify($password, $user['password']);
    }

    public function register($userData) {
        $db = Database::getConnection();
        $stmt = $db->prepare('INSERT INTO users (pseudo, email, password, birthdate, telephone, visibility, site, description) VALUES (:pseudo, :email, :password, :birthdate, :telephone, :visibility, :site, :description)');
        $stmt->execute($userData);
    }
}
?>
