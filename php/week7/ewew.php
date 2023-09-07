<?php
$firstcookie="my first cookie!";
//$expiry=time() + (60 * 60 * 8);
$expiry=time() - 60;
        setcookie("FirstCookie", $firstcookie, $expiry, "/");
setcookie("FirstCookie", $firstcookie, $expiry, "/");
echo "your first cookie is set and the value is '$firstcookie'";
?>

<html>
    <body>
        <?php
        $visits = 1;
        if(isset($_COOKIE["visits"])) {
            $visits=(int)$_COOKIE["visits"];
        }
        setcookie("visits", $visits=1, time() + (60 * 60 * 24 * 30));
        echo "you have visited this page $visits time(s).";
        $expiry=time() - 60;
        setcookie("FirstCookie", $firstcookie, $expiry, "/");
        ?>
    </body>
</html>