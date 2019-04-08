<?PHP
    function ft_split($str) {
        $val = explode(' ', $str);
        sort($val);
        return $val;
    }
?>