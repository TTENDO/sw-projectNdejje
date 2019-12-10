<?php include_once('include/sessionsAdmin.php')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Record Resolutions</title>
</head>

<body>
<?php $comp=$_GET['ccID']; ?>
<form name="student" method="post" action="">
<table width="1420" height="425" border="0">
  <tr>
    <td colspan="4"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
  <tr>
    <td colspan="4">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><center><strong>Please record a resolution to the complaint</strong></center></td>
  </tr>

    <tr>
    <td width="328">&nbsp;</td>
    <td width="75">Resolution</td>
    <td width="945"><textarea name="resolution" id="resolution">&nbsp;</textarea> </td>
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

$cresolution=$_POST['resolution'];
$daterecorded=date("Y-m-d h:i:s");
$faid=$_SESSION['fadminID'];


//inserting
$inss=mysql_query("INSERT INTO resolutions(complaintID,complaintresolution,resolutiondate,fadminID) VALUES ('$comp','$cresolution','$daterecorded','$faid')") or die("Failed to insert data".mysql_error());

if($inss)
{

mysql_query("UPDATE complaints SET responsegot='Yes' WHERE complaintID=$comp") or die("Failed to update complaint".mysql_error());

echo "The resolution has been recorded";
}


} 



?>
</form>
</body>
</html>
