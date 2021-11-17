<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

//create the HTMl markup for the below code.

   <?php

// check to see if the entered number is numeric first, then check if it greater than 0, and finally check if it is a whole number
    if (is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)){
        $i = 2;
        // create a boolean variable to hold the true or false state of each iteration
        $isPrime = true;
        // create an iteration to check every number up until the entered number
    
            while ($i < $_GET["number"]){
                // chck to see if the entered number is divisible by $i in each iteration. 
                if ($_GET['number'] % $i == 0){
                    // If the entered number is divisible by $i, then $isPrime is set to true.
                    $isPrime = false;
                } 
                
                $i++;
            }
        // echo a message based on whether or not $isPrime is true for every iteration.
        if ($isPrime){
            echo "<p id='result'>".$i." is a prime number </p>"; 
            }else { 
                echo "<p id='result'>".$i." is not a prime number </p>"; 
                } 
    } //create a conditional for when the user enters a number that does not meet the criteria.
     else {
        echo "<p id='result'>Please enter a positive, whole number.</p>";
    }
    ?>
 </body>
 </html>