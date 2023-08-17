<?php
    //Create variables for our posted values
    $title = $_POST['title'];
    $studentNumber = $_POST['studentNumber'];
    $service = $_POST['service'];
    $comments = $_POST['comments'];
    //print the received data:
    echo"<h1>Class: $title</h1>
    <h2><br>Student Number: $studentNumber</h2>
    <p><br>You stated that you thought the class was '$service' and added: $comments</p>";
?>