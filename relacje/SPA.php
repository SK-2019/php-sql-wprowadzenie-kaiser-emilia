<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">
        </head>
        
        
        

        
<style>
        body{
            background-image:url(https://images8.alphacoders.com/542/thumb-1920-542508.jpg);
                loading: lazy;
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
                echo("<h1>SPA</h1>");

                $sql = ("SELECT * FROM fryzjer");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>fryzjer</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM klient");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>klient</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klient"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM fryzjer, klient, fryzjer_klient where fryzjer_id = fryzjer.id and klient_id = klient.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>fryzjer</th>");
                                echo("<th>klient</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["fryzjer"]."</td><td>".$row["klient"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

        ?>

</div>
