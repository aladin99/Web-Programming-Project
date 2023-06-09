<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if (isset($_POST["submit"])) {

    $answer1 = $_POST["2"];
    echo "<h1>Odgovori $answer</h1>";
    $i = 0;
    $length=count($keyarray);
    echo "Dužina je: $length";
    while ($i < $length) {
      echo "<p>$i </p>";
      echo $keyarray[$i];
      $i++;
    }
}







?>