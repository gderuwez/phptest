<?php
  include 'menu.php';

  $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
  foreach ($pronoms_personnels as $value) {
    // echo $value .'<br>';
    switch ($value) {
      case 'Je':
      case 'Il/Elle':
        echo $value . ' code <br>';
        break;
      case 'Tu':
        echo $value . ' codes <br>';
        break;
      case 'Nous':
        echo $value . ' codons <br>';
        break;
      case 'Vous':
        echo $value . ' codez <br>';
        break;
      case 'Elles/Ils':
        echo $value . ' codent <br>';
        break;
      default:
        'something went terribly wrong here';
        break;
    }
  }
  $number = 1;
  while ($number <= 120) {
    echo $number . ' ';
    $number++;
  }
  echo '<br>';
  for ($number2 = 1; $number2 <= 120; $number2++) {
    echo $number2 . ' ';
  }
  echo '<br>';
  $classe = ['Charlotte', 'Adrien', 'Merry', 'Colombe', 'Stephane', 'Guillaume D', 'Guillaume K', 'Eric', 'Alex', 'marie', 'and so on', 'and so forth'];
  foreach ($classe as $value2) {
    echo $value2 . " ";
  }
  echo '<br>';
  $countries = [
    'BE' => 'Belgique',
    'FR' => 'France',
    'CA' => 'Canada',
    'GB' => 'UK',
    'US' => 'USA',
    'MX' => 'Mexique',
    'ES' => 'Espagne',
    'IT' => 'Italie',
    'SE' => 'Suede',
    'CH' => 'Suisse'
  ];
  echo '<select name="countries">';
  foreach ($countries as $key => $selected) {
    echo '<option value='.$countries[$key].'>'.$countries[$key].'</option>';
  }
  echo '</select>';
 ?>
