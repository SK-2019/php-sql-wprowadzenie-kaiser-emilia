<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
    <title>Wiele do wielu</title>
</head>

<style>
        body{
            background-image:url(https://initiate.alphacoders.com/images/714/cropped-1920-1080-714142.jpg?5686);          
            background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

        }
                </style>


<?php
                echo("<h1>Emilia Kaiser</h1>");

                echo("<h2>Zadanie 1</h2>");

                require_once("../connect.php");

                $sql = ("SELECT * FROM autor, tytul, autor_tytul  where autor_id = autor.id and tytul_id = tytul.id");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>autor</th>");
                        echo("<th>tytul</th>");
    

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        ?>
