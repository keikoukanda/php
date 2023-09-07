<?php
//initialise a session

session_start();
if(isset($_POST['submit'])&& !empty($_POST['name'])){
$_SESSION['name']=$_POST['name'];
}


?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
  </head>
    <body>
        <legend>type it!</letgend>
    </body>
</html>