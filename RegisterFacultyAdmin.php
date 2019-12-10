<!<?php include_once('include/sessionsAdmin.php')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>
<form name="regadmin" method="post" action="">
<table width="1420" height="425" border="0">
  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Enter the details of the Faculty Admin</strong></center></td>
  </tr>
  <tr>
    <td width="556" height="23">&nbsp;</td>
    <td width="89">First Name</td>
    <td width="177"><input type="text" name="fadminfirstname" id="fadminfirstname" />&nbsp;</td>
    <td width="580">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Last Name</td>
    <td><input type="text" name="fadminlastname" id="fadminlastname" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email</td>
    <td><input type="email" name="fadminemail" id="fadminemail" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Telephone</td>
    <td><input type="text" name="fadmintelephone" id="fadmintelephone" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td><input type="password" name="fadminpassword" id="fadminpassword" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td> <input type="submit" name="enter" id="enter" value="Submit"/>  &nbsp;<input type="reset" name="Clear" id="clear"value="Clear"/></td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td colspan="4" style="background-color:#000000; color:#FFFFFF;"><center><b><?php include_once('footer.php');?></b></center></td>
  </tr>
</table>

<?php

if(isset($_REQUEST['enter']))
{

$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.

$ffname=$_POST['fadminfirstname'];
$flname=$_POST['fadminlastname'];
$femail=$_POST['fadminemail'];
$ftel=$_POST['fadmintelephone'];
$fpassword=$_POST['fadminpassword'];
$fpass=md5($fpassword);//decrypting the password


//inserting
$ins=mysql_query("INSERT INTO fadmin(fadminfirstname,fadminlastname,fadminemail,fadmintelephone,fadminpassword) VALUES ('$ffname','$flname','$femail','$ftel','$fpass')") or die("Failed to insert data".mysql_error());

if($ins)
{
echo "Details of ".$flname." have been inserted";
}


} 

?>
</form>
</body>
</html>
