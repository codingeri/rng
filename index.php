<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
 
 include "dice.php"; 

 function rollDice()
 {
    if ($_POST)
    {
        $errors = [];

        $diceCount = $_POST["diceCount"];

        $diceSides = $_POST["diceSides"];
        $diceSides = intval($diceSides);

        if($diceCount == "")
        {
            $errors[] = "please fill in all fields";
            echo "please fill in all fields";
        }

        if(count($errors) == 0)
        {
            $dices = [];

            foreach (range(1, $diceCount) as $dice)
            {
                $min = 1 * 1;
                $max = 1 * $diceSides;

                $dice = rand($min, $max);
                
                $dices[] = $dice;
            }

            $count = 0;

            foreach ($dices as $dice)
            {
                $count++;
                echo "<br>";
                echo "dice number " . $count . " : " . $dice;
                
            }

            $result = array_sum($dices);

            echo "<br>";
            echo "sum = " . $result;
        }
    }
}