<?php

class QueryBuilder
{
    protected $pdo;
    // Construct with pdo to prepare and execute statements
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        // Prepare and execute statements for pdo, then fetch data
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        // Fetch as class
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){
        
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die('Whoops, something went wrong.');
        }
    }
}