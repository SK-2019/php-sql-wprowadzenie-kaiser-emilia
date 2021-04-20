<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
</head>
        <head>
        <link rel="stylesheet" href="/assets/style.css">
        </head>

    

        <style>
                body {
          background-image: url(https://images4.alphacoders.com/587/thumb-1920-587508.png);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;

                }
	</style>	

<div class="nav">

  <?php
      include("../assets/header.php");
      include("../assets/menu.php");
  ?>

</div>

<div class="con">

<body>
<form action="strona.php" method="POST">
	<input type="text" name="firstname" placeholder="Imie"></br>
	<input type="text" name="lastname" placeholder="Nazwisko"></br>
	<input type="text" name="city" placeholder="Miasto"></br>
	<input type="text" name="phone" placeholder="Numer tel"></br>
	<input type="text" name="poscode" placeholder="Kod pocztowy"></br>
	<input type="submit" value="wyślij do strona.php">
</form>
</body>

  </div>

</html>
