<?php
namespace database;

abstract class Connection
{   
    private static $conn;

    public static function getConn()
    {
        if (self::$conn === null) {

            self::$conn = new \PDO('mysql: host=localhost; dbname=video_login', 'root','');
        }

        return self::$conn;
    }

}