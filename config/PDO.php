<?php


namespace config;

use PDO;
use PDOException;

class DatabaseService
{
    private ?PDO $connection = null;
    private string $host;
    private string $dbname;
    private string $user;
    private string $pass;
    private string $port;

    public function __construct()
    {
        // Configuration de la base de données
        $this->host = '127.0.0.1';
        $this->dbname = 'arcadia';
        $this->user = 'root';
        $this->pass = '';  // Votre mot de passe
        $this->port = '3306';
    }

    public function connect(): PDO
    {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8mb4";
                $this->connection = new PDO($dsn, $this->user, $this->pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]);
            } catch (PDOException $e) {
                throw new \Exception("Erreur de connexion : " . $e->getMessage());
            }
        }
        return $this->connection;
    }
    
    // Méthode pour exécuter une requête SELECT
    public function select(string $query, array $params = []): array
    {
        try {
            $stmt = $this->connect()->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new \Exception("Erreur lors de la requête : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter une requête INSERT
    public function insert(string $query, array $params = []): int
    {
        try {
            $stmt = $this->connect()->prepare($query);
            $stmt->execute($params);
            return (int)$this->connection->lastInsertId();
        } catch (PDOException $e) {
            throw new \Exception("Erreur lors de l'insertion : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter une requête UPDATE ou DELETE
    public function execute(string $query, array $params = []): int
    {
        try {
            $stmt = $this->connect()->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw new \Exception("Erreur lors de l'exécution : " . $e->getMessage());
        }
    }

}