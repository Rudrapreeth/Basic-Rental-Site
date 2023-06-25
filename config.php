<?php

    try{
        //host
        define("HOSTNAME", "localhost");

        //DBNAME
        define("DBNAME", "Homeland");

        //user
        define("USER", "root");

        //password
        define("PASS", "moto6!rola");

        $conn=new PDO("mysql:host".HOSTNAME.";dbanme=".DBNAME.";",USER,PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Database connection failed: ".$e->getMessage());
    }
