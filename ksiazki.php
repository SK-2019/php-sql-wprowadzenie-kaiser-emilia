<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class="link a" href="https://yma.herokuapp.com/"><img class="obrazek" src="igni.png">Strona główna<img class="obrazek" src="igni.png"></a>  
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="aksji.png">GITHUB<img class="obrazek" src="aksji.png"></a>  
        <a class="link c" href="pracownicy.php"><img class="obrazek" src="aard.png"> Pracownicy <img class="obrazek" src="aard.png"></a>  
        <a class="link d" href="pracownicyiorganizacja.php"><img class="obrazek" src="quen.png">Prac i Org<img class="obrazek" src="quen.png"></a>  
        <a class="link e" href="agregat.php"><img class="obrazek" src="yrden.png">Funkcje Agregujace<img class="obrazek" src="yrden.png"></a>  
        <a class="link f" href="dataiczas.php"><img class="obrazek" src="igni.png">Data i Czas<img class="obrazek" src="igni.png"></a>  
        <a class="link g" href="formularz.html"><img class="obrazek" src="aksji.png">Formularz<img class="obrazek" src="aksji.png"></a>  
        <a class="link h" href="daneDoBazy.php"><img class="obrazek" src="aard.png">Dane do bazy<img class="obrazek" src="aard.png"></a>
        <a class="link i" href="ksiazki.php"><img class="obrazek" src="quen.png">Książki<img class="obrazek" src="quen.png"></a>


        </div>



<?php

require_once("connect.php");

$sql = ("SELECT * from biblTytul");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<option value=".$row['tytul'].">".$row["tytul"]."</option>");
                echo("</tr>");
            }
        echo("</table>");


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
