<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>
<form method="post" action="index.php" name="adminLogin">
<table width="1445" height="333" border="0">

  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Please enter your Login Credentials and click on 'Login'</strong></center></td>
  </tr>
  <tr>
    <td width="532" height="34">&nbsp;</td>
    <td width="173">Email:</td>
    <td width="207"><input type="text" name="useremail" id="useremail"  required/>&nbsp;</td>
    <td width="515"><a href="studentLogin.php">Student Login</a>&nbsp;</td>
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
session_start();//Starting session

$con = mysql_connect("localhost","root","") or die("Failed to connect to the server".mysql_error());

mysql_select_db("swproject") or die("Failed to select database".mysql_error());

$uemail=$_POST['useremail'];
$fpassword=$_POST['userpassword'];
$fpass=md5($fpassword);

$sel=mysql_query("select * from fadmin WHERE fadminemail='$uemail' AND fadminpassword='$fpass'") or die("Failed to select user".mysql_error());

if(mysql_num_rows($sel)>0)
{
session_regenerate_id();
$userdet=mysql_fetch_assoc($sel);

//create sessions to hold vital information
$fid=$_SESSION['fadminID'] = $userdet['fadminID'];
$_SESSION['fadminfirstname'] = $userdet['fadminfirstname'];
$_SESSION['fadminlastname'] = $userdet['fadminlastname'];
$_SESSION['fadminemail'] = $userdet['fadminemail'];
$_SESSION['fadmintelephone'] = $userdet['fadmintelephone'];

session_write_close();

header("location: RegisterFacultyAdmin.php");
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
