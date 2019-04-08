#!/usr/bin/php
<?PHP 
    $array = array();
    $str = preg_replace('/\s+/', ' ', $argv[1]);
    $str = trim($str, ' '); 
    $array = explode(' ', $str);
    $str3 = $array[0];
    unset($array[0]);
    foreach($array as $str) {
        echo $str. " ";
    }
    echo $str3."\n";
?>