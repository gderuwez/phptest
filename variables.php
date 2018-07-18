<?php
  $Prenom = "Guillaume";
  $Age = 32;
  $Satiation = "Pas faim";
  $Eye_color = "Green";
  $Famille = array('Papa' => "Jacques" , 'Maman' => 'Françoise', 'Frere' => 'Bart' );
  include('./menu.php');
  echo $Prenom;
  echo $Age;
  echo $Satiation;
  include('./footer.php');
 ?>
