<?php

class dbh
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'ngodingdotcom';

    protected function connect()
    {
        try
        {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
?>