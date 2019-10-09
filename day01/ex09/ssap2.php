#!/usr/bin/php
<?php
    function multisort($a, $b)
    {
        $a = strtolower($a);
        $b = strtolower($b);
        $i = 0;
        $arr = 0;

        while ($a[$i] && $b[$i])
        {
            if (ctype_alpha($a[$i]))
                $arrA = 0;
            else if (ctype_digit($a[$i]))
                $arrA = 1;
            else
                $arrA = 2;
            if (ctype_alpha($b[$i]))
                $arrB = 0;
            else if (ctype_digit($b[$i]))
                $arrB = 1;
            else
                $arrB = 2;
            if ($arrA - $arrB)
                return (($arrA - $arrB));
            else if ($a[$i] != $b[$i])
                return (($a[$i] < $b[$i]) ? -1 : 1);
            $i++;
        }
        return ($arrA[$i] == '\0' ? -1 : 1);
    }
    array_shift($argv);
    $arr = explode("\n", preg_replace("/\ +/", "\n", implode("\n", $argv)));
    usort($arr, multisort);
    echo implode("\n", $arr) . "\n";
?>