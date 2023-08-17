<?php
    //Create variables for our posted values
    $title = $_POST['title'];
    $name = $_POST['name'];
    $service = $_POST['service'];
    $comments = $_POST['comments'];
    //print the received data:
    echo"<p>Thank you, $title $name, for your response.</p> <p>you said that the service was '$service' and commented that:<br>$comments</p>";
?>