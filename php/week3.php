<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<table>
    <tr>
        <th>Day</th><th>Class</th>
    </tr>

<?php
$classes = array(
    'Monday' => 'HTML',
    'Tuesday' => 'PHP',
    'Wednesday' => 'Project',
    'Thurdday' => 'JavaScript',
    'Friday' => 'Database',
);
// Print each key and value
foreach($classes as $day => $subject){
    echo "<tr><td>$day</td><td>$subject</td></tr>";
}
?>
</table>
</body>
<html>