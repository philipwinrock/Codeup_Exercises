<?php




session_start();

$randNum = $_SESSION['randNum'];
$userGuess=$_POST["userGuess"];
if ($userGuess<$randNum) {
            echo "<center>You guessed too low!</center>";
            $_SESSION['guesses']++;
        }
    if ($userGuess>$randNum) {
            echo "<center>You guessed too high!</center>";
            $_SESSION['guesses']++;
        }
    if ($userGuess==$randNum) {
            echo "<center>Congratulations You're right!!!</center>";
                         unset($_SESSION["randNum"], $_SESSION['guesses']);
    }
    

else {
    echo "Uh oh";
}












?>