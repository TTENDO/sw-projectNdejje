<?php
session_start();

if(!empty($_SESSION['fadminID']))
{
//CREATING SESSIONS TO HOLD VITAL INFORMATION

$faid=$_SESSION['fadminID'];
$firstname=$_SESSION['fadminfirstname'];
$lastname=$_SESSION['fadminlastname'];
$adminfullname=$_SESSION['fadminfirstname'].' '.$_SESSION['fadminlastname'];
}
else
{
//destroy the session ifthe user is not authenticated
session_destroy();

header("Location: index.php");
}
?>
