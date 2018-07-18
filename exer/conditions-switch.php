<?php
include 'menu.php';
?>
<br>
<form class="" action="conditions.php" method="get">
  <label for="note">Your test result</label>
  <input type="number" name="note" id='note' value="0">
  <input type="submit" name="submit" value="submit">
</form>
<?php

switch ($_GET['note']) {
  case 0:
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo "ce travail est nul";
    break;
  case 6:
  case 7:
  case 8:
  case 9:
    echo "Ce travail n'est pas terrible";
    break;
  case 10:
    echo "tout juste";
    break;
  case 11:
  case 12:
  case 13:
  case 14:
    echo "tout juste";
    break;
  case 15:
  case 16:
  case 17:
  case 18:
    echo "bravo";
    break;
    case 19:
    case 20:
      echo "tricheur";
      break;
  default:
    echo "enter a number between 0 and 20";
    break;
}
?>

<?php
 include 'footer.php';
?>
