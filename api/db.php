<?php
class db {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $port;

    private $debug;

    function __construct($_host = '172.104.251.11', $_db_name = 'phpdemo', $_user= 'phpdemo', $_pass = 'PL1lV6sJhDYWmVaS', $_port = '3306') {
        
        $this->conn = false;
        $this->host = $_host;
        $this->user = $_user;
        $this->password = $_pass;
        $this->dbName = $_db_name;
        $this->port = $_port;

        $this->debug = true;
    }

    function __destruct() {
        $this->disconnect();
    }

    function connect() {
        if ( !$this->conn ) {
            try {
                $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);
            } catch ( Exception $e ) {
                $this->conn = false;
                die("Error: $e->getMessage()");
            }
        }

        if ( !$this->conn ) { echo 'Connection Failed!'; die(); }

        return $this->conn;
    }

    function disconnect() {
        if ( $this->conn ) {
            $this->conn = null;
        }
    }

    function query($task = '') {
        return mysqli_query($this->conn, $task);
    }

}