<?php 
 
class CalculateFactorial {
    public function Factorial($integer){

        if ($integer == 0 || $integer == 1){
            // Facorial 1 and Factorial 0 equal to 1
            return 1;

        }elseif ($integer > 1){

            // Calling a recursive function when the integer is bigger than 1
            return ($integer * $this -> Factorial($integer - 1)) ;

        }else{
            // if the variable is smaller than 0 we can not calculate its factorial
            return "Error with negative number";
        }
    }
}


// Let's try factorial of 5
$factorialFive = new CalculateFactorial();

echo "Factorial of 5 is: ".$factorialFive -> Factorial(5);
?>