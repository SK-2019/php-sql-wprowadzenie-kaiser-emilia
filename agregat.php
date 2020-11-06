<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
            <div class="nav">
        linki
        <a href="https://yma.herokuapp.com/">Strona główna</a>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia">GITHUB</a>
        <a href="pracownicy.php">Pracownicy</a>
        <a href="pracownicyiorganizacja.php">Prac i Org</a>

              </div>


        <?php
                echo("<h1>Emilia Kaiser</h1>");

                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT sum(zarobki) as suma_zarobki FROM pracownicy");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $sql = ("SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org group by dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>srednia_zarobki</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["srednia_zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

  
  
  
  
  
  
  
  
  
  
  
  
  
  
          ?>
