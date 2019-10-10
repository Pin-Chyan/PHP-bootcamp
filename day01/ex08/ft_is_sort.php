#!/usr/bin/php
<?php
function ft_is_sort(array $arr){
    $temp = $arr;
    sort($temp);
    print_r($temp);
    $i = 0;
    $len = count($arr);
    while ($i < $len){
        if (strcmp($temp[$i],$arr[$i]))
            return (1);
        else
            $i++;
    }
    return (0);
}

$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";

if (ft_is_sort($tab))
    echo "The array is not sorted\n";
else
    echo "The array is sorted\n";
echo "\n";
?>