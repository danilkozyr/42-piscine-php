<?PHP
    if ($_POST['submit'] == "OK") {
        if ($_POST['login']) {
            if (!$_POST['passwd'])
                exit("ERROR\n");
            if (!(file_exists("../private")))
                mkdir("../private", 0777);
            $login = $_POST['login'];
            $passwd = hash("whirlpool", $_POST['passwd']);
            $check = unserialize(file_get_contents("../private/passwd"));
            foreach ($check as $str) {
                if ($str['login'] == $login)
                    exit("ERROR\n");
            }
            $check[] = array('login' => $login, 'passwd' => $passwd);
            file_put_contents("../private/passwd", serialize($check));
            echo "OK\n";
        }
        else {
            exit("ERROR\n");
        }
    }
    else {
        exit("ERROR\n");
    }
?>