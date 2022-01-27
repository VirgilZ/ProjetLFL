<?php
namespace LFL\Databases;

class Database {

    public static $instance = null;

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new \PDO('mysql:dbname=bdd lfl;host=localhost;charset=utf8', 'root', '', [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            ]);

        }
        return self::$instance;
    }
}