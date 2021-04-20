<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/inne/favicon.ico">
    <title>Książki</title>
</head>
<style>
        body{
            background-image:url(https://images3.alphacoders.com/714/714141.jpg);          
            background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

        }
                </style>

<div class="nav">
    <?php
include("../assets/menu.php");
?>
</div>

           

        <div class="con">

<?php

require_once("../connect.php");

$sql = ("SELECT * from biblTytul");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($row=$result->fetch_assoc()) {
               
                    echo("<option value=".$row['tytul'].">".$row["tytul"]."</option>");}
                    echo("<input type='Submit' value='Sumbit'><br>");
               
            
        echo("</select>");


$sql = ("SELECT * from biblAutor");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>autor</th>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["autor_id"]."</td><td>".$row["autor"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


        
            $sql = ("SELECT * from biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=autor_id and biblTytul_id=tytul_id");
            echo("<h2>".$sql."</h2>");
            
            $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<th>id</th>");
                    echo("<th>autor</th>");
                    echo("<th>tytul</th>");

            
                    while($row=$result->fetch_assoc()) {
                            echo("<tr>");
                                echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");





?>

</div>
