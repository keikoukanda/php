<?php
    //Create variables for our posted values
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $comments = $_POST['comments'];
    $colour = $_POST['colour'];
    $count = count($extras);
    if (isset($_POST['submit'])){
        echo "<p>Thank you, $name, for your comments</p>
        <p>You stated that you purchased a $colour car and added:<br> \"$comments\"</p>
        <p>You selected $count extrass:<br>";

        foreach($extras as $selected){
            echo $selected."<br>";
        }
    }
    //print the received data:

?>