<?php

require('./Database.php');

class Api extends Database
{

    public function get_data()
    {
        try {
            $this->connect('localhost', 'nofrisdan', 'N03D0600', 'belajar_todolist');
            echo "Database Connected";
        } catch (Exception $err) {
            echo "Database Not Connected : " . $err->getMessage();
        }
    }
}


// run
$run = new Api('localhost', 'nofrisdan', 'N03D0600', 'belajar_todolist');
$run->get_data();
