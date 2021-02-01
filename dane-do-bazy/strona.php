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
        <a class="link h" href="daneDoBazy.php"><img class="obrazek" src="aard.png">Dane do bazy<img class="obrazek" src="aard.png"></a>

        </div>

  
</html> 


        
<style>
        body{
          background-image:url(https://images6.alphacoders.com/548/thumb-1920-548302.jpg);     
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
                </style>

  
<?php
include("connect.php");
echo("<li> imie: ".$_POST['firstname']."</li>");
echo("<li> nazwisko: ".$_POST['lastname']."</li>");
echo("<li> miasto: ".$_POST['city']."</li>");
echo("<li> numer tel: ".$_POST['phone']."</li>");
echo("<li> kod pocztowy: ".$_POST['poscode']."</li>");


$sql="INSERT INTO 'pracownicy'('id', 'imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES (null,'józef',2,23,'2001-10-23')";
$conn->query($sql);

?>
