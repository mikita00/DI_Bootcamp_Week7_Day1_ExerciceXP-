<?php
/*
Calculate the difference between two dates using PHP OOP approach.
Sample Dates :

 1981-11-03, 2013-09-04
Expected Result :

Difference : 31 years, 10 months, 1 days
 */

 // Creating the class 
class DifferenceBetweenDates {
    public $startDate; // propriety for the staring date
    public $endDate; // propriety for the ending date

    // Creating a method in which the difference between the two dates will be calculated
    public function Difference(){
        $startDate = date_create($this -> startDate); // Initializing the first date;
        $endDate = date_create($this -> endDate);  // Initializing the second date;
        $dateInterval = date_diff($startDate, $endDate); // Variable for keeping the result of the operation between the two dates 

        // Now displaying the result step by step whith the corresponding strings
        echo "Difference: ".$dateInterval -> y." years, ".$dateInterval -> m." months, ".$dateInterval -> d." days \n\n";

    }
}
// Let's do some examples

// Example 1

// "test1" is an object of "DifferenceBetweenDates" class
$test1 = new DifferenceBetweenDates();

// Here we are calling the the proprieties of the object and assign them the suitables values
$test1 -> startDate = "1996-04-14";
$test1 -> endDate = "2023-02-07";

// Now we are calling the Difference method to get an result.
$test1 -> Difference();

 
// Example 2

$test2 = new DifferenceBetweenDates();
$test2 -> startDate = "2023-01-01";
$test2 -> endDate = "2023-02-08";
$test2 -> Difference();

?>
