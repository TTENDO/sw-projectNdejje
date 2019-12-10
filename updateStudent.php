<?php include_once('include/sessionsStudent.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>
<?php
$stdID =$_GET['sid'];

$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.

$ret=mysql_query("select * from student WHERE studentID=$stdID") or die ("Failed to retrieve data".mysql_error());


while($row=mysql_fetch_assoc($ret))
{
$sid2=$row['studentID'];
$sfname2=$row['studentfirstname'];
$slname2=$row['studentlastname'];
$semail2=$row['studentemail'];
$sregNo2=$row['regNo'];
$stel2=$row['studenttelephone'];
$spass2=$row['studentpassword'];
}
?>
<form name="regstudent" method="post" action="">
<table width="1420" height="425" border="0">
  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Change the Student Details and click on 'UPDATE'</strong></center></td>
  </tr>
  <tr>
    <td width="556" height="23">&nbsp;</td>
    <td width="89">First Name</td>
    <td width="177"><input type="text" name="studentfirstname" id="studentfirstname" value="<?php echo $sfname2; ?>"/>&nbsp;</td>
    <td width="580">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Last Name</td>
    <td><input type="text" name="studentlastname" id="studentlastname" value="<?php echo $slname2; ?>"/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Registration no.</td>
    <td><input type="text" name="regNo" id="regNo" value="<?php echo $sregNo2; ?>"/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email</td>
    <td><input type="email" name="studentemail" id="studentemail" value="<?php echo $semail2; ?>"/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

  <tr>
    <td>&nbsp;</td>
    <td>Telephone</td>
    <td><input type="text" name="studenttelephone" id="studenttelephone"  value="<?php echo $stel2; ?>"/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td><input type="password" name="studentpassword" id="studentpassword"  value="<?php echo $spass2; ?>" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td> <input type="submit" name="enter" id="enter" value="UPDATE"/>  &nbsp;<input type="reset" name="Clear" id="clear"value="CLEAR"/></td>
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

$sfname=$_POST['studentfirstname'];
$slname=$_POST['studentlastname'];
$semail=$_POST['studentemail'];
$sregNo=$_POST['regNo'];
$stel=$_POST['studenttelephone'];
$spassword=$_POST['studentpassword'];
$spass=md5($spassword);//decrypting the password


//Updating
$ins=mysql_query("UPDATE student SET studentfirstname='$sfname',studentlastname='$slname',studentemail='$semail',regNo=$sregNo,studenttelephone='$stel',studentpassword='$spass' WHERE studentID=$stdID") or die("Failed to insert data".mysql_error());


if($ins)
{
echo "Details of ".$slname." have been UPDATED";
}


} 

?>
</form>
</body>
</html>

