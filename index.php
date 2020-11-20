<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Magra' rel='stylesheet'>

        </head>


<div class="con">
        <body background="glownatapeta.png">
        
<style>
        body{
          background-repeat: no-repeat;
          background-attachment: fixed;

        }
                </style>

<div class="item a">


            <div class="nav">
        linki
        <a class="link 1" href="https://yma.herokuapp.com/">Strona główna</a>  |
        <a class="link 2" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia">GITHUB</a>  |
        <a class="link 3" href="pracownicy.php"><img class="obrazek" src="aard.png">Pracownicy</a>  |
        <a class="link 4" href="pracownicyiorganizacja.php">Prac i Org</a>  |
        <a class="link 5" href="agregat.php">Funkcje Agregujace</a>  |
        <a class="link 6" href="dataiczas.php">Data i Czas</a>  |
        <a class="link 7" href="formularz.html">Formularz</a>  |
        <a class="link 8" href="daneDoBazy.html">Dane do bazy</a>

        </div>

</div>



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
                </div>
</html>
