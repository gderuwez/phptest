
<?php
  include 'menu.php';
 ?>
 <pre>
<?php
  $famille = array('Maman', 'papa', 'frere', 'soeur');
  print_r($famille);
  echo '<br>';
  $plats = array('frites', 'steak');
  print_r($plats);
  $favo = ['film' => 'starwars', 'serie' => 'babylon5'];
  echo '<br>';
  echo $favo['serie'];
  echo '<br>';
  $papa = [
    'nom' => 'Deruwez',
    'prenom' => 'Jacques',
    'age' => 68,
    'height' => 168,
    'aime_coder' => false,
    'aime_le_foot' => false,
    'hobbies' => [
      'peindre',
      'reading',
      'television'
    ]
  ];
  $moi = [
    'nom' => 'deruwez',
    'prenom' => 'guillaume',
    'age' => 32,
    'height' => 176,
    'aime_coder' => true,
    'aime_le_foot' => false,
    'hobbies' => [
      'reading',
      'RPG',
      'videogames',
      'television'
    ],
    'papa' => $papa
  ];
  $toi = [
    'hobbies' => [
        'football',
        'RPG',
        'dancing'
    ]
  ];
  print_r($moi);
  echo "<br>";
  echo count($papa['hobbies']);
  echo "<br>";
  echo count($moi['hobbies']);
  echo "<br>";
  echo count($papa['hobbies']) + count($moi['hobbies']);
  echo "<br>";
  array_push($moi['hobbies'], 'taxidermy');
  print_r($moi['hobbies']);
  $moi['nom'] = 'Dieudonné';
  echo "<br>";
  echo $moi['nom'];
  echo '<br>';
  $compare = array_intersect($moi['hobbies'], $toi['hobbies']);
  print_r($compare);
  $merge = array_merge($moi['hobbies'], $toi['hobbies']);
  echo '<br>';
  print_r($merge);

  $web_development = [ 'frontend' => [], 'backend' => []];
  print_r($web_development);
  array_push($web_development['frontend'], 'xhtml');
  print_r($web_development);
  array_push($web_development['backend'], 'Ruby on rails');
  print_r($web_development);
  array_push($web_development['frontend'], 'CSS');
  print_r($web_development);
  array_push($web_development['backend'], 'Flash');
  print_r($web_development);
  array_push($web_development['frontend'], 'Javascript');
  print_r($web_development);
  $web_development['frontend'][0] = 'html';
  print_r($web_development['frontend'][0]);
  print_r($web_development);
  unset($web_development['backend'][1]);
  print_r($web_development);
 ?>
</pre>
