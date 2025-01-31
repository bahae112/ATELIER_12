<?php
class Database {
    private static $connection;

    public static function getConnection() {
        if (!self::$connection) {
            $host = 'localhost';
            $dbname = 'group_chat';
            $username = 'root';
            $password = '';
            self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        }
        return self::$connection;
    }
}
?>
