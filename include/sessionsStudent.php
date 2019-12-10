<?php
session_start();

if(!empty($_SESSION['studentID']))
{
//CREATING SESSIONS TO HOLD VITAL INFORMATION

$said=$_SESSION['studentID'];
$firstname=$_SESSION['studentfirstname'];
$lastname=$_SESSION['studentlastname'];
$sfullname=$_SESSION['studentfirstname'].' '.$_SESSION['studentlastname'];
}
else
{
//destroy the session if the user is not authenticated
session_destroy();

header("Location: studentLogin.php");
}
?>
