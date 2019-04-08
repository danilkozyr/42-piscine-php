<?PHP
    if ($_POST['submit'] == "OK") {
        if (!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'])
            exit("ERROR\n");
        $login = $_POST['login'];
        $oldpw = hash("whirlpool", $_POST['oldpw']);
        $newpw = hash("whirlpool", $_POST['newpw']);
        $arr = unserialize(file_get_contents("../private/passwd"));
        foreach ($arr as $str) {
            if ($str['login'] === $login) {
                if($str['passwd'] === $oldpw) {
                    $str['passwd'] = $newpw;
                    file_put_contents("../private/passwd", serialize($str));
                    echo "OK\n";
                    exit();
                }
                else
                    exit("ERROR\n");
            }
        }
        exit("ERROR\n");
    }
    else {
        exit("ERROR\n");
    }
?>