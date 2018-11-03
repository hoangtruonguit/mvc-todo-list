<?php

namespace App\Database;
use \PDO;

// A class responsible for building database queries.
class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function selectAll(string $table, string $fetchClass=null)
    {
        $query = $this->db->prepare("select * from {$table};");
        $query->execute();
        
        if ($fetchClass) {
            return $query->fetchAll(PDO::FETCH_CLASS, $fetchClass);
        }

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert(string $table, array $parameters)
    {
        $sql = sprintf(
                "INSERT INTO %s (%s) VALUES (%s)",
                $table,
                implode(', ', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
        );  
        $query = $this->db->prepare($sql);
        $query->execute($parameters);
    }

    public function update(string $table, array $params, int $id)
    {
        $sql =  "UPDATE {$table}  SET";
        $values = [];
        foreach ($params as $name => $value) {
            $sql .= " ".$name." = :".$name.","; // the :$name part is the placeholder, e.g. :zip
            $values[":".$name] = $value; // save the placeholder
        }
        $sql = substr($sql, 0, -1)." WHERE id = {$id};"; // remove last , and add a ;
        $query = $this->db->prepare($sql);
        $query->execute($values);
    }

    public function delete(string $table, int $id)
    {
        $query = $this->db->prepare("delete  from {$table} where id = {$id};");
        $query->execute();
    }
}