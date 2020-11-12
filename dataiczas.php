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

</div>

        <?php

                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT * , nazwa_dzial, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where id_org=dzial;");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>wiek</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT * , nazwa_dzial, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where id_org=dzial and nazwa_dzial = 'serwis'");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>wiek</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 3</h2>");
                $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma FROM pracownicy");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>suma</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["suma"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 4</h2>");
                $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma from pracownicy, organizacja WHERE id_org=dzial and nazwa_dzial = 'handel'");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>suma</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["suma"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 5</h2>");
                $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWiekuKobiet from pracownicy WHERE imie LIKE '%a'");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>SumaWiekuKobiet</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["SumaWiekuKobiet"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 6</h2>");
                $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWiekuMezcyzn from pracownicy WHERE imie NOT LIKE '%a'");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>SumaWiekuMezcyzn</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["SumaWiekuMezcyzn"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 7</h2>");
                $sql = ("SELECT AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SredniaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>SredniaWieku</th>");
                        echo("<th>nazwa_dzial</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["SredniaWieku"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 8</h2>");
                $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>SumaWieku</th>");
                        echo("<th>nazwa_dzial</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["SumaWieku"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 9</h2>");
                $sql = ("SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa_dzial</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 10</h2>");
                $sql = ("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>min</th>");
                        echo("<th>nazwa_dzial</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 11</h2>");
                $sql = ("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as minlat, nazwa_dzial, imie from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>minlat</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>imie</th>");



                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["minlat"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["imie"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                echo("<h2>Zadanie 12</h2>");
                $sql = ("SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS dni_zycia FROM pracownicy");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<table border=1>");
                        echo("<th>imie</th>");
                        echo("<th>dni_zycia</th>");


                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");



                echo("<h2>Zadanie 12</h2>");
                $sql = ("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1");
                echo("<h2>".$sql."</h2>");
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql);
                include("connect.php");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>wiek</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");





        ?>
</html>
