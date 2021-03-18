<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/inne/favicon.ico">
  <title>Prosty Formularz</title>
</head>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        </head>


            <div class="nav">
            <a class="link a" href="/index.php"><img class="obrazek" src="/inne/igni.png">Strona główna<img class="obrazek" src="/inne/igni.png"></a>  
        <a class="link b" href="https://github.com/SK-2019/php-sql-wprowadzenie-kaiser-emilia"><img class="obrazek" src="/inne/aksji.png">GITHUB<img class="obrazek" src="/inne/aksji.png"></a>  
        <a class="link c" href="/pracownicy-organizacja/pracownicy.php"><img class="obrazek" src="/inne/aard.png"> Pracownicy <img class="obrazek" src="/inne/aard.png"></a>  
        <a class="link d" href="/pracownicy-organizacja/pracownicyiorganizacja.php"><img class="obrazek" src="/inne/quen.png">Prac i Org<img class="obrazek" src="/inne/quen.png"></a>  
        <a class="link e" href="/pracownicy-organizacja/agregat.php"><img class="obrazek" src="/inne/yrden.png">Funkcje Agregujace<img class="obrazek" src="/inne/yrden.png"></a>  
        <a class="link f" href="/pracownicy-organizacja/dataiczas.php"><img class="obrazek" src="/inne/igni.png">Data i Czas<img class="obrazek" src="/inne/igni.png"></a>  
        <a class="link g" href="/dane-do-bazy/formularz.html"><img class="obrazek" src="/inne/aksji.png">Formularz<img class="obrazek" src="/inne/aksji.png"></a>  
       
        <a class="link i" href="/biblioteka/ksiazki.php"><img class="obrazek" src="/inne/quen.png">Książki<img class="obrazek" src="/inne/quen.png"></a>


        </div>



        <style>
                body {
          background-image:url(https://d2ofqe7l47306o.cloudfront.net/games/1920x1080/the-witcher-3-castle.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	


<body>

<div class="con">

<form action="insert.php" method="POST">
	<input type="text" name="name" placeholder="Imie"></br>
	<input type="number" name="dzial" placeholder="Dział"></br>
	<input type="number" name="zarobki" placeholder="Zarobki"></br>
	<input type="date" name="data_urodzenia" placeholder="Data urodzenia"></br>
	<input type="submit" value="wyślij do insert.php">
</form>


<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>



</body>


<?php


require_once("../connect.php");

$sql = ("SELECT id_pracownicy, imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja where dzial=id_org");
$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>usuwanie</th>");


    while($row=$result->fetch_assoc()) {
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>
		
		<td>
		
		<form action='delete.php' method='POST'>
   			<input type='number' name='id' value='".$row['id_pracownicy']."' hidden></br>
   			<input type='submit' value='Usuń'>
		</form>
		
		</td>
		
		");
            echo("</tr>");
        }
    echo("</table>");



?>

</div>
	
</html>
