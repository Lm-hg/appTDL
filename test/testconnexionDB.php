<?php
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase {

    public function testconnexionReussie() {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $database = 'init';
        require_once '../php/connect.php';
        $db = connectDatabase($host, $user, $password, $database);
        $this->assertNotFalse($db, "La connexion n'a pas échoué comme attendu");
    }
}
