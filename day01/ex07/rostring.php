#!/usr/bin/php
<?php
$include = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/1234567890';
function print_n(string $str, int $index, int $mode){
    if ($mode == 0){
        while ($str[$index]){
            echo $str[$index++];
        }
    }
    else if ($mode == 1 || $mode == -1){
        while ($str[$index] && $str[$index] != ' '){
            if ($mode == 1){
                echo ($str[$index]);
            }
            $index++;
        }
        return $index + 1;
    }
}

$arg = count($argv);
$i = 0;
$index = 0;
if ($arg >= 2){
    if (str_word_count($argv[1],0,$include) > 1)
    {
        print_n($argv[1],print_n($argv[1],0,-1),0);
        echo " ";
        $index = print_n($argv[1],0,1);
    }
    else
        echo $argv[1];
    echo "\n";
}
?>