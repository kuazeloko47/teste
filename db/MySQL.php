<?php

class MySQL
{
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db   = "banco_ihm";
        $this->port = "3306";
    }

    public function Conexao()
    {
        try
        {
            return mysqli_connect($this->host,
                                  $this->user,
                                  $this->pass,
                                  $this->db,
                                  $this->port);
        }
        catch(Exception $ex)
        {
            return $ex;
        }
    }
}