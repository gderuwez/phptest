<?php
  $localtime = localtime(time(), true);
  $pathtofile = 'excuses.json';
  $excuses = file_get_contents($pathtofile);
  $decode_excuses = json_decode($excuses, true);
  function excuses($sub){
    global $decode_excuses;
    return $decode_excuses[$sub][array_rand($decode_excuses[$sub], 1)];
  }

  switch ($_GET['excuse']) {
    case 1:
      $chosenExcuse = excuses('diseases');
      break;
    case 2:
      $chosenExcuse = excuses('pet');;
      break;
    case 3:
      $chosenExcuse = excuses('extracurricular');;
      break;
    case 4:
      $chosenExcuse = excuses('wacky');;
      break;
    default:
      $chosenExcuse = "I really can't think of an excuse right now";
      break;
  }

  if ($_GET['gender'] == 'Male') {
    $childGender = "his";
  }
  else {
    $childGender = "her";
  }

  include 'menu.php';
 ?>
 <br>
 <div class="w3-container">
   <div class="w3-third w3-center">
     <img src="./assets/images/note.jpg" alt="block note">
   </div>
   <div class="w3-twothird">
     <p class="w3-large">Madame <?php echo $_GET['teacher'] ?>, <br>
     Please excuse the absence of <?php echo $_GET['childName'] ?> today the <?php echo $localtime['tm_mday']; ?>/<?php echo $localtime['tm_mon']; ?>/<?php echo $localtime['tm_year']; ?>. <br>
     The reason for <?php echo $childGender ?> absence is that <?php echo $chosenExcuse ?>. <br>
     I apologize for the inconvenience. <br>
     <br>
     Thanking you in advance.</p>
   </div>
 </div>

 <?php
 include 'footer.php';
  ?>
