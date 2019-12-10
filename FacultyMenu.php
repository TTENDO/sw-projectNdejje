<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty Menu</title>
<link rel="stylesheet" type="text/css" href="include/custom.css" />

</head>

<body>

<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Faculty Admin 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="RegisterFacultyAdmin.php">Register Faculty Admin</a>
      <a href="editFadmin.php">Edit Faculty Admin details</a>
    </div>
  </div> 
  
    <div class="dropdown">
    <button class="dropbtn">Students 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="RegisterStudent.php">Register Students</a>
      <a href="editStudent.php">Edit Student Details</a>
    </div>
  </div> 
  
     <div class="dropdown">
    <button class="dropbtn">Complaints 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="pendingComplaints.php">View Complaints & Record resolutions</a>
      <a href="#">Edit resolutions</a>
      <a href="#">Report 3</a>
    </div>
  </div> 
  
    <div class="dropdown">
    <button class="dropbtn">Reports 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Report 1</a>
      <a href="#">Report 2</a>
      <a href="#">Report 3</a>
    </div>
  </div> 
  
      <div class="dropdown">
    <button class="dropbtn">Welcome <?php echo $adminfullname;?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logoutAdmin.php">LOG OUT</a>
    </div>
  </div> 

  
  
</div>

</body>
</html>
