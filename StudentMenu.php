<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SStudent Menu</title>
<link rel="stylesheet" type="text/css" href="include/custom.css" />

</head>

<body>

<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Complaints 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Record Complaints</a>
      <a href="#">Edit Complaints</a>
    </div>
  </div> 
  
    <div class="dropdown">
    <button class="dropbtn">Resolutions 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">View Resolutions</a>
      
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
    <button class="dropbtn">Welcome <?php echo $sfullname;?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logoutStudent.php">LOG OUT</a>
    </div>
  </div> 
  
</div>

</body>
</html>
