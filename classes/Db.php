<?php

class db{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;

    public function connect(){
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "car1118";
        $this->dbName = "vacapp2";
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else{
            return $conn;
        } 
    }
}

?>  

