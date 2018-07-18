<?php
  include 'menu.php';
?>
<br>
<form class="" action="ternaire.php" method="get">
  votre genre
  <input type="radio" name="genre" value="H">Male
  <input type="radio" name="genre" value="F">Female
  <input type="submit" name="submit" value="submit">
</form>
<?php
  $Bonjour = ($_GET['genre'] == 'H') ? 'Hello Sir' : 'Hello Lady';
  echo $Bonjour;
 ?>
