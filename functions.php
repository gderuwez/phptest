<?php
  include 'menu.php';
  function uppercsing ( $input ) {
    echo ucfirst($input);
  }
  echo uppercsing('emile');
  echo '<br>';
  $today = getdate();
  echo $today['weekday'].' '.$today['mday'].'/'.$today['mon'].'/'.$today['year'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds'];
  function adding ($numOne, $NumTwo) {
    if (is_int($numOne) == true && is_int($NumTwo) == true) {
      $total = $numOne + $NumTwo;
      echo $total;
    }
    else {
      echo 'Erreur, argument non numerique';
    }
  }
  echo '<br>';
  adding(1, '2');
  function acronymize ($stringInput) {
    $maj = ucwords($stringInput);
    $pieces = explode(" ", $maj);
    foreach ($pieces as $initials) {
      echo substr($initials, 0, 1).'.';
    }
  }
  echo '<br>';
  acronymize('In code we trust');

  function ashizing ($stringInput) {
    $ashed = str_replace("ae", "æ", $stringInput);
    echo $ashed.' ';
  }
  echo '<br>';
  echo ashizing('caecotrophie').ashizing('chaenichthys').ashizing('microsphaera').ashizing('sphaerotheca');

  function deash ($stringInput) {
    $deashed = str_replace("æ", "ae", $stringInput);
    echo $deashed.' ';
  }
  echo '<br>';
  echo deash('cæcotrophie').deash('chænichthys').deash('microsphæra').deash('sphærotheca');

  function feedback ($messageInput, $classInput = "info"){
    echo '<div class='.$classInput.'>'.$messageInput.'.</div>';
  }
  echo '<br>';
  echo feedback("adresse email incorrecte", "warning");
  echo '<br>';
  echo feedback("adresse email incorrecte");

  function minimize($stringInput) {
    $result = mb_strtolower($stringInput);
    echo $result;
  }
  echo '<br>';
  minimize("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");

  function conevolume($hauteur, $rayon) {
    $volume = (1/3) * pi() * pow($rayon, 2) * $hauteur;
    return $volume;
  }
 ?>
