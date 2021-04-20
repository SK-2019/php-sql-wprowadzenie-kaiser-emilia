<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">
        </head>
        
        
        

        
<style>
        body{
            background-image:url(https://static.cdprojektred.com/thewitcher.com/media/wallpapers/witcher3/full/witcher3_pl_wallpaper_wallpaper_8_1920x1080_1433246634.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;

        }
                </style>

<div class="notion">
<a href="https://www.notion.so/SQL-3ccfadeab4b84d7794d7a13966de2547">Notion</a>
    </div>

    <div class="nav">
    <?php
include("../assets/menu.php");
?>
</div>




</div>   


<div class="con">


       <?php

            require_once("../connect.php");
                echo("<h1>Pracownicy i Organizacja</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

  
                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (dzial=1 or dzial=4)");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 3</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a')");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 4</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie not like '%a')");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                echo("<h2>Zadanie 5</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) order by imie desc");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                      echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                echo("<h2>Zadanie 6</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (dzial=3) order by imie asc");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                echo("<h2>Zadanie 7</h2>");
              $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') order by imie asc");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 8</h2>");
              $sql = ("SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial=1 or dzial=3) order by zarobki asc");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                echo("<h2>Zadanie 9</h2>");
              $sql = ("SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie not like '%a') order by nazwa_dzial asc, zarobki asc");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                       echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");




            ?>


            </div>

</html>
