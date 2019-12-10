<?php

//importing the sessions file

include('include/sessionsAdmin.php');

session_destroy();//destroying all sessions

header("Location:index.php");//redirecting to home page

exit;

?>
