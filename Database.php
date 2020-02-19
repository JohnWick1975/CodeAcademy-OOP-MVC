<?php


/*use PDO;
use PDOException;*/

class Database
{

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=" . CONFIG['db_hostname'] . ";dbname=" . CONFIG['db_name'] . ";charset=" . CONFIG['db_charset'],
                CONFIG['db_username'], CONFIG['db_password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            $this->log->error($e->getMessage());
        }
    }

    // Select
    public function select($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert
    public function insert($sql)
    {
        $statement = $this->connection->query($sql);
        return $this->connection->lastInsertId();
    }

    // Update
    public function update($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->rowCount();
    }

    // Remove
    public function remove($sql)
    {
        $statement = $this->connection->query($sql);
        return $statement->rowCount();
    }

    function __destruct()
    {
        $this->connection = null;
    }
}
