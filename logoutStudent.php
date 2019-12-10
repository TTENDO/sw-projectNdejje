<?php

//importing the sessions file

include('include/sessionsStudent.php');

session_destroy();//destroying all sessions

header("Location:studentLogin.php");//redirecting to home page

exit;

?>
