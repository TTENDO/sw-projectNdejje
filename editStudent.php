<?php include_once('include/sessionsStudent.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include_once('include/mytitle.php'); ?>
</head>

<body>

<tr><table width="1019" height="401" border="1">
   <tr>
    <td colspan="7"><img src="images/myBanner.jpeg" width="1406" height="88" /></td>
  </tr>
 <tr>
    <td colspan="7">
    <?php include_once('FacultyMenu.php');?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"> <center><strong>Below are the registered student details, Edit any</strong></center> </td>
    </tr>
  <tr>
    <td><strong>FIRSTNAME</strong></td>
    <td><strong>LASTNAME</strong></td>
    <td><strong>EMAIL</strong></td>
    <td><strong>REG NO.</strong></td>
    <td><strong>TELEPHONE</strong></td>
    <td><strong>PASSWORD</strong></td>
    <td><strong>ACTION</strong></td>
  </tr>
  
  <?php
$con=mysql_connect("localhost","root","") or die ("Failed to connect to the database".mysql_error());//connecting  to the database

mysql_select_db("swproject") or die("Failed to select the database".mysql_error());//selecting the database.


$ret=mysql_query("select * from student") or die ("Failed to retrieve data".mysql_error());


while($row=mysql_fetch_assoc($ret))
{
$sid=$row['studentID'];
$sfname=$row['studentfirstname'];
$slname=$row['studentlastname'];
$semail=$row['studentemail'];
$sregNo=$row['regNo'];
$stel=$row['studenttelephone'];
$spass=$row['studentpassword'];//decrypting the password

?>  
  <tr>
    <td><?php echo $sfname?></td>
    <td><?php echo $slname?></td>
    <td><?php echo $semail?></td>
    <td><?php echo $sregNo?></td>
    <td><?php echo $stel?></td>
    <td><?php echo $spass?></td>
    
    <td><a href="updateStudent.php?sid=<?php echo $sid;?>" >EDIT</a></td><?php // moving with ID?>
    
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="7" style="background-color:#000000; color:#FFFFFF;"><center><b><?php include_once('footer.php');?></b></center></td>
  </tr>
</table>

</body>
</html>
