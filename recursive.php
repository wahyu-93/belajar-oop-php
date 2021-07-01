<?php

function display($number)
{
    if ($number <= 5){
        echo "$number <br>";
        display($number + 1);
    }
}

function faktorial($number)
{
    if ($number == 1 ){
        return 1;
    } else {
        return $number * faktorial($number - 1);
    }
}

// display(1);
echo faktorial(5);