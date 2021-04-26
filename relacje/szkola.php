<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">
        </head>
        
        
        

        
<style>
        body{
            background-image:url(https://initiate.alphacoders.com/images/714/cropped-1920-1080-714142.jpg?3956);
          background-repeat: no-repeat;
          background-attachment: fixed;

        }
                </style>



<div class="nav">

    <?php
        include("../assets/header.php");
        include("../assets/menu.php");
    ?>

</div>



</div>   


<div class="con">


       <?php

            require_once("../connect.php");
                echo("<h1>Szkoła</h1>");

                $sql = ("SELECT * FROM nauczyciel");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>nauczyciel</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["nauczyciel"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM klasa");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>klasa</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM nauczyciel, klasa, nauczyciel_klasa where nauczyciel_id = nauczyciel.id and klasa_id = klasa.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>klasa</th>");
                                echo("<th>nauczyciel</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["klasa"]."</td><td>".$row["nauczyciel"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

        ?>

</div>
