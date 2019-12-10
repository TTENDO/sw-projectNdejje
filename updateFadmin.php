<?php include_once('include/sessionsAdmin.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>
<?php
$facID =$_GET['fid'];

$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.

$ret=mysql_query("select * from fadmin WHERE fadminID=$facID") or die ("Failed to retrieve data".mysql_error());


while($row=mysql_fetch_assoc($ret))
{
$fid2=$row['fadminID'];
$ffname2=$row['fadminfirstname'];
$flname2=$row['fadminlastname'];
$femail2=$row['fadminemail'];
$ftel2=$row['fadmintelephone'];
$fpass2=$row['fadminpassword'];
}
?>
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
    <td colspan="4"><center><strong>Change the Faculty Admin Details and click on 'UPDATE'</strong></center></td>
  </tr>
  <tr>
    <td width="556" height="23">&nbsp;</td>
    <td width="89">First Name</td>
    <td width="177"><input type="text" name="fadminfirstname" id="fadminfirstname" value="<?php echo $ffname2; ?>" />&nbsp;</td>
    <td width="580">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Last Name</td>
    <td><input type="text" name="fadminlastname" id="fadminlastname" value="<?php echo $flname2; ?>"/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Email</td>
    <td><input type="email" name="fadminemail" id="fadminemail" value="<?php echo $femail2; ?>" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Telephone</td>
    <td><input type="text" name="fadmintelephone" id="fadmintelephone" value="<?php echo $ftel2; ?>" />&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td><input type="password" name="fadminpassword" id="fadminpassword" value="<?php echo $fpass2; ?>" />&nbsp;</td>
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

$ffname=$_POST['fadminfirstname'];
$flname=$_POST['fadminlastname'];
$femail=$_POST['fadminemail'];
$ftel=$_POST['fadmintelephone'];
$fpassword=$_POST['fadminpassword'];
$fpass=md5($fpassword);//decrypting the password


//Updating
$ins=mysql_query("UPDATE fadmin SET fadminfirstname='$ffname',fadminlastname='$flname',fadminemail='$femail',fadmintelephone='$ftel',fadminpassword='$fpass' WHERE fadminID=$facID") or die("Failed to insert data".mysql_error());


if($ins)
{
echo "Details of ".$flname." have been UPDATED";
}


} 

?>
</form>
</body>
</html>

