<?php



               $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            
            $sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
            VALUES (null,'Ksawery', 3, 36,'1995-10-21')";
            
            
            
            $conn->query($sql);

            $conn->close();
            ?>
