#!/usr/bin/php
<?php
    $str = preg_replace('/[\t \r]+/', ' ', $argv[1]);
    $str = trim($str);
    if ($argc > 1)
        echo $str."\n";
?>
