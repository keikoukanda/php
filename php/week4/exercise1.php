<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>response</title>
    </head>
    <body>
        <?php
        //Create variables for our posted values
        $title = $_POST['title'];
        $name = $_POST['name'];
        $service = $_POST['SERVICE'];
        $comments = $_POST['comments'];
        //print the received data:
        echo"<p>Thank you, $title $name, for your response.</p> <p>you said that the service was '$service' and commented that:<br>$comments</p>";
        ?>
    </body>
</html>