<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
            <div class="nav">
        linki
        <a href="https://yma.herokuapp.com/">Strona główna</a>  |
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia">GITHUB</a>  |
        <a href="pracownicy.php">Pracownicy</a>  |
        <a href="pracownicyiorganizacja.php">Prac i Org</a>  |
        <a href="agregat.php">Funkcje Agregujace</a>  |
        <a href="dataiczas.php">Data i Czas</a>

</div>          <?php
                echo("<h1>Pracownicy i Organizacja</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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


                echo("<h2>Zadanie 3</h2>");
                $sql = ("SELECT imie, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a')");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
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

</html>
