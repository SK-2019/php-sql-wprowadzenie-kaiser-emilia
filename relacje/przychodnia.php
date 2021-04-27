<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
</head>

<style>
        body{
            background-image:url(https://images4.alphacoders.com/711/thumb-1920-711124.jpg);     
            loading: lazy;
            background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

        }
                </style>


<div class="nav">

    <?php
        include("../assets/header.php");
        include("../assets/menu.php");
    ?>

</div>

<div class="con">
<?php
                echo("<h1>Przychodnia</h1>");


                require_once("../connect.php");

                $sql = ("SELECT * FROM lekarz");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>lekarz</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["lekarz"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM pacjent");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["pacjent"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                $sql = ("SELECT * FROM lekarz, pacjent, lekarz_pacjent  where lekarz_id = lekarz.id and pacjent_id = pacjent.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>lekarz</th>");
                        echo("<th>pacjent</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["lekarz"]."</td><td>".$row["pacjent"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        ?>
</div>
