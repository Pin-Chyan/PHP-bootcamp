#!/usr/bin/php
<?PHP
date_default_timezone_set("Europe/Paris");
array_shift($argv);
if (!$argv)
    exit();
$temp = preg_replace("/\:/", " ", $argv);
print_r($temp);
echo "\n";
$input = explode(" ", $temp[0]);
print_r($input);
echo "\n";
$input[0] = strtolower(trim($input[0]));
if ($input[0] == "lundi")
   preg_replace("/lundi/","Monday",$input[0]);
else if ($input[0] == "mardi")
   preg_replace("/mardi/","Tuesday",$input[0]);
else if ($input[0] == "mercredi")
   preg_replace("/mercredi/","Wednesday",$input[0]);
else if ($input[0] == "jeudi")
   preg_replace("/jeudi/","Thursday",$input[0]);
else if ($input[0] == "vendredi")
   preg_replace("/vendredi/","Friday",$input[0]);
else if ($input[0] == "samedi")
   preg_replace("/samedi/","Saturday",$input[0]);
else if ($input[0] == "dimanche")
   preg_replace("/dimanche/","Sunday",$input[0]);
else {
   print("Wrong Format\n");
   exit(0);
}
$input[2] = strtolower(trim($input[2]));
if ($input[2] == "janvier")
    $input[2] = 1;
else if ($input[2] == "février")
    $input[2] = 2;
else if ($input[2] == "mars")
    $input[2] = 3;
else if ($input[2] == "avril")
    $input[2] = 4;
else if ($input[2] == "mai")
    $input[2] = 5;
else if ($input[2] == "juin")
    $input[2] = 6;
else if ($input[2] == "juillet")
    $input[2] = 7;
else if ($input[2] == "aout")
    $input[2] = 8;
else if ($input[2] == "septembre")
    $input[2] = 9;
else if ($input[2] == "octobre")
    $input[2] = 10;
else if ($input[2] == "novembre")
    $input[2] = 11;
else if ($input[2] == "décembre")
    $input[2] = 12;
else {
    print("Wrong Format\n");
    exit(0);
}
if (!mktime($input[4], $input[5], $input[6], $input[2], $input[1], $input[3]))
    print("Wrong Format\n");
else
    echo mktime($input[4], $input[5], $input[6], $input[2], $input[1], $input[3]);
?>