<?php

    // save submitted variables
    $istart = intval($_POST["istart"]);
    $iend = intval($_POST["iend"]);

    // function that returns first Monday of the year
    function firstMonday($year) { 
        return strtotime("Monday January $year");
    }

    // algorithm to print out first Mondays of each inputted year
    // with required data validation
    if($istart < 0 || $iend < 0) { // check for negative numbers
        echo "ERROR: Atleast 1 number is negative.<br>";
    } else {
        if($istart > $iend) { // check if starting year is bigger than ending year
            echo "ERROR: Starting interval is bigger that ending interval.<br>";
        } else { // if all is okay, print the first mondays
            for($x = $istart; $x <= $iend; $x++) {
                echo "The first Monday of year $x is " . date("jS F", firstMonday($x)) . "<br>";
            }
        }
    }
    

?>