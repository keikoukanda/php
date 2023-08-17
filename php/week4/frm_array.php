<?php
//check if the form has already been submitted. If it has not been submitted then show the form

if(!isset($_POST['submit']))
{
?>
Select from the list below:<br>
<form action="<?php echo $_SERVER['PHP_SELF']?>"method="POST">

//Puts all the selects into an array(sometimes the [] is left off as the selects are automatcally made into arrays)

    <select name="options[]" multiple>
    <option value="cakes">cakes</option>
    <option value="chocolate">chocolate</option>
    <option value="pies">pies</option>
    </select>
<input type="submit" name="submit" value="select">
</form>
<?php
}
else{

    //this checks to see if it is an array. More precisely if nothing has been selected then an array has not been made therefore it defaults to he else 'nothing ...'.

    if(!empty($_POST['options']))
    {
        echo'Your selection is:<br>';
        //for each can work directly with post valules. here the for each statement puts each options selected into the variable $o (o for options) then displays the selected value as a variable.

        foreach($_POST['options'] as $o)
        {
            echo"$o<br>";
        }
        }
        else{
            echo'Nothing has been seleted';
        }
    }
?>