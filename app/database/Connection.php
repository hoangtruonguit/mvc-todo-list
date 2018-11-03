<?php

namespace App\Database;
use Exception;
use \PDO;

// A class responsible for database connections.
class Connection
{
    public static function make(array $config)
    {
        try {
            return new PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}",
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}