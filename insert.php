

<?php
echo("jestes w insert.php");
echo $_POST['name'];

               $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            
            
            $sql = "INSERT INTO Pracownik (null, $_POST['name'], dzial, zarobki) 
                   VALUES (null,'Balbina', 1, 76,'1991-11-21')";

            if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();


?>
