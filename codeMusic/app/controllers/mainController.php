<?php

    namespace controllers;

    use \modules\database;

    class MainController {
        var $user = [];
        var $conn;
        
        public function __construct(){
            $this->conn  = new database;
        }

        public function getDataUser(){
            $userSession = $_SESSION['user'];
            $this->user = $this->conn->query("SELECT * FROM users WHERE user = '$userSession'")->fetch_assoc();
        }
    }
