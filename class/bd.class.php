<?php
    class Mysql
    {
        private static $pdoInstance = null;
        public static function connect(): PDO{
            if (self::$pdoInstance == null) {
                self::$pdoInstance = new PDO('mysql:host=127.0.0.1;dbname=hopital;charset=utf8', 'root', 'passer123', [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
                ]);
            }
            
            return self::$pdoInstance;
        }
    }

 