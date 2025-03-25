<?php

class Database {
    private static $pdo;

    public static function connect() {
        if (!self::$pdo) {
            try {
                require_once __DIR__ . '/../../config/config.php';

                    self::$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch
            (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        } 
        return self::$pdo; // return connection
    } 
}