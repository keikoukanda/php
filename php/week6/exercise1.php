<?php
$CounterFile = "hitcount.txt";
if (file_exists($CounterFile)){
    $Hits = file_get_contents($CounterFile);
    ++$Hits;
}
else{
    $Hits = 1;
    
} 
echo "<h1>they have been $Hits hits to this page.</h1>";
if(file_put_contents($CounterFile, $Hits))

echo "<p> the counter file has been updated</p>";


?>