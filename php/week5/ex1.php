<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>ex4</title> 

</head> 

<?php 
//Create variables for our posted values 
$days = $_POST['Days'];

switch ($days)  {
  case 'Monday':
    echo "Laugh on Monday, laugh for danger.";
    break;
  case 'Tuesday':
    echo "Laugh on Tuesday, kiss a stranger.";
    break;
  case 'Wedneseday':
    echo "Laugh on Wednesday, laugh for a letter.";
    break;
  case 'Thursday':
    echo "Laugh on Thursday, something better.";
    break;
  case 'Friday':
    echo "Laugh on Friday, laugh for sorrow.";
    break;
  case 'Saturday':
    echo "Laugh on Saturday, joy tomorrow.";
    break;
  case 'Sunday':
    echo "Laugh on Sunday, sad tomorrow.";
    break;
}

?> 
<br>
<button onclick="history.back()">Back</button>
</body> 
</html> 