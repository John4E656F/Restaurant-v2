<?php
    include_once 'dbh.php';

    $sql = "SELECT * FROM review;";
        $result = $pdo->query($sql);

        foreach ($pdo->query($sql) as $row) {
            
        }

        for( $i = 0 ; $i <= $result; $i++){
            $row . $i = $result;
             

        }
