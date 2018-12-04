<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/21/2018
 * Time: 10:12 AM
 */

class Database
{

    // used to connect to the database
    private $host = "localhost";
    private $db_name = "al-ventures";
    private $username = "root";
    private $password = "";
    public $db_conn;

    // get the database connection
    public function getConnection()
    {
        $this->db_conn = null;

        try {
            $this->db_conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Database Connection Error: " . $exception->getMessage();
        }
        return $this->db_conn;
    }
}