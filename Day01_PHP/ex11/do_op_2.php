#!/usr/bin/php
<?PHP
    unset($argv[0]);
    if ($argc == 2) {
        $array = array();
        $str = trim($argv[1]);
        $str = preg_replace('/\s+/', '', $str);
        if (strstr($str, "+"))
            $op = "+";
        else if (strstr($str, "-"))
            $op = "-";
        else if (strstr($str, "*"))
            $op = "*";
        else if (strstr($str, "/"))
            $op = "/";
        else if (strstr($str, "%"))
            $op = "%";
        else {
            echo "Syntax Error\n";
            exit();
        }
        $array = explode($op, $str);
        if (!is_numeric($array[0]) || !is_numeric($array[1])) {
            echo "Syntax Error\n";
            exit();
        }
        $num1 = intval($array[0]);
        $num2 = intval($array[1]);
        if ($op == "+")
            $res = $num1 + $num2;
        else if ($op == "-")
            $res = $num1 - $num2;
        else if ($op == "*")
            $res = $num1 * $num2;
        else if ($op == "/")
            $res = $num1 / $num2;
        else if ($op == "%")
            $res = $num1 % $num2;
        echo $res."\n";
    } else {
        echo "Incorrect Parameters\n";
    }
?>