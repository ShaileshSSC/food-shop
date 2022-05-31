<?php

class DB
{

    public static function connect()
    {
        $usernme = 'root';
        $password = '';

        $dsn = "mysql:host=127.0.0.1;dbname=shai;charset=utf8mb4";
        $pdo = new PDO($dsn, $usernme, $password);
        return $pdo;
    }
}
