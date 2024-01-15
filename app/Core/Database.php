<?php

namespace Core;

use PDO;
use PDOException;
use Exception;
use PDOStatement;

class Database
{
    public PDO $connection;
    public PDOStatement $statement;

    /**
     * @param array $config
    */

    public function __construct(private $config)
    {
        try {
            $dsn = "mysql:host=" . $config['host'];

            if ($config['port'] != null) {
                $dsn .= ";port=" . $config['port'];
            }

            $dsn .= ";dbname=" . $config['dbname'];

            $pdoOptions = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            if ($config['port'] == null) {
                $pdoOptions[PDO::MYSQL_ATTR_SSL_CA] = $config["ssl"];
            }

            $this->connection = new PDO($dsn, $config["username"], $config["password"], $pdoOptions);

        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    /**
     * @return Database|int
     * @param mixed $query
     * @param array<int,mixed> $params
    */

    public function query($query, array $params = []): Database|int
    {
        try {

            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            return $this;

        } catch (PDOException $e) {
            return 0;
        }
    }

    /**
     * Insert a new row into the database and return the id
     * @return string|bool|int
     * @param array<int,mixed> $params
    */

    public function insertAndGetId(string $query, array $params = []): string|bool|int
    {
        try {

            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            return $this->connection->lastInsertId();

        } catch (PDOException $e) {
            return 0;
        }
    }

    /**
     *  TODO: Remove this maybe
     * @return mixed
    */

    public function findorabort()
    {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }

    /**
     * @return int
    */

    public function findorfail(): mixed
    {
        $result = $this->find();
        return $result ? $result : 0;
    }

    /**
     * @return array|bool
    */

    public function findAll(): array|bool
    {
        return $this->statement->fetchAll();
    }

    /**
     * @return mixed
    */

    public function find()
    {
        return $this->statement->fetch();
    }
}
