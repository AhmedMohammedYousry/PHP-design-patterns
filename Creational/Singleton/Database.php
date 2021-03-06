<?php

namespace Creational\Singleton;

final class Database
{
    private static Database $instance;

    public static function getInstance(): Database
    {
        if(!isset(self::$instance))
        {
            self::$instance = new Database();
        }
        return self::$instance;
    }


    private function __construct()
    {
        
    }

    private function __clone()
    {

    }

    public function getQuery()
    {
        return "SELECT * FROM table";
    }
}

$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

var_dump($db);
var_dump($db2);
var_dump($db3);

echo $db->getQuery();

