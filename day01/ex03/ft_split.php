#!/usr/bin/php
<?php
function ft_split(string $str){
    $include = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/1234567890';
    $ret = str_word_count($str,1,$include);
    sort($ret);
    return $ret;
}
$temp = ft_split($argv[1]);
print_r($temp);
?>