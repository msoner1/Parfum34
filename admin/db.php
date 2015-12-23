<?php

        $database = "parfu34";
        $host = "localhost";
        $dbuser = "root";
        $dbpass = "";

        $db = new PDO('mysql:host='.$host.';dbname='.$database.'',$dbuser , $dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
