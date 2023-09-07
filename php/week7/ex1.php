<?php
if (empty($_POST['first_name']) || EMPTY($_POST['last_name']))
echo"<p>You must enter your first and last name. Click your browser's back button to return to the Guest Book.</p>";
else {
$FirstName = $_POST['first_name'];
$LastName = $_POST['last_name'];
$GuestBook = fopen('guestbook.txt', "ab");
if (is_writeable("guestbook.txt")) {
    if (fwrite($GuestBook, $LastName . ", " . $FirstName))
        echo "<p>Thank you for signing our guestbook!</p>";
    else
        echo "<p>Cannot add your name to the guestbook.</p>";
}
else
    echo "<p>Cannot weite to the file.</p>";
    fclose($GuestBook);   
}
$firstcookie="my first cookie!";
$expiry=time() + (60 * 60 * 8);
setcookie("FirstCookie", $firstookie, $expiry, "/");
echo "your first cookie is set and the value is '$firstcookie'";
?>