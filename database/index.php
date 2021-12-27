<?php

class Database{
        private $hostname = "ID362557_sortinghat.db.webhosting.be"; //ID362557_sortinghat.db.webhosting.be //localhost
        private $username = "ID362557_sortinghat"; //ID362557_sortinghat //root
        private $password = "Webfundamentals2021!"; //Webfundamentals2021! //root
        private $database = "ID362557_sortinghat"; //ID362557_sortinghat //Sorting_Hat
        private $port = 3306;

        public $conn;

        function __construct(){
            $connection = mysqli_connect($this->hostname , $this->username , $this->password , $this->database , $this->port);
            
            if ($connection == false) {
                echo "geen connectie met de code";
                die();
            }
            $this->conn = $connection;
        }

        function getQuery($sql) {
            return mysqli_query($this->conn, $sql)->fetch_all(MYSQLI_ASSOC);
        }

        function insertQuery($sql){
            mysqli_query($this->conn , $sql);
        }
    }
?>