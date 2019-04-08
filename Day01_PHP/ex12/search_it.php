#!/usr/bin/php
<?php
    if ($argc < 3) {
        exit();
    }
    $str = $argv[1];
    unset($argv[0]);
    unset($argv[1]);
    $argv = array_reverse($argv);
    foreach ($argv as $s) {
        $tmp = explode(":", $s);
        if ($str == $tmp[0]) {
            echo $tmp[1];
            echo "\n";
            exit();
        }
    }
?>
