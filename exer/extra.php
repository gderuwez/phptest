<?php
  function factorial($number) {
    $numberarray = range($number, 1);
    $result = array_product($numberarray);
    return $result;
  }
  function prime($number) {
    $test = " is prime";
    $numberarray = range($number-1, 2);
    foreach ($numberarray as $value) {
      if ($number % $value == 0){
        $test = "is not prime";
        break;
      }
    }
    echo $number.$test;
  }
  function sorting() {
    $testArray = ['test', 'tryout', 'veille', 'hate', 'bleeding'];
    asort($testArray);
    return $testArray;
  }
  function lowercompare($stringInput) {
    if($stringInput === strtolower($stringInput)){
      echo "this string is lower case";
    }
    else {
      echo "this string is not lower case";
    }
  }

  function palindromecheck($stringInput) {
    $whiteClear = explode(" ", $stringInput);
    $stringtoCheck = implode($whiteClear);
    $stringArray = str_split($stringtoCheck);
    krsort($stringArray);
    $result = implode($stringArray);
    if($stringtoCheck === $result) {
      echo $stringInput." is a palindrome";
    }
    else {
      echo $stringInput." is not a palindrome";
    }
  }

  include 'menu.php';
  ?>
  <div class="answers">
    <p><?php echo factorial(4);  ?></p>
    <p><?php prime(5);  ?></p>
    <p><?php print_r(sorting()) ?></p>
    <p><?php lowercompare("teststring") ?></p>
    <p><?php lowercompare("testString") ?></p>
    <p><?php palindromecheck('test') ?></p>
    <p><?php palindromecheck('nurses run') ?></p>
  </div>
