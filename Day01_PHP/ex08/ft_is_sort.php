<?PHP
    function ft_is_sort($array) {
        $sorted_array = $array;
        sort($sorted_array);
        if ($sorted_array == $array) {
            return 1;
        }
        else {
            return 0;
        }
    }
?>