<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">
        </head>



       



        
<style>
        body{
            background-image:url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9e6c2b45-2746-42c0-80a3-2c1414a97f16/d8i2bs6-8e3f30da-9758-4109-a0d7-2e30c84fd6ea.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvOWU2YzJiNDUtMjc0Ni00MmMwLTgwYTMtMmMxNDE0YTk3ZjE2XC9kOGkyYnM2LThlM2YzMGRhLTk3NTgtNDEwOS1hMGQ3LTJlMzBjODRmZDZlYS5qcGcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.IYcQxOEnE7YEmzCG96Zs6g4PyxgLNrHeqW4q3PngBwA);
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

</div>        


<div class="con">
              <?php

              require_once("../connect.php");

                echo("<h1>PRACOWNICY</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT * FROM pracownicy where dzial=2");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT * FROM pracownicy where (dzial=2) or (dzial=3)");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT * FROM pracownicy where zarobki<30");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
          ?>

          </div>
</html>
