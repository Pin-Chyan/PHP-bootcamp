#!/usr/bin/php
<?php 
$i = 1;
$len = count($argv);
$arr = array();
$include = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/1234567890';

while ($i < $len){
    $arr = array_merge($arr,str_word_count($argv[$i++],1,$include));
}
sort($arr);
$i = 0;
$len = count($arr);
while ($i < $len){
    echo $arr[$i++]."\n";
}
?>