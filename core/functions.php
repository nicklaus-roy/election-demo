<?php

    function connectToDB() {
        $servername = "localhost";
        $username = "root";
        $password = "root";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=election_demo", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    function checkIfUserIsAuthenticated() {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: ../index.php');
            die();
        }
    }
