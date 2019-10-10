#!/usr/bin/php
<?php
    $trim = trim($argv[1], " ");
    $trim = preg_replace("/\s+\t+/", " ", $trim);
    echo $trim . "\n";
?>