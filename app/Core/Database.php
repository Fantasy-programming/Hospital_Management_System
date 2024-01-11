<?php

namespace Core;

use PDO;
use PDOException;
use Exception;
use PDOStatement;

// TODO: ADD SSL SUPPORT

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

if ($config['port'] == null) {
        $dsn = "mysql:host=" . $config['host'] .  ";dbname=" . $config['dbname'];
      } else {
        $dsn = "mysql:host=" . $config['host'] . ";port=" . $config['port'] . ";dbname=" . $config['dbname'];

      }


        $this->connection = new PDO($dsn, $config["username"], $config["password"], [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::MYSQL_ATTR_SSL_CA => $config["ssl"],
            ]);
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
     * @return string|bool|int
     * @param array<int,mixed> $params
     */
    public function insertAndGetId(string $query, array $params = []): string|bool|int
    {
        try {

            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);

            // After executing the INSERT query, get the last inserted ID

            $lastInsertId = $this->connection->lastInsertId();
            return $lastInsertId;
        } catch (PDOException $e) {
            return 0;
        }
    }
    /**
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
     * @return int*/
    public function findorfail(): int
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
