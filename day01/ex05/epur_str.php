#!/usr/bin/php
<?php
$len = count($argv);
$arr = array();
$i = 0;
$arr_len = 0;
$include = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/1234567890';

if ($len == 2){
    $arr = str_word_count($argv[1],1,$include);
    $arr_len = count($arr);
    echo $arr[$i++];
    while ($i < $arr_len){
        echo " ".$arr[$i++];
    }
    echo $arr[++$i];
    echo "\n";
}
?>