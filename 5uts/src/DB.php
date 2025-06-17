<?php
namespace Uph\Uts;

class DB{
    public static function getDB()
    {
        return new \PDO(
            'mysql:host=127.0.0.1;dbname=databuku',
            'root',
            ''
        );
    }
}