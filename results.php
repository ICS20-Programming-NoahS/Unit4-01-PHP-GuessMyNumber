

<?php
$result = "";
define("MIN", 1);
define("MAX", 6);

$userGuess = $_POST["userGuess"];

$generator = rand(MIN, MAX);

if ($userGuess == $generator) {
  echo "Great job, you guessed the number correctly!";
}

if ($userGuess != $generator) {
  echo "Wrong, try again.";
}
?>
