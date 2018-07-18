<?php
  function reverse_string($stringToReverse) {
    $result = strrev($stringToReverse);
    return $result;
  }
  function strreplace($stringToReplace) {
    $substitutions = ['E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN'];
    foreach ($substitutions as $value) {
      $newVal = strtolower($value);
      echo '<br>';
      echo str_replace('a', $newVal, $stringToReplace).'<br>';
    }
  }
  include 'menu.php';
  echo reverse_string("string to test");
 ?>
 <pre>
Buvons un coup ma serpette est perdue,
Mais le manche, mais le manche,
Buvons un coup ma serpette est perdue
Mais le manche est revenu.

Bavas a ca ma sarpata a parda,
Ma la macha ma la macha
Bavas a ca ma sarpata a parda
Ma la macha a ravana.
<?php strreplace("Bavas a ca ma sarpata a parda,
Ma la macha ma la macha
Bavas a ca ma sarpata a parda
Ma la macha a ravana.") ?>
</pre>
<?php
  include 'footer.php';
 ?>
