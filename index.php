<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
        <?php
                echo("<h1>Emilia Kaiser</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
        
        
                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a')");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
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
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 2)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
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
        
        
                echo("<h2>Zadanie 4</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 2 or dzial =3)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
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
        
        
                echo("<h2>Zadanie 5</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a') and (dzial = 1)");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
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
        
                  echo("<h2>Zadanie 6</h2>");
                  $sql = ("SELECT avg(zarobki) as srednia_zarobkow FROM pracownicy, organizacja where dzial=id_org");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>srednia_zarobkow</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["srednia_zarobkow"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");
        
                   echo("<h2>Zadanie 7</h2>");
                  $sql = ("SELECT count(imie) as liczba_kobiet FROM pracownicy, organizacja where dzial=id_org and imie like '%a'");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>liczba_kobiet</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["liczba_kobiet"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");      
        
                  echo("<h2>Zadanie 8</h2>");
                  $sql = ("SELECT sum(zarobki) as suma_zarobkow FROM pracownicy, organizacja where dzial=id_org");
                  echo("<h2>".$sql."</h2>");
                  $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                  $result=$conn->query($sql);
                         echo("<table border=1>");
                         echo("<th>suma_zarobkow</th>");
                        
                         while($row=$result->fetch_assoc()) {
                                  echo("<tr>");
                                        echo("<td>".$row["suma_zarobkow"]."</td>");
                                   echo("</tr>");
                                    }
                         echo("</table>");

        ?>
</html>
