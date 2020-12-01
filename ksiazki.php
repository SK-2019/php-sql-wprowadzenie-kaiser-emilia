<?php

require_once("connect.php");

$sql = ("SELECT * from biblTytul");
echo("<h2>".$sql."</h2>");

$result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>tytul</th>");

        while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                echo("</tr>");
            }
        echo("</table>");





?>