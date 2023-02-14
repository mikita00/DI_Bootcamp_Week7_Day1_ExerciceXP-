
<?php
/*
Write a PHP class that sorts an ordered integer array with the help of sort() function.

Sample array :

array(11, -2, 4, 35, 0, 8, -9)
Output :

Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
 */


 // Creating the class 
 class SortArray {

    // Creating a function wich has an array as a parameter and could take many arguments when it's called.
    public function ArrayToSort (int ...$array) {

        sort($array); // Sorting the array's elements

        return $array; // Now return the sorted array
    }
 }

 // Let's do an exemple:

 $array1 = new SortArray();


 // print_r is chosen for displaying the aray's list because it's  the suitable fonction of arrays .

 print_r($array1 -> ArrayToSort(11, -2, 4, 35, 0, 8, -9)) ;

?>
