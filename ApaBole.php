<?php

function fizzBuzz($angka)
{

    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "ApaBole </br>";
        

    } elseif ($angka % 3 == 0) {
        echo "Apa </br>";
        

    } elseif ($angka % 5 == 0) {
        echo "Bole <br>";
        

    } else {
        echo $angka . "</br>";
    }
}

for ($i = 1; $i <= 100; $i++) { 
    fizzBuzz($i);
    
}

?>