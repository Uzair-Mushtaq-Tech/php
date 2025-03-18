<?php
$number = 2000;
if(($number % 4 == 0 && $number % 100 !=0)||($number % 400 == 0)){
    echo"Leap Year";
}
else{
    echo"Not A Leap Year";
}
?>
