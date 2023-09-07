<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="ex2.php" method="post">
    <fieldset>
      <legend>type it!</legend>
      <p>
        <label>Enter your name to sign our guest book</label>
      </p>
      <p>
        <label>First Name</label>
        <input type="text" name="first_name" size="20" />
      </p>
      <p>
        <label>Last Name</label>
        <input type="text" name="last_name" size="20" />
      </p>

      <input type="submit" name="submit" value="Send" />
      <a href = 'guestbook.txt'> show guest book</a>
    </fieldset>
    </form>
  </body>

  <?php
  if (empty($_POST['first_name']) || empty($_POST['last_name']))
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
  
  ?>

</html>
