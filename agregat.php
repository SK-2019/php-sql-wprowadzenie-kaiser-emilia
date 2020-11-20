<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>


            <div class="nav">
        <a class="link a" href="https://yma.herokuapp.com/"><img class="obrazek" src="igni.png">Strona główna<img class="obrazek" src="igni.png"></a>  
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="aksji.png">GITHUB<img class="obrazek" src="aksji.png"></a>  
        <a class="link c" href="pracownicy.php"><img class="obrazek" src="aard.png"> Pracownicy <img class="obrazek" src="aard.png"></a>  
        <a class="link d" href="pracownicyiorganizacja.php"><img class="obrazek" src="quen.png">Prac i Org<img class="obrazek" src="quen.png"></a>  
        <a class="link e" href="agregat.php"><img class="obrazek" src="yrden.png">Funkcje Agregujace<img class="obrazek" src="yrden.png"></a>  
        <a class="link f" href="dataiczas.php"><img class="obrazek" src="igni.png">Data i Czas<img class="obrazek" src="igni.png"></a>  
        <a class="link g" href="formularz.html"><img class="obrazek" src="aksji.png">Formularz<img class="obrazek" src="aksji.png"></a>  
        <a class="link h" href="daneDoBazy.html"><img class="obrazek" src="aard.png">Dane do bazy<img class="obrazek" src="aard.png"></a>

        </div>




        <body background="funagr.png">
        
<style>
        body{
          background-repeat: no-repeat;
          background-attachment: fixed;

        }
                </style>


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
                $sql = ("SELECT nazwa_dzial, sum(zarobki) as suma_zarobki FROM pracownicy, organizacja where dzial=id_org group by dzial having sum(zarobki)<28");
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

  
  
  
  
                  echo("<h2>Zadanie 15</h2>");
                $sql = ("SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie not like '%a') group by dzial having avg(zarobki)>30");
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

  
  
  
                    echo("<h2>Zadanie 16</h2>");
                $sql = ("SELECT count(imie) as ilosc, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) group by dzial having count(imie)>2");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>ilosc</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["ilosc"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }

  
  
          ?>
