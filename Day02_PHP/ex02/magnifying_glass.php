#!/usr/bin/php
<?php
    if ($argc == 2) {
        if ($fh = fopen($argv[1], 'r')) {
            while (!feof($fh)) {
                $line = fgets($fh);
                echo $line;
            }
            fclose($fh);
        }
    }
?>
