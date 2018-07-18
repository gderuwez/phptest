<?php
include 'menu.php';
?>
<br>
<!-- <form class="" action="conditions.php" method="get">
  <label for="age">Your age?</label>
  <input type="text" name="age" id="age">
  <label for="gender">Your gender</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <label for="language">Can you speak english</label>
  <input type="radio" name="language" value="yes">Yes
  <input type="radio" name="language" value="no">No
  <input type="submit" name="submit" value="submit">
</form> -->
<form class="" action="conditions.php" method="get">
  <label for="note">Your test result</label>
  <input type="number" name="note" id='note' value="0">
</form>
<?php
// $chambre_est_sale = "sale";
//
// // if($chambre_est_sale == True) {
// //   echo "Nettoye là";
// // }
// // else {
// //   echo "joue un peu";
// // }
//
// if($chambre_est_sale == "degoutante") {
//   echo "flame thrower";
// }
// elseif ($chambre_est_sale == "sale") {
//   echo "nettoye";
// }
// elseif ($chambre_est_sale == "en ordre") {
//   echo "bien";
// }
// elseif ($chambre_est_sale == "immaculée") {
//   echo "trop bien";
// }
// else {
//   echo "tu est maniaque";
// }

// $localtime = localtime(time(), true);
//
// print($localtime['tm_hour']);
//
// if ($localtime['tm_hour'] >= 5 && $localtime['tm_hour'] <= 9) {
//   echo "Bonjour!";
// }
// elseif ($localtime['tm_hour'] > 9 && $localtime['tm_hour'] <= 12) {
//   echo "Bonne Journée!";
// }
// elseif ($localtime['tm_hour'] > 12 && $localtime['tm_hour'] <= 16) {
//   echo "Bonne après-midi";
// }
// elseif ($localtime['tm_hour'] > 16 && $localtime['tm_hour'] <= 21) {
//   echo "Bonne soirée";
// }
// else {
//   echo "Bone Nuit";
// }

// if ($_GET['age'] < 12) {
//   echo "Salut petit";
// }
// elseif ($_GET['age'] >= 12 && $_GET['age'] <= 18) {
//   echo "Salut l'ado";
// }
// elseif ($_GET['age'] > 18 && $_GET['age'] <= 115) {
//   echo "Salut l'adulte";
// }
// elseif ($_GET['age'] > 115) {
//   echo "wow";
// }
// else {
//   echo "complete the form";
// }

// if ($_GET['age'] < 12) {
//   if($_GET['gender'] == 'female') {
//     echo "Salut la petite";
//   }
//   else {
//     echo "Salut le petit";
//   }
// }
// elseif ($_GET['age'] >= 12 && $_GET['age'] <= 18) {
//   if ($_GET['gender'] == 'female') {
//     echo "Salut l'adolescente";
//   }
//   else {
//     echo "Salut l'ado";
//   }
// }
// elseif ($_GET['age'] > 18 && $_GET['age'] <= 115) {
//   echo "Salut l'adulte";
// }
// elseif ($_GET['age'] > 115) {
//   if ($_GET['gender'] == 'female') {
//     echo "wow toujours vivante ?";
//   }
//   else {
//     echo "wow toujours vivant ?";
//   }
// }
// else {
//   echo "complete the form";
// }
//
// if ($_GET['age'] < 12) {
//   if ($_GET[language] == 'yes') {
//     if($_GET['gender'] == 'female') {
//       echo "Hello girl";
//     }
//     else {
//       echo "Hello boy";
//     }
//   }
//   else {
//     if($_GET['gender'] == 'female') {
//       echo "Salut la petite";
//     }
//     else {
//       echo "Salut le petit";
//     }
//   }
// }
// elseif ($_GET['age'] >= 12 && $_GET['age'] <= 18) {
//   if ($_GET['language'] == "yes") {
//     if ($_GET['gender'] == 'female') {
//       echo "Hello teenage girl";
//     }
//     else {
//       echo "hello teenage boy";
//     }
//   }
//   else {
//     if ($_GET['gender'] == 'female') {
//       echo "Salut l'adolescente";
//     }
//     else {
//       echo "Salut l'ado";
//     }
//   }
// }
// elseif ($_GET['age'] > 18 && $_GET['age'] <= 115) {
//   if ($_GET['language'] == 'yes') {
//     if ($_GET['gender'] == 'female') {
//       echo "Hello Lady";
//     }
//     else {
//       echo "Hello Sir";
//     }
//   }
//   else {
//     echo "Salut l'adulte";
//   }
// }
// elseif ($_GET['age'] > 115) {
//   if ($_GET['language'] == 'yes') {
//     if ($_GET['gender'] == 'female') {
//       echo "we won't go old yeller on you old lady";
//     }
//     else {
//       echo "we won't go old yeller on you old man";
//     }
//   }
//   else {
//     if ($_GET['gender'] == 'female') {
//       echo "wow toujours vivante ?";
//     }
//     else {
//       echo "wow toujours vivant ?";
//     }
//   }
// }
// else {
//   echo "complete the form";
// }

if ($_GET['note'] >= 0 && $_GET['note'] <= 5) {
  echo "ce travail est nul";
}
elseif ($_GET['note'] >= 6 && $_GET['note'] <= 9) {
  echo "Ce travail n'est pas terrible";
}
elseif ($_GET['note'] == 10) {
  echo "tout juste";
}
elseif ($_GET['note'] >= 11 && $_GET['note'] <= 14) {
  echo "pas mal";
}
elseif ($_GET['note'] >= 15 && $_GET['note'] <= 18) {
  echo "bravo";
}
elseif ($_GET['note'] == 19 || $_GET['note'] == 20) {
  echo "tricheur";
}
else {
  echo "enter a number between 0 and 20";
}
?>

<?php
 include 'footer.php';
?>
