<?php

class bdWork
{
    public $host;
    public $username;
    public $password;
    public $dbname;

    public function __construct($host,$username,$password,$dbname)
    {
        $this->host=$host;
        $this->username=$username;
        $this->password=$password;
        $this->dbname=$dbname;
    }
}