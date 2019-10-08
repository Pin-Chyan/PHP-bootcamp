#!/usr/bin/php
<?php

    function check_nbr(string $c)
    {
    $i = 0;
    if($c[0] == '-')
        $i++;
    while ($c[$i])
    {
        if (!($c[$i] >= '0' && $c[$i] <= '9')){
            return (1);
        }
        $i++;
    }
    return (0);
    }

    echo "Enter a number: ";
    while ($number = rtrim(fgets(STDIN))){
        if (check_nbr($number)){
            echo "'".$number."' is not a number";
        }
        else{
            if ($number % 2 == 0){
                echo "The number ".$number." is even";
            }
            else{
                echo "The number ".$number." is odd";
            }
        }
        echo "\nenter a number:";
    }
    echo "\n";
?>