<?PHP
    session_start();
    if ($_GET['submit'] === "OK" && $_GET['login'] && $_GET['passwd']) {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
?>

<html>
    <title>d04.ex00</title>
    <style>
        body {background-color: #EFF4C7}
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    <body>
        <form action="index.php" method="get">

    <label for="name">Username: </label>
            <input type="text" name="login" placeholder="Name" value="<?php echo $_SESSION['login']; ?>" />
            <br/>
            
            <label for="pass">Password: </label>
            <input type="password" name="passwd" placeholder="Password" value="<?php echo $_SESSION['passwd']; ?>" size="31"/>
            <br/>

            <input type="submit" name="submit" value="OK"/>

        </form>
    </body>
</html>
