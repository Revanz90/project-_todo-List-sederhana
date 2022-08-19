<?php

class Database
{

    protected $host, $user, $pass, $db;
    public function __construct($host, $user, $pass, $db)
    {

        $this->host = $host;
        $this->pass = $pass;
        $this->user = $user;
        $this->db = $db;
    }


    public function connect()
    {
        return mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
}
