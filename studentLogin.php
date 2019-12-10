<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>
<form method="post"action="studentLogin.php" name="studentLogin">
<table width="1445" height="337" border="0">
  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Please enter your Login Credentials and click on 'Login'</strong></center> &nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Admin Login</a></td>
  </tr>
  <tr>
    <td width="535">&nbsp;</td>
    <td width="177">Email:</td>
    <td width="173"><input type="text" name="useremail" id="useremail"  required/>&nbsp;</td>
    <td width="542">&nbsp;</td>
  </tr>
 <tr>
    <td>&nbsp;</td>
    <td>Password:</td>
    <td><input type="password" name="userpassword" id="userpassword"  required/>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td> <input type="submit" name="enter" id="login" value="Login" required/>  &nbsp;<input type="reset" name="cancel" id="cancel"value="Cancel" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#000000; color:#FFFFFF;"><center><b><?php include_once('footer.php');?></b></center></td>
  </tr>
</table>

<?php
if(isset($_REQUEST['enter'])){
  session_start();//starting a session

  $con=mysql_connect("localhost","root","") or die("Failed to connect to the server".mysql_error());

  mysql_select_db("swproject") or die("Failed to select database".mysql_error());

  $uemail=$_POST['useremail'];
$fpassword=$_POST['userpassword'];
$fpass=md5($fpassword);

$sel=mysql_query("select * from student WHERE studentemail='$uemail' AND studentpassword='$fpass'") or die("Failed to select user".mysql_error());

if(mysql_num_rows($sel)>0)
{
session_regenerate_id();
$userdet=mysql_fetch_assoc($sel);

//create sessions to hold vital information
$fid=$_SESSION['studentID'] = $userdet['studentID'];
$_SESSION['studentfirstname'] = $userdet['studentfirstname'];
$_SESSION['studentlastname'] = $userdet['studentlastname'];
$_SESSION['studentemail'] = $userdet['studentemail'];
$_SESSION['studenttelephone'] = $userdet['studenttelephone'];

session_write_close();

header("location: recordComplaint.php");
}
else
{
echo "Wrong login credentials";
}
}
?>
</form>
</body>
</html>
