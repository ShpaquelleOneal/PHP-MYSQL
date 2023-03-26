<?php
    header("Content-Type:text/plain");

    echo "Part2, subtask 1\n";
    //create an array with all the letters
    $letters = array("a", "ā", "b", "c", "č", "d", "e", "ē", "f", "g", "ģ", "h", "i", "ī", "j", "k", "ķ", "l", "ļ", "m", "n", "ņ", "o", "p", "r", "s", "š", "t", "u", "ū", "v", "z", "ž");
    $printarr = array();
    foreach($letters as $letter) { 
        //iterate through each one, add to the new array and print after each adding
        array_push($printarr, $letter);
        foreach($printarr as $let) {
            echo $let;
        }
        echo "\n";
    }

    echo "\nPart 2, subtask 2\n";
    // function that returns first Monday of the year
    function firstMonday($year) { 
        return strtotime("Monday January $year");
    }

    // test the function
    $years = array(2023, 2030, 2016, 2017);
    foreach($years as $year) {
        echo "The first Monday of year $year is " . date("jS F", firstMonday($year)) . "\n";
    }

?>
