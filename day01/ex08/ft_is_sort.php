#!/usr/bin/php
<?php
function ft_is_sort(array $arr){
    $temp = $arr;
    sort($temp);
    $i = 0;
    $len = count($arr);
    while ($i < $len){
        if (!(strcmp($temp[$i],$arr[$i])))
            return (0);
        else
            $i++;
    }
    return (1);
}
?>