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
    <td colspan="6"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
 <tr>
    <td colspan="6">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"> <center><strong>Below are the registered Faculty Admin details, Edit any</strong></center> </td>
    </tr>
  <tr>
    <td><strong>FIRSTNAME</strong></td>
    <td><strong>LASTNAME</strong></td>
    <td><strong>EMAIL</strong></td>
    <td><strong>TELEPHONE</strong></td>
    <td><strong>PASSWORD</strong></td>
    <td><strong>ACTION</strong></td>
  </tr>
  
  <?php
$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.


$ret=mysql_query("select * from fadmin") or die ("Failed to retrieve data".mysql_error());


while($row=mysql_fetch_assoc($ret))
{
$fid=$row['fadminID'];
$ffname=$row['fadminfirstname'];
$flname=$row['fadminlastname'];
$femail=$row['fadminemail'];
$ftel=$row['fadmintelephone'];
$fpass=$row['fadminpassword'];
  ?>
  
  
  <tr>
    <td><?php echo $ffname?></td>
    <td><?php echo $flname?></td>
    <td><?php echo $femail?></td>
    <td><?php echo $ftel?></td>
    <td><?php echo $fpass?></td>
    
    <td><a href="updateFadmin.php?fid=<?php echo $fid;?>" >EDIT</a></td><?php // moving with ID?>
    
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="6" style="background-color:#000000; color:#FFFFFF;"><center><b><?php include_once('footer.php');?></b></center></td>
  </tr>
</table>

</body>
</html>
