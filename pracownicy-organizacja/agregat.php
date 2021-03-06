<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="shortcut icon" href="/inne/favicon.ico">
        </head>


     


        
<style>
        body{
          background-image:url(https://mocah.org/uploads/posts/4563940-geralt-of-rivia-the-witcher-3-wild-hunt-looking-into-the-distance.jpg);
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
                echo("<h1>Emilia Kaiser</h1>");

                require_once("../connect.php");


                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT sum(zarobki) as suma_zarobki FROM pracownicy");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                
                        echo("<table border=1>");
                        echo("<th>suma_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT sum(zarobki) as suma_zarobki FROM pracownicy where imie like '%a'");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>suma_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 3</h2>");
                $sql = ("SELECT sum(zarobki) as suma_zarobki FROM pracownicy where (imie not like '%a') and (dzial=2 or dzial=3)");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>suma_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 4</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a'");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 5</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki FROM pracownicy where dzial=4");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 6</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki FROM pracownicy where (imie not like '%a') and (dzial=1 or dzial=2)");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 7</h2>");
                $sql = ("SELECT count(imie) as ilosc_pracownikow FROM pracownicy");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>ilosc_pracownikow</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["ilosc_pracownikow"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 8</h2>");
                $sql = ("SELECT count(imie) as ilosc_pracownikow FROM pracownicy where (imie like '%a') and (dzial=1 or dzial=3)");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>ilosc_pracownikow</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["ilosc_pracownikow"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 9</h2>");
                $sql = ("SELECT nazwa_dzial, sum(zarobki) as suma_zarobki FROM pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>suma_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 10</h2>");
                $sql = ("SELECT count(imie) as ilosc_pracownikow, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>ilosc_pracownikow</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["ilosc_pracownikow"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");




                echo("<h2>Zadanie 11</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



  
                echo("<h2>Zadanie 14</h2>");
                $sql = ("SELECT nazwa_dzial, sum(zarobki) as suma_zarobki FROM pracownicy, organizacja where dzial=id_org group by dzial having sum(zarobki)<28");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>suma_zarobki</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["suma_zarobki"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

  
  
  
  
                  echo("<h2>Zadanie 15</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie not like '%a') group by dzial having avg(zarobki)>30");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

  
  
  
                    echo("<h2>Zadanie 16</h2>");
                $sql = ("SELECT count(imie) as ilosc, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) group by dzial having count(imie)>2");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>ilosc</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }

  
  
          ?>
          </div>
