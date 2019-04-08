#!/usr/bin/php
<?PHP
    unset($argv[0]);
    if ($argc == 4) {
        $num1 = trim($argv[1]);
        $op = trim($argv[2]);
        $num2 = trim($argv[3]);
        if ($op == "+") {
            $res = $num1 + $num2;
        } else if ($op == "-") {
            $res = $num1 - $num2;
        } else if ($op == "*") {
            $res = $num1 * $num2;
        } else if ($op == "/") {
            $res = $num1 / $num2;
        } else if ($op == "%") {
            $res = $num1 % $num2;
        }
        echo $res."\n";
    } else {
        echo "Incorrect Parameters\n";
    }
?>