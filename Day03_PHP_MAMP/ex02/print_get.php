<?PHP
    if (strstr($_SERVER['REQUEST_URI'], '?')) {
        $arr = explode('?', $_SERVER['REQUEST_URI']);
        $str = $arr[1];
        $str = explode('&', $str);
        foreach($str as $v) {
            $res = explode('=', $v);
            echo "$res[0]: $res[1]\n";
        }
    }
?>