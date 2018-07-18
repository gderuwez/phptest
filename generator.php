<?php
  $alphabet = array_combine(range(1,26), range('a','z'));
  function generator() {
    global $alphabet;
    for ($i = 0; $i <= rand(1, 5); $i++) {
      $key = rand(1, 26);
      $letter = $alphabet[$key];
      echo $letter;
    }
    echo ' ';
    for ($i = 0; $i <= rand(7, 15); $i++) {
      $key = rand(1, 26);
      $letter = $alphabet[$key];
      echo $letter;
    }
  }
  include 'menu.php';
  generator();
  echo '<br>';
  echo '<button class="w3-button w3-black" onclick="reload()">refresh</button>';
  echo '<br>';
  echo '<script>function reload(){location.reload();}</script>'
?>
