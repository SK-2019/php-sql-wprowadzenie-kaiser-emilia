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
                echo("<h1>PRACOWNICY</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT * FROM pracownicy where dzial=2");
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

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT * FROM pracownicy where (dzial=2) or (dzial=3)");
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

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT * FROM pracownicy where zarobki<30");
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

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
          ?>
</html>
