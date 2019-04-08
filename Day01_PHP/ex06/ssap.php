#!/usr/bin/php
<?PHP 
    $array = array();
    unset($argv[0]);
    foreach ($argv as $str) {
        $str = preg_replace('/\s+/', ' ', $str);
        $str = trim($str, ' ');
        $str_arr = explode(' ', $str);
        foreach ($str_arr as $str2)
            $array[] = $str2;
    }
    sort($array);
    foreach($array as $str) {
        echo $str."\n";
    }
?>