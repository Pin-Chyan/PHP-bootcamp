#!/usr/bin/php
<?php
// $age = array("toto"=>"35", "A2"=>"37" , "_hop"=>"37" , "Ah"=>"43", "4234" =>"42" , "1948" =>"19" , "##" =>"12" , "tutu" =>"49" , "XXX" =>"76");
// ksort($age);

$age = array("toto"=>"35", "A2"=>"37" , "_hop"=>"37" , "Ah"=>"43", "4234" =>"42" , "1948" =>"19" , "##" =>"12" , "tutu" =>"49" , "XXX" =>"76");
arsort($age);

// $age = array("toto"=>"35", "A2"=>"37" , "_hop"=>"37" , "Ah"=>"43", "4234" =>"42" , "1948" =>"19" , "##" =>"12" , "tutu" =>"49" , "XXX" =>"76");
// krsort($age);

foreach($age as $x => $x_value)
    {
    echo$x;
    echo "\n";
    }
?>