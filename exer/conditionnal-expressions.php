<?php
  include 'menu.php';
 ?>
 <form class="" action="conditionnal-expressions.php" method="get">
   <label for="age">Your age</label>
   <input type="number" name="age" value="0">
   <label for="gender">Your gender</label>
   <input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female">Female
   <input type="submit" name="submit" value="submit">
 </form>
 <?php
 // if ($_GET['age'] >= 21 && $_GET['age'] <= 40 && $_GET['gender'] == 'female') {
 //   echo "Bonjour bienvenue parmis nous";
 // }
 // else {
 //   echo "Désolé, vous ne rentrez pas dans nos conditions";
 // }
 if ($_GET['age'] >= 21 && $_GET['age'] <= 40 && $_GET['gender'] == 'female') {
   echo "Bonjour bienvenue parmis nous";
 }

  ?>
