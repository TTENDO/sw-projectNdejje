<?php include_once('include/sessionsStudent.php')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register student</title>
</head>

<body>
<form name="student" method="post" action="">
<table width="1420" height="425" border="0">
  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4">
    <?php include_once('StudentMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Record your complaint</strong></center></td>
  </tr>

    <tr>
    <td width="328">&nbsp;</td>
    <td width="75">Complaint</td>
    <td width="945"><textarea name="complaint" id="complaint">&nbsp;</textarea> </td>
    <td width="54">&nbsp;</td>
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
if(isset($_REQUEST['enter'])){

$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.

$stdcomplaint=$_POST['complaint'];
$daterecorded=date("Y-m-d h:i:s");
$std=$_SESSION['studentID'];


//inserting
$inss=mysql_query("INSERT INTO complaints(studentID,studentcomplaint,complaindate) VALUES ('$std','$stdcomplaint','$daterecorded')") or die("Failed to insert data".mysql_error());

if($inss)
{
echo "Your complaint has been recorded";
}


} 



?>
</form>
</body>
</html>
