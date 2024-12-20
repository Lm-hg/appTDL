<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase {

    public function connexionReussie() {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $database = 'test_database';
        require_once '../php/connect.php';
        $db = connectDatabase($host, $user, $password, $database);
    }
}