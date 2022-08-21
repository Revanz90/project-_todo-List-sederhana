<?php


class Database
{

    protected $host, $user, $pass, $db;
    public function __construct()
    {

        $this->host = 'localhost';
        $this->pass = 'N03D0600';
        $this->user = 'nofrisdan';
        $this->db = 'belajar_todolist';
    }


    public function connect()
    {
        return mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
}


class Api extends Database
{

    public function get_data()
    {
        try {
            $this->connect();
            echo "Database Connected";
        } catch (Exception $err) {
            echo "Database Not Connected : " . $err->getMessage();
        }
    }
}
