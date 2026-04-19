<?php

class Database {
    private $host     = 'localhost';
    private $dbname   = 'mvc_project';
    private $user     = 'root';
    private $password = '';
    private $charset  = 'utf8';

    protected $conexion;

    public function __construct() {
        $this->conectar();
    }

    private function conectar() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $this->conexion = new PDO($dsn, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}

// PRUEBA TEMPORAL - borrar después
$db = new Database();
echo "✅ Conexión exitosa a la base de datos.";
