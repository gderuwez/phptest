<?php
  include 'menu.php';
 ?>
<form class="" action="result.php" method="get">
  <label for="childName">Name of the child</label>
  <input type="text" name="childName" id="childName">
  <label for="teacher">Name of the teacher</label>
  <input type="text" name="teacher" id="teacher">
  <br>
  Reason for absence ?
  <br>
  <input type="radio" name="excuse" value="1">disease <br>
  <input type="radio" name="excuse" value="2">death of pet (or family member) <br>
  <input type="radio" name="excuse" value="3">Important extracurricular activity <br>
  <input type="radio" name="excuse" value="4">Alien abduction <br>
  <input type="submit" name="submit" value="submit">
</form>
 <?php
 include 'footer.php';
  ?>
