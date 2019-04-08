<?php
    function    auth($login, $passwd) {
        $arr = unserialize(file_get_contents("../private/passwd"));
        foreach ($arr as $str) {
            if ($str['login'] === $login && $str['passwd'] === hash("whirlpool", $passwd))
                return TRUE;
        }
        return FALSE;
    }
?>