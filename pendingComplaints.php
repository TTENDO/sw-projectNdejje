<?php include_once('include/sessionsAdmin.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>

<tr><table width="1019" height="401" border="1">
   <tr>
    <td colspan="5"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
 <tr>
    <td colspan="5">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"> <center><strong>Below are the pending complaints. Record resolutions.</strong></center> </td>
    </tr>
  <tr>
    <td><strong>REGNO</strong></td>
    <td><strong>STUDENT</strong></td>
    <td><strong>COMPLAINT</strong></td>
    <td><strong>COMPLAINT DATE</strong></td>
    <td><strong>ACTION</strong></td>
  </tr>
  
  <?php
$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.


$ret=mysql_query("select * from complaints WHERE responsegot='NO'") or die ("Failed to select student details".mysql_error());

while($row=mysql_fetch_assoc($ret)){
$CID=$row['complaintID'];
$std=$row['studentID'];
$scomplaint=$row['studentcomplaint'];
$scomplaintdate=$row['complaindate'];

$sret=mysql_query("select * from student WHERE studentID=$std") or die("Failed to select student details".mysql_error());

while($row=mysql_fetch_assoc($sret))
{
$sregno=$row['regNo'];
$sfname=$row['studentfirstname'];
$slname=$row['studentlastname'];
$semail=$row['studentemail'];
$snames=$sfname.' '.$slname;
}
  ?>
  
  
  <tr>
    <td><?php echo $sregno?></td>
    <td><?php echo $snames?></td>
    <td><?php echo $scomplaint?></td>
    <td><?php echo $scomplaintdate?></td>
 
    
    <td><a href="recordResolutions.php?ccID=<?php echo $CID;?>" >RECORD RESOLUTION</a></td><?php // moving with ID?>
    
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="5" style="background-color:#000000; color:#FFFFFF;"><center><b><?php include_once('footer.php');?></b></center></td>
  </tr>
</table>

</body>
</html>
