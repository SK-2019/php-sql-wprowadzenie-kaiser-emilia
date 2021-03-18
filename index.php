<!DOCTYPE html>
<html>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        <link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
        <link rel="shortcut icon" href="/inne/favicon.ico">
        <title>Emilia Kaiser</title>

        </head>



        
<style>
        body{
            background-image:url(https://static.cdprojektred.com/thewitcher.com/media/wallpapers/witcher3/full/witcher3_pl_wallpaper_wiedzmin_3_dziki_gon_geralt_i_trofea_1920x1080_1449484775.png);          
            background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

        }
                </style>




            <div class="nav">
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="/inne/aksji.png">GITHUB<img class="obrazek" src="/inne/aksji.png"></a>  
        <a class="link c" href="/pracownicy-organizacja/pracownicy.php"><img class="obrazek" src="/inne/aard.png"> Pracownicy <img class="obrazek" src="/inne/aard.png"></a>  
        <a class="link d" href="/pracownicy-organizacja/pracownicyiorganizacja.php"><img class="obrazek" src="/inne/quen.png">Prac i Org<img class="obrazek" src="/inne/quen.png"></a>  
        <a class="link e" href="/pracownicy-organizacja/agregat.php"><img class="obrazek" src="/inne/yrden.png">Funkcje Agregujace<img class="obrazek" src="/inne/yrden.png"></a>  
        <a class="link f" href="/pracownicy-organizacja/dataiczas.php"><img class="obrazek" src="/inne/igni.png">Data i Czas<img class="obrazek" src="inne/igni.png"></a>  
        <a class="link g" href="/dane-do-bazy/formularz.html"><img class="obrazek" src="/inne/aksji.png">Formularz<img class="obrazek" src="/inne/aksji.png"></a>  
        <a class="link h" href="/dane-do-bazy/daneDoBazy.php"><img class="obrazek" src="/inne/aard.png">Dane do bazy<img class="obrazek" src="/inne/aard.png"></a>
        <a class="link i" href="/biblioteka/ksiazki.php"><img class="obrazek" src="/inne/quen.png">Książki<img class="obrazek" src="/inne/quen.png"></a>


        </div>



<div class="con">

        <?php
         echo("testtest");
                echo("<h1>Emilia Kaiser</h1>");
                echo("<h2>Zadanie 1</h2>");
                $sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
                echo("<h2>".$sql."</h2>");
                require_once("..assets/connect.php");
                
                
                //$conn = new mysqli($servername, $username, $password, $dbname);                
                //$conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>data_urodzenia</th>");
                        echo("<th>nazwa_dzial</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
        
        
                echo("<h2>Zadanie 2</h2>");
                $sql = ("SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) and (imie like '%a')");
                echo("<h2>".$sql."</h2>");
                $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                  $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                  $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
                  $conn=new mysqli($_SERVER['servername'], $_SERVER['username'], $_SERVER['password'], $_SERVER['dbname']);
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
